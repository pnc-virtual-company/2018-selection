<?php 
	/**
	* Group A
	*/
	class c_student extends CI_Controller
	{
		function listofstudent(){
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/studentList');
			$this->load->view('templates/footer');
		}
		function view_candidate_info()
		{
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/Student_info');
			$this->load->view('templates/footer');
		}
		
	}
 ?>