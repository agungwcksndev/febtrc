<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Alumni_Model');
  }

  public function get_provinsi()
  {
    $this->db->select('*');
    $this->db->from('provinsi');
    $this->db->order_by('nama_provinsi');
    $query  = $this->db->get();
    return $query->result();
  }

  public function fetch_provinsi($id_negara)
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

  public function fetch_provinsi_edit($id_negara,$username)
  {
    $this->db->select('*');
    $this->db->from('provinsi');
    $this->db->where('id_negara', $id_negara);
    $this->db->order_by('nama_provinsi', 'ASC');
    $query  = $this->db->get();
    $alumn  = $this->Alumni_Model->find_alumni($username);
    $output = '<option value="" disabled>Pilih Provinsi</option>';
    foreach($query->result() as $row)
    {
      if ($alumn->provinsi == $row->id_provinsi) {
        '<option value="'.$row->id_provinsi.'" selected>'.$row->nama_provinsi.'</option>';
      }
      else {
        '<option value="'.$row->id_provinsi.'">'.$row->nama_provinsi.'</option>';
      }
    }
    $output .= '<option value="9999">Lain-lain</option>';

    return $output;
  }

}
