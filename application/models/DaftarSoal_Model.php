<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarSoal_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_soal()
  {
    $this->db->select('*');
    $this->db->from('daftar_soal');
    $this->db->order_by('soal');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listing()
  {
      $this->db->select('*');
      $this->db->from('daftar_soal');
      $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.id_paket');
      $this->db->order_by('id_soal', 'DESC');
      $query  = $this->db->get();
      return $query->result();
  }

  public function get_tipe()
  {
    $this->db->distinct();
    $this->db->select('tipe_soal');
    $this->db->from('daftar_soal');
    $this->db->order_by('tipe_soal');
    $query  = $this->db->get();
    return $query->result();
  }

  public function fetch_soal($id_paket)
  {
    $this->db->select('*');
    $this->db->from('daftar_soal');
    $this->db->where('id_paket', $id_paket);
    $this->db->order_by('soal', 'ASC');
    $query  = $this->db->get();
    $output = '<option value="">Pilih Soal Kuesioner</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id_soal.'">'.$row->soal.'</option>';
    }
    return $output;
  }

  public function getDetailSoal($id_soal){
    $this->db->select('*');
    $this->db->from('daftar_soal');
		$this->db->where('id_soal',$id_soal);
		$query = $this->db->get();
		return $query->row();
  }

  public function add_soal($data)
  {
    $this->db->insert('daftar_soal', $data);
  }

  public function find_daftar_soal($id_paket){
    $this->db->select('*');
    $this->db->from('daftar_soal');
    $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.id_paket');
    $this->db->where('daftar_soal.id_paket', $id_paket);
    $query  = $this->db->get();
    return $query->result();
  }

  public function update_soal($data)
  {
      $this->db->where('id_soal', $data['id_soal']);
      $this->db->update('daftar_soal', $data);
  }

  public function delete_soal($data)
  {
    $this->db->where('id_soal',$data['id_soal']);
    $this->db->delete('daftar_soal', $data);
  }
}
