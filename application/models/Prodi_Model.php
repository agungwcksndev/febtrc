<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_prodi()
  {

    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->order_by('nama_prodi');
    $query  = $this->db->get();
    return $query->result();
  }

  function fetch_prodi($id_jurusan)
  {
    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->where('id_jurusan', $id_jurusan);
    $this->db->order_by('nama_prodi', 'ASC');
    $query  = $this->db->get();
    $output = '<option value="">Pilih Program Studi</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id_prodi.'">'.$row->nama_prodi.'</option>';
    }
    return $output;
  }

}
