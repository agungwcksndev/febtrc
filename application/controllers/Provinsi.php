<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Provinsi_Model');
  }

  public function get_provinsi_by_negara_js(){
    if($this->input->post('id_negara'))
    {
    echo $this->Provinsi_Model->get_provinsi_by_negara_js($this->input->post('id_negara'));
    }
  }

}
