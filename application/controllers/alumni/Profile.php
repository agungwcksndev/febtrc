<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumni_Model');
    $this->load->model('Riwayat_Pekerjaan_Model');
  }

  function _remap($method,$args)
  {

       if (method_exists($this, $method))
       {
           $this->$method($args);
       }
      else
       {
           $this->index($method,$args);
      }
 }

  function index($username)
  {
    $user = $this->Alumni_Model->detail_alumni($username);
    $pekerjaans = $this->Riwayat_Pekerjaan_Model->get_riwayat_by_alumni($username);
    $data = array('isi'     => 'alumni/profile',
                  'user'=> $user,
                  'pekerjaans' => $pekerjaans
                  );
    $this->load->view("layouts/user-front-wrapper", $data, false);
  }

}
