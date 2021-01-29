<?php

class Roomdeco extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Roomdeco_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Data Aksesoris Dekorasi';
        $data['roomdeco'] = $this->Roomdeco_model->getAllRoomdeco();
        if ($this->input->post('keyword')) {
            $data['roomdeco'] = $this->Roomdeco_model->cariDataRoomdeco();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('roomdeco/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Aksesors Dekorasi';

        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('roomdeco/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Roomdeco_model->tambahDataRoomdeco();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('roomdeco');
        }
    }

    public function hapus($id)
    {
        $this->Roomdeco_model->hapusDataRoomdeco($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('roomdeco');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Aksesoris Dekorasi';
        $data['roomdeco'] = $this->Roomdeco_model->getRoomdecoById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('roomdeco/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Edit Data Aksesoris Dekorasi';
        $data['roomdeco'] = $this->Roomdeco_model->getRoomdecoById($id);
        $data['kategori'] = ['Cermin', 'Gorden', 'Lampu', 'Karpet'];

        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('roomdeco/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Roomdeco_model->ubahDataRoomdeco();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('roomdeco');
        }
    }
}
