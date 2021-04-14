<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}
	}
	
	public function index()
	{	


		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/dashboard');
	}

}
