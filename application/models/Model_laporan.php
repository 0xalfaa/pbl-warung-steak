<?php
 
 class Model_laporan extends CI_Model {

    public function index(){

        date_default_timezone_set('Asia/Banjarmasin');
        $nama = $this->input->post('nama');
        $nama = $this->input->post('no_meja');
    }
 }
?>