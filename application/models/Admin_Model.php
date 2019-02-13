<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_all_admin()
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function add_admin($data)
  {
    $this->db->insert('admin', $data);
  }

  public function detail_admin($username){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $query  = $this->db->get();
    return $query->row();
  }

  public function check_unique_user_email($username = '', $email) {
    $this->db->where('email', $email);
    if($username) {
        $this->db->where_not_in('username', $username);
    }
    return $this->db->get('admin')->num_rows();
  }

  public function update_admin($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('admin', $data);
  }

  public function delete_admin($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('admin', $data);
  }
}
