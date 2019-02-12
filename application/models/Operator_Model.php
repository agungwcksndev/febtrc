<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_operator()
  {
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->order_by('username', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function add_operator($data)
  {
    $this->db->insert('operator', $data);
  }

  public function find_operator($username){
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->where('username', $username);
    $query  = $this->db->get();
    return $query->row();
  }

  public function update_operator($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('operator', $data);
  }

  public function delete_operator($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('operator', $data);
  }
}
