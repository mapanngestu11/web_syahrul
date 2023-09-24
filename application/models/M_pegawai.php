<?php
class M_pegawai extends CI_Model
{

    private $_table = "tbl_pegawai";

    function tampil_data()
    {
        return $this->db->get('tbl_pegawai');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_data($id_pegawai)
    {
        $hsl = $this->db->query("DELETE FROM tbl_pegawai WHERE id_pegawai='$id_pegawai'");
        return $hsl;
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function jumlah_data()
    {
        $this->db->select('count(tbl_pegawai.id_pegawai) as jumlah');
        $hsl = $this->db->get('tbl_pegawai');
        return $hsl;
    }
    function tampil_data_homepage ()
    {
        $this->db->select('*');
        $this->db->order_by("id_pegawai", "DESC");
        $this->db->limit('');
        $hsl = $this->db->get('tbl_pegawai');
        return $hsl;
    }

}
