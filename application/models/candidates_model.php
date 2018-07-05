<?php

/**
 * This model contains all the functions related with the table `candidates`
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
     * [addCandidate creates a new row in the table `candidates` with the information specified in parameters]
     * @param [string] $fname          [first name of the candidate]
     * @param [string] $lname          [last name of the candidate]
     * @param [string] $gender         [gender of the candidate]
     * @param [int] $age               [age of the candidate]
     * @param [string] $province       [origin province of the candidate]
     * @param [int] $ngo               [ngo'id of the candidate]
     * @param [string] $health         [health status of the candidate]
     * @param [string] $rankClass      [rank in class]
     * @param [string] $extraActivity  [extra activity and achievement description]
     * @param [int] $pncChoice         [PNC rank in the candidate's choices]
     * @param [string] $responsibility [sense of responsibility of the candidate]
     * @param [string] $motivate       [motivation of the candidate]
     * @param [string] $communication  [communication skills of the candidate]
     * @param [string] $alter1         [alternative 1 to PNC]
     * @param [string] $alter2         [alternative 2 to PNC]
     * @param [string] $alter3         [alternative 3 to PNC]
     * @param [int] $cRank1            [rank of the alternative 1 in the candidate's choices]
     * @param [int] $cRank2            [rank of the alternative 2 in the candidate's choices]
     * @param [int] $cRank3            [rank of the alternative 3 in the candidate's choices]
     * @param [string] $stuCommite     [candidate's commitment description]
     * @param [string] $parCommite     [parent's commitment description]
     * @param [string] $globalGrade    [candidate's global grade]
     * @param [string] $ngoComment     [name of NGO if not specified in the proposed list in the form]
     * @param [string] $healthComment  [candidate's health comment if not healthy]
     * @param [string] $candidateImage [candidate picture file name]
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
        'ngo_id' => $ngo != "" ? $ngo : null
        );

        $this->db->trans_start();
        $insert = $this->db->insert('candidates',$data);
        $insertId = $this->db->insert_id();
        $this->db->trans_complete();
        return $insertId;
    }

    /**
     * [uCanInfo updates the candidate's information of a specific candidate]
     * @param [int] $id               [id of the specific candidate]
     * @param see previous function addCandidate
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
            'ngo_id' => $ngo != "" ? $ngo : null
        );
        // If no candidate image uploaded when updating, then do not update the column in database
        // Otherwise, we would loose the image name entered previously
        if($candidateImage == "") {
            unset($data['candidate_image']);
        }
        $this->db->where('candidate_id',$id);
        $this->db->update('candidates',$data);
    }

    /**
     * [deleteCandidate deletes a specific candidate in the database]
     * @param  [int] $id
     * @return  [boolean] [whether the candidate has been deleted]
     */
    function deleteCandidate($id)
    {
        $this->db->where('candidate_id', $id);
        $this->db->delete('candidates');

        $this->db->select('candidate_id'); 
        $this->db->from('candidates'); 
        $this->db->where('candidate_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * [getCanInfo gets a specific candidate's information]
     * @param  [int] $id    [id of the specific candiadte]
     * @return [object]     [result of the mysql query]
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
     * [addConclude adds an investigator's conclusion to a specific candidate]
     * @param [int] $candidateID 
     * @param [string] $investigatorConclusion
     */
    public function addConclusion($candidateID,$investigatorConclusion=null)
    {
        $data = array(
            'candidate_investigator_conclusion'=> $investigatorConclusion
        );
        $this->db->where('candidate_id',$candidateID);
        $this->db->update('candidates', $data);
    }

    /**
     * [upInvesCon updates the investigator's conclusion of a specific candidate]
     * @param  [int] $id 
     * @param  [string] $investi [investigator's conclusion text]
     */
    public function uConclusion($id,$investi) {
        $data = array('candidate_investigator_conclusion' => $investi);
        $this->db->where('candidate_id',$id);
        $this->db->update('candidates',$data);
    }

    /**
     * [investiCon gets the invetigator's conclusion of a specific candidate]
     * @param  [int] $id
     * @return [object]     [result of the query]
     */
    public function investiCon($id) {
        $this->db->select('candidate_investigator_conclusion');
        $query = $this->db->get_where('candidates', array('candidate_id' =>$id));
        return $query->result();
    }

    /**
     * [showAllCandidates gets the list of all candidates]
     * @return [object] [result of the mysql query]
     */
    public function showAllCandidates()
    {
        $this->db->select("candidates.candidate_id, concat(candidates.candidate_firstname,' ',candidates.candidate_lastname) AS candidate_name,candidate_gender,candidate_global_grade,candidate_province");
        $this->db->from('candidates');
        $query = $this->db->get(); 
        return $query->result();
    }

    /**
     * [showSelected gets the list of selected candidates]
     * @return [object] [result of the mysql query]
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
     * [countCandidates counts the number of candidates]
     * @return [object] [result of the query counting the number of rows in the table `candidates`]
     */
    public function countCandidates()
    {
        $this->db->select("count(candidate_id) AS total");
        $this->db->from("candidates");
        $query = $this->db->get();
        return $query->result();   
    }

    /**
     * [countSelectedCandidates counts the number of selected candidates]
     * @return [object] [result of the query counting the number of selected candidates in the table `candidates`]
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
     * [countMale counts the number of selected males]
     * @return [object] [result of the query counting the number of selected males in the table `candidates`]
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
     * [countFemale counts the number of selected females]
     * @return [object] [result of the query counting the number of selected females in the table `candidates`]
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
     * [countGrade counts the numbers of candidates with a specific grade]
     * @param  [string] $grade
     * @return [int] 
     */
    public function countGrade($grade)
    {
        $count =  $this->db->get_where('candidates',array('candidates.candidate_global_grade'=>$grade));
        return count($count->result());
    }
    
    /**
     * [fromNGO counts the number of selected candidates coming from NGO]
     * @return [int]
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
     * [notFromNGO counts the number of selected candidates not coming from NGO]
     * @return [int]
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
     * [countProvinces counts the number of different provinces among the selected candidates]
     * @return [object] [result of the mysql query]
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
}
?>