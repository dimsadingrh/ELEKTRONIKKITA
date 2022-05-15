<?php

class DetailPembeli extends CI_Controller{

    public function detail_pembeli()
    {
        $this->load->model('ModelUser');
        $data['pembeli'] = $this->ModelUser->tampil_data($id_pembeli);
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/detail_pembeli', $data);
        $this->load->view('templates_pembeli/footer');
    }
}