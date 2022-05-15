<?php

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Silahkan Login Terlebih Dahulu!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('Auth/login/');
        }
    }

    public function detail_produk($id)
    {
        $data['detail'] = $this->DataProduk->ambil_id_produk($id);
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/detail_produk', $data);
        $this->load->view('templates_pembeli/footer');
        
    }

    public function tambah_ke_keranjang($id_produk)
    {
        $produk = $this->DataProduk->find($id_produk);

        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk,
    );
    
    $this->cart->insert($data);
    redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/detail_keranjang');
        $this->load->view('templates_pembeli/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('pembeli/dashboard/detail_keranjang/');
    }

    public function pembayaran()
    {
        $this->load->view('templates_pembeli/header');
        $this->load->view('templates_pembeli/topbar2');
        $this->load->view('pembeli/pembayaran');
        $this->load->view('templates_pembeli/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->ModelInvoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates_pembeli/header');
            $this->load->view('templates_pembeli/topbar2');
            $this->load->view('pembeli/proses_pesanan');
            $this->load->view('templates_pembeli/footer');
        }else{
            echo "Maaf, Pesanan Anda Gagal Di Proses!";
        }
    }
}

?>