<?php

class Kategori extends CI_Controller{

    public function gadget()
    {
        $data['gadget'] = $this->ModelKategori->data_gadget()->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar');
        $this->load->view('pembeli/kategori/gadget', $data);
        $this->load->view('templates_pembeli/footer');
        
    }

    public function peralatan_rumah_tangga()
    {
        $data['peralatan_rumah_tangga'] = $this->ModelKategori->data_peralatan_rumah_tangga()->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar');
        $this->load->view('pembeli/kategori/peralatan_rumah_tangga', $data);
        $this->load->view('templates_pembeli/footer');
        
    }

    public function peralatan_jaringan()
    {
        $data['peralatan_jaringan'] = $this->ModelKategori->data_peralatan_jaringan()->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar');
        $this->load->view('pembeli/kategori/peralatan_jaringan', $data);
        $this->load->view('templates_pembeli/footer');
        
    }

    public function perkakas()
    {
        $data['perkakas'] = $this->ModelKategori->data_perkakas()->result();
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar');
        $this->load->view('pembeli/kategori/perkakas', $data);
        $this->load->view('templates_pembeli/footer');
        
    }

}

?>