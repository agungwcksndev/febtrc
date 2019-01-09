<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_Model');
    $this->load->model('Alumni_Model');
  }

  function index()
  {
        $data = array('isi'     => 'admin/dashboard'
                      );
        $this->load->view("layouts/wrapper", $data, false);
  }

}
