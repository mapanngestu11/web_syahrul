<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai  extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
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
        $data['pegawai'] = $this->M_pegawai->tampil_data();
        $this->load->view('Admin/List.pegawai.php', $data);
    }

    public function delete($id_pegawai)
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $this->M_pegawai->delete_data($id_pegawai);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('Admin/Pegawai');
    }

    public function add()
    {
       date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 10000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 500;
                $config['height'] = 450;
                $config['new_image'] = './assets/upload/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $foto = $gbr['file_name'];
                $nip = $this->input->post('nip');
                $nama = $this->input->post('nama');
                $jabatan =  $this->input->post('jabatan');

                $data = array(

                    'nip' => $nip,
                    'nama' => $nama,
                    'jabatan' => $jabatan,
                    'foto' => $foto


                );

                $this->M_pegawai->input_data($data, 'tbl_pegawai');
                echo $this->session->set_flashdata('msg', 'success');
                redirect('Admin/Pegawai');
            } else {
                echo $this->session->set_flashdata('msg', 'warning');
                redirect('Admin/Pegawai');
            }
        } else {
            redirect('Admin/Pegawai');
        }
    }

    public function update()
    {
        date_default_timezone_set("Asia/Jakarta");
        $config['upload_path'] = './assets/upload/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['max_size']  = 100000; //Batas Ukuran

        $this->upload->initialize($config);
        if (!empty($_FILES['gambar']['name'])) {
            if ($this->upload->do_upload('gambar')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 500;
                $config['height'] = 450;
                $config['new_image'] = './assets/upload/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $id_pegawai = $this->input->post('id_pegawai');
                $nama_pegawai = $this->input->post('nama_pegawai');
                $isi_pegawai = $this->input->post('isi_pegawai');
                $status = $this->input->post('status');
                $nama_lengkap = $this->input->post('nama_lengkap');
                $tanggal =  date('Y-m-d h:i:s');

                $data = array(

                    'nama_pegawai' => $nama_pegawai,
                    'isi_pegawai' => $isi_pegawai,
                    'gambar' => $gambar,
                    'status' => $status,
                    'tanggal' => $tanggal,
                    'nama_lengkap' => $nama_lengkap

                );

                $where = array(
                    'id_pegawai' => $id_pegawai
                );

                $this->M_pegawai->update_data($where,$data,'tbl_pegawai');
                echo $this->session->set_flashdata('msg', 'success_update');
                redirect('Admin/Kegiatan');
            } else {
                echo $this->session->set_flashdata('msg', 'warning_update');
                redirect('Admin/Kegiatan');
            }

        } else {

          $id_pegawai = $this->input->post('id_pegawai');
          $nama_pegawai = $this->input->post('nama_pegawai');
          $isi_pegawai = $this->input->post('isi_pegawai');
          $status = $this->input->post('status');
          $nama_lengkap = $this->input->post('nama_lengkap');
          $tanggal =  date('Y-m-d h:i:s');


          $data = array(

             'nama_pegawai' => $nama_pegawai,
             'isi_pegawai' => $isi_pegawai,
             'status' => $status,
             'tanggal' => $tanggal,
             'nama_lengkap' => $nama_lengkap

         );



          $where = array(
            'id_pegawai' => $id_pegawai
        );

          $cek = $this->M_pegawai->update_data($where,$data,'tbl_pegawai');
          echo $this->session->set_flashdata('msg', 'success_update');
          redirect('Admin/Kegiatan');
      }
  }
}
