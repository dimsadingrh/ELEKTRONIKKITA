<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_model {
    public function get_data($produk){
        return $this->db->get($produk);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table,$data,$where);
    }
}

?>