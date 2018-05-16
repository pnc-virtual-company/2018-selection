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
	public function updateForm(){
		$this->load->model('Candidates_model');	//load model first
		 $data['viewAll'] = $this->Candidates_model->showAllCandidates();
		// $id = $this->uri->segment(3);
		// var_dump($id);
		// die();
		$this->load->view('templates/header');
		$this->load->view('menu/index');
		$this->load->view('candidates/update_candidate');
		$this->load->view('templates/footer');
		}

}