<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $data['produk'] = $this->DataProduk->get_data('produk')->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/footer');
        $this->load->view('pembeli/dashboard', $data);

    }
}

?>