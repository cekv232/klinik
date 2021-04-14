<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_users');

	}
	
	public function index()
	{	
		$data['users'] = $this->M_users->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('users/V_data',$data);
		$this->load->view('templates/dashboard');
	}

	function tambah(){
		$data['title'] = "Tambah Data Users";

		$this->load->view('templates/header');
		$this->load->view('users/V_data_tambah');
		$this->load->view('templates/dashboard');
	}

	function insert(){
		$u =$this->input->post('username');
		$n =$this->input->post('nama_lengkap');
		$p =md5($this->input->post('password'));

		$data = array(
			'username ' => $u,
			'nama_lengkap' => $n,
			'password' => $p
		);

		 $this->M_users->insert_data($data);

		redirect('users');
	}
	
	function edit($id){

		$data['title'] = "Edit Data Users";

		$where = array('id' => $id);
		$data['r'] =$this->M_users->edit_data($where)->row_array();

		$this->load->view('templates/header');
		$this->load->view('users/V_data_edit',$data);
		$this->load->view('templates/dashboard');
	}

	function update(){
		$id = $this->input->post('id');
		$u =$this->input->post('username');
		$n =$this->input->post('nama_lengkap');
		$p =md5($this->input->post('password'));

		$data = array(
			'username ' => $u,
			'nama_lengkap' => $n,
			'password' => $p
		);

		$where = array('id' => $id);
		$this->M_users->update_data($data, $where);

		redirect('users');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->M_users->hapus_data($where);
		redirect('users');
	}
}
