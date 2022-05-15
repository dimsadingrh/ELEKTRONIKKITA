<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataProduk extends CI_model {
    public function get_data($produk){
        return $this->db->get($produk);
    }

    public function tampil_data(){
        return $this->db->get('produk');
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

    public function find($id)
    {
        $result = $this->db->where('id_produk', $id)
                            ->limit(1)
                            ->get('produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('pembeli');

        if($result->num_rows() > 0) {
            return $result->row();
        }else{
            return FALSE;
        }
    }

    public function update_password($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}

?>