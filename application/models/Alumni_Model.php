<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_alumni()
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi');
    $this->db->order_by('username', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function tambah_alumni($data)
  {
    $this->db->insert('alumni', $data);
  }

  public function update_alumni($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('alumni', $data);
  }

  public function hapus_alumni($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('alumni', $data);
  }
}
