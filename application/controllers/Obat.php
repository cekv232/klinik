<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_obat');

	}
	
	public function index()
	{	
		$data['obat'] = $this->M_obat->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('obat/V_data',$data);
		$this->load->view('templates/dashboard');
	}

	function tambah(){

		$this->load->view('templates/header');
		$this->load->view('obat/V_data_tambah');
		$this->load->view('templates/dashboard');
	}

	function insert(){
		$nama = $this->input->post('nama_obat');

		$data = array(
			'nama_obat' => $nama,
		);

		 $this->M_obat->insert_data($data);

		redirect('obat');
	}
	
	function edit($id_obat){

		$where = array('id_obat' => $id_obat);
		$data['r'] =$this->M_obat->edit_data($where)->row_array();

		$this->load->view('templates/header');
		$this->load->view('obat/V_data_edit',$data);
		$this->load->view('templates/dashboard');
	}

	function update(){
		$id_obat = $this->input->post('id_obat');
		$nama = $this->input->post('nama_obat');

		$data = array(
			'nama_obat' => $nama
		);

		$where = array('id_obat' => $id_obat);
		$this->M_obat->update_data($data, $where);

		redirect('obat');
	}

	function hapus($id_obat){
		$where = array('id_obat' => $id_obat);
		$this->M_obat->hapus_data($where);
		redirect('obat');
	}
}
