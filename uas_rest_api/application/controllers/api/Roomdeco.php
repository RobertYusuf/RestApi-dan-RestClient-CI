<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Roomdeco extends REST_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Roomdeco_model','roomdeco');

       $this->methods['index_get']['limit'] = 200;
    }
    public function index_get()
    {

      $id = $this->get('id');
      if ($id === null) {
        $roomdeco = $this->roomdeco->getRoomdeco();
      }else {
        $roomdeco = $this->roomdeco->getRoomdeco($id);
      }

     if ($roomdeco) {
       $this->response([
           // 'status' => true,
           'data' => $roomdeco
       ], REST_Controller::HTTP_OK);
     }else {
       $this->response([
           'status' => FALSE,
           'message' => 'data not found'
       ], REST_Controller::HTTP_NOT_FOUND);
     }
    }

    public function index_delete()
    {

      $id = $this-> delete('id');

      if ($id === null) {
        $this->response([
            'status' => FALSE,
            'message' => 'Please Provide an ID!'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }else {
        if ($this->roomdeco->deleteRoomdeco($id) > 0)
        {
          //berhasil
          $this->response([
              'status' => true,
              'id' => $id,
              'message' => 'Data Deleted'
          ], REST_Controller::HTTP_NO_CONTENT);
        }else {
          $this->response([
              'status' => FALSE,
              'message' => 'ID not Found!'
          ], REST_Controller::HTTP_BAD_REQUEST);
        }
      }
    }

    public function index_post()
    //isi table
    {
      $data = [
        'kategori' => $this->post('kategori'),
        'nama' => $this->post('nama'),
        'harga' => $this->post('harga'),
        'gambar' => $this->post('gambar'),
      ];

      if ($this->roomdeco->createRoomdeco($data)>0) {
        $this->response([
            'status' => true,

            'message' => 'New Data Has been Created'
        ], REST_Controller::HTTP_CREATED);
      }else {
        $this->response([
            'status' => FALSE,
            'message' => 'Failed to Create New Data'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }

    public function index_put()
    {
      $id =  $this->put('id');
      $data = [
        'kategori' => $this->put('kategori'),
        'nama' => $this->put('nama'),
        'harga' => $this->put('harga'),
        'gambar' => $this->put('gambar'),
      ];


      if ($this->roomdeco->updateRoomdeco($data, $id) > 0) {
        $this->response([
          'status' => true,
          'message' => 'New Data Has been Updated'
      ], REST_Controller::HTTP_CREATED);
      }else {
        $this->response([
            'status' => FALSE,
            'message' => 'Failed to Update New Data'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }


}
