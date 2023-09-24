<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan_kk_baru extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kegiatan');
		$this->load->model('M_banner');
		$this->load->model('M_surat_kk_baru');
		$this->load->helper('url');
		$this->load->library('upload');

	}

	public function index()
	{


		$data['data_kegiatan'] = $this->M_kegiatan->tampil_data_homepage()->result_array();
		$data['data_banner'] = $this->M_banner->tampil_data_homepage()->result_array();

		
		$this->load->view('Front/Permohonan.kk.baru.php',$data);
	}

	public function cek_permohonan()
	{
		$kode_permohonan = $this->input->post('kode_permohonan');
		$hasil = $this->M_surat_kk_baru->cek_kode_permohonan($kode_permohonan)->result();

		$status = $hasil[0]->status;
		$keterangan = $hasil[0]->keterangan;
		$file_surat = $hasil[0]->file_surat;



		if ($status == '1') {   
			$data['hasil'] = array(
				'status' => $status,
				'keterangan' => $keterangan,
				'file_surat' => $file_surat

			);
			$this->load->view('Front/Hasil_permohonan.php',$data);

		}else{
			echo $this->session->set_flashdata('msg', 'proses');
			redirect('Permohonan_kk_baru');
		}

	}

	public function add()
	{
		$nik = $this->input->post('nik');
		$hasil = $this->M_surat_kk_baru->cek_ktp($nik)->result();

		if ($hasil) {
			date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 100000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['file_pemohon']['name'])) {
        	if ($this->upload->do_upload('file_pemohon')) {
        		$gbr = $this->upload->data();
                //Compress Image
        		$config['image_library'] = 'gd2';
        		$config['source_image'] = './assets/upload/' . $gbr['file_name'];
        		$config['create_thumb'] = FALSE;
        		$config['maintain_ratio'] = FALSE;
        		$config['quality'] = '100%';
        		$config['new_image'] = './assets/upload/' . $gbr['file_name'];
        		$this->load->library('image_lib', $config);
        		$this->image_lib->resize();

        		$file = $gbr['file_name'];
        		$nik = $this->input->post('nik');
        		$kode_permohonan = $this->input->post('kode_permohonan');
        		$alasan = $this->input->post('alasan');
        		$tanggal =  date('Y-m-d h:i:s');
        		$status = '0';


        		$data = array(
        			'kode_permohonan' => $kode_permohonan,
        			'nik' => $nik,
        			'alasan' => $alasan,
        			'status' => $status,
        			'file_pemohon' => $file,
        			'tanggal' => $tanggal
        		);

        		$this->M_surat_kk_baru->input_data($data, 'tbl_permohonan_kk_baru');
        		echo $this->session->set_flashdata('msg', 'success');
        		redirect('Permohonan_kk_baru');
        	} else {
        		echo $this->session->set_flashdata('msg', 'warning');
        		redirect('Permohonan_kk_baru');
        	}
        } else {

        	redirect('Permohonan_kk_baru');
        }

    }else{
    	echo $this->session->set_flashdata('msg', 'gagal');
    	redirect('Permohonan_kk_baru');
    }
}

}
