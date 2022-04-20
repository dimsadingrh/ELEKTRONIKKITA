<?php

class Produk extends CI_Controller {
    public function index()
    {
        $data['produk'] = $this->DataProduk->get_data('produk')->result();
        $data['kategori'] = $this->DataProduk->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dataproduk',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahproduk()
    {
        $data['kategori'] = $this->DataProduk->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambahproduk',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_produk_aksi()
    {
        $this->_rules();
        if($this->form_validation->run() == FALSE) {
            $this->tambahproduk();
        } else {
            $kode_kategori = $this->input->post('kode_kategori');
            $merk = $this->input->post('merk');
            $nama_produk = $this->input->post('nama_produk');
            $deskripsi = $this->input->post('deskripsi');
            $warna = $this->input->post('warna');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $image = $_FILES['image']['name'];
            if ($image='') {
            } else {
                    $config['upload_path'] = './assets/upload';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('image')){
                        echo "Gambar Produk Gagal Di Upload!";
                    }else {
                        $image = $this->upload->data('file_name');
                    }
                 }

            $data = array(
                'kode_kategori' => $kode_kategori,
                'merk' => $merk,
                'nama_produk' => $nama_produk,
                'deskripsi' => $deskripsi,
                'warna' => $warna,
                'tahun_terbit' => $tahun_terbit,
                'harga' => $harga,
                'stok' => $stok,
                'image' => $image
            );

            $this->DataProduk->insert_data($data,'produk');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Produk Berhasil Ditambahkan!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/produk');
        }
    }

    public function update_produk($id){
        $where = array('id_kategori'=>$id);
        $data['produk'] = $this->db->query("SELECT * FROM produk prdk, kategori ktgr WHERE prdk.kode_kategori = ktgr.kode_kategori AND prdk.id_produk='$id'")->result();
        $data['kategori'] = $this->DataProduk->get_data('kategori')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_updateproduk',$data);
        $this->load->view('templates_admin/footer');
    }

    public function update_produk_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE)
        {
            $this->update_produk();
        }else{
            $id = $this->input->post('id_produk');
            $kode_kategori = $this->input->post('kode_kategori');
            $merk = $this->input->post('merk');
            $nama_produk = $this->input->post('nama_produk');
            $deskripsi = $this->input->post('deskripsi');
            $warna = $this->input->post('warna');
            $tahun_terbit = $this->input->post('tahun_terbit');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $image = $_FILES['image']['name'];
            if ($image) {
                    $config['upload_path'] = './assets/upload';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';

                    $this->load->library('upload', $config);

                    if($this->upload->do_upload('image')){
                        $image = $this->upload->data('file_name');
                        $this->db->set('image', $image);
                    }else{
                        echo $this->upload->display_errors();
                    }
                }

            $data = array(
                'kode_kategori' => $kode_kategori,
                'merk' => $merk,
                'nama_produk' => $nama_produk,
                'deskripsi' => $deskripsi,
                'warna' => $warna,
                'tahun_terbit' => $tahun_terbit,
                'harga' => $harga,
                'stok' => $stok,
            );

            $where = array (
                'id_produk' => $id
            );

            $this->DataProduk->update_data('produk', $data, $where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Produk Berhasil Diupdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('admin/produk');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_kategori','Kode Kategori', 'required');
        $this->form_validation->set_rules('merk','Merk', 'required');
        $this->form_validation->set_rules('nama_produk','Nama Produk', 'required');
        $this->form_validation->set_rules('deskripsi','Deskripsi', 'required');
        $this->form_validation->set_rules('warna','Warna', 'required');
        $this->form_validation->set_rules('tahun_terbit','Tahun Terbit', 'required');
        $this->form_validation->set_rules('harga','Harga', 'required');
        $this->form_validation->set_rules('stok','Stok', 'required');
    }

    public function detail_produk($id)
    {
        $data['detail'] = $this->DataProduk->ambil_id_produk($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detailproduk',$data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_produk($id)
    {
        $where = array('id_produk' => $id);
        $this->DataProduk->delete_data($where, 'produk');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Produk Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('admin/produk');
    }

}

?>