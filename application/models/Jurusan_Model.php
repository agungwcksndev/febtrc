<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_jurusan()
  {
    $this->db->select('*');
    $this->db->from('jurusan');
    $this->db->order_by('nama_jurusan');
    $query  = $this->db->get();
    return $query->result();
  }

}
