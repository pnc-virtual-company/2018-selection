<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
			$this->load->model('users_model', 'u_m');
	}

	public function index()
	{
		
		$this->load->view('login/login');
		
	}

	public function displayContent()
	{
		// $data['roles'] = $this->u_m->getRoles();
		$data['activeLink'] = 'home';
		$this->load->view('templates/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('welcome', $data);
		$this->load->view('templates/footer', $data);
	}
	public function map()
	{
		
		$this->load->view('templates/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('province', $data);
		$this->load->view('templates/footer', $data);
	}
}
