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
	    $this->load->view('templates/header');
	    $this->load->view('menu/index');
	    $this->load->view('candidates/new_candidate');
	    $this->load->view('templates/footer');
	}
}