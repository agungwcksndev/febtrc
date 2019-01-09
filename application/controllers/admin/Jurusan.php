<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Jurusan_Model');
  }

  function index()
  {
    $jurusans = $this->Jurusan_Model->listing();
    $data = array('isi'     => 'admin/view-jurusan',
                  'jurusans'=> $jurusans
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }



}
