<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_paket_soal()
  {
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->order_by('nama_paket');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->order_by('id_paket', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_jenjang()
  {
    $this->db->distinct();
    $this->db->select('jenjang_soal');
    $this->db->from('paket_soal');
    $this->db->order_by('jenjang_soal');
    $query  = $this->db->get();
    return $query->result();
  }

  public function getDetailPaket($id_paket){
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->where('id_paket',$id_paket);
    $query = $this->db->get();
    return $query->row();
  }

  public function tambah_paket_soal($data)
  {
    $this->db->insert('paket_soal', $data);
  }

  public function find_paket_soal($id_paket){
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->where('id_paket', $id_paket);
    $query  = $this->db->get();
    return $query->row();
  }

  public function update_paket_soal($data)
  {
      $this->db->where('id_paket', $data['id_paket']);
      $this->db->update('paket_soal', $data);
  }

  public function hapus_paket_soal($data)
  {
    $this->db->where('id_paket',$data['id_paket']);
    $this->db->delete('paket_soal', $data);
  }
}
