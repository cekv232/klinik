		<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_pasien');

	}
	
	public function index()
	{	
		$data['pasien'] = $this->M_pasien->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('pasien/V_data',$data);
		$this->load->view('templates/dashboard');
	}

	function tambah(){

		$this->load->view('templates/header');
		$this->load->view('pasien/V_data_tambah');
		$this->load->view('templates/dashboard');
	}

	function insert(){
		$nama = $this->input->post('nama_pasien');
		$j =$this->input->post('jenis_kelamin');
		$umur =$this->input->post('umur');

		$data = array(
			'nama_pasien' => $nama,
			'jenis_kelamin' => $j,
			'umur' => $umur
		);

		 $this->M_pasien->insert_data($data);

		redirect('pasien');
	}
	
	function edit($id_pasien){

		$where = array('id_pasien' => $id_pasien);
		$data['p'] =$this->M_pasien->edit_data($where)->row_array();

		$this->load->view('templates/header');
		$this->load->view('pasien/V_data_edit',$data);
		$this->load->view('templates/dashboard');
	}

	function update(){
		$id_pasien = $this->input->post('id_pasien');
		$nama = $this->input->post('nama_pasien');
		$j =$this->input->post('jenis_kelamin');
		$umur =$this->input->post('umur');

		$data = array(
			'nama_pasien' => $nama,
			'jenis_kelamin' => $j,
			'umur' => $umur
		);

		$where = array('id_pasien' => $id_pasien);
		$this->M_pasien->update_data($data, $where);

		redirect('pasien');
	}

	function hapus($id_pasien){
		$where = array('id_pasien' => $id_pasien);
		$this->M_pasien->hapus_data($where);
		redirect('pasien');
	}
}
