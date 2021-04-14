<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_dokter');
		$this->load->model('M_pasien');
		$this->load->model('M_kunjungan');


	}
	
	public function index()
	{	
		redirect('dashboard');
	}

	function data_dokter(){

		$data['dokter'] = $this->M_dokter->tampil_data()->result_array();

		$this->load->view('laporan/v_lap_dokter', $data);
	}
	
	function data_pasien(){

		$data['pasien'] = $this->M_pasien->tampil_data()->result_array();

		$this->load->view('laporan/v_lap_pasien', $data);
	}

	function data_kunjungan(){

		$data['kunjungan'] = $this->M_kunjungan->tampil_data()->result_array();

		$this->load->view('laporan/v_lap_kunjungan', $data);
	}
}
