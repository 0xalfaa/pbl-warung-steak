<?php

class Dashboard_admin extends CI_Controller{

    public function index(){
        $data['judul'] = 'Dashboard Admin';
        $this->load->view('template_admin/header', $data);
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer');
    }
}
?>