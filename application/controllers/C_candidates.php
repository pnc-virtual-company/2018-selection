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
		$this->load->view('candidates/can_list');
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

}