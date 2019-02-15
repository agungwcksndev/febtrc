<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_all_operator()
  {
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function add_operator($data)
  {
    $this->db->insert('operator', $data);
  }

  public function detail_operator($username){
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->where('username', $username);
    $query  = $this->db->get();
    return $query->row();
  }

  public function check_unique_user_email($username = '', $email) {
    $this->db->where('email', $email);
    if($username) {
        $this->db->where_not_in('username', $username);
    }
    return $this->db->get('operator')->num_rows();
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

  function changeActiveState($username, $key)
  {
   $data = array(
   'active' => 1
   );

   $this->db->where('md5(generatednum)', $key);
   $this->db->where('username', $username);
   $this->db->update('operator', $data);

   return true;
  }
}
