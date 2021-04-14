<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_dokter');

	}
	
	public function index()
	{	
		$data['dokter'] = $this->M_dokter->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('dokter/V_data',$data);
		$this->load->view('templates/dashboard');
	}

	function tambah(){

		$this->load->view('templates/header');
		$this->load->view('dokter/V_data_tambah');
		$this->load->view('templates/dashboard');
	}

	function insert(){
		$nama = $this->input->post('nama_dokter');

		$data = array(
			'nama_dokter' => $nama
		);

		 $this->M_dokter->insert_data($data);

		redirect('dokter');
	}
	
	function edit($id_dokter){

		$where = array('id_dokter' => $id_dokter);
		$data['d'] =$this->M_dokter->edit_data($where)->row_array();

		$this->load->view('templates/header');
		$this->load->view('dokter/V_data_edit',$data);
		$this->load->view('templates/dashboard');
	}

	function update(){
		$id_dokter = $this->input->post('id_dokter');
		$nama =$this->input->post('nama_dokter');

		$data = array(
			'nama_dokter' => $nama
		);

		$where = array('id_dokter' => $id_dokter);
		$this->M_dokter->update_data($data, $where);

		redirect('dokter');
	}

	function hapus($id_dokter){
		$where = array('id_dokter' => $id_dokter);
		$this->M_dokter->hapus_data($where);
		redirect('dokter');
	}
}
