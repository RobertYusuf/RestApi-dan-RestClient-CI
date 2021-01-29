<?php

class Gamingsetup_model extends CI_Model
{
  public function getGamingsetup($id = null)
  {
    if ($id === null) {
      //namatable
      return $this->db->get('gamingsetup')->result_array();
    }else {
      return $this->db->get_where('gamingsetup',['id' => $id])->result_array();
    }

  }

  public function deleteGamingsetup($id)
  {
    $this->db->delete('gamingsetup',['id' => $id]);
    return $this->db->affected_rows();
  }

  public function createGamingsetup($data)
  {
    $this->db->insert('gamingsetup', $data);
    return $this->db->affected_rows();
  }

  public function updateGamingsetup($data ,$id)
  {
    $this->db->update('gamingsetup', $data , ['id' => $id]);
    return $this->db->affected_rows();
  }

}
