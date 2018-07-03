<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
* The class Session handle the login and logout functionalities of this application
*/

class Connection extends CI_Controller {

	/**
	 * Default constructor
	 * @author Benjamin BALET <benjamin.balet@gmail.com>
	 */
	public function __construct() {
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		$this->login();
	}

	/**
	 * Login form of the application
	 * @author Benjamin BALET <benjamin.balet@gmail.com>
	 */
	public function login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login', 'Login', 'required|strip_tags');
		$this->form_validation->set_rules('password', 'Password', 'required|strip_tags');
		if ($this->form_validation->run() === FALSE) 
		{
			log_message('debug', 'Let\'s display the login form');
			$data['title'] = 'Login';
			$data['flashPartialView'] = $this->load->view('templates/flash', $data, TRUE);
			$this->load->view('templates/header', $data);
			$this->load->view('login/login', $data);
			$this->load->view('templates/footer');
		} else {
			$this->load->model('users_model');
			$loggedin = $this->users_model->checkCredentials($this->input->post('login'), $this->input->post('password'));
			if ($loggedin == TRUE) 
			{
				log_message('debug', 'Received good credentials for user #' . $this->session->userdata('id'));
				//If the user has a target page (e.g. link in an e-mail), redirect to this destination
                if ($this->session->userdata('last_page') != '') {
                	log_message('debug', 'Last_page set. Redirect to the last page' . $this->session->userdata('last_page'));
                    redirect($this->session->userdata('last_page'));
                } else {
                	log_message('debug', 'No last_page set. Redirect to the home page');
                    redirect('candidates');
                }				
			} else {
				log_message('error', 'Invalid credentials for user ' . $this->input->post('login'));
				$this->session->set_flashdata('msg', 'Invalid credentials');
				redirect('connection/login');
			}
		}
	}

	/**
	 * Logout the user and destroy the session data.
	 * @author Benjamin BALET <benjamin.balet@gmail.com>
	 */
	public function logout()
	{
		//Add comment to the file connection 
		log_message('debug', 'Logout current user and redirect to the home page');
		$this->session->sess_destroy();
		redirect('connection/login');
	}
}