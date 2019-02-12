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
        $total_alumni = $this->Alumni_Model->count_alumni();
        $total_today = $this->Alumni_Model->count_alumni_registered_now();
        $total_ie = $this->Alumni_Model->count_ie();
        $total_akuntansi = $this->Alumni_Model->count_akuntansi();
        $total_manajemen = $this->Alumni_Model->count_manajemen();
        $data = array('isi'     => 'admin/dashboard',
                      'total_alumni' => $total_alumni,
                      'total_today'  => $total_today,
                      'total_ie'  => $total_ie,
                      'total_akuntansi'  => $total_akuntansi,
                      'total_manajemen'  => $total_manajemen
                      );
        $this->load->view("layouts/wrapper", $data, false);
  }

}
