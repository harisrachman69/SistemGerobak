<?php

class Model_kategori extends CI_Model
{
    public function data_gerobakbakso()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'Gerobak Bakso'));
    }

    public function data_gerobaksoto()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'Gerobak Soto'));
    }

    public function data_gerobaksate()
    {
        return $this->db->get_where("tbl_barang",array('kategori' => 'Gerobak Sate'));
    }

    // public function data_teko()
    // {
    //     return $this->db->get_where("tbl_barang",array('kategori' => 'teko'));
    // }

    // public function data_kursi()
    // {
    //     return $this->db->get_where("tbl_barang",array('kategori' => 'kursi'));
    // }
}
?>