<?php

class Gamingsetup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gamingsetup_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Peralatan Komputer';
        $data['gamingsetup'] = $this->Gamingsetup_model->getAllGamingsetup();
        $this->load->view('templates/header', $data);
        $this->load->view('gamingsetup/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
      $data['judul'] = 'Form Tambah Data Peralatan Komputer';

      $this->form_validation->set_rules('kategori', 'Kategori', 'required');
      if ($this->form_validation->run() == false) {
          $this->load->view('templates/header', $data);
          $this->load->view('gamingsetup/tambah');
          $this->load->view('templates/footer');
    }else {
        $this->Gamingsetup_model->tambahDataGamingsetup();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('gamingsetup');
    }
   }

    public function hapus($id)
    {
        $this->Gamingsetup_model->hapusDataGamingsetup($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('gamingsetup');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Rumah Sakit';
        $data['gamingsetup'] = $this->Gamingsetup_model->getGamingsetupById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('gamingsetup/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Edit Data Peralatan Komputer';
        $data['gamingsetup'] = $this->Gamingsetup_model->getGamingsetupById($id);
        $data['kategori'] = ['Motherboard', 'Processor', 'GPU', 'RAM', 'Memori'];

        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('gamingsetup/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gamingsetup_model->ubahDataGamingsetup();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('gamingsetup');
        }
    }
}
