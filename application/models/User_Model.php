<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function login_admin($username, $password){
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where(array( 'username'  =>  $username,
                            'password'  =>  $password));
    $this->db->order_by('username','DESC');
    $query = $this->db->get();
    $detail_admin = $query->row();
    $count_admin = $query->num_rows();
    return array(
    'detail_admin' => $detail_admin,
    'count_admin'  => $count_admin
    );
  }

  public function login_operator($username, $password){
    $this->db->select('*');
    $this->db->from('operator');
    $this->db->where(array( 'username'  =>  $username,
                            'password'  =>  $password));
    $this->db->order_by('username','DESC');
    $query = $this->db->get();
    $detail_operator = $query->row();
    $count_operator = $query->num_rows();
    return array(
    'detail_operator' => $detail_operator,
    'count_operator'  => $count_operator
    );
  }

  public function login_alumni($username, $password){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi');
    $this->db->where(array( 'username'  =>  $username,
                            'password'  =>  $password));
    $this->db->order_by('username','DESC');
    $query = $this->db->get();
    $detail_alumni = $query->row();
    $count_alumni = $query->num_rows();
    return array(
    'detail_alumni' => $detail_alumni,
    'count_alumni'  => $count_alumni
    );
  }

  public function add($data)
  {
    $this->db->insert('user',$data);
  }
}
