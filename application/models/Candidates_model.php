<?php
/**
 * This model contains the business logic and manages the persistence of users and roles
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This model contains the business logic and manages the persistence of users and roles
 * It is also used by the session controller for the authentication.
 */
class Candidates_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }

    // function get all candidates 
    public function showAllCandidates(){
        $id = $this->uri->segment(3);
    	$this->db->select("skeleton_tbl_candidates.can_id, concat(skeleton_tbl_candidates.can_firstname,' ',skeleton_tbl_candidates.can_lastname) AS can_name,can_gender,can_global_grade,skeleton_tbl_provinces.pro_name AS province");
    	$this->db->from('skeleton_tbl_candidates');   
    	$this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id','INNER');
    	$query = $this->db->get(); 
    	if($query->num_rows() > 0){
    		return $query->result();
    		
    	}else{
    		return false;
    	}
    }

    // function to delete candidates
    function deleteCandidate(){
        $id = $this->input->get('can_id');
        $this->db->where('can_id', $id);
        $this->db->delete('skeleton_tbl_candidates');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // function to count all candidates
    public function countCandidates(){
        $this->db->select("count(can_id) AS total");
        $this->db->from("skeleton_tbl_candidates");
        $query = $this->db->get();
        // var_dump($query);die("Hello"); 
        if($query->num_rows() > 0){
            return $query->result();   
        }else{
            return false;
        }
    }
    // function to count all selected candidates
    public function countSelectedCandidates(){
        $this->db->select("count(can_id) AS totalSelected");
        $this->db->from("skeleton_tbl_candidates");
        $this->db->where("can_global_grade !='Failed' ");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    public function showSelected(){
        $this->db->select("skeleton_tbl_candidates.can_id, concat(skeleton_tbl_candidates.can_firstname,' ',skeleton_tbl_candidates.can_lastname) AS can_name,can_gender,can_global_grade,skeleton_tbl_provinces.pro_name AS province");   
        $this->db->from('skeleton_tbl_candidates');   
        $this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id','INNER');
        $this->db->where('skeleton_tbl_candidates.can_global_grade !=',"Failed");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // funciton to count all provinces
    public function countProvinces(){
        $this->db->select("count(pro_id) AS totalProvinces");
        $this->db->from("skeleton_tbl_provinces");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();  
        }else{
            return false;
        }
    }
    //function to get all province
    public function getAllProvince()
    {
       $this->db->select("*");
       $this->db->from("skeleton_tbl_provinces");
       $query = $this->db->get(); 
       if($query->num_rows() > 0){
           return $query->result();  
       }else{
           return false;
       }
    }
    //End  
    //function to get NGO
    public function getAllngo()
    {
        $this->db->select("*");
        $this->db->from("skeleton_tbl_ngo");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();  
        }else{
            return false;
        }
    }
    //End function 
    public function addCandidate($fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$achivement,$pncChoice,$responsibility,$motivate,$communication,$scholarship,$otherChoiceRank,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment)
    {
            $data = array(
                'can_firstname' => $fname,
                'can_lastname' => $lname,
                'can_gender' => $gender,
                'can_age' => $age,
                'can_rank_inclass' => $rankClass,
                'can_healthy' => $health,
                'can_pn_choic_rank' => $pncChoice,
                'can_activity_achivement' => $achivement,
                'can_resposibility' => $responsibility,
                'can_communicate' => $communication,
                'can_other_choice_rank' => $otherChoiceRank,
                'can_pnc_motivation' => $motivate, 
                'can_other_scholaship' => $scholarship,
                'can_student_commit' => $stuCommite,
                'can_parents_commit' => $parCommite,
                'can_global_grade' => $globalGrade,
                'can_ngo_comment' => $ngoComment,
                'can_health_comment' => $healthComment,
                'pro_id' =>$province,
                'ngo_id' =>$ngo
            );
           // the two function below is to prevent the constrain error from foriegn key
            // and the query code is stay between of those function
            $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
            $insert = $this->db->insert('skeleton_tbl_candidates',$data);
            if ($this->db->affected_rows() > 0) {
                $this->db->select("MAX(can_id)");
                $this->db->from("skeleton_tbl_candidates");
                $query = $this->db->get(); 
                if($query->num_rows() > 0){
                    return $query->result();  
                }else{
                    return false;
                }
            } else {
                return false;
            }
            $this->db->query("SET FOREIGN_KEY_CHECKS = 1");
        }
        // function to get the candidate
        public function getCandidate()
        {
            $this->db->select("skeleton_tbl_candidates.can_id, concat(skeleton_tbl_candidates.can_firstname,' ',skeleton_tbl_candidates.can_lastname) AS can_name,can_gender,can_global_grade,skeleton_tbl_provinces.pro_name AS province");   
            $this->db->from('skeleton_tbl_candidates');   
            $this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id','INNER');
            $this->db->where('skeleton_tbl_candidates.can_global_grade !=',"$canId");
            $query = $this->db->get(); 
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }
        // get the max id of the candidate
        public function getLastId()
        {
            $this->db->select("MAX(sc.can_id)");
            $this->db->from("skeleton_tbl_candidates");
            $query = $this->db->get(); 
            if($query->num_rows() > 0){
                return $query->result();  
            }else{
                return false;
            }

        }
        // end function get max candidate
    //function call globale grad
    function globle_grade($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_candidates');
        $this->db->where('skeleton_tbl_candidates.can_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 
        // function call view candidate detail 
    function view_can($id){
        $this->db->select('*'); 
        $this->db->from('skeleton_tbl_candidates'); 
        $this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id');
        $this->db->join('skeleton_tbl_ngo','skeleton_tbl_ngo.ngo_id=
            skeleton_tbl_candidates.ngo_id');
        // $this->db->get_where("skeleton_tbl_candidates",array('can_id'=>$id));
        $this->db->where('skeleton_tbl_candidates.can_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 
    // function call family information
    function view_can_family($id){
        $this->db->select('*'); 
        $this->db->from('skeleton_tbl_family'); 
        $this->db->join('skeleton_tbl_profile', 'skeleton_tbl_profile.p_id=
            skeleton_tbl_family.tbl_profile_p_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
    // function call family income
    function view_income($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_family');
        $this->db->join('skeleton_tbl_income','skeleton_tbl_income.in_id = skeleton_tbl_family.tbl_income_in_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 
     // function call family exspend
    function view_exspense($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_family');
        $this->db->join('skeleton_tbl_expense','skeleton_tbl_expense.ex_id = 
            skeleton_tbl_family.tbl_income_in_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
    // function call view_loan and dets
    function view_loan($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_family');
        $this->db->join('skeleton_tbl_loan_debt','skeleton_tbl_loan_debt.ld_id = 
            skeleton_tbl_family.tbl_loan_debt_ld_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    }
    // function call view skeleton_tbl_residence
    function view_residence($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_family');
        $this->db->join('skeleton_tbl_residence','skeleton_tbl_residence.re_id = 
            skeleton_tbl_family.tbl_residence_re_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    } 
    // function call view home assets
    function view_home_assets($id){
        $this->db->select('*');
        $this->db->from('skeleton_tbl_family');
        $this->db->join('skeleton_tbl_home_asset','skeleton_tbl_home_asset.h_id = 
            skeleton_tbl_family.tbl_home_asset_h_id','INNER');
        $this->db->where('skeleton_tbl_family.family_id',$id);
        $query=$this->db->get();
        return $query->result();
    }  
 }   