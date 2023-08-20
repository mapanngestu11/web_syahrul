<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kegiatan');
		$this->load->model('M_banner');

	}

	public function index()
	{


		$data['data_kegiatan'] = $this->M_kegiatan->tampil_data_homepage()->result_array();
		$data['data_banner'] = $this->M_banner->tampil_data_homepage()->result_array();

		
		$this->load->view('Front/Home.php',$data);
	}
}
