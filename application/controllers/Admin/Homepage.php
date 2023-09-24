<?php defined('BASEPATH') or exit('No direct script access allowed');

class Homepage  extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->model('M_login');
        $this->load->model('M_kegiatan');
        $this->load->model('M_surat_kk_baru');
        $this->load->model('M_surat_kk_perubahan');
        $this->load->model('M_warga');


        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('Login');
            redirect($url);
        }
    }

    public function index()
    {

        $data['jumlah_kegiatan'] = $this->M_kegiatan->jumlah_data_kegiatan()->result();
        $data['jumlah_kk_baru'] = $this->M_surat_kk_baru->jumlah_data_kk_baru()->result();
        $data['jumlah_kk_perubahan'] = $this->M_surat_kk_perubahan->jumlah_data_kk_perubahan()->result();
        $data['jumlah_warga'] = $this->M_warga->jumlah_data_warga()->result();
        $this->load->view('Admin/Homepage.php',$data);
    }
}
