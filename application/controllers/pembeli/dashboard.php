<?php

class Dashboard extends CI_Controller{

    public function index()
    {
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/footer');
        $this->load->view('pembeli/dashboard');

    }
}

?>