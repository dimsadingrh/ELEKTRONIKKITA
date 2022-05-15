<?php

class ModelKategori extends CI_Model {

    public function data_gadget(){
        return $this->db->get_where("produk",array('kode_kategori' => 'gdt'));
    }

    public function data_peralatan_rumah_tangga(){
        return $this->db->get_where("produk",array('kode_kategori' => 'prm'));
    }

    public function data_peralatan_jaringan(){
        return $this->db->get_where("produk",array('kode_kategori' => 'prj'));
    }

    public function data_perkakas(){
        return $this->db->get_where("produk",array('kode_kategori' => 'pks'));
    }

}