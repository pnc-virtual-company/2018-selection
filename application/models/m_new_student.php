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
class m_new_student extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }

    function addCandidate(){
        $field = array(
            'employee_name'=>$this->input->post('txtEmployeeName'),
            'address'=>$this->input->post('txtAddress'),
            'created_at'=>date('Y-m-d H:i:s')
            );
        $this->db->insert('skeleton_tbl_candidates', $field);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}