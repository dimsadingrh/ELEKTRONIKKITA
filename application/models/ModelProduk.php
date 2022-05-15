<?php

class ModelProduk extends CI_Model{
    public function tampil_data(){
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

}