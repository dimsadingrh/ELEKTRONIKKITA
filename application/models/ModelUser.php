<?php

class ModelUser extends CI_model {

    public function tampil_data($where = null){
        return $this->db->get('pembeli', $where);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table, $data, $where){
        $this->db->update($table,$data,$where);
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