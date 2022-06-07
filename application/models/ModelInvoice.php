<?php

class ModelInvoice extends CI_Model {
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $ekspedisi = $this->input->post('ekspedisi');
        $via = $this->input->post('via');

        $invoice = array (
            'nama'     => $nama,
            'alamat' => $alamat,
            'ekspedisi' => $ekspedisi,
            'via' => $via,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
        );

        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice' => $id_invoice,
                'id_produk' => $item['id'],
                'nama_produk' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('pesanan', $data);
        }

        return TRUE;
    }

    Public function tampil_data()
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('invoice');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('pesanan');
        return $this->db->get()->row($field);
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}

?>