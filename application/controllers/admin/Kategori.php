<?php

class Kategori extends CI_Controller{

    public function index()
    {
        $data['kategori'] = $this->DataProduk->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/datakategori',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kategori()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambahkategori');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kategori_aksi()
    {
        $this-> _rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_kategori();
        } else {
            $kode_kategori = $this->input->post('kode_kategori');
            $nama_kategori = $this->input->post('nama_kategori');

            $data = array(
                'kode_kategori' => $kode_kategori,
                'nama_kategori' => $nama_kategori
            );

            $this->DataProduk->insert_data($data,'kategori');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kategori Berhasil Ditambahkan!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/Kategori');
        }
    }

    public function update_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $data['kategori'] = $this->db->query("SELECT * FROM kategori WHERE id_kategori = '$id'")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_updatekategori',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_kategori_aksi()
    {
        $this-> _rules();

        if($this->form_validation->run() == FALSE)
        {
            $this->update_kategori();
        }else{
            $id = $this->input->post('id_kategori');
            $kode_kategori = $this->input->post('kode_kategori');
            $nama_kategori = $this->input->post('nama_kategori');

            $data = array(
                'kode_kategori' => $kode_kategori,
                'nama_kategori' => $nama_kategori
            );

            $where = array(
                'id_kategori' => $id
            );

            $this->DataProduk->update_data('kategori', $data, $where);

            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kategori Berhasil Diupdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/Kategori');

        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_kategori', 'Kode Kategori', 'required');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
    }

    public function delete_kategori($id)
    {
        $where = array('id_kategori' => $id);
        $this->DataProduk->delete_data($where, 'kategori');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Kategori Berhasil Dihapus!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/Kategori');
    }
}
?>