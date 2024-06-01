<?php

class Dashboard extends CI_Controller {

    public function index() {
    $data['judul'] = 'WARUNG STEAK';
    $data['menu'] = $this->Model_menu->getAllMenu()->result();
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer');
    }

    public function tambah_ke_pesanan($id) {

        $menu = $this->Model_menu->find($id);

        $data = array(
            'id'      => $menu->ID_MENU,
            'qty'     => 1,
            'price'   => $menu->HARGA,
            'name'    => $menu->NAMA_MENU
        );
    
    $this->cart->insert($data);
    redirect('dashboard');
    }

    public function detail_pesanan(){

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('pesanan');
    $this->load->view('template/footer');
    }

    public function hapus_pesanan(){
        
        $this->cart->destroy();
        redirect('dashboard');
    }

    public function pembayaran(){

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('template/footer');
    }

    public function proses_pesanan(){
        $is_processed = $this->Model_laporan->index();
        if($is_processed) {

            $this->cart->destroy();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('template/footer');
        } else {
            echo "Gagal melakukan proses pesanan!";
        }

    }
}
?>