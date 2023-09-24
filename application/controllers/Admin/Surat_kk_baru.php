<?php defined('BASEPATH') or exit('No direct script access allowed');

class Surat_kk_baru  extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_surat_kk_baru');
        $this->load->model('M_warga');
        $this->load->helper('url');
        $this->load->library('upload');

        if ($this->session->userdata('masuk') != TRUE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning" role="alert">Login Terlebih Dahulu ! </div>');
            $url = base_url('login');
            redirect($url);
        }
    }


    public function index()
    {
        $data['surat'] = $this->M_surat_kk_baru->tampil_data();
        $this->load->view('Admin/List.surat.kk.baru.php', $data);
    }


    public function laporan_surat()
    {
        $data['surat'] = $this->M_surat_kk_baru->tampil_data();
        $this->load->view('Admin/List.laporan.kk.baru.php', $data);
    }

    public function cetak_laporan ()
    {
       $tanggal = $this->input->post('tanggal');
       $bulan = date('m', strtotime($tanggal));

       $data['keterangan'] = 'Permohonan Surat KK Baru';
       $data['laporan'] = $this->M_surat_kk_baru->cetak_laporan($bulan);

       $this->load->view('Admin/Cetak_laporan.php',$data);

   }




   public function cek_warga()
   {
    $data = (object)array();
    $nik = $this->input->post('input_check_nik');
        // $nis = '2022001';
    $cek_nik = $this->M_warga->cek_warga($nik);

    $data_nik = json_encode($cek_nik);

    $decode_nik = json_decode($data_nik);

    if ($decode_nik != NULL) {

        $hasil = "Data Ada";
        $data->result  = $decode_nik;
        $data->success         = TRUE;
        $data->message        = "True !";

    }else{

        $hasil = "Data Kosong";
        $data->result = FALSE ;
        $data->status = FALSE;
    }

    echo json_encode($data);

}

public function delete($id_kk_baru)
{
    $id_kk_baru = $this->input->post('id_kk_baru');
    $this->M_surat_kk_baru->delete_data($id_kk_baru);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('Admin/Surat_kk_baru');
}

public function add()
{

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
                $nama_user = $this->input->post('nama_user');
                $tanggal =  date('Y-m-d h:i:s');
                $status = '0';


                $data = array(
                 'kode_permohonan' => $kode_permohonan,
                 'nik' => $nik,
                 'alasan' => $alasan,
                 'status' => $status,
                 'file_pemohon' => $file,
                 'nama_user' => $nama_user,
                 'tanggal' => $tanggal
             );

                $this->M_surat_kk_baru->input_data($data, 'tbl_permohonan_kk_baru');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/Surat_kk_baru');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Surat_kk_baru');
            }
        } else {

            redirect('Admin/Surat_kk_baru');
        }
    }

    public function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 100000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['file_surat']['name'])) {
            if ($this->upload->do_upload('file_surat')) {
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
                $id_kk_baru = $this->input->post('id_kk_baru');
                $status = $this->input->post('status');
                $alasan = $this->input->post('alasan');
                $keterangan = $this->input->post('keterangan');
                $nama_user = $this->input->post('nama_user');
                $tanggal =  date('Y-m-d h:i:s');

                $data = array(

                    'status' => $status,
                    'alasan' => $alasan,
                    'keterangan' => $keterangan,
                    'file_pemohon' => $file,
                    'nama_user' => $nama_user,
                    'tanggal' => $tanggal


                );


                $where = array(
                    'id_kk_baru' => $id_kk_baru
                );

                $this->M_surat_kk_baru->update_data($where,$data,'tbl_permohonan_kk_baru');
                echo $this->session->set_flashdata('msg', 'success_update');
                redirect('Admin/Surat_kk_baru');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Surat_kk_baru');
            }

        } else {

            $id_kk_baru = $this->input->post('id_kk_baru');
            $status = $this->input->post('status');
            $alasan = $this->input->post('alasan');
            $keterangan = $this->input->post('keterangan');
            $nama_user = $this->input->post('nama_user');
            $tanggal =  date('Y-m-d h:i:s');
            $data = array(

                'status' => $status,
                'alasan' => $alasan,
                'keterangan' => $keterangan,
                'nama_user' => $nama_user,
                'tanggal' => $tanggal
            );

            

            $where = array(
                'id_kk_baru' => $id_kk_baru
            );

            $this->M_surat_kk_baru->update_data($where,$data,'tbl_permohonan_kk_baru');
            echo $this->session->set_flashdata('msg', 'success_update');
            redirect('Admin/Surat_kk_baru');
        }

    }
}
