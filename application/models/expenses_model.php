<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Expenses_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get family's expenses of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getFamilyExpenses($id) {
        $this->db->select('*');
        $this->db->from('expenses AS ex');
        $this->db->join('candidates AS c', 'c.candidate_id = ex.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }

    /**
     * Add family's expenses of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    function addFamilyExpenses($rice,$food,$firewood,$loan,$study,$medical,$electric,$agriculture,$wedding,$other,$totalExpense,$candidateID)
    {
        $data = array(
            'exp_rice' => $rice != "" ? $rice : null,
            'exp_food' => $food != "" ? $food : null,
            'exp_firewood' => $firewood != "" ? $firewood : null,
            'exp_loan' => $loan != "" ? $loan : null,
            'exp_study' => $study != "" ? $study : null,
            'exp_medical' => $medical != "" ? $medical : null,
            'exp_electricities_water' => $electric != "" ? $electric : null,
            'exp_agriculture' => $agriculture != "" ? $agriculture : null,
            'exp_weding' => $wedding != "" ? $wedding : null,
            'exp_other_utilities' => $other != "" ? $other : null,
            'exp_total' => $totalExpense != "" ? $totalExpense : null,
            'candidate_id' => $candidateID != "" ? $candidateID : null
        );
    
        $this->db->select('*');
        $this->db->from('expenses');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('expenses',$data);
        } else {
          $insert = $this->db->insert('expenses',$data);
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update family's expenses of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uFamilyExpenses($id,$rice,$food,$firewoodGasChacoal,$loan,$study,$medical,$electricityWater,$agirculture,$weddingCeremony,$otherUtilities,$totalExpense) 
    {
        $data = array(
            'exp_rice' => $rice,
            'exp_food' => $food,
            'exp_firewood' => $firewoodGasChacoal,
            'exp_loan' => $loan,
            'exp_study' => $study,
            'exp_medical' => $medical,
            'exp_electricities_water' => $electricityWater,
            'exp_agriculture' => $agirculture,
            'exp_weding' => $weddingCeremony,
            'exp_other_utilities' => $otherUtilities,
            'exp_total' => $totalExpense,
            'candidate_id' => $id
        );
        $this->db->where('expenses.candidate_id',$id);
        $this->db->update('expenses',$data);
    }

}
?>