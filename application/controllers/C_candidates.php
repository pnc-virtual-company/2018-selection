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
    	echo json_encode($msg);
    }
    // end function add family residence status
}