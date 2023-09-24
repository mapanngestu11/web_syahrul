<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kegiatan');
		$this->load->model('M_banner');
		$this->load->model('M_pegawai');

	}

	public function index()
	{


		$data['data_pegawai'] = $this->M_pegawai->tampil_data_homepage()->result_array();
		$data['data_banner'] = $this->M_banner->tampil_data_homepage()->result_array();

		
		$this->load->view('Front/Pegawai.php',$data);
	}
}
