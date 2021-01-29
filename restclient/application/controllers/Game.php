<?php
class Game extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Peralatan Game';
        $data['nama'] = $nama;
        // $this->load->view('templates/header', $data);
        $this->load->view('game/index', $data);
        $this->load->view('templates/footer');
    }
}
