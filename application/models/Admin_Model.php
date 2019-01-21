<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_admin()
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->order_by('username', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function tambah_admin($data)
  {
    $this->db->insert('admin', $data);
  }

  public function find_admin($username){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $query  = $this->db->get();
    return $query->row();
  }

  public function update_admin($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('admin', $data);
  }

  public function hapus_admin($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('admin', $data);
  }
}
