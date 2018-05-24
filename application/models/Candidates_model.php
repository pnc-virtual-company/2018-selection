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
class Candidates_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }

    // function get all candidates 
    public function showAllCandidates(){
        $id = $this->uri->segment(3);
    	$this->db->select("skeleton_tbl_candidates.can_id, concat(skeleton_tbl_candidates.can_firstname,' ',skeleton_tbl_candidates.can_lastname) AS can_name,can_gender,can_global_grade,skeleton_tbl_provinces.pro_name AS province");
    	$this->db->from('skeleton_tbl_candidates');   
    	$this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id','INNER');
    	$query = $this->db->get(); 
    	if($query->num_rows() > 0){
    		return $query->result();
    		
    	}else{
    		return false;
    	}
    }

    // function to delete candidates
    function deleteCandidate(){
        $id = $this->input->get('can_id');
        $this->db->where('can_id', $id);
        $this->db->delete('skeleton_tbl_candidates');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // function to count all candidates
    public function countCandidates(){
        $this->db->select("count(can_id) AS total");
        $this->db->from("skeleton_tbl_candidates");
        $query = $this->db->get();
        // var_dump($query);die("Hello"); 
        if($query->num_rows() > 0){
            return $query->result();   
        }else{
            return false;
        }
    }
    // function to count all selected candidates
    public function countSelectedCandidates(){
        $this->db->select("count(can_id) AS totalSelected");
        $this->db->from("skeleton_tbl_candidates");
        $this->db->where("can_global_grade !='Failed' ");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    public function showSelected(){
        $this->db->select("skeleton_tbl_candidates.can_id, concat(skeleton_tbl_candidates.can_firstname,' ',skeleton_tbl_candidates.can_lastname) AS can_name,can_gender,can_global_grade,skeleton_tbl_provinces.pro_name AS province");   
        $this->db->from('skeleton_tbl_candidates');   
        $this->db->join('skeleton_tbl_provinces', 'skeleton_tbl_provinces.pro_id = skeleton_tbl_candidates.pro_id','INNER');
        $this->db->where('skeleton_tbl_candidates.can_global_grade !=',"Failed");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // funciton to count all provinces
    public function countProvinces(){
        $this->db->select("count(pro_id) AS totalProvinces");
        $this->db->from("skeleton_tbl_provinces");
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
            return $query->result();  
        }else{
            return false;
        }
    }
    function addStudent($fname,$lname,$gender,$class,$year,$stuid,$province,$tutor){
            $data = array(
                'stu_firstname' => $fname,
                'stu_lastname' => $lname,
                'gender' => $gender,
                'class' => $class,
                'year' => $year,
                'idnumber' => $stuid,
                'province' => $province,
                'userid' => $tutor
            );
            $insert = $this->db->insert('tblstudents',$data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        // all update function and list out ------------------------------------
    //list all provinces
        public function listProvinces(){
            $this->db->select('*');
            $query = $this->db->get('skeleton_tbl_provinces');
            return $query->result();
        }

// model for select candidate ====================================================
    public function listInfo($id) {     //candidate information
        $this->db->select('*');
        $this->db->from('skeleton_tbl_candidates AS c');
        $this->db->join('skeleton_tbl_provinces AS p', 'p.pro_id = c.pro_id');
        $this->db->where('c.can_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    //select only 1 field from skeleton tbl candidate
    public function investiCon($id) {
        $this->db->select('can_investigator_conclusion');
        $query = $this->db->get_where('skeleton_tbl_candidates', array('can_id' =>$id));
        return $query->result();
    }

    // select * from tbl ngo 
    public function listNGO() {
        $this->db->select('*');
        $query = $this->db->get('skeleton_tbl_ngo');
        return $query->result();
    }
    //model for list home asset
    public function listHomeAsset($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_home_asset AS h');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = h.tbl_candidates_can_id' );
        $this->db->where('c.can_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    // model for parent
    public function parentPro($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_profile AS par');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = par.tbl_candidates_can_id' ); //tbl family join with tbl candidate
        $this->db->where('c.can_id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    //model for family income
    public function income($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_income AS in');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = in.tbl_candidates_can_id' );
        $this->db->where('c.can_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    //model for family expense
    public function expense($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_expense AS ex');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = ex.tbl_candidates_can_id' );
        $this->db->where('c.can_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }
    //model for loans & debts
    public function loadsAndDebts($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_loan_debt AS ld');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = ld.tbl_candidates_can_id' );
        $this->db->where('c.can_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }
    //model for residence status
    public function residence($id) {
        $this->db->select('*');
        $this->db->from('skeleton_tbl_residence AS resi');
        $this->db->join('skeleton_tbl_candidates AS c', 'c.can_id = resi.tbl_candidates_can_id' );
        $this->db->where('c.can_id', $id);
        $query =  $this->db->get();
        return $query->result();
    }

    //query update for global grade
    public function uGlobal($id,$grade) {
        $data = array('can_global_grade' => $grade);
        $this->db->where('can_id',$id);
        $this->db->update('skeleton_tbl_candidates',$data);
    }
    //code for update form input -> investigation conclusion
    public function upInvesCon($id,$investi) {
        $data = array('can_investigator_conclusion' => $investi);
        $this->db->where('can_id',$id);
        $this->db->update('skeleton_tbl_candidates',$data);
    }
    // function for update candidate information
    public function uCanInfo($id,$fname,$lname,$gender,$canAge,$province,$ngo,$ngoComment,$can_health,$healthIssues,$canRankClass,$canAchivement,$canPncRank,$responsibilityMaturity,$motivatForPnc,$canCommunicate,$otherScholarship,$canChoiceRank,$CanCommitment,$canParentCommitment) {
        $data = array(
            'can_firstname' => $fname,
            'can_lastname'  => $lname,
            'can_gender'     => $gender,
            'can_age'           => $canAge,
            'can_rank_inclass' => $canRankClass,
            'can_healthy'   => $can_health,
            'can_pn_choic_rank' => $canPncRank,
            'can_activity_achivement' => $canAchivement,
            'can_resposibility' => $responsibilityMaturity,
            'can_communicate' => $canCommunicate,
            'can_other_choice_rank' => $canChoiceRank,
            'can_pnc_motivation' => $motivatForPnc,
            'can_other_scholaship' => $otherScholarship,
            'can_student_commit' => $CanCommitment,
            'can_parents_commit' => $canParentCommitment,
            'can_ngo_comment' => $ngoComment,
            'can_health_comment' => $healthIssues,
            'pro_id' => $province,
            'ngo_id' => $ngo
        );
        $this->db->where('can_id',$id);
        $this->db->update('skeleton_tbl_candidates',$data);
    }
    // model for update family profile
    public function ufamilyProfile($id,$fAge,$fOccupation,$fotherOccupationSpecify,$fHealth,$fatherhealthIssues,$fEducation,$mAge,$mOccupation,$mOccupationSpecify,$mhealth,$mhealthSpecify,$mEducation,$siblings,$Married,$Separated,$liveInHouse,$sRank) {
        $data = array(
            'f_age' => $fAge,
            'f_occupation' => $fOccupation,
            'f_health' => $fHealth,
            'f_edu' => $fEducation,
            'm_age' => $mAge,
            'm_occupation' => $mOccupation,
            'm_health' => $mhealth,
            'm_edu' => $mEducation,
            'number_sibbling' => $siblings,
            'number_maried' => $Married,
            'number_separated' => $Separated,
            'number_family_living' => $liveInHouse,
            'stu_rank' => $sRank,
            'f_occupation_comment' => $fotherOccupationSpecify,
            'm_occupation_comment' => $mOccupationSpecify,
            'f_health_comment' => $fatherhealthIssues,
            'm_health_comment' => $mhealthSpecify
        );
        $this->db->where('skeleton_tbl_profile.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_profile',$data);
    }
    //model for update income of hold the family
    public function uFamilyIncome($id,$famMonIncome,$famDalIncome,$famSeaIncome,$famYeaIncome,$famTotalIncome,$chMonIncome,$chDaliIncome,$chSeaIncome,$chYeaIncome,$chTotalIncome,$gloToMonIn,$g_monthly_individual) {
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
            'g_monthly_individual' => $g_monthly_individual
        );
        $this->db->where('skeleton_tbl_income.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_income',$data);
    }
    //model for update expense of hold family
    public function ufamilyExpense($id,$rice,$food,$firewoodGasChacoal,$loan,$study,$medical,$electricityWater,$agirculture,$weddingCeremony,$otherUtilities,$totalExpense) {
        $data = array(
            'ex_rice' => $rice,
            'ex_food' => $food,
            'ex_firewood' => $firewoodGasChacoal,
            'ex_loan' => $loan,
            'ex_study' => $study,
            'ex_medical' => $medical,
            'ex_electricities_water' => $electricityWater,
            'ex_agriculture' => $agirculture,
            'ex_weding' => $weddingCeremony,
            'ex_other_utilities' => $otherUtilities,
            'ex_total' => $totalExpense
        );
        $this->db->where('skeleton_tbl_expense.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_expense',$data);
    }
    //model for update load and debt
    public function uLoadDebt($id,$initialAmount,$institution,$interestRates,$reason,$monthly,$semester,$capital,$trimester){
        $data = array(
            'ld_initial_amount' => $initialAmount,
            'ld_instritution' => $institution,
            'ld_interest_tates' => $interestRates,
            'ld_reason' => $reason,
            'ld_monthly' => $monthly,
            'ld_trimester' => $trimester,
            'ld_semester' => $semester,
            'ld_capital' => $capital
        );
        $this->db->where('skeleton_tbl_loan_debt.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_loan_debt',$data);
    }
    //model for update residence
    public function uResidence($id,$status,$age,$Rating_scal){
        $data = array(
            're_status'                 => $status,
            're_age'                     => $age,
            're_rating_scale'       => $Rating_scal
        );
        $this->db->where('skeleton_tbl_residence.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_residence', $data );
    }
    public function uHomeAssets($id,$refrigerator,$radio,$conditioner,$ricecooker,$lcdTV,$colorTV,$camera1,$camera2,$furnished,$dvdPlayer,$smartphone,$phone,$computer1,$computer2,$sofa1,$sofa2,$gascooker,$fruit,$electrical,$motobike,$farming,$car,$vehiclesComment,$cow,$buffaloe,$pig,$animalComment,$farmSize,$farmComment,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel) {
        $data = array(
            'h_refrigerator'                        => $refrigerator,
            'h_air_condictioner'                  => $conditioner,
            'h_lcd_tv'                                  => $lcdTV,
            'h_computer_big_100'               => $computer1,
            'h_furnished_big_300'              => $furnished,
            'h_smartphone_big_100'           => $smartphone,
            'h_camera_big_100'                  => $camera1,
            'h_sofa_big_300'                      => $sofa1,
            'h_motobike_big_500'              => $motobike,
            'h_farming_machine'                 => $farming,
            'h_car_truck'                            => $car,
            'h_cow'                                      => $cow,
            'h_buffaloe'                              => $buffaloe,
            'h_pig'                                      => $pig,
            'h_farm_size'                           => $farmSize,
            'h_radio'                                   => $radio,
            'h_rice_cooker'                        => $ricecooker,
            'h_color_tv'                             => $colorTV,
            'h_computer_smal_100'           => $computer2,
            'h_dvd_player'                         => $dvdPlayer,
            'h_phone_smal_100'                => $phone,
            'h_camera_small_100'             => $camera2,
            'h_sofa_smal_300'                  => $sofa2,
            'h_gascooker'                          => $gascooker,
            'h_fruit_blender'                    => $fruit,
            'h_electrical_cooker'              => $electrical,
            'h_vehicles_comment'             => $vehiclesComment,
            'h_animals_comment'              => $animalComment,
            'h_farm_comment'                 => $farmComment,
            'h_total_x5'                           => $sumQuantity5,
            'h_total_x3'                           => $sumQuantity3,
            'h_glbal_total'                       => $globalAsset,
            'h_poverty_certificate'         => $certificate,
            'h_level'                                 => $specifyLevel
        );
        $this->db->where('skeleton_tbl_home_asset.tbl_candidates_can_id',$id);
        $this->db->update('skeleton_tbl_home_asset', $data );
    }
}