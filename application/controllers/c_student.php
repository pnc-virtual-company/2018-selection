<?php 
	/**
	* Group A
	*/
	class c_student extends CI_Controller
	{
		public function __construct() {
		        parent::__construct();
		        log_message('debug', 'URI=' . $this->uri->uri_string());
		        $this->session->set_userdata('last_page', $this->uri->uri_string());
		        if($this->session->loggedIn === TRUE) {
		           // Allowed methods
		           if ($this->session->isAdmin || $this->session->user) {
		             //User management is reserved to admins and super admins
		           } else {
		             redirect('errors/privileges');
		         }
		     } else {
		       redirect('connection/login');
		   }

		 $this->load->model('candidates_model', 'm_can');
		}
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
			$this->load->view('candidates/new_student');
			$this->load->view('templates/footer');
		}
		function listSelectedstudent() //list selected candidate of home page		
		{			
		$this->load->view('templates/header');			
		$this->load->view('menu/index');			
		$this->load->view('students/selectedStudentList');			
		$this->load->view('templates/footer');		
		}	
		
		function selectedCandidate() //list selected candidate of admin		
		{			
			$this->load->view('templates/header');			
			$this->load->view('menu/index');			
			$this->load->view('students/selectedStudentList');			
			$this->load->view('templates/footer');		
		}
// add candidate
		function addCandidate(){
			$result = $this->m_new_student->addCandidate();
			$msg['success'] = false;
			$msg['type'] = 'add';
			if($result){
				$msg['success'] = true;
			}
			echo json_encode($msg);
		}
//view candidates distributtion on map
		function map(){ 
			$this->load->view('templates/header');
			$this->load->view('menu/index');
			$this->load->view('province');
			$this->load->view('templates/footer');
		}	
		
	}
 ?>