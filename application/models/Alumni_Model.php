<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function get_alumni()
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->order_by('nama');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_negara()
  {
    $this->db->select('*');
    $this->db->from('negara');
    $this->db->order_by('nama_negara');
    $query  = $this->db->get();
    return $query->result();
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

  public function fetch_kota($id_provinsi)
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

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi');
    $this->db->order_by('username', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function tambah_alumni($data)
  {
    $this->db->insert('alumni', $data);
  }

  public function update_alumni($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('alumni', $data);
  }

  public function hapus_alumni($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('alumni', $data);
  }
}
