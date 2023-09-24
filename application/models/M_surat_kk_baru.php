<?php
class M_surat_kk_baru extends CI_Model
{

    private $_table = "tbl_permohonan_kk_baru";

    function tampil_data()
    {
        $this->db->select('
            a.id_kk_baru,
            a.nik,
            b.nama_lengkap,
            a.status,
            a.kode_permohonan,
            a.alasan,
            a.file_pemohon,
            a.keterangan
            ');
        $this->db->from('tbl_permohonan_kk_baru as a');
        $this->db->join('tbl_warga as b', 'b.nik = a.nik','left');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function jumlah_data_kk_baru()
    {
        $this->db->select('count(tbl_permohonan_kk_baru.id_kk_baru) as jumlah');
        $hsl = $this->db->get('tbl_permohonan_kk_baru');
        return $hsl;
    }
    function delete_data($id_kk_baru)
    {
        $hsl = $this->db->query("DELETE FROM tbl_permohonan_kk_baru WHERE id_kk_baru='$id_kk_baru'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_permohonan_kk_baru.id_tkp) as jumlah');
        $hsl = $this->db->get('tbl_permohonan_kk_baru');
        return $hsl;
    }
    function cek_kode_permohonan($kode_permohonan)
    {
       $this->db->select('
        a.id_kk_baru,
        a.nik,
        b.nama_lengkap,
        a.status,
        a.kode_permohonan,
        a.alasan,
        a.file_pemohon,
        a.keterangan,
        a.file_surat');
       $this->db->from('tbl_permohonan_kk_baru as a');
       $this->db->join('tbl_warga as b', 'b.nik = a.nik','left');
       $this->db->where('kode_permohonan',$kode_permohonan);
       $query = $this->db->get();
       return $query;
   }
   function cek_ktp($nik)
   {
    $this->db->select('*');
    $this->db->from('tbl_warga');
    $this->db->where('status','1');
    $this->db->where('nik',$nik);
    $query = $this->db->get();
    return $query;

}
function cetak_laporan($bulan)
{
   $this->db->select('
    a.id_kk_baru,
    a.nik,
    b.nama_lengkap,
    a.status,
    a.kode_permohonan,
    a.alasan,
    a.file_pemohon,
    a.keterangan,
    a.file_surat,
    a.tanggal');
   $this->db->from('tbl_permohonan_kk_baru as a');
   $this->db->join('tbl_warga as b', 'b.nik = a.nik','left');
   $this->db->where('MONTH(a.tanggal)',$bulan);
   $query = $this->db->get()->result();
   return $query;
}
}
