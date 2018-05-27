<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_candidates extends CI_Controller{

	// function __construct(){
	// 	parent:: __construct();
	// 	$this->load->model('candidates_model', 'm_can');

	// }
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

		$this->load->model('candidates_model', 'm_can');
	}


	// function index(){
	// 	$this->load->view('templates/header');
	// 	$this->load->view('menu/index');
	// 	$this->load->view('welcome');
	// 	$this->load->view('templates/footer');
	// }
 // function allCandidate() //list all candidate of admin 
 // {
 // 	$this->load->view('templates/header');   
 // 	$this->load->view('menu/index');   
 // 	$this->load->view('welcome');   
 // 	$this->load->view('templates/footer');  
 // }

 // function to call all Candidates
 // public function showAllCandidates(){
 // 	$result = $this->m_can->showAllCandidates();
 // 	echo json_encode($result);
 // }

 // // function call delete Candidate

 // public function deleteCandidate(){
 // 	$result = $this->m_can->deleteCandidate();
 // 	$msg['success'] = false;
 // 	if($result){
 // 		$msg['success'] = true;
 // 	}
 // 	echo json_encode($msg);
 // }


	// function to get data for home page
	function index()
	{
		$data['gradeAPlus'] = $this->m_can->getGradeAPlus();
		$data['gradeA'] = $this->m_can->getGradeA();
		$data['gradeAMinus'] = $this->m_can->getGradeAMinus();
		$data['gradeBPlus'] = $this->m_can->getGradeBPlus();
		$data['gradeB'] = $this->m_can->getGradeB();
		$data['gradeFailed'] = $this->m_can->getGradeFailed();
		$data['maleCount'] = $this->m_can->countMale();
		$data['femaleCount'] = $this->m_can->countFemale();
		$data['ngo'] = $this->m_can->fromNGO();
		$data['notNgo'] = $this->m_can->notFromNGO();
		$this->load->view('templates/header',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('welcome',$data);
		$this->load->view('templates/footer',$data);
	}
	// function to call all candidates
	public function showAllCandidates()
	{
		$result = $this->m_can->showAllCandidates();
		echo json_encode($result);
	}
	// function call delete Candidate
	public function deleteCandidate()
	{
		$result = $this->m_can->deleteCandidate();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	// function to call selected candidates
	public function selectedCandidates()
	{
		$data['gradeAPlus'] = $this->m_can->getGradeAPlus();
		$data['gradeA'] = $this->m_can->getGradeA();
		$data['gradeAMinus'] = $this->m_can->getGradeAMinus();
		$data['gradeBPlus'] = $this->m_can->getGradeBPlus();
		$data['gradeB'] = $this->m_can->getGradeB();
		$data['gradeFailed'] = $this->m_can->getGradeFailed();
		$data['maleCount'] = $this->m_can->countMale();
		$data['femaleCount'] = $this->m_can->countFemale();
		$data['ngo'] = $this->m_can->fromNGO();
		$data['notNgo'] = $this->m_can->notFromNGO();
		$this->load->view('templates/header',$data);
		$this->load->view('menu/index',$data);
		$this->load->view('candidates/can_list',$data);
		$this->load->view('templates/footer',$data); 
	}
	// function call count all Candidates
	public function countCandidates()
	{
		$resultCount = $this->m_can->countCandidates();
		echo json_encode($resultCount);
	}
	// function call count selected candidates
	public function countSelectedCandidates()
	{
		$resultSelectedCount = $this->m_can->countSelectedCandidates();
		echo json_encode($resultSelectedCount);
	}
	// function call count provinces
	 function countProvinces()
	{
		$resultProvincesCount = $this->m_can->countProvinces();
		echo json_encode($resultProvincesCount);
	}
	// function show selected candidates
	public function showSelected()
	{
		$result = $this->m_can->showSelected();
		echo json_encode($result);
	}
	// function export candidates
	public function export() 
	{
		$this->load->view('candidates/export');
	}
	// function call view detail candidate 
	public function view_can_detail($id)
	{
		$this->load->model('candidates_model');
		$result['grade'] = $this->candidates_model->globle_grade($id);
		$result['list'] = $this->candidates_model->view_can($id);
		$result['family'] = $this->candidates_model->view_can_family($id);
		$result['income'] = $this->candidates_model->view_income($id);
		$result['expense'] = $this->candidates_model->view_exspense($id);
		$result['loan'] = $this->candidates_model->view_loan($id);
		$result['residenc'] = $this->candidates_model->view_residence($id);
		$result['home_assets'] = $this->candidates_model->view_home_assets($id);
		$this->load->view('templates/header');   
		$this->load->view('menu/index');   
		$this->load->view('candidates/view_can_detail',$result);   
		$this->load->view('templates/footer'); 

	}
	// function for export selected candidates
	public function exportSelectedCan()
	{
		$this->load->view('candidates/exportSelected');
	}
	// function to load form add candidates
	public function newCandidate()
	{
		$data['provinces'] = $this->m_can->getAllProvince();
		$data['ngoes'] = $this->m_can->getAllngo();
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('candidates/new_candidate',$data);
		$this->load->view('templates/footer');
	}

  	// add new candidate
	public function addCandidate()
	{
		$globalGrade = $this->input->post('globalGrade');
		$fname = $this->input->post('firstname');
		$lname = $this->input->post('lastname');
		$gender = $this->input->post('gender');   
		$age = $this->input->post('age');
		$province = $this->input->post('province');   
		$ngo = $this->input->post('ngo');
		$health = $this->input->post('health');
		$rankClass = $this->input->post('rankClass');
		$achivement = $this->input->post('achivement');
		$pncChoice = $this->input->post('pncChoice');
		$responsibility = $this->input->post('responsibility');
		$motivate = $this->input->post('motivate');
		$communication = $this->input->post('communication');
		$scholarship = $this->input->post('otherScholarship');
		$otherChoiceRank = $this->input->post('otherChoiceRank');
		$stuCommite = $this->input->post('studentCommit');
		$parCommite = $this->input->post('parentsCommit');
		$ngoComment = $this->input->post('ngoComment');
		$healthComment = $this->input->post('healthComment');
		$result['student'] = $this->m_can->addCandidate($fname,$lname,$gender,$age,$province,$ngo,$health,$rankClass,$achivement,$pncChoice,$responsibility,$motivate,$communication,$scholarship,$otherChoiceRank,$stuCommite,$parCommite,$globalGrade,$ngoComment,$healthComment);
		echo json_encode($msg);   
	}
  // function to add new family profile
// 	public function addFamilyProfile()
// 	{
// 		$fatherAge = $this->input->post('fatherAge');
// 		$fatherOccupation = $this->input->post('fatherOccupation');
// 		$fatherSpecify = $this->input->post('fatherSpecify');
// 		$fatherHealth = $this->input->post('fatherHealth');
// 		$fatherHealthSpecify = $this->input->post('fatherHealthSpecify');
// 		$fatherEdu = $this->input->post('fatherEdu');

// 		$motherAge = $this->input->post('motherAge');
// 		$motherOccupation = $this->input->post('motherOccupation');
// 		$motherSpecify = $this->input->post('motherSpecify');
// 		$motherhealthStatus = $this->input->post('motherhealthStatus');
// 		$motherHealthSpecify = $this->input->post('motherHealthSpecify');
// 		$motherEducation = $this->input->post('motherEducation');

// 		$numSiblings = $this->input->post('numSiblings');
// 		$marriedStatus = $this->input->post('marriedStatus');
// 		$separated = $this->input->post('separated');
// 		$numberFamilyLiving = $this->input->post('member');
// 		$studentRank = $this->input->post('studentRank');

// 		$resultFamily['familyProfile'] = $this->m_can->addFamilyProfile($fatherAge,$fatherOccupation,$fatherSpecify,$fatherHealth,$fatherHealthSpecify,$fatherEdu,$motherAge,$motherOccupation,$motherSpecify,$motherhealthStatus,$motherHealthSpecify,$motherEducation,$numSiblings,$marriedStatus,$separated,$numberFamilyLiving,$studentRank);

// 		$msg['success'] = false;
// 		$msg['type'] = 'add';
// 		if($resultFamily){
// 			$msg['success'] = true;
// 		}
// 		echo json_encode($msg);
// 	}
  public function addFamilyProfile()
  {
    $fatherAge = $this->input->post('fatherAge');
    $fatherOccupation = $this->input->post('fatherOccupation');
    $fatherSpecify = $this->input->post('fatherSpecify');
    $fatherHealth = $this->input->post('fatherHealth');
    $fatherHealthSpecify = $this->input->post('fatherHealthSpecify');
    $fatherEdu = $this->input->post('fatherEdu');
    $motherAge = $this->input->post('motherAge');
    $motherOccupation = $this->input->post('motherOccupation');
    $motherSpecify = $this->input->post('motherSpecify');
    $motherhealthStatus = $this->input->post('motherhealthStatus');
    $motherHealthSpecify = $this->input->post('motherHealthSpecify');
    $motherEducation = $this->input->post('motherEducation');
    $numSiblings = $this->input->post('numSiblings');
    $marriedStatus = $this->input->post('marriedStatus');
    $separated = $this->input->post('separated');
    $numberFamilyLiving = $this->input->post('member');
    $studentRank = $this->input->post('studentRank');
    $resultFamily['familyProfile'] = $this->m_can->addFamilyProfile($fatherAge,$fatherOccupation,$fatherSpecify,$fatherHealth,$fatherHealthSpecify,$fatherEdu,$motherAge,$motherOccupation,$motherSpecify,$motherhealthStatus,$motherHealthSpecify,$motherEducation,$numSiblings,$marriedStatus,$separated,$numberFamilyLiving,$studentRank);
   
    $msg['success'] = false;
    $msg['type'] = 'add';

    if($resultFamily){
      $msg['success'] = true;
    }
    echo json_encode($msg); 
}

// delete selected candidate
	public function deleteSelectedCandidate(){
		$result = $this->m_can->deleteCandidate();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
// just like to update form
	function updateForm($id) {		// link to form update with old info
		$this->load->model('Candidates_model');
		$data['value'] = $this->Candidates_model->listInfo($id); 	//get old value
		$data['invesCon'] = $this->Candidates_model->investiCon($id);
		$data['provinces'] = $this->Candidates_model->listProvinces();
		$data['ngo'] = $this->Candidates_model->listNGO();
		$data['homeAsset'] = $this->Candidates_model->listHomeAsset($id);
		$data['parent'] = $this->Candidates_model->parentPro($id);
		$data['income'] = $this->Candidates_model->income($id);
		$data['expense'] = $this->Candidates_model->expense($id);
		$data['loadAndDebt'] = $this->Candidates_model->loadsAndDebts($id);
		$data['residence'] = $this->Candidates_model->residence($id);
		$this->load->view('templates/header');
		$this->load->view('menu/index');   
		$this->load->view('candidates/update_candidate', $data);
		$this->load->view('templates/footer');
	}
	//image part
	//controller for update image of candidate
	public function uImage($id) {
		$this->load->model('Candidates_model');
		// $inputFile = $this->input->post('cImage'); //get value from input btn
		$config['upload_path']= base_url()."assets/images/candidates/";
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $this->load->library('upload',$config);
        if($this->upload->do_upload('file')){
        $data = $this->upload->data();
        $data1 = array(
        'file' => $this->input->post('file'),
        'imgpath' => $data['upload_data']['file_name']
        );
        $result = $this->Candidates_model->uImageCan($id,$data1);
            echo json_encode($result);
        // if ($result == TRUE) {
        // 	}
        }
		// $config['upload_path'] = './assets/images/candidates/';
		// $config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size'] = 1024;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 7680;
		// $this->load->library('Upload',$config);
		// if (!$this->upload->do_upload('cImage')) {
		// 	$error = array('error'=>$this->upload->display_errors());
		// 	echo "Error Upload Image!";die();
		// }
		// $iData = array('upload_data'=>$this->upload->data());
		// var_dump($iData);die();
		// foreach ($iData as $iData):
		// 	$file_name = $iData['file_name'];
		// endforeach;
	}
	public function uInvestiCon($id) {		//function to update investigation conclusion 
		$this->load->model('Candidates_model');
		$investi = $this->input->post('invesCon');
		$data = $this->Candidates_model->upInvesCon($id,$investi);
		echo json_encode($data);
	}
	function uCandidateInfo($id) {		//get value from form candidate student information
		$this->load->model('Candidates_model');
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
		$canChoiceRank = $this->input->post('canChoiceRank');
		$CanCommitment = $this->input->post('CanCommitment');
		$canParentCommitment = $this->input->post('canParentCommitment');
		$data = $this->Candidates_model->uCanInfo($id,$fname,$lname,$gender,$canAge,$province,$ngo,$grade,$ngoComment,$can_health,$healthIssues,$canRankClass,$canAchivement,$canPncRank,$responsibilityMaturity,$motivatForPnc,$canCommunicate,$otherScholarship,$canChoiceRank,$CanCommitment,$canParentCommitment);
		echo json_encode($data);
	}
	//controller for update family profile
	public function uFamilyProfile($id) {
		$this->load->model('Candidates_model');
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
		$data = $this->Candidates_model->ufamilyProfile($id,$fAge,$fOccupation,$fotherOccupationSpecify,$fHealth,$fatherhealthIssues,$fEducation,$mAge,$mOccupation,$mOccupationSpecify,$mhealth,$mhealthSpecify,$mEducation,$siblings,$Married,$Separated,$liveInHouse,$sRank);
		echo json_encode($data);
	}
	//controller for update parent income
	public function uParentIncome($id) {
		$this->load->model('Candidates_model');
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
		$data = $this->Candidates_model->uFamilyIncome($id,$famMonIncome,$famDalIncome,$famSeaIncome,$famYeaIncome,$famTotalIncome,$chMonIncome,$chDaliIncome,	$chSeaIncome,$chYeaIncome,$chTotalIncome,$gloToMonIn,$g_monthly_individual);
		echo json_encode($data);
	}
	//controller for hold family of expece
	public function ufamilyExpece($id) {
		$this->load->model('Candidates_model');
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
		$data = $this->Candidates_model->ufamilyExpense($id,$rice,$food,$firewoodGasChacoal,$loan,$study,$medical,$electricityWater,$agirculture,$weddingCeremony,$otherUtilities,$totalExpense);
		echo json_encode($data);
	}
	//controller for update loan and debt
	public function uLoanDebt($id) {
		$this->load->model('Candidates_model');
		$initialAmount = $this->input->post('initialAmount');
		$institution = $this->input->post('institution');
		$interestRates = $this->input->post('interestRates');
		$reason = $this->input->post('reason');
		$monthly = $this->input->post('monthly');
		$semester = $this->input->post('semester');
		$capital = $this->input->post('capital');
		$trimester = $this->input->post('trimester');
		$data = $this->Candidates_model->uLoadDebt($id,$initialAmount,$institution,$interestRates,$reason,$monthly,$semester,$capital,$trimester);
		echo json_encode($data);
	}
	//controller for update residence
	public function uResidence($id) {
		$this->load->model('Candidates_model');
		$status = $this->input->post('status');
		$age = $this->input->post('age');
		$Rating_scal = $this->input->post('Rating_scal');
		$data = $this->Candidates_model->uResidence($id,$status,$age,$Rating_scal);
		echo json_encode($data);
	}
	public function uHomeAsset($id){
		$this->load->model('Candidates_model');
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
		$data = $this->Candidates_model->uHomeAssets($id,$refrigerator,$radio,$conditioner,$ricecooker,$lcdTV,$colorTV,$camera1,$camera2,$furnished,$dvdPlayer,$smartphone,$phone,$computer1,$computer2,$sofa1,$sofa2,$gascooker,$fruit,$electrical,$motobike,$farming,$car,$vehiclesComment,$cow,$buffaloe,$pig,$animalComment,$farmSize,$farmComment,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel);
		echo json_encode($data);
	}
  // start function add family income resource
	public function addFamilyIncome()
	{
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

      // var_dump($paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId);
      // die();

		$result['familyIncome'] = $this->m_can->addFamilyIncome($paMonthIncome,$paDailyIncome,$paSesIncome,$paYearIncome,$paTotalIncome,$chMonthIncome,$chDailyIncome,$chSeasonIncome,$chYearIncome,$chTotalIncome,$totalIncome,$totalIncomeId);
		echo json_encode($msg);
	}
  // end function add family income resource

   // function add loan & Debts
	public function addLoan()
	{
		$amount = $this->input->post('initAmount');
		$institution = $this->input->post('instit');
		$interest = $this->input->post('interRates');
		$reason = $this->input->post('reason');
		$monthly = $this->input->post('monthly');
		$trimester = $this->input->post('trimester');
		$semester = $this->input->post('semester');
		$capital = $this->input->post('capital');

		$result['familyLoan'] = $this->m_can->addLoan($amount,$institution,$interest,$reason,$monthly,$trimester,$semester,$capital);
		echo json_encode($msg);
	}
   // End funciton add loan & Debts
    // function add family expense
	public function addExpense()
	{
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

		$result['familyExpense'] = $this->m_can->addExpense($rice,$food,$firewood,$loan,$study,$medical,$electric,$agriculture,$wedding,$other,$totalExpense);

		echo json_encode($msg);
	}
    // end function add family expense

    // function add family residence status

    // public function addResidence()
    // {
    // 	$status = $this->input->post('status');
    // 	$age = $this->input->post('age');
    // 	$rating = $this->input->post('rating');

    // 	$result['formExpense'] = $this->m_can->addResidence($status,$age,$rating);

    // 	$msg['success'] = false;
    // 	$msg['type'] = 'add';
    // 	if($result){

    // 	  $msg['success'] = true;
    // 	// redirect('C_candidates/newCandidate');


	public function addResidence()
	{
		$status = $this->input->post('status');
		$age = $this->input->post('age');
		$rating = $this->input->post('rating');

		$result['formExpense'] = $this->m_can->addResidence($status,$age,$rating);
		echo json_encode($msg);
	}
    // end function add family residence status

    // function add family home assets
    public function addAssets()
    {
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

    	$result['familyAsset'] = $this->m_can->addAssets($refrigerator,$radio,$airCon,$riceCooker,$lcdTV,$colorTV,$chComputer,$exComputer,$fCabinet,$dvd,$smartPhone,$phone,$cheapCam,$expenCam,$cheapSofa,$exSofa,$gasCooker,$fruitBlender,$elecCooker,$motoBike,$farmMachine,$car,$vihicleComment,$cow,$buffalo,$pig,$animalCmt,$farmSize,$farmCmt,$sumQuantity5,$sumQuantity3,$globalAsset,$certificate,$specifyLevel);
    	echo json_encode($msg);
    }
    // end function add family residence status

    // start function add investigator conclusion
    public function addConclude()
    {
    	$investigatorConclude = $this->input->post('investigatorConclude');
    	var_dump($investigatorConclude);
    	die();
    }
    // end function add conclusion
}
