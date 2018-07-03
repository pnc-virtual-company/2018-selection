<?php

/**
 * This model contains ...
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       
 * @since      
 */

class Incomes_model extends CI_Model{

    /**
     * Default constructor
     */
    public function __construct() 
    {
    }

    /**
     * Get family incomes of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function getFamilyIncomes($id) {
        $this->db->select('*');
        $this->db->from('incomes AS in');
        $this->db->join('candidates AS c', 'c.candidate_id = in.candidate_id' );
        $this->db->where('c.candidate_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Add family incomes for a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function addFamilyIncomes($paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId,$candidateID)
    {
        $data = array(
            'f_monthly'=>$paMonthIncome != "" ? $paMonthIncome : null,
            'f_daily'=>$paDailyIncome != "" ? $paDailyIncome : null,
            'f_seasonal'=>$paSesIncome != "" ? $paSesIncome : null,
            'f_yearly'=>$paYearIncome != "" ? $paYearIncome : null,
            'f_total'=>$paTotalIncome != "" ? $paTotalIncome : null,
            'c_monthly'=>$chMonthIncome != "" ? $chMonthIncome : null,
            'c_daily'=>$chDailyIncome != "" ? $chDailyIncome : null,
            'c_seasonal'=>$chSeasonIncome != "" ? $chSeasonIncome : null,
            'c_yearly'=>$chYearIncome != "" ? $chYearIncome : null,
            'c_total'=>$chTotalIncome != "" ? $chTotalIncome : null,
            'g_monthly'=>$totalIncome != "" ? $totalIncome : null,
            'g_monthly_individual'=>$totalIncomeId != "" ? $totalIncomeId : null,
            'candidate_id'=>$candidateID != "" ? $candidateID : null
        );

        $this->db->select('*');
        $this->db->from('incomes');
        $this->db->where('candidate_id',$candidateID);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
          $this->db->where('candidate_id',$candidateID);
          $this->db->update('incomes',$data);
        } else {
          $insert = $this->db->insert('incomes',$data);
        }

        if ($this->db->affected_rows() > 0) {
           return true;
        } else {
            return false;
        }
    }

    /**
     * Update family incomes of a specific candidate
     * @param
     * @return 
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
    public function uFamilyIncomes($id,$famMonIncome,$famDalIncome,$famSeaIncome,$famYeaIncome,$famTotalIncome,$chMonIncome,$chDaliIncome,$chSeaIncome,$chYeaIncome,$chTotalIncome,$gloToMonIn,$g_monthly_individual) 
    {
        $data = array(
            'f_monthly' => $famMonIncome,
            'f_daily' => $famDalIncome,
            'f_seasonal' => $famSeaIncome,
            'f_yearly' => $famYeaIncome,
            'f_total' => $famTotalIncome,
            'c_monthly' => $chMonIncome,
            'c_daily' => $chDaliIncome,
            'c_seasonal' => $chSeaIncome,
            'c_yearly' => $chYeaIncome,
            'c_total' => $chTotalIncome,
            'g_monthly' => $gloToMonIn,
            'g_monthly_individual' => $g_monthly_individual,
            'candidate_id' => $id
        );
        $this->db->where('incomes.candidate_id',$id);
        $this->db->update('incomes',$data);
    }

}
?>