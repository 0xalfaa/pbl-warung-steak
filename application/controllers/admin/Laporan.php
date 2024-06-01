<?php

class Laporan extends CI_Controller {

    public function index() {

        $data['laporan'] = $this->Model_laporan->tampil_data();
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/laporan', $data);
        $this->load->view('template_admin/footer');

    
    }
}