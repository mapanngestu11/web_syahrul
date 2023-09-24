<?php
class M_surat_pindah extends CI_Model
{

    private $_table = "tbl_permohonan_surat_pindah";

    function tampil_data()
    {
        $this->db->select('
            a.id_surat_pindah,
            a.nik,
            b.nama_lengkap,
            a.status,
            a.kode_permohonan,
            a.alasan,
            a.file_pemohon,
            a.keterangan
            ');
        $this->db->from('tbl_permohonan_surat_pindah as a');
        $this->db->join('tbl_warga as b', 'b.nik = a.nik','left');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_surat_pindah)
    {
        $hsl = $this->db->query("DELETE FROM tbl_permohonan_surat_pindah WHERE id_surat_pindah='$id_surat_pindah'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_permohonan_surat_pindah.id_tkp) as jumlah');
        $hsl = $this->db->get('tbl_permohonan_surat_pindah');
        return $hsl;
    }
    function cek_kode_permohonan($kode_permohonan)
    {
     $this->db->select('
        a.id_surat_pindah,
        a.nik,
        b.nama_lengkap,
        a.status,
        a.kode_permohonan,
        a.alasan,
        a.file_pemohon,
        a.keterangan,
        a.file_surat');
     $this->db->from('tbl_permohonan_surat_pindah as a');
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
    a.id_surat_pindah,
    a.nik,
    b.nama_lengkap,
    a.status,
    a.kode_permohonan,
    a.alasan,
    a.file_pemohon,
    a.keterangan,
    a.file_surat,
    a.tanggal');
 $this->db->from('tbl_permohonan_surat_pindah as a');
 $this->db->join('tbl_warga as b', 'b.nik = a.nik','left');
 $this->db->where('MONTH(a.tanggal)',$bulan);
 $query = $this->db->get()->result();
 return $query;
}
}
