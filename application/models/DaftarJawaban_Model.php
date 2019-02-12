<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarJawaban_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function listing()
  {
      $this->db->select('*');
      $this->db->from('daftar_jawaban');
      $this->db->join('daftar_soal', 'paket_soal.id_soal = daftar_jawaban.id_soal');
      $this->db->order_by('id_jawaban', 'DESC');
      $query  = $this->db->get();
      return $query->result();
  }

  public function fetch_jawaban($id_soal)
  {
    $this->db->select('*');
    $this->db->from('daftar_jawaban');
    $this->db->where('id_soal', $id_soal);
    $this->db->order_by('jawaban', 'ASC');
    $query  = $this->db->get();
    $output = '<option value="">Pilih Soal Kuesioner</option>';
    foreach($query->result() as $row)
    {
      $output .= '<option value="'.$row->id_jawaban.'">'.$row->jawaban.'</option>';
    }
    return $output;
  }

  public function add_jawaban($data)
  {
    $this->db->insert('daftar_jawaban', $data);
  }

  public function find_daftar_jawaban($id_soal){
    $this->db->select('*');
    $this->db->from('daftar_jawaban');
    $this->db->join('daftar_soal', 'daftar_soal.id_soal = daftar_jawaban.id_soal');
    $this->db->where('daftar_jawaban.id_soal', $id_soal);
    $query  = $this->db->get();
    return $query->result();
  }

  public function update_jawaban($data)
  {
      $this->db->where('id_jawaban', $data['id_jawaban']);
      $this->db->update('daftar_jawaban', $data);
  }

  public function delete_jawaban($data)
  {
    $this->db->where('id_jawaban',$data['id_jawaban']);
    $this->db->delete('daftar_jawaban', $data);
  }
}
