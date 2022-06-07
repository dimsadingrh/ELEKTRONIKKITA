<?php

class ModelProduk extends CI_Model{
    public function tampil_data(){
        return $this->db->get('produk');
    }

    public function getKategori($where)
    {
        return $this->db->get('produk');
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)
                            ->limit(1)
                            ->get('produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('produk');
        return $this->db->get()->row($field);
    }

    public function getLimitBarang()
    {
        $this->db->limit(5);
        return $this->db->get('produk');
    }

}