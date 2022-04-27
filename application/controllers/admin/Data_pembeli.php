<?php

class Data_pembeli extends CI_Controller{

    public function index()
    {
        $data['pembeli'] = $this->DataProduk->get_data('pembeli')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/datapembeli',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_pembeli()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambahpembeli');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_pembeli_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_pembeli();
        }else{
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $alamat = $this->input->post('alamat');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $no_telp = $this->input->post('no_telp');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $data = array(
                'nama' => $nama,
                'username' => $username,
                'alamat' => $alamat,
                'jenis_kelamin' => $jenis_kelamin,
                'no_telp' => $no_telp,
                'email' => $email,
                'password' => $password
            );

            $this->DataProduk->insert_data($data, 'pembeli');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Pembeli Berhasil Ditambahkan!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/data_pembeli');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('no_telp','Nomor Telp','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
    }
}
 
?>