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
		$id = $this->input->get('candidate_id');
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
	 * [viewCandidateDetails description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function viewCandidateDetails($id)
	{
	 	$result['username'] = $this->candidates_model->getFullName($id);
	 	$result['list'] = $this->candidates_model->getCanInfo($id);
	 	if ($result['list'][0]->ngo_id != NULL) {
	 		$result['ngo'] = $this->ngos_model->getNGOName($result['list'][0]->ngo_id);
	 	}
	 	$result['family'] = $this->families_model->getFamilyProfile($id);
	 	$result['income'] = $this->incomes_model->getFamilyIncomes($id);
	 	$result['expense'] = $this->expenses_model->getFamilyExpenses($id);
	 	$result['loan'] = $this->loans_debts_model->getLoansDebts($id);
	 	$result['residence'] = $this->residences_model->getResidence($id);
	 	$result['home_assets'] = $this->home_assets_model->getHomeAssets($id);
		$this->load->view('templates/header');   
		$this->load->view('menu/index');   
		$this->load->view('candidates/view',$result);   
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


	/* ------------------------------------------------------------------------- */
	/* THE FOLLOWING SECTION GROUPS THE FUNCTIONS USED TO CREATE A NEW CANDIDATE */
	/* ------------------------------------------------------------------------- */


	/**
     * Load the form to create a new candidate
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
	public function newCandidate()
	{
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
     * Add a new candidate in the dabatase
     * @author Benjamin BALET <benjamin.balet@gmail.com>
     */
	public function addCandidate()
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
		$ngoComment = $this->input->post('ngoComment');
		$healthComment = $this->input->post('healthComment');
		
		$uploaded = $this->upload();
		if ($uploaded[0] || $uploaded[1] == "<p>You did not select a file to upload.</p>") {
			// If no file uploaded, then set the $candidateImage variable to empty string
			$candidateImage = $uploaded[0] ? $uploaded[1] : "";
			// The candidate does not exist in the database
			if ($candidateID == '') {
				$result = $this->candidates_model->addCandidate($fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment,$candidateImage);
				echo json_encode($result);
			// The candidate exists in the database
			} else {
				$this->candidates_model->uCanInfo($candidateID,$fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$extraActivity,$pncChoice,$responsibility,$motivate,$communication,$alter1,$alter2,$alter3,$cRank1,$cRank2,$cRank3,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment,$candidateImage);
			}	   
		} else {
			echo json_encode($uploaded[1]);
		}
	}
  
    /**
     * Add a family profile to a specific candidate
     */
    public function addFamilyProfile()
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
	    $result['familyProfile'] = $this->families_model->addFamilyProfile($fAge,$fOccupation,$fSpecify,$fHealth,$fHealthSpec,$fEdu,$mAge,$mOccu,$mSpecify,$mhealthStatus,$mHealthSpec,$mEdu,$numSiblings,$marriedStatus,$separated,$numFamily,$studentRank,$candidateID);
	    echo json_encode($result);   
    }

    /**
     * Add family's income to a specific candidate)
     */
	public function addFamilyIncome()
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
		$result['familyIncome'] = $this->incomes_model->addFamilyIncomes($paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId,$candidateID);
		echo json_encode($result);
	}
  
    /**
     * Add family's loans & debts information to a specific candidate
     */
	public function addLoansDebts()
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
		$result['familyLoan'] = $this->loans_debts_model->addLoansDebts($amount,$institution,$interest,$reason,$monthly,$trimester,$semester,$capital,$candidateID);
		echo json_encode($result);
	}
   
    /**
     * Add family's expenses details to a specific candidate
     */
	public function addExpense()
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
		$result['familyExpense'] = $this->expenses_model->addFamilyExpenses($rice,$food,$firewood,$loan,$study,$medical,$electric,$agriculture,$wedding,$other,$totalExpense,$candidateID);
		echo json_encode($result);
	}
    
    /**
     * Add family's residence information to a specific candidate
     */
	public function addResidence()
	{
		$candidateID = $this->input->post('candidateID');
		$status = $this->input->post('status');
		$age = $this->input->post('age');
		$rating = $this->input->post('rating');
		$result['formExpense'] = $this->residences_model->addResidence($status,$age,$rating,$candidateID);
		echo json_encode($result);
	}
    
    /**
     * Add family's home assets details to a specific candidate
     */
    public function addHomeAssets()
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

    	$result['familyAsset'] = $this->home_assets_model->addHomeAssets($refrigerator,$radio,$airCon,$riceCooker,$lcdTV,$colorTV,$chComputer,$exComputer,$fCabinet,$dvd,$smartPhone,$phone,$cheapCam,$expenCam,$cheapSofa,$exSofa,$gasCooker,$fruitBlender,$elecCooker,$motoBike,$farmMachine,$car,$vihicleComment,$cow,$buffalo,$pig,$animalCmt,$farmSize,$farmCmt,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel,$candidateID);
    	echo json_encode($result);
    }    
    
    /**
     * Add investigator's conclusion to a specific candidate
     */
    public function addConclude()
    {
    	$candidateID = $this->input->post('candidateID');
    	$investigatorConclude = $this->input->post('investigatorConclude');
    	$this->candidates_model->addConclude($investigatorConclude,$candidateID);
    	redirect('candidates/index');
    }


    /* ------------------------------------------------------------------------------ */
	/* THE FOLLOWING SECTION GROUPS THE FUNCTIONS USED TO UPDATE A SPECIFIC CANDIDATE */
	/* ------------------------------------------------------------------------------ */

    
    /**
     * Load the form to update a specific candidate with the original data of this candidate
     * @param $id of the candidate to be updated 
     */
	public function updateForm($id) {		// link to form update with old info
		$data['image'] = $this->candidates_model->getImg($id);
		$data['value'] = $this->candidates_model->getCanInfo($id); 	//get old value
		$data['invesCon'] = $this->candidates_model->investiCon($id);
		$data['provinces'] = ['Banteay Meanchey', 'Battambang', 'Kampong Cham', 'Kampong Chhnang', 'Kampong Speu',
							'Kampong Thom', 'Kampot', 'Kandal', 'Kep', 'Koh Kong', 'Kratié', 'Mondulkiri', 
							'Oddar Meanchey', 'Pailin', 'Phnom Penh', 'Preah Sihanouk', 'Prey Veng', 'Preah Vihear', 
							'Pursat', 'Ratanakiri', 'Siem Reap', 'Stung Treng', 'Svay Rieng', 'Takéo', 'Tboung Khmum'];
		$data['ngo'] = $this->ngos_model->getAllNGO();
		$data['homeAsset'] = $this->home_assets_model->getHomeAssets($id);
		$data['parent'] = $this->families_model->getFamilyProfile($id);
		$data['income'] = $this->incomes_model->getFamilyIncomes($id);
		$data['expense'] = $this->expenses_model->getFamilyExpenses($id);
		$data['loadAndDebt'] = $this->loans_debts_model->getLoansDebts($id);
		$data['residence'] = $this->residences_model->getResidence($id);
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('candidates/update', $data);
		$this->load->view('templates/footer');
	}

	/**
     * Update the investigation conclusion
     * @param $id of the candidate to be updated 
     */
	public function uInvestiCon($id) {		//function to update investigation conclusion 
		$investi = $this->input->post('invesCon');
		$data = $this->candidates_model->upInvesCon($id,$investi);
		echo json_encode($data);
	}

	/**
     * Update the candidate information
     * @param $id of the candidate to be updated 
     */
	public function uCandidateInfo($id) {		//get value from form candidate student information
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$gender = $this->input->post('gender');
		$canAge = $this->input->post('canAge');
		$province = $this->input->post('province');
		$ngo = $this->input->post('ngo');
		$grade = $this->input->post('grade');
		$ngoComment = $this->input->post('ngoComment');
		$can_health = $this->input->post('can_health');
		$healthIssues = $this->input->post('healthIssues');
		$canRankClass = $this->input->post('canRankClass');
		$canAchivement = $this->input->post('canAchivement');
		$canPncRank = $this->input->post('canPncRank');
		$responsibilityMaturity = $this->input->post('responsibilityMaturity');
		$motivatForPnc = $this->input->post('motivatForPnc');
		$canCommunicate = $this->input->post('canCommunicate');
		$otherScholarship = $this->input->post('otherScholarship');
		$alter1 = $this->input->post('alternative1');
		$alter2 = $this->input->post('alternative2');
		$alter3 = $this->input->post('alternative3');
		$alterRank1 = $this->input->post('choiceRank1');
		$alterRank2 = $this->input->post('choiceRank2');
		$alterRank3 = $this->input->post('choiceRank3');
		$canChoiceRank = $this->input->post('canChoiceRank');
		$CanCommitment = $this->input->post('CanCommitment');
		$canParentCommitment = $this->input->post('canParentCommitment');
		$data = $this->candidates_model->uCanInfo($id,$fname,$lname,$gender,$canAge,$province,$ngo,$grade,$ngoComment,$can_health,$healthIssues,$canRankClass,$canAchivement,$canPncRank,$responsibilityMaturity,$motivatForPnc,$canCommunicate,$alter1,$alter2,$alter3,$alterRank1,$alterRank2,$alterRank3,$canChoiceRank,$CanCommitment,$canParentCommitment);
		echo json_encode($data);
	}

	/**
     * Update the family information of a specific candidate
     * @param $id of the candidate to be updated 
     */
	public function uFamilyProfile($id) {
		$fAge = $this->input->post('fAge');
		$fOccupation = $this->input->post('fOccupation');
		$fotherOccupationSpecify = $this->input->post('fotherOccupationSpecify');
		$fHealth = $this->input->post('fHealth');
		$fatherhealthIssues = $this->input->post('fatherhealthIssues');
		$fEducation = $this->input->post('fEducation');
		$mAge = $this->input->post('mAge');
		$mOccupation = $this->input->post('mOccupation');
		$mOccupationSpecify = $this->input->post('mOccupationSpecify');
		$mhealth = $this->input->post('mhealth');
		$mhealthSpecify = $this->input->post('mhealthSpecify');
		$mEducation = $this->input->post('mEducation');
		$siblings = $this->input->post('siblings');
		$Married = $this->input->post('Married');
		$Separated = $this->input->post('Separated');
		$liveInHouse = $this->input->post('liveInHouse');
		$sRank = $this->input->post('sRank');
		$data = $this->families_model->uFamilyProfile($id,$fAge,$fOccupation,$fotherOccupationSpecify,$fHealth,$fatherhealthIssues,$fEducation,$mAge,$mOccupation,$mOccupationSpecify,$mhealth,$mhealthSpecify,$mEducation,$siblings,$Married,$Separated,$liveInHouse,$sRank);
		echo json_encode($data);
	}

	/**
     * Update the parent incomes
     * @param $id of the candidate to be updated 
     */
	public function uParentIncome($id) {
		$famMonIncome = $this->input->post('famMonIncome');
		$famDalIncome = $this->input->post('famDalIncome');
		$famSeaIncome = $this->input->post('famSeaIncome');
		$famYeaIncome = $this->input->post('famYeaIncome');
		$famTotalIncome = $this->input->post('famTotalIncome');
		$chMonIncome = $this->input->post('chMonIncome');
		$chDaliIncome = $this->input->post('chDaliIncome');
		$chSeaIncome = $this->input->post('chSeaIncome');
		$chYeaIncome = $this->input->post('chYeaIncome');
		$chTotalIncome = $this->input->post('chTotalIncome');
		$gloToMonIn = $this->input->post('gloToMonIn');
		$g_monthly_individual = $this->input->post('g_monthly_individual');
		$data = $this->incomes_model->uFamilyIncomes($id,$famMonIncome,$famDalIncome,$famSeaIncome,$famYeaIncome,$famTotalIncome,$chMonIncome,$chDaliIncome,	$chSeaIncome,$chYeaIncome,$chTotalIncome,$gloToMonIn,$g_monthly_individual);
		echo json_encode($data);
	}

	/**
     * Update the family's expenses of a specific candidate
     * @param $id of the candidate to be updated 
     */
	public function uFamilyExpences($id) {
		$rice = $this->input->post('rice');
		$food = $this->input->post('food');
		$firewoodGasChacoal = $this->input->post('firewoodGasChacoal');
		$loan = $this->input->post('loan');
		$study = $this->input->post('study');
		$medical = $this->input->post('medical');
		$electricityWater = $this->input->post('electricityWater');
		$agirculture = $this->input->post('agirculture');
		$weddingCeremony = $this->input->post('weddingCeremony');
		$otherUtilities = $this->input->post('otherUtilities');
		$totalExpense = $this->input->post('totalExpense');
		$data = $this->expenses_model->uFamilyExpenses($id,$rice,$food,$firewoodGasChacoal,$loan,$study,$medical,$electricityWater,$agirculture,$weddingCeremony,$otherUtilities,$totalExpense);
		echo json_encode($data);
	}

	/**
     * Update the loans & debts information of a specific candidate
     * @param $id of the candidate to be updated 
     */
	public function uLoansDebts($id) {
		$initialAmount = $this->input->post('initialAmount');
		$institution = $this->input->post('institution');
		$interestRates = $this->input->post('interestRates');
		$reason = $this->input->post('reason');
		$monthly = $this->input->post('monthly');
		$semester = $this->input->post('semester');
		$capital = $this->input->post('capital');
		$trimester = $this->input->post('trimester');
		$data = $this->loans_debts_model->uLoansDebts($id,$initialAmount,$institution,$interestRates,$reason,$monthly,$semester,$capital,$trimester);
		echo json_encode($data);
	}
	
	/**
     * Update the residence information of a specific candidate
     * @param $id of the candidate to be updated 
     */
	public function uResidence($id) {
		$status = $this->input->post('status');
		$age = $this->input->post('age');
		$Rating_scal = $this->input->post('Rating_scal');
		$data = $this->residences_model->uResidence($id,$status,$age,$Rating_scal);
		echo json_encode($data);
	}

	/**
     * Update the home assets of a specific candidate
     * @param $id of the candidate to be updated 
     */
	public function uHomeAsset($id){
		$refrigerator = $this->input->post('refrigerator');
		$radio = $this->input->post('radio');
		$conditioner = $this->input->post('conditioner');
		$ricecooker = $this->input->post('ricecooker');
		$lcdTV = $this->input->post('lcdTV');
		$colorTV = $this->input->post('colorTV');
		$computer1 = $this->input->post('computer1');
		$computer2 = $this->input->post('computer2');
		$furnished = $this->input->post('furnished');
		$dvdPlayer = $this->input->post('dvdPlayer');
		$smartphone = $this->input->post('smartphone');
		$phone = $this->input->post('phone');
		$camera1 = $this->input->post('camera1');
		$camera2 = $this->input->post('camera2');
		$sofa1 = $this->input->post('sofa1');
		$sofa2 = $this->input->post('sofa2');
		$gascooker = $this->input->post('gascooker');
		$fruit = $this->input->post('fruit');
		$electrical = $this->input->post('electrical');
		$motobike = $this->input->post('motobike');
		$farming = $this->input->post('farming');
		$car = $this->input->post('car');
		$vehiclesComment = $this->input->post('vehiclesComment');
		$cow = $this->input->post('cow');
		$buffaloe = $this->input->post('buffaloe');
		$pig = $this->input->post('pig');
		$animalComment = $this->input->post('animalComment');
		$farmSize = $this->input->post('farmSize');
		$farmComment = $this->input->post('farmComment');
		$sumQuantity5 = $this->input->post('sumQuantity5');
		$sumQuantity3 = $this->input->post('sumQuantity3');
		$globalAsset = $this->input->post('globalAsset');
		$certificate = $this->input->post('certificate');
		$specifyLevel =$this->input->post('specifyLevel');
		$data = $this->home_assets_model->uHomeAssets($id,$refrigerator,$radio,$conditioner,$ricecooker,$lcdTV,$colorTV,$camera1,$camera2,$furnished,$dvdPlayer,$smartphone,$phone,$computer1,$computer2,$sofa1,$sofa2,$gascooker,$fruit,$electrical,$motobike,$farming,$car,$vehiclesComment,$cow,$buffaloe,$pig,$animalComment,$farmSize,$farmComment,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel);
		echo json_encode($data);
	}
}