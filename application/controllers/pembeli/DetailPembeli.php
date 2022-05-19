<?php

class DetailPembeli extends CI_Controller{

    public function detail_pembeli()
    {
        $this->load->model('ModelUser');

        $user = $this->ModelUser->tampil_data(['username' => $this->session-> userdata('username')])->row_array();

        foreach($user as $a) {
            $data = [
                'judul' => "Profil Saya",
                'user' => $user['username'],
                'nama' => $user['nama'],
                'alamat' => $user['alamat'],
                'jenis_kelamin' => $user['jenis_kelamin'],
                'no_telp' => $user['no_telp'],
                'email' => $user['email'],
            ];
        }

        //$data['pembeli'] = $this->ModelUser->tampil_data($id_pembeli)//
        $this->load->view('templates_pembeli/header', $data);
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/detail_pembeli', $data);
        $this->load->view('templates_pembeli/footer', $data);
    }

    public function edit_pembeli()
    {

    }
}