<?php 
	/**
	* Group A
	*/
	class c_student extends CI_Controller
	{
		function listofstudent(){ //list all candidates of home page
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/studentList');
			$this->load->view('templates/footer');
		}
		function listSelectedstudent() //list selected candidate of home page
		{
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/selectedStudentList');
			$this->load->view('templates/footer');
		}
		function allCandidate(){ //list all candidate of admin
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/studentList');
			$this->load->view('templates/footer');
		}
		function selectedCandidate() //list selected candidate of admin
		{
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/selectedStudentList');
			$this->load->view('templates/footer');
		}
		function view_candidate_info()
		{
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/Student_info');
			$this->load->view('templates/footer');
		}
		function goback(){
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('students/studentList');
			$this->load->view('templates/footer');
		}
	}
 ?>