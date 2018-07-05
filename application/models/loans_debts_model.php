<?php

/**
 * This model contains the add, update and get functions related to the table `loan_debts`
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Loans_debts_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }
    
    /**
     * [addLoansDebts adds a new row in the table `loan_debts` with the specified information]
     * @param [int] $candidateID     [id of the candidate]
     * @param [int] $initialAmount   [initial amount borrowed]
     * @param [string] $institution  [institution name]
     * @param [float] $interestRates [interest rate of the transaction]
     * @param [string] $reason       [reason of the transaction]
     * @param [int] $monthly         [monthly payment]
     * @param [int] $trimester       [quarterly payment]
     * @param [int] $semester        [biannual payment]
     * @param [int] $capital         [capital remainaing]
     */
    public function addLoansDebts($candidateID,$initialAmount=null,$institution=null,$interestRates=null,$reason=null,$monthly=null,$trimester=null,$semester=null,$capital=null)
    {
        $data = array(
            'ld_initial_amount' => $initialAmount,
            'ld_instritution' => $institution,
            'ld_interest_rates' => $interestRates,
            'ld_reason' => $reason,
            'ld_monthly' => $monthly,
            'ld_trimester' => $trimester,
            'ld_semester' => $semester,
            'ld_capital' => $capital,
            'candidate_id' => $candidateID
        );
        $this->db->insert('loan_debts',$data);
    }

    /**
     * [uLoansDebts updates the loans & debts information of a specific candidate]
     * @param  see previous function addLoansDebts
     */
    public function uLoansDebts($candidateID,$initialAmount,$institution,$interestRates,$reason,$monthly,$trimester,$semester,$capital)
    {
        $data = array(
            'ld_initial_amount' => $initialAmount != "" ? $initialAmount  : null,
            'ld_instritution' => $institution != "" ? $institution  : null,
            'ld_interest_rates' => $interestRates != "" ? $interestRates  : null,
            'ld_reason' => $reason != "" ? $reason  : null,
            'ld_monthly' => $monthly != "" ? $monthly  : null,
            'ld_trimester' => $trimester != "" ? $trimester  : null,
            'ld_semester' => $semester != "" ? $semester  : null,
            'ld_capital' => $capital != "" ? $capital  : null,
            'candidate_id' => $candidateID != "" ? $candidateID  : null
        );
        $this->db->where('loan_debts.candidate_id',$candidateID);
        $this->db->update('loan_debts',$data);
    }

    /**
     * [getLoansDebts gets the loans & debts information of a specific candidate]
     * @param  [int] $id [id of the specific candidate]
     * @return [object]  [result of the mysql query]
     */
    public function getLoansDebts($id) {
        $this->db->select('*');
        $this->db->from('loan_debts AS ld');
        $this->db->join('candidates AS c', 'c.candidate_id = ld.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }
}
?>