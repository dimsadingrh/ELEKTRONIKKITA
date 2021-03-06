<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Silahkan Login Terlebih Dahulu!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('Auth/login/');
        }
    }

    public function index()
    {
        $this->load->model('ModelUser');
        $this->load->model('ModelProduk');
        $data['pembeli'] = $this->ModelUser->getUserLimit()->result_array();
        $data['produk'] = $this->ModelProduk->getLimitBarang()->result_array();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('templates_admin/footer');
        $this->load->view('admin/dashboard', $data);
        
    }

}

?>