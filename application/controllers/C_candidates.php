<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_candidates extends CI_Controller{
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
	public function countProvinces()
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
	    $msg['success'] = false;
	    $msg['type'] = 'add';
	    if($result){
	      $msg['success'] = true;
	    }
    echo json_encode($msg);   
  }

  // function to add new family profile
  public function addFamilyProfile()
  {
    $fAge = $this->input->post('faAge');
    $fOccupation = $this->input->post('faOccu');
    $fSpecify = $this->input->post('faSpec');
    $fHealth = $this->input->post('faHealth');
    $fHealthSpec = $this->input->post('faHealthSpec');
    $fEdu = $this->input->post('faEdu');

    $mAge = $this->input->post('moAge');
    $mOccu = $this->input->post('motherOcc');
    $mSpecify = $this->input->post('mSpecify');
    $mhealthStatus = $this->input->post('mhealthStat');
    $mHealthSpec = $this->input->post('mHealthSpec');
    $mEdu = $this->input->post('mEdu');

    $numSiblings = $this->input->post('numSiblings');
    $marriedStatus = $this->input->post('marriedStat');
    $separated = $this->input->post('separated');
    $numFamily = $this->input->post('member');
    $studentRank = $this->input->post('studentRank');

    $result['familyProfile'] = $this->m_can->addFamilyProfile($fAge,$fOccupation,$fSpecify,$fHealth,$fHealthSpec,$fEdu,$mAge,
      $mOccu,$mSpecify,$mhealthStatus,$mHealthSpec,$mEdu,$numSiblings,$marriedStatus,$separated,$numFamily,$studentRank);
   
    $msg['success'] = false;
      $msg['type'] = 'add';
      if($result){
        $msg['success'] = true;
      }
    echo json_encode($msg);   
  }
  // end function add new family profile

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
      
      $msg['success'] = false;
      $msg['type'] = 'add';

      if($result){
        $msg['success'] = true;
      }
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
    	
    	$msg['success'] = false;
    	$msg['type'] = 'add';

    	if($result){
    	  $msg['success'] = true;
    	}
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

    	$msg['success'] = false;
    	$msg['type'] = 'add';

    	if($result){
    	  $msg['success'] = true;
    	}
    	echo json_encode($msg);
    }
    // end function add family expense

    // function add family residence status
    public function addResidence()
    { 
    	$status = $this->input->post('status');
    	$age = $this->input->post('age');
    	$rating = $this->input->post('rating');

    	$result['formExpense'] = $this->m_can->addResidence($status,$age,$rating);

    	$msg['success'] = false;
    	$msg['type'] = 'add';
    	if($result){

    	  $msg['success'] = true;
    	// redirect('C_candidates/newCandidate');
    	}
      redirect('C_candidates/newCandidate');

      // echo json_encode($msg);

    	// echo json_encode($msg);
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

    	$msg['success'] = false;
    	$msg['type'] = 'add';

    	if($result){
    	  $msg['success'] = true;
    	}
    	echo json_encode($msg);
    }
    // end function add home asset

    // start function add investigator conclusion
    public function addConclude()
    {
    	$investigatorConclude = $this->input->post('investigatorConclude');
    	var_dump($investigatorConclude);
    	die();
    }
    // end function add conclusion
}