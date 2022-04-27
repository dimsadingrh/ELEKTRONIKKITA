<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['produk'] = $this->DataProduk->get_data('produk')->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar');
        $this->load->view('templates_pembeli/footer');
        $this->load->view('pembeli/dashboard', $data);

    }

    public function detail_produk($id)
    {
        $data['detail'] = $this->DataProduk->ambil_id_produk($id);
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/detail_produk', $data);
        $this->load->view('templates_pembeli/footer');
        
    }
}

?>