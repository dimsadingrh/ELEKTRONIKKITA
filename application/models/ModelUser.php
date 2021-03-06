<?php

class ModelUser extends CI_model {

    public function tampil_data($where = null){
        return $this->db->get_where('pembeli', $where);
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

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('pembeli', $where);
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('pembeli');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
?>