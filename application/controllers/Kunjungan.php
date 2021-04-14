<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller  {

	function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('login'))){
			redirect('auth');
		}

		$this->load->model('M_kunjungan');
		$this->load->model('M_pasien');
		$this->load->model('M_dokter');
		$this->load->model('M_obat');

	}
	
	public function index()
	{	
		$data['kunjungan'] = $this->M_kunjungan->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('kunjungan/V_data',$data);
		$this->load->view('templates/dashboard');
	}

	function tambah(){

		$data['pasien'] = $this->M_pasien->tampil_data()->result_array();
		$data['dokter'] = $this->M_dokter->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('kunjungan/V_data_tambah', $data);
		$this->load->view('templates/dashboard');
	}

	function insert(){
		$tgl = $this->input->post('tgl_berobat');
		$pasien =$this->input->post('pasien');
		$dokter =$this->input->post('dokter');

		$data = array(
			'tgl_berobat' => $tgl,
			'id_pasien' => $pasien,
			'id_dokter' => $dokter
		);

		 $this->M_kunjungan->insert_data($data);

		redirect('kunjungan');
	}
	
	function edit($id_berobat){

		$where = array('id_berobat' => $id_berobat);
		$data['edit'] =$this->M_kunjungan->edit_data($where)->row_array();

		$data['pasien'] = $this->M_pasien->tampil_data()->result_array();
		$data['dokter'] = $this->M_dokter->tampil_data()->result_array();

		$this->load->view('templates/header');
		$this->load->view('kunjungan/V_data_edit',$data);
		$this->load->view('templates/dashboard');
	}

	function update(){
		$id_berobat = $this->input->post('id_berobat');
		$tgl = $this->input->post('tgl_berobat');
		$pasien =$this->input->post('pasien');
		$dokter =$this->input->post('dokter');

		$data = array(
			'tgl_berobat' => $tgl,
			'id_pasien' => $pasien,
			'id_dokter' => $dokter
		);

		$where = array('id_berobat' => $id_berobat);
		$this->M_kunjungan->update_data($data, $where);

		redirect('kunjungan');
	}

	function hapus($id_berobat){
		$where = array('id_berobat' => $id_berobat);
		$this->M_kunjungan->hapus_data($where);
		redirect('kunjungan');
	}

	// fungsi untuk rekam medis

	function rekam($id){

		// tampilkan detail rekam medis
		$data['d'] = $this->M_kunjungan->tampil_rm($id)->row_array();

		// unttuk menampilkan riwayat kunjungan
		$q = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")
		->row_array();
		$id_pasien = $q['id_pasien'];
		$data['riwayat'] = $this->M_kunjungan->tampil_riwayat($id_pasien)->result_array();

		// menampilkan data obat di combo
		$data['obat'] = $this->M_obat->tampil_data()->result_array();
		// menampilkan resep obat
		$data['resep'] = $this->M_kunjungan->tampil_resep($id)->result_array();


		$this->load->view('templates/header');
		$this->load->view('kunjungan/V_rekam_medis', $data);
		$this->load->view('templates/dashboard');
	}

	function insert_rm(){
		$id_berobat = $this->input->post('id');
		$keluhan = $this->input->post('keluhan');
		$diagnosa = $this->input->post('diagnosa');
		$penatalaksanaan = $this->input->post('penatalaksanaan');

		$data = array(
			'keluhan_pasien' => $keluhan,
			'hasil_diagnosa' => $diagnosa,
			'penatalaksanaan' => $penatalaksanaan
		);

		$where = array('id_berobat' => $id_berobat);

		$this->M_kunjungan->update_data($data, $where);

		redirect('kunjungan/rekam/'.$id_berobat);
	}

	function insert_resep(){
		$id_berobat = $this->input->post('id');
		$obat = $this->input->post('obat');

		$data = array(
			'id_berobat' => $id_berobat,
			'id_obat' => $obat
		);

		$this->M_kunjungan->insert_resep($data);

		redirect('kunjungan/rekam/'.$id_berobat);
	}

	function hapus_resep($id, $id_berobat){
		$where = array('id_resep' =>$id);
		$this->M_kunjungan->hapus_resep($where);
		redirect('kunjungan/rekam/'.$id_berobat);
	}
}
