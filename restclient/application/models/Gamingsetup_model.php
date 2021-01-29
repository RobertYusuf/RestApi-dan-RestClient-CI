<?php
use GuzzleHttp\Client;

class Gamingsetup_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/uas_rest_apike2/api/gamingsetup',
            'auth' => ['admin','1234']
        ]);
    }

    public function getAllGamingsetup()
    {
        // return $this->db->get('tb_mhs')->result_array();

        $response = $this->_client->request('GET', 'gamingsetup',[
            'query' => [
                'keytokengaming' =>'gaming123',
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataGamingsetup()
    {
        $data = [
            "kategori" => $this->input->post('kategori', true),
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            "keytokengaming" => 'gaming123'
        ];

        // $this->db->insert('tb_mhs', $data);
        $response = $this->_client->request('POST', 'gamingsetup',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataGamingsetup($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('tb_mhs', ['nim' => $id]);
        $response = $this->_client->request('DELETE', 'gamingsetup',[
            'form_params' => [
                'keytokengaming' =>'gaming123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
    }

    public function getGamingsetupById($id)
    {

        $response = $this->_client->request('GET', 'gamingsetup',[
            'query' => [
                'keytokengaming' =>'gaming123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataGamingsetup()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "kategori" => $this->input->post('kategori', true),
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            "keytokengaming" => 'gaming123'
        ];

        // $this->db->insert('tb_mhs', $data);
        $response = $this->_client->request('PUT', 'gamingsetup',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;

    }

    // public function cariDataRoomdeco()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('tgl', $keyword);
    //     $this->db->or_like('provinsi', $keyword);
    //     $this->db->or_like('jumlah_positif', $keyword);
    //     $this->db->or_like('jumlah_sehat', $keyword);
    //     $this->db->or_like('jumlah_meninggal', $keyword);
    //     return $this->db->get('tb_sister')->result_array();
    // }
}
