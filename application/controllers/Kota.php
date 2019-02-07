<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kota_Model');
  }

  public function get_kota_by_provinsi_js(){
    if($this->input->post('id_provinsi'))
    {
    echo $this->Kota_Model->get_kota_by_provinsi_js($this->input->post('id_provinsi'));
    }
  }

}
