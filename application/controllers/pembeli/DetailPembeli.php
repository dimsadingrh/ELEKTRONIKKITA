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

    public function ubahprofil()
    {   
        $this->load->model('ModelUser');

        $user = $this->ModelUser->tampil_data(['username' => $this->session-> userdata('username')])->row_array();

        foreach ($user as $a) {
            $data = [
                'judul' => "Profil Saya",
                'username' => $user['username'],
                'nama' => $user['nama'],
                'alamat' => $user['alamat'],
                'jenis_kelamin' => $user['jenis_kelamin'],
                'no_telp' => $user['no_telp'],
                'email' => $user['email'],
            ];
        }

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak boleh kosong!']);
        $this->form_validation->set_rules('alamat','Alamat Lengkap','required|trim',['required' => 'Alamat tidak boleh Kosong']);
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required|trim',['required' => 'Jenis Kelamin tidak boleh Kosong']);
        $this->form_validation->set_rules('no_telp','No Telepon','required|trim',['required' => 'No Telepon tidak boleh Kosong']);
        $this->form_validation->set_rules('email','Email','required|trim',['required' => 'Email tidak boleh Kosong']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates_pembeli/header', $data);
            $this->load->view('templates_pembeli/topbar2');
            $this->load->view('pembeli/ubah_profil', $data);
            $this->load->view('templates_pembeli/footer', $data);
        } else {
            $nama = $this->input->post('nama', true);
            $username = $this->input->post('username', true);
            $alamat = $this->input->post('alamat', true);
            $jenis_kelamin = $this->input->post('jenis_kelamin', true);
            $no_telp = $this->input->post('no_telp', true);
            $email = $this->input->post('email', true);

            $this->db->set('nama', $nama);
            $this->db->set('alamat', $alamat);
            $this->db->set('jenis_kelamin', $jenis_kelamin);
            $this->db->set('no_telp', $no_telp);
            $this->db->set('email', $email);
            $this->db->where('username', $username);
            $this->db->update('pembeli');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('pembeli/DetailPembeli/detail_pembeli');
        }
    }
}