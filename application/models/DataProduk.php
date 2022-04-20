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

    public function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_produk($id)
    {
        $hasil = $this->db->where('id_produk', $id)->get('produk');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }
}

?>