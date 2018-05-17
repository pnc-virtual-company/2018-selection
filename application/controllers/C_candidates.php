<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class C_candidates extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('candidates_model', 'm_can');

	}
	function index(){
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}
	function allCandidate() //list all candidate of admin	
	{
	$this->load->view('templates/header');			
	$this->load->view('menu/index');			
	$this->load->view('welcome');			
	$this->load->view('templates/footer');		
	}	
	public function showAllCandidates(){
		$result = $this->m_can->showAllCandidates();
		echo json_encode($result);
	}

	public function deleteCandidate(){
		$result = $this->m_can->deleteCandidate();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


	// edit candidate function
	public function updateForm($id){
		// $this->load->model('Candidates_model');	//load model first
		// $data['viewAll'] = $this->Candidates_model->showAllCandidates($id);
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('candidates/update_candidate');
		$this->load->view('templates/footer');
		}

	public function selectedCandidates(){
		$this->load->view('templates/header');			
		$this->load->view('menu/index');			
		$this->load->view('candidates/can_list');			
		$this->load->view('templates/footer');	
	}
	public function showSelected(){
		$result = $this->m_can->showSelected();
		echo json_encode($result);
	}

	public function addCandidate()
	{
		$fname = $this->input->post('firstname');
		$lname = $this->input->post('lastname');
		$gender = $this->input->post('gender');		
		$class = $this->input->post('class');
		$year = $this->input->post('year');
		$stuid = $this->input->post('studentId');
		$province = $this->input->post('province');		
		$tutor = $this->input->post('tutor');
		$query['student'] = $this->m_follow->addStudent($fname,$lname,$gender,$class,$year,$stuid,$province,$tutor);
		if ($query == true) {
			// $data['student'] = $this->m_follow->listStudents();	
			// viewStudent();
			$data['query'] = $this->m_follow->getStudent();
			$this->load->view('template/header');
			$this->load->view('template/menu_manager');
			$this->load->view('training_manager/v_studentInfo',$data);
			$this->load->view('template/footer');

		} else {
			echo "Insert Fail";
		}
	}
}