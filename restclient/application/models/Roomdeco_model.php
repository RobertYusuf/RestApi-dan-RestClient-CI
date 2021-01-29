<?php
use GuzzleHttp\Client;

class Roomdeco_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/uas_rest_api/api/roomdeco',
            'auth' => ['admin','1234']
        ]);
    }

    public function getAllRoomdeco()
    {
        // return $this->db->get('tb_mhs')->result_array();

        $response = $this->_client->request('GET', 'roomdeco',[
            'query' => [
                'keytoken' =>'key123',
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahDataRoomdeco()
    {
        $data = [
            "kategori" => $this->input->post('kategori', true),
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            'keytoken' =>'key123',
        ];

        // $this->db->insert('tb_mhs', $data);
        $response = $this->_client->request('POST', 'roomdeco',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataRoomdeco($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('tb_mhs', ['nim' => $id]);
        $response = $this->_client->request('DELETE', 'roomdeco',[
            'form_params' => [
                'keytoken' =>'key123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
    }

    public function getRoomdecoById($id)
    {

        $response = $this->_client->request('GET', 'roomdeco',[
            'query' => [
                'keytoken' =>'key123',
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahDataRoomdeco()
    {
        $data = [
            "id" => $this->input->post('id', true),
            "kategori" => $this->input->post('kategori', true),
            "nama" => $this->input->post('nama', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $this->input->post('gambar', true),
            'keytoken' =>'key123',
        ];

        // $this->db->insert('tb_mhs', $data);
        $response = $this->_client->request('PUT', 'roomdeco',[
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;

    }

}
