<?php

/**
 * This model contains the add, update and get functions related to the table `expenses`
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
     * [addFamilyExpenses adds the family expenses information of a specific candidate]
     * @param [int] $rice         [expenses for rice]
     * @param [int] $food         [expenses for food]
     * @param [int] $firewood     [expenses for firewood]
     * @param [int] $loan         [expenses for loans]
     * @param [int] $study        [expenses for studies]
     * @param [int] $medical      [expenses for medical care]
     * @param [int] $electric     [expenses for electricity & water]
     * @param [int] $agriculture  [expenses for agriculture]
     * @param [int] $wedding      [expenses for weddings]
     * @param [int] $other        [expenses for other utilities]
     * @param [int] $totalExpense [total expenses]
     * @param [int] $candidateID  [id of a specific candidate]
     */
    function addFamilyExpenses($candidateID,$rice=null,$food=null,$firewood=null,$loan=null,$study=null,$medical=null,$electric=null,$agriculture=null,$wedding=null,$other=null,$totalExpense=null)
    {
        $data = array(
            'exp_rice' => $rice,
            'exp_food' => $food,
            'exp_firewood' => $firewood,
            'exp_loan' => $loan,
            'exp_study' => $study,
            'exp_medical' => $medical,
            'exp_electricities_water' => $electric,
            'exp_agriculture' => $agriculture,
            'exp_weding' => $wedding,
            'exp_other_utilities' => $other,
            'exp_total' => $totalExpense,
            'candidate_id' => $candidateID
        );
        $this->db->insert('expenses',$data);
    }

    /**
     * [uFamilyExpenses updates the family expenses information of a specific candidate]
     * @param  see the previous function addFamilyExpenses
     */
    public function uFamilyExpenses($candidateID,$rice,$food,$firewood,$loan,$study,$medical,$electric,$agriculture,$wedding,$other,$totalExpense) 
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
            'candidate_id' => $candidateID
        );
        $this->db->where('expenses.candidate_id',$candidateID);
        $this->db->update('expenses',$data);
    }

   /**
    * [getFamilyExpenses gets the family expenses information of a specific candidate]
    * @param  [int] $id    [id of the specific candidate]
    * @return [object]     [result of the mysql query]
    */
    public function getFamilyExpenses($id) {
        $this->db->select('*');
        $this->db->from('expenses AS ex');
        $this->db->join('candidates AS c', 'c.candidate_id = ex.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }
}
?>