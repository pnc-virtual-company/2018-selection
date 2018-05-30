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
	public function map()
	{
		$this->load->library('googlemaps');
		$config['center'] = '12.5657, -104.9910';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);
		$marker = array();
		$marker['position'] = '37.429, -122.1419';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('templates/header', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('province', $data);
		$this->load->view('templates/footer', $data);
	}
}
