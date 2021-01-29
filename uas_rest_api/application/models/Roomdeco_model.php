<?php

class Roomdeco_model extends CI_Model
{
  public function getRoomdeco($id = null)
  {
    if ($id === null) {
      //namatable
      return $this->db->get('roomdeco')->result_array();
    }else {
      return $this->db->get_where('roomdeco',['id' => $id])->result_array();
    }

  }

  public function deleteRoomdeco($id)
  {
    $this->db->delete('roomdeco',['id' => $id]);
    return $this->db->affected_rows();
  }

  public function createRoomdeco($data)
  {
    $this->db->insert('roomdeco', $data);
    return $this->db->affected_rows();
  }

  public function updateRoomdeco($data ,$id)
  {
    $this->db->update('roomdeco', $data , ['id' => $id]);
    return $this->db->affected_rows();
  }

}
