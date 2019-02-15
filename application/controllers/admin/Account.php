<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_Model');
  }

  public function verification($username, $key)
  {
      $this->load->helper('url');
      $this->Admin_Model->changeActiveState($username, $key);
      $this->session->set_flashdata('sukses', '<center>Verifikasi email berhasil, silahkan login</center>');
      redirect(site_url('login'), 'refresh');
  }
}
