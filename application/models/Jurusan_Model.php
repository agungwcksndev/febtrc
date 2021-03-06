<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_jurusan()
  {
    $this->db->select('*');
    $this->db->from('jurusan');
    $this->db->order_by('nama_jurusan');
    $query  = $this->db->get();
    return $query->result();
  }

  public function add_jurusan($data)
  {
    $this->db->insert('jurusan', $data);
  }

  public function update_jurusan($data)
  {
      $this->db->where('id_jurusan', $data['id_jurusan']);
      $this->db->update('jurusan', $data);
  }

  public function delete_jurusan($data)
  {
    $this->db->where('id_jurusan',$data['id_jurusan']);
    $this->db->delete('jurusan', $data);
  }

}
