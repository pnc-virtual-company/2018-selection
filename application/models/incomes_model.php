<?php

/**
 * This model contains the add, update and get functions related to the table `incomes`
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
     * [addFamilyIncomes adds a new row in the table `incomes` with the information specified]
     * @param [int] $candidateID    [id of a specific candidate]
     * @param [int] $paMonthIncome  [parent's monthly income]
     * @param [int] $paDailyIncome  [parent's daily income]
     * @param [int] $paSesIncome    [parent's seasonal income]
     * @param [int] $paYearIncome   [parent's yearly income]
     * @param [int] $paTotalIncome  [parent's total income]
     * @param [int] $chMonthIncome  [monthly children's assistance]
     * @param [int] $chDailyIncome  [daily children's assistance]
     * @param [int] $chSeasonIncome [seasonal children's assistance]
     * @param [int] $chYearIncome   [yearmy children's assistance]
     * @param [int] $chTotalIncome  [total children's assistance]
     * @param [int] $totalIncome    [total global income]
     * @param [int] $totalIncomeId  [total global income per individual living in the parent's house]
     */
    public function addFamilyIncomes($candidateID,$paMonthIncome=null,$paDailyIncome=null,$paSesIncome=null,$paYearIncome=null,$paTotalIncome=null,$chMonthIncome=null,$chDailyIncome=null,$chSeasonIncome=null,$chYearIncome=null,$chTotalIncome=null,$totalIncome=null,$totalIncomeId=null)
    {
        $data = array(
            'f_monthly'=>$paMonthIncome,
            'f_daily'=>$paDailyIncome,
            'f_seasonal'=>$paSesIncome,
            'f_yearly'=>$paYearIncome,
            'f_total'=>$paTotalIncome,
            'c_monthly'=>$chMonthIncome,
            'c_daily'=>$chDailyIncome,
            'c_seasonal'=>$chSeasonIncome,
            'c_yearly'=>$chYearIncome,
            'c_total'=>$chTotalIncome,
            'g_monthly'=>$totalIncome,
            'g_monthly_individual'=>$totalIncomeId,
            'candidate_id'=>$candidateID
        );
        $insert = $this->db->insert('incomes',$data);
    }

    /**
     * [uFamilyIncomes description]
     * @param  see previous function addFamilyIncomes
     */
    public function uFamilyIncomes($candidateID,$paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId) 
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
            'candidate_id'=>$candidateID
        );
        $this->db->where('incomes.candidate_id',$candidateID);
        $this->db->update('incomes',$data);
    }

    /**
     * [getFamilyIncomes gets the family incomes information of a specific candidate]
     * @param  [int] $id [id of the specific candidate]
     * @return [object]  [result of the mysql query]
     */
    public function getFamilyIncomes($id) {
        $this->db->select('*');
        $this->db->from('incomes AS in');
        $this->db->join('candidates AS c', 'c.candidate_id = in.candidate_id' );
        $this->db->where('c.candidate_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>