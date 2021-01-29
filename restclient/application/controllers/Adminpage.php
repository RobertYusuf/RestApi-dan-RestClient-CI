<?php
class Adminpage extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Admin Page';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('adminpage/index', $data);
        $this->load->view('templates/footer');
    }
}
