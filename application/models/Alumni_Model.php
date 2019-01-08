<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function add($data)
  {
    $this->db->insert('alumni',$data);
  }
}
