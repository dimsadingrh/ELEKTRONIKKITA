<?php
define('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_model {

    public function get_data($pembeli){
        return $this->db->get($pembeli);
    }

    public function tampil_data($where = null){
        return $this->db->get('pembeli', $where);
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

    public function ambil_id_pembeli($id_pembeli)
    {
        $hasil = $this->db->where('id_pembeli', $id_pembeli)->get('pembeli');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }
}
?>