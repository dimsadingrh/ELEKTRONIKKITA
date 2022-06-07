<?php

class Laporan extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('Auth/login');
        }
    }

    public function cetak_laporan_produk()
    {
        $this->load->model('ModelProduk');
        $data['produk'] = $this->ModelProduk->tampil_data()->result_array();
        $data['kategori'] = $this->ModelProduk->getKategori(['kategori' => $this->session->userdata('kategori')])->result_array();

        $this->load->view('admin/export/laporan_print_produk',$data);
    }

    public function export_excel()
    {
        $this->load->model('ModelProduk');
        $data=array('title'=>'Laporan Produk',
        'produk'=>$this->ModelProduk->tampil_data()->result_array());
        $this->load->view('admin/export/laporan_excel_produk',$data);
    }

    public function cetak_laporan_pembeli()
    {
        $this->load->model('ModelUser');
        $data['judul'] = 'Data Pembeli';
        $data['pembeli'] = $this->ModelUser->tampil_data(['username' => $this->session->userdata('username')])->row_array();
        $this->db->where('role_id',2);
        $data['pembeli'] = $this->db->get('pembeli')->result_array();

        $this->load->view('admin/export/laporan_print_pembeli',$data);
    }

}