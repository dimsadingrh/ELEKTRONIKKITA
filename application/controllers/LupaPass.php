<?php

class LupaPass extends CI_Controller{

    public function index()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('lupapass_form');
        $this->load->view('templates_admin/footer');
    }
}

?>