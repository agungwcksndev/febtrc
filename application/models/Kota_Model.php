<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_kota_by_provinsi($id_provinsi){
    $this->db->select('*');
    $this->db->from('kota');
    $this->db->where('id_provinsi', $id_provinsi);
    $this->db->order_by('nama_kota');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_kota_by_provinsi_js($id_provinsi)
  {
    $this->db->select('*');
    $this->db->from('kota');
    $this->db->where('id_provinsi', $id_provinsi);
    $this->db->order_by('nama_kota', 'ASC');
    $query  = $this->db->get();
    $output = '<option value="" selected disabled>Pilih Kota</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id_kota.'">'.$row->nama_kota.'</option>';
    }
    $output .= '<option value="9999">Lain-lain</option>';
    return $output;
  }

}
