<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Candidates_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get the list of all candidates
     * @param 
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function showAllCandidates()
    {
        $this->db->select("candidates.candidate_id, concat(candidates.candidate_firstname,' ',candidates.candidate_lastname) AS candidate_name,candidate_gender,candidate_global_grade,candidate_province");
        $this->db->from('candidates');
        $query = $this->db->get(); 
        return $query->result();
    }

    /**
     * [deleteCandidate removes a specific candidate in the table `candidates`]
     * @param  [int] $id [of the specific candidate]
     * @return [boolean] [whether the row has been removed]
     */
    function deleteCandidate($id)
    {
        $this->db->where('candidate_id', $id);
        $this->db->delete('candidates');
        if($this->db->affected_rows() > 0)
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Count all candidates
     * @param 
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countCandidates()
    {
        $this->db->select("count(candidate_id) AS total");
        $this->db->from("candidates");
        $query = $this->db->get();
        return $query->result();   
    }

     /**
     * Count only selected candidates
     * @param 
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countSelectedCandidates()
    {
        $this->db->select("count(candidate_id) AS totalSelected");
        $this->db->from("candidates");
        $this->db->where_not_in('candidate_global_grade','');
        $this->db->where("candidate_global_grade !='Failed' ");
        $query = $this->db->get(); 
        return $query->result();
    }

    /**
     * Count male selected candidates
     * @param 
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countMale()
    {
        $this->db->select("candidate_gender, candidate_global_grade");
        $this->db->from('candidates');
        $this->db->where('candidate_gender', 'Male');
        $this->db->where_not_in('candidate_global_grade','Failed');
        $query = $this->db->get(); 
        return count($query->result());
    }

    /**
     * Count female selected candidates
     * @param 
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countFemale()
    {
        $this->db->select("candidate_gender, candidate_global_grade");
        $this->db->from('candidates');
        $this->db->where('candidate_gender', 'Female');
        $this->db->where_not_in('candidate_global_grade','Failed');
        $query = $this->db->get(); 
        return count($query->result());
    }
    
    /**
     * Count candidates with specific grade (A+, A, A-...)
     * @param string $grade, required parameter
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countGrade($grade)
    {
        $count =  $this->db->get_where('candidates',array('candidates.candidate_global_grade'=>$grade));
        return count($count->result());
    }
    
    /**
     * Count selected candidates from NGO
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function fromNGO()
    {
        $this->db->select("candidates.ngo_id, candidates.candidate_global_grade");
        $this->db->from("candidates");
        $this->db->join('ngos', 'ngos.ngo_id = candidates.ngo_id','INNER');
        $this->db->where_not_in('ngos.ngo_name','Other');
        $this->db->where_not_in('candidates.candidate_global_grade','Failed');
        $count = $this->db->get(); 
        return count($count->result());
    }
    
    /**
     * Count selected candidates not coming from NGO
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function notFromNGO()
    {
        $this->db->select("candidates.ngo_id, candidates.candidate_global_grade");
        $this->db->from("candidates");
        $this->db->join('ngos', 'ngos.ngo_id = candidates.ngo_id','INNER');
        $this->db->where('ngos.ngo_name','Other');
        $this->db->where_not_in('candidates.candidate_global_grade','Failed');
        $count = $this->db->get(); 
        return count($count->result());
    }

    /**
     * Get selected candidates
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function showSelected()
    {
        $this->db->select("candidates.candidate_id, concat(candidates.candidate_firstname,' ',candidates.candidate_lastname) AS candidate_name,candidate_gender,candidate_global_grade,candidate_province");   
        $this->db->from('candidates');   
        $this->db->where_not_in('candidate_global_grade','');
        $this->db->where_not_in('candidate_global_grade','Failed');
        $query = $this->db->get(); 
        return $query->result();
    }
    
    /**
     * Count all provinces
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function countProvinces()
    {
        $this->db->select("count(DISTINCT candidate_province) AS totalProvinces");
        $this->db->from("candidates");
        $this->db->where_not_in('candidates.candidate_province','');
        $this->db->where_not_in('candidates.candidate_global_grade','Failed');
        $query = $this->db->get(); 
        return $query->result();  
    }
    
    /**
     * Add new candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function addCandidate($fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment,$candidateImage)
    {
        $data = array(
        'candidate_firstname' => $fname,
        'candidate_lastname' => $lname,
        'candidate_gender' => $gender,
        'candidate_age' => $age != "" ? $age : null,
        'candidate_province' => $province,
        'candidate_rank_inclass' => $rankClass != "" ? $rankClass : null,
        'candidate_healthy' => $health != "" ? $health : null,
        'candidate_pn_choic_rank' => $pncChoice != "" ? $pncChoice : null,
        'candidate_activity_achivement' => $extraActivity != "" ? $extraActivity : null,
        'candidate_resposibility' => $responsibility != "" ? $responsibility : null,
        'candidate_communicate' => $communication != "" ? $communication : null,
        'candidate_alternative1' => $alter1 != "" ? $alter1 : null,
        'candidate_alternative2' => $alter2 != "" ? $alter2 : null,
        'candidate_alternative3' => $alter3 != "" ? $alter3 : null,
        'candidate_rank_alternative1' => $cRank1 != "" ? $cRank1 : null,
        'candidate_rank_alternative2' => $cRank2 != "" ? $cRank2 : null,
        'candidate_rank_alternative3' => $cRank3 != "" ? $cRank3 : null,
        'candidate_pnc_motivation' => $motivate != "" ? $motivate : null, 
        'candidate_student_commit' => $stuCommite != "" ? $stuCommite : null,
        'candidate_parents_commit' => $parCommite != "" ? $parCommite : null,
        'candidate_global_grade' => $globalGrade,
        'candidate_ngo_comment' => $ngoComment != "" ? $ngoComment : null,
        'candidate_health_comment' => $healthComment != "" ? $healthComment : null,
        'candidate_image' => $candidateImage,
        'ngo_id' =>$ngo != "" ? $ngo : null
        );

        $this->db->trans_start();
        $insert = $this->db->insert('candidates',$data);
        $insertId = $this->db->insert_id();
        $this->db->trans_complete();
        return $insertId;
    }
          
    /**
     * TO BE DETAILED
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getCandidate()
    {
        $this->db->select("candidates.candidate_id, concat(candidates.candidate_firstname,' ',candidates.candidate_lastname) AS candidate_name,candidate_gender,candidate_global_grade,candidate_province AS province");   
        $this->db->from('candidates');   
        $this->db->where('candidates.candidate_global_grade !=',"$canId");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }

    /**
     * Get  last candidate in database (ie with max id)
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getLastId()
    {
        $this->db->select("MAX(candidate_id) AS lastId");
        $this->db->from("candidates");
        $query = $this->db->get(); 
        if($query->num_rows() > 0)
        {
            return $query->result();  
        }else{
            return false;
        }
    }
    
    /**
     * Get  investigation conclusion of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function investiCon($id) {
        $this->db->select('candidate_investigator_conclusion');
        $query = $this->db->get_where('candidates', array('candidate_id' =>$id));
        return $query->result();
    }

    /**
     * Update  investigation conclusion of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function upInvesCon($id,$investi) {
        $data = array('candidate_investigator_conclusion' => $investi);
        $this->db->where('candidate_id',$id);
        $this->db->update('candidates',$data);
    }

    /**
     * Update  candidate informations
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uCanInfo($id,$fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment,$candidateImage) {
        $data = array(
            'candidate_firstname' => $fname,
            'candidate_lastname'  => $lname,
            'candidate_gender'     => $gender,
            'candidate_age'           => $age,
            'candidate_province' => $province,
            'candidate_rank_inclass' => $rankClass,
            'candidate_healthy'   => $health,
            'candidate_pn_choic_rank' => $pncChoice,
            'candidate_activity_achivement' => $extraActivity,
            'candidate_resposibility' => $responsibility,
            'candidate_communicate' => $communication,
            'candidate_alternative1' => $alter1,
            'candidate_alternative2' => $alter2,
            'candidate_alternative3' => $alter3,
            'candidate_rank_alternative1' => $cRank1,
            'candidate_rank_alternative2' => $cRank2,
            'candidate_rank_alternative3' => $cRank3,
            'candidate_pnc_motivation' => $motivate,
            'candidate_student_commit' => $stuCommite,
            'candidate_parents_commit' => $parCommite,
            'candidate_global_grade' => $globalGrade,
            'candidate_ngo_comment' => $ngoComment,
            'candidate_health_comment' => $healthComment,
            'candidate_image' => $candidateImage,
            'ngo_id' => $ngo
        );
        $this->db->where('candidate_id',$id);
        $this->db->update('candidates',$data);
    }

    /**
     * Get the global grade of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    function getGlobalGrade($id){
        $this->db->select('candidate_global_grade');
        $this->db->from('candidates');
        $this->db->where('candidates.candidate_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 
    
    /**
     * Get the details of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */ 
    function getCanInfo($id)
    {
        $this->db->select('*'); 
        $this->db->from('candidates'); 
        $this->db->where('candidates.candidate_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 

    /**
     * Get the picture of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */ 
    public function getImg($id) {
        $this->db->select('candidate_image');
        $query = $this->db->get_where('candidates',array('candidate_id' =>$id));
        return $query->result();
    }

   /**
     * Get the full name of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */ 
   public function getFullName($id)
   {
        $this->db->select("concat(candidates.candidate_firstname,' ',candidates.candidate_lastname) AS candidate_name");   
        $this->db->from('candidates');   
        $this->db->where('candidates.candidate_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
    
    /**
     * Add investigator's conclusion
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */ 
    public function addConclude($investigatorConclude,$lastCanId)
    {
        $data = array(
            'candidate_investigator_conclusion'=> $investigatorConclude
        );
        $this->db->where('candidate_id',$lastCanId);
        $this->db->update('candidates', $data);
        if ($this->db->affected_rows() > 0) 
        {
            return true;
        } else {
            return false;
        }
    }
}
?>