<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Residences_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get family's residence details of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getResidence($id) {
        $this->db->select('*');
        $this->db->from('residences AS resi');
        $this->db->join('candidates AS c', 'c.candidate_id = resi.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }

    /**
     * Add family's residence details of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    function addResidence($status,$age,$rating,$candidateID)
    {
        $data = array(
            'res_status' => $status != "" ? $status : null, 
            'res_age' => $age != "" ? $age : null, 
            'res_rating_scale' => $rating != "" ? $rating : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->select('*');
        $this->db->from('residences');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('residences',$data);
        } else {
          $insert = $this->db->insert('residences',$data);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update family's residence details of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uResidence($id,$status,$age,$Rating_scal)
    {
        $data = array(
            'res_status'                 => $status,
            'res_age'                     => $age,
            'res_rating_scale'       => $Rating_scal,
            'candidate_id' => $id
        );
        $this->db->where('residences.candidate_id',$id);
        $this->db->update('residences', $data );
    }

}
?>