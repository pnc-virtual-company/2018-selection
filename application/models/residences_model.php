<?php

/**
 * This model contains the add, update and get functions related to the table `residences`
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
     * [addResidence adds a new row in the table `residences` with the specified information]
     * @param [int] $candidateID [id of the candidate]
     * @param [string] $status   [status of the residence: 'inherited', 'shered', 'rent' or 'purchased']
     * @param [int] $age         [age of the residence]
     * @param [int] $rating      [score of the residence]
     */
    function addResidence($candidateID,$status=null,$age=null,$rating=null)
    {
        $data = array(
            'res_status' => $status != "" ? $status : null, 
            'res_age' => $age != "" ? $age : null, 
            'res_rating_scale' => $rating != "" ? $rating : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->insert('residences',$data);
    }

    /**
     * [uResidence updates the residence information of a specific candidate]
     * @param  see previous function addResidence
     */
    public function uResidence($candidateID,$status,$age,$rating)
    {
        $data = array(
            'res_status' => $status != "" ? $status : null, 
            'res_age' => $age != "" ? $age : null, 
            'res_rating_scale' => $rating != "" ? $rating : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
        $this->db->where('residences.candidate_id',$candidateID);
        $this->db->update('residences', $data );
    }

    /**
     * [getResidence get the residence information of a specific candidate]
     * @param  [int] $id [id of the specific candidate]
     * @return [object]  [result of the mysql query]
     */
    public function getResidence($id) {
        $this->db->select('*');
        $this->db->from('residences AS resi');
        $this->db->join('candidates AS c', 'c.candidate_id = resi.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }
}
?>