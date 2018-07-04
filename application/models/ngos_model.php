<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class NGOs_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * [getAllNGO returns all NGOs in the table 'ngos']
     * @return [array]
     */
    public function getAllNGO()
    {
        $this->db->select("*");
        $this->db->from("ngos");
        $query = $this->db->get(); 
        return $query->result();  
    }

    /**
     * [newNGO creates a new NGO in the table 'ngos']
     * @param  [string] $ngoName
     * @return [boolean] true if data inserted, false otherwise
     */
    public function addNGO($ngoName) {
        $data = array('ngo_name' => $ngoName);
        $this->db->insert('ngos',$data);
        if ($this->db->affected_rows() > 0) {
            $this->db->select("MAX(ngo_id)");
            $this->db->from("ngos");
            $query = $this->db->get(); 
            if($query->num_rows() > 0){
                return $query->result();  
            }
        }
    }

    /**
     * [updateNGO updates the name of a specific NGO]
     * @param  [int] $id
     * @param  [string] $ngoName
     * @return [boolean] true if data updated, false otherwise
     */
    public function updateNGO($id,$ngoName) {
        $data = array('ngo_name' => $ngoName);
        $this->db->where('ngo_id',$id);
        $this->db->update('ngos',$data);
    }

    /**
     * [getNGOName returns the name of a given NGO]
     * @param  [int] $id
     * @return [array]
     */
    function getNGOName($id){
        $this->db->select("ngo_name");
        $this->db->from("ngos");
        $this->db->where('ngo_id',$id);
        $query = $this->db->get(); 
        return $query->result();  
    }

    /**
     * [deleteNGO removes a specific NGO from the table 'ngos']
     * @param  [int] $id [of the specific NGO to delete]
     * @return [boolean] [whether the action has been performed]
     */
    function deleteNGO($id){
        $this->db->where('ngo_id',$id)->delete('ngos');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>
