<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * This controller serves the pages and tools related to the management of candidates.
 * @copyright  Copyright (c) 2014-2017 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @since      0.1.0
 */

Class Candidates extends CI_Controller{

	/**
     * Default constructor
     */
	public function __construct() {
		parent::__construct();
		log_message('debug', 'URI=' . $this->uri->uri_string());
		$this->session->set_userdata('last_page', $this->uri->uri_string());
		if($this->session->loggedIn === TRUE) 
		{
	        // Allowed methods
			if ($this->session->isAdmin || $this->session->user) 
			{
	          //User management is reserved to admins and super admins
			} else 
			{
				redirect('errors/privileges');
			}
		} else 
		{
			redirect('connection/login');
		}
		$this->load->model('candidates_model');
		$this->load->model('ngos_model');
		$this->load->model('expenses_model');
		$this->load->model('families_model');
		$this->load->model('home_assets_model');
		$this->load->model('incomes_model');
		$this->load->model('loans_debts_model');
		$this->load->model('residences_model');
	}
	
	/**
     * Display the list of all candidates
     */
	public function index()
	{
		$data['gradeAPlus'] = $this->candidates_model->countGrade("A+");
		$data['gradeA'] = $this->candidates_model->countGrade("A");
		$data['gradeAMinus'] = $this->candidates_model->countGrade("A-");
		$data['gradeBPlus'] = $this->candidates_model->countGrade("B+");
		$data['gradeB'] = $this->candidates_model->countGrade("B");
		$data['gradeFailed'] = $this->candidates_model->countGrade("Failed");
		$data['maleCount'] = $this->candidates_model->countMale();
		$data['femaleCount'] = $this->candidates_model->countFemale();
		$data['ngo'] = $this->candidates_model->fromNGO();
		$data['notNgo'] = $this->candidates_model->notFromNGO();
		$data['candidateFilter'] = $this->input->get('value') == "selectedCandidates";
		$this->load->view('templates/header',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('candidates/index',$data);
		$this->load->view('templates/footer',$data);
	}

	/**
	 * [viewCandidateDetails description]
	 * @param  [type] $id [description]
	 */
	public function viewCandidateDetails($id)
	{
		$data['title'] = 'View candidate details';
		$data['action'] = 'View';
	 	$data['list'] = $this->candidates_model->getCanInfo($id);
	 	if ($data['list'][0]->ngo_id != NULL) {
	 		$data['ngo'] = $this->ngos_model->getNGOName($data['list'][0]->ngo_id);
	 	}
	 	$data['family'] = $this->families_model->getFamilyProfile($id);
	 	$data['income'] = $this->incomes_model->getFamilyIncomes($id);
	 	$data['expense'] = $this->expenses_model->getFamilyExpenses($id);
	 	$data['loan'] = $this->loans_debts_model->getLoansDebts($id);
	 	$data['residence'] = $this->residences_model->getResidence($id);
	 	$data['home_assets'] = $this->home_assets_model->getHomeAssets($id);
	 	$data['invesCon'] = $this->candidates_model->investiCon($id);
	 	$data['provinces'] = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu',
							'Kampong Thom', 'Kampot', 'Kandal', 'Kep', 'Koh Kong', 'Kratié', 'Mondulkiri', 
							'Oddar Meanchey', 'Pailin', 'Phnom Penh', 'Preah Sihanouk', 'Prey Veng', 'Preah Vihear', 
							'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 'Takéo', 'Tboung Khmum'];
		$data['ngos'] = $this->ngos_model->getAllNGO();
		$this->load->view('templates/header');   
		$this->load->view('menu/index');   
		$this->load->view('candidates/new',$data);   
		$this->load->view('templates/footer'); 
	}

	/**
     * Load the form to update a specific candidate with the original data of this candidate
     * @param $id of the candidate to be updated 
     */
	public function updateForm($id) {
		$data['title'] = 'Edit candidate details';
		$data['action'] = 'Edit';
		$data['id'] = $id;
	 	$data['list'] = $this->candidates_model->getCanInfo($id);
	 	if ($data['list'][0]->ngo_id != NULL) {
	 		$data['ngo'] = $this->ngos_model->getNGOName($data['list'][0]->ngo_id);
	 	}
	 	$data['family'] = $this->families_model->getFamilyProfile($id);
	 	$data['income'] = $this->incomes_model->getFamilyIncomes($id);
	 	$data['expense'] = $this->expenses_model->getFamilyExpenses($id);
	 	$data['loan'] = $this->loans_debts_model->getLoansDebts($id);
	 	$data['residence'] = $this->residences_model->getResidence($id);
	 	$data['home_assets'] = $this->home_assets_model->getHomeAssets($id);
	 	$data['invesCon'] = $this->candidates_model->investiCon($id);
	 	$data['provinces'] = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu',
							'Kampong Thom', 'Kampot', 'Kandal', 'Kep', 'Koh Kong', 'Kratié', 'Mondulkiri', 
							'Oddar Meanchey', 'Pailin', 'Phnom Penh', 'Preah Sihanouk', 'Prey Veng', 'Preah Vihear', 
							'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 'Takéo', 'Tboung Khmum'];
		$data['ngos'] = $this->ngos_model->getAllNGO();
		$this->load->view('templates/header');   
		$this->load->view('menu/index');   
		$this->load->view('candidates/new',$data);   
		$this->load->view('templates/footer'); 
	}


	/* ----------------------------------------------------------------------------- */
	/* THE FOLLOWING SECTION GROUPS THE FUNCTIONS USED TO CREATE/ UPDATE A CANDIDATE */
	/* ----------------------------------------------------------------------------- */


	/**
	 * [newCandidate loads the form to create a new candidate]
	 */
	public function newCandidate()
	{
		$data['title'] = 'Create a candidate';
		$data['action'] = 'Create';
		$data['provinces'] = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu',
							'Kampong Thom', 'Kampot', 'Kandal', 'Kep', 'Koh Kong', 'Kratié', 'Mondulkiri', 
							'Oddar Meanchey', 'Pailin', 'Phnom Penh', 'Preah Sihanouk', 'Prey Veng', 'Preah Vihear', 
							'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 'Takéo', 'Tboung Khmum'];
		$data['ngos'] = $this->ngos_model->getAllNGO();
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('candidates/new',$data);
		$this->load->view('templates/footer');
	}

  	/**
  	 * [addOrUpdateCandidate adds or updates a candidate information]
  	 */
	public function addOrUpdateCandidate()
	{
		$candidateID = $this->input->post('candidateID');
		$globalGrade = $this->input->post('globalGrade');
		$fname = $this->input->post('firstname');
		$lname = $this->input->post('lastname');
		$gender = $this->input->post('gender');   
		$age = $this->input->post('age');
		$province = $this->input->post('province');   
		$ngo = $this->input->post('ngo');
		$health = $this->input->post('health');
		$rankClass = $this->input->post('rankClass');
		$extraActivity = $this->input->post('extraActivity');
		$pncChoice = $this->input->post('pncChoice');
		$responsibility = $this->input->post('responsibility');
		$motivate = $this->input->post('motivate');
		$communication = $this->input->post('communication');
		$alter1 = $this->input->post('alternative1');
		$alter2 = $this->input->post('alternative2');
		$alter3 = $this->input->post('alternative3');
		$cRank1 = $this->input->post('choiceRank1');
		$cRank2 = $this->input->post('choiceRank2');
		$cRank3 = $this->input->post('choiceRank3');
		$stuCommite = $this->input->post('studentCommit');
		$parCommite = $this->input->post('parentsCommit');
		$ngoOther = $this->input->post('ngoOther');
		$healthComment = $this->input->post('healthComment');
		$imageValue = $this->input->post('candidateImage');

		$uploaded = $this->upload();
		if ($uploaded[0] || $uploaded[1] == "<p>You did not select a file to upload.</p>") {
			// If no file uploaded, then set the $candidateImage variable to empty string
			$candidateImage = $uploaded[0] ? $uploaded[1] : "";

			// The candidate does not exist in the database
			if ($candidateID == '') {
				$candidateID = $this->candidates_model->addCandidate($fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoOther,$healthComment,$candidateImage);
				// Create also family profile, incomes, expenses... to allow information loading when viewing or editing candidate's information 
				$this->families_model->addFamilyProfile($candidateID);
				$this->incomes_model->addFamilyIncomes($candidateID);
				$this->expenses_model->addFamilyExpenses($candidateID);
				$this->loans_debts_model->addLoansDebts($candidateID);
				$this->residences_model->addResidence($candidateID);
				$this->home_assets_model->addHomeAssets($candidateID);
				$this->candidates_model->addConclusion($candidateID);
				echo json_encode($candidateID);

			// The candidate exists in the database
			} else {
				$this->candidates_model->uCanInfo($candidateID,$fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoOther,$healthComment,$candidateImage);
			}	   
		} else {
			echo json_encode($uploaded[1]);
		}
	}
  
    /**
     * [updateFamilyProfile updates a specific candidate's family profile]
     */
    public function updateFamilyProfile()
    {
    	$candidateID = $this->input->post('candidateID');
    	$fAge = $this->input->post('faAge');
	    $fOccupation = $this->input->post('faOccu');
	    $fSpecify = $this->input->post('faSpec');
	    $fHealth = $this->input->post('faHealth');
	    $fHealthSpec = $this->input->post('faHealthSpec');
	    $fEdu = $this->input->post('fatherEdu');	
	    $mAge = $this->input->post('moAge');
	    $mOccu = $this->input->post('motherOcc');
	    $mSpecify = $this->input->post('mSpecify');
	    $mhealthStatus = $this->input->post('mhealthStat');
	    $mHealthSpec = $this->input->post('mHealthSpec');
	    $mEdu = $this->input->post('mEdu');	
	    $numSiblings = $this->input->post('numSiblings');
	    $marriedStatus = $this->input->post('marriedStatus');
	    $separated = $this->input->post('separated');
	    $numberFamilyLiving = $this->input->post('member');
	    $studentRank = $this->input->post('studentRank');
	    
	    $this->families_model->uFamilyProfile($candidateID,$fAge,$fOccupation,$fSpecify,$fHealth,$fHealthSpec,$fEdu,$mAge,$mOccu,$mSpecify,$mhealthStatus,$mHealthSpec,$mEdu,$numSiblings,$marriedStatus,$separated,$numberFamilyLiving,$studentRank);
    }

    /**
     * [updateFamilyIncome updates the family incomes information of a specific candidate]
     */
	public function updateFamilyIncome()
	{
		$candidateID = $this->input->post('candidateID');
		$paMonthIncome = $this->input->post('monthlyIncome');
		$paDailyIncome = $this->input->post('paDailyIncome');
		$paSesIncome = $this->input->post('seasonalIncome');
		$paYearIncome = $this->input->post('yearIncome');
		$paTotalIncome = $this->input->post('parentTotalIncome');
		$chMonthIncome = $this->input->post('montlyChildAssiss');
		$chDailyIncome = $this->input->post('ChildDailyIncome');
		$chSeasonIncome = $this->input->post('ChildSeasonalIncome');
		$chYearIncome = $this->input->post('ChildYearIncome');
		$chTotalIncome = $this->input->post('childTotalIncome');
		$totalIncome = $this->input->post('totalMonthIncome');
		$totalIncomeId = $this->input->post('incomeIndividual');

		$this->incomes_model->uFamilyIncomes($candidateID,$paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId);
	}

	/**
	 * [updateExpense updates the family's expenses information of a specific candidate]
	 */
	public function updateExpense()
	{
		$candidateID = $this->input->post('candidateID');
		$rice = $this->input->post('rice');
		$food = $this->input->post('food');
		$firewood = $this->input->post('firewood');
		$loan = $this->input->post('loan');
		$study = $this->input->post('study');
		$medical = $this->input->post('medical');
		$electric = $this->input->post('electric');
		$agriculture = $this->input->post('agriculture');
		$wedding = $this->input->post('wedding');
		$other = $this->input->post('other');
		$totalExpense = $this->input->post('totalExpense');

		$this->expenses_model->uFamilyExpenses($candidateID,$rice,$food,$firewood,$loan,$study,$medical,$electric,$agriculture,$wedding,$other,$totalExpense);
	}
    
  
    /**
     * [updateLoansDebts updates the family's loans & debts information of a specific candidate]
     */
	public function updateLoansDebts()
	{
		$candidateID = $this->input->post('candidateID');
		$amount = $this->input->post('initAmount');
		$institution = $this->input->post('instit');
		$interest = $this->input->post('interRates');
		$reason = $this->input->post('reason');
		$monthly = $this->input->post('monthly');
		$trimester = $this->input->post('trimester');
		$semester = $this->input->post('semester');
		$capital = $this->input->post('capital');
		
		$this->loans_debts_model->uLoansDebts($candidateID,$amount,$institution,$interest,$reason,$monthly,$trimester,$semester,$capital);
	}
   
    /**
     * [updateResidence updates the residence information of a specific candidate]
     */
	public function updateResidence()
	{
		$candidateID = $this->input->post('candidateID');
		$status = $this->input->post('status');
		$age = $this->input->post('age');
		$rating = $this->input->post('rating');
		
		$this->residences_model->uResidence($candidateID,$status,$age,$rating);
	}
    
    /**
     * [updateHomeAssets updates the home assets information of a specific candidate]
     */
    public function updateHomeAssets()
    {
    	$candidateID = $this->input->post('candidateID');
    	$refrigerator = $this->input->post('refrigerator');
    	$radio = $this->input->post('radio');
    	$airCon = $this->input->post('airCondi');
    	$riceCooker = $this->input->post('ricecooker');
    	$lcdTV = $this->input->post('lcdTv');
    	$colorTV = $this->input->post('colorTv');
    	$chComputer = $this->input->post('chComputer');
    	$exComputer = $this->input->post('exComputer');
    	$fCabinet = $this->input->post('fCabinet');
    	$dvd = $this->input->post('dvd');
    	$smartPhone = $this->input->post('smartphone');
    	$phone = $this->input->post('phone');
    	$cheapCam = $this->input->post('cCamera');
    	$expenCam = $this->input->post('exCamera');
    	$cheapSofa = $this->input->post('chSofa');
    	$exSofa = $this->input->post('exSofa');
    	$gasCooker = $this->input->post('gasCooker');
    	$fruitBlender = $this->input->post('fblender');
    	$elecCooker = $this->input->post('eCooker');
    	$motoBike = $this->input->post('motobike');
    	$farmMachine = $this->input->post('farming');
    	$car = $this->input->post('car');
    	$vihicleComment = $this->input->post('vComment');
    	$cow = $this->input->post('cow');
    	$buffalo = $this->input->post('buffalo');
    	$pig = $this->input->post('pig');
    	$animalCmt = $this->input->post('aComment');
    	$farmSize = $this->input->post('farmSize');
    	$farmCmt = $this->input->post('fComment');
    	$sumQuantity5 = $this->input->post('sumQuantity5');
    	$sumQuantity3 = $this->input->post('sumQuantity3');
    	$globalAsset = $this->input->post('globalAsset');
    	$certificate = $this->input->post('certificate');
    	$specifyLevel = $this->input->post('specifyLevel');

    	$this->home_assets_model->uHomeAssets($candidateID,$refrigerator,$radio,$airCon,$riceCooker,$lcdTV,$colorTV,$chComputer,$exComputer,$fCabinet,$dvd,$smartPhone,$phone,$cheapCam,$expenCam,$cheapSofa,$exSofa,$gasCooker,$fruitBlender,$elecCooker,$motoBike,$farmMachine,$car,$vihicleComment,$cow,$buffalo,$pig,$animalCmt,$farmSize,$farmCmt,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel);
    }    
    
    /**
     * [updateConclusion updates the investigator's conclusion of a specific candidate]
     */
    public function updateConclusion()
    {
    	$candidateID = $this->input->post('candidateID');
    	$investigatorConclusion = $this->input->post('investigatorConclude');
    	$this->candidates_model->uConclusion($candidateID,$investigatorConclusion);
    	redirect('candidates/index');
    }


	/**
     * Get the list of candidates
     */
	public function showAllCandidates()
	{
		$result = $this->candidates_model->showAllCandidates();
		echo json_encode($result);
	}

	/**
     * Get the list of selected candidates
     */
	public function showSelected()
	{
		$result = $this->candidates_model->showSelected();
		echo json_encode($result);
	}
	
	/**
     * Count all candidates
     */
	public function countCandidates()
	{
		$resultCount = $this->candidates_model->countCandidates();
		echo json_encode($resultCount);
	}

	/**
     * Get the number of selected candidates
     */
	public function countSelectedCandidates()
	{
		$resultSelectedCount = $this->candidates_model->countSelectedCandidates();
		echo json_encode($resultSelectedCount);
	}

	/**
     * Get the number of candidates for each grade
     */
	public function countGrades()
	{
		$APlus = $this->candidates_model->countGrade("A+");
		$A = $this->candidates_model->countGrade("A");
		$AMinus = $this->candidates_model->countGrade("A-");
		$BPlus = $this->candidates_model->countGrade("B+");
		$B = $this->candidates_model->countGrade("B");
		$Failed = $this->candidates_model->countGrade("Failed");
		$totalSelected = $APlus + $A + $AMinus + $BPlus + $B + $Failed;
		echo json_encode([$APlus,$A,$AMinus,$BPlus,$B,$Failed,$totalSelected]);
	}

	/**
     * Get the % of selected candidates for each gender
     */
	public function countGender()
	{
		$maleCount = $this->candidates_model->countMale();
		$femaleCount = $this->candidates_model->countFemale();
		if ($maleCount + $femaleCount == 0) {
			echo json_encode([0,0,0,0]);
		} else {
			$malePercentage = round($maleCount * 100 / ($maleCount + $femaleCount));
			$femalePercentage = round($femaleCount * 100 / ($maleCount + $femaleCount));
			echo json_encode([$malePercentage,$femalePercentage,$maleCount,$femaleCount]);
		}
	}

	/**
     * Get the % of selected candidates coming from another NGO vs not
     */
	public function countNGOProvenance()
	{
		$NGOProvenanceCount = $this->candidates_model->fromNGO();
		$NonNGOProvenanceCount = $this->candidates_model->notFromNGO();
		if ($NGOProvenanceCount + $NonNGOProvenanceCount == 0) {
			echo json_encode([0,0,0,0]);
		} else {
			$NGOProvenancePercentage = round($NGOProvenanceCount * 100 / ($NGOProvenanceCount + $NonNGOProvenanceCount));
			$NonNGOProvenancePercentage = round($NonNGOProvenanceCount * 100 / ($NGOProvenanceCount + $NonNGOProvenanceCount));
			echo json_encode([$NGOProvenancePercentage,$NonNGOProvenancePercentage,$NGOProvenanceCount,$NonNGOProvenanceCount]);
		}		
	}

	/**
     * Delete a specific candidate
     */
	public function deleteCandidate()
	{
		// First delete the candidate image if there is any
		$id = $this->input->get('candidate_id');
		$imageName = $this->candidates_model->getCandidateImage($id);
		$image = "./assets/images/candidates/".$imageName[0]->candidate_image;
		if(is_file($image)) {
			unlink($image);
		}

		// Then delete the information stored in the database
		// All information linked by foreign key to the specific candidate will be deleted (incomes, expenses, home assets...) 
		$result = $this->candidates_model->deleteCandidate($id);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	/**
     * Count provinces
     */
	 function countProvinces()
	{
		$resultProvincesCount = $this->candidates_model->countProvinces();
		echo json_encode($resultProvincesCount);
	}

	/**
     * Export the list of candidates into an Excel file
     */
    public function export() {
    	$data['candidateFilter'] = $this->input->get('value') == "selectedCandidates";
        $this->load->view('candidates/export',$data);
    }

    /**
     * Display the map of Cambodian's provinces 
     */
	public function map(){ 
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('province');
		$this->load->view('templates/footer');
	}	

	/**
	 * [upload checks if the candidate picture respects some constraints and uploads it if everything ok]
	 * @return [array] [1st element: true or false depending on whether the picture has been uploaded, 2nd element: name of image or error message]
	 */
    public function upload(){
        $config['upload_path']="./assets/images/candidates/";
        $config['allowed_types']='jpeg|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("candidateImage")){
            $data = array('upload_data' => $this->upload->data());
            $image= $data['upload_data']['file_name']; 
            return [true,$image];
        } else {
            return [false,$this->upload->display_errors()];
        }
    }
}