<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Alumni_Model');
  }

  public function get_all_provinsi()
  {
    $this->db->select('*');
    $this->db->from('provinsi');
    $this->db->order_by('nama_provinsi');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_provinsi_by_negara($id_negara)
  {
    $this->db->select('*');
    $this->db->from('provinsi');
    $this->db->where('id_negara', $id_negara);
    $this->db->order_by('nama_provinsi', 'ASC');
    $query  = $this->db->get();
    return $query->result();
}
  public function get_provinsi_by_negara_js($id_negara)
  {
    $this->db->select('*');
    $this->db->from('provinsi');
    $this->db->where('id_negara', $id_negara);
    $this->db->order_by('nama_provinsi', 'ASC');
    $query  = $this->db->get();
    $output = '<option value="" disabled selected>Pilih Provinsi</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id_provinsi.'">'.$row->nama_provinsi.'</option>';
    }
    $output .= '<option value="9999">Lain-lain</option>';

    return $output;
  }

}
