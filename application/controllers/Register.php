<?php

class Register extends CI_Controller{

    public function index()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        }else{
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $no_telp = $this->input->post('no_telp');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $role_id ='2';

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telp' => $no_telp,
                'email' => $email,
                'password' => $password,
                'role_id' => $role_id,

            );

            $this->DataProduk->insert_data($data, 'pembeli');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Berhasil Mendaftar, Silahkan Login!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('no_telp','Nomor Telepon','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}

?>