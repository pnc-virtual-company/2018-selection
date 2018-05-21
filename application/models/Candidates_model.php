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
    function addStudent($fname,$lname,$gender,$class,$year,$stuid,$province,$tutor){
            $data = array(
                'stu_firstname' => $fname,
                'stu_lastname' => $lname,
                'gender' => $gender,
                'class' => $class,
                'year' => $year,
                'idnumber' => $stuid,
                'province' => $province,
                'userid' => $tutor
            );
            $insert = $this->db->insert('tblstudents',$data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
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