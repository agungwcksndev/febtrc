<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kuesioner_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Prodi_Model');
  }

  function index()
  {
    $jurusans = $this->Jurusan_Model->get_all_jurusan();
    $prodis = $this->Prodi_Model->get_all_prodi();
    $data     = array('isi'     => 'admin/view-kuesioner',
                  'jurusans'=> $jurusans,
                  'prodis'  => $prodis,
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  public function test()
  {
    $kuesioners = $this->Kuesioner_Model->gets();
    echo "<pre>";
    foreach ($kuesioners as $item) {
      print_r($item);
      print_r(json_decode($item->jawaban));
    }
    echo "</pre>";
  }

  function preview(){
    $kuesioners = $this->Kuesioner_Model->get_kuesioner();
    $data     = array('isi'     => 'admin/view-pre-kuesioner',
                      'kuesioners' => $kuesioners
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

}
