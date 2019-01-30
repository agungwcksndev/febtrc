<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_negara()
  {
    $this->db->select('*');
    $this->db->from('negara');
    $this->db->order_by('nama_negara');
    $query  = $this->db->get();
    return $query->result();
  }
}
