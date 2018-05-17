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
}