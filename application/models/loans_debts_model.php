<?php

/**
 * This model contains ...
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
     * Get family's loans & debts of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getLoansDebts($id) {
        $this->db->select('*');
        $this->db->from('loan_debts AS ld');
        $this->db->join('candidates AS c', 'c.candidate_id = ld.candidate_id' );
        $this->db->where('c.candidate_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }

    /**
     * Add family's loans & debts information for a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function addLoansDebts($amount,$institution,$interest,$reason,$monthly,$trimester,$semester,$capital,$candidateID)
    {
        $data = array(
            'ld_initial_amount' => $amount != "" ? $amount  : null,
            'ld_instritution' => $institution != "" ? $institution  : null,
            'ld_interest_rates' => $interest != "" ? $interest  : null,
            'ld_reason' => $reason != "" ? $reason  : null,
            'ld_monthly' => $monthly != "" ? $monthly  : null,
            'ld_trimester' => $trimester != "" ? $trimester  : null,
            'ld_semester' => $semester != "" ? $semester  : null,
            'ld_capital' => $capital != "" ? $capital  : null,
            'candidate_id' => $candidateID != "" ? $candidateID  : null
        );
        $this->db->select('*');
        $this->db->from('loan_debts');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('loan_debts',$data);
        } else {
          $insert = $this->db->insert('loan_debts',$data);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Update family's loans & debts of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uLoansDebts($id,$initialAmount,$institution,$interestRates,$reason,$monthly,$semester,$capital,$trimester)
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
            'candidate_id' =>$id
        );
        $this->db->where('loan_debts.candidate_id',$id);
        $this->db->update('loan_debts',$data);
    }

}
?>