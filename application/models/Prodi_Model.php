<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function list_prodi($id_jurusan){
    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->where('id_jurusan', $id_jurusan);
    $this->db->order_by('nama_prodi');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_all_prodi()
  {
    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->join('jurusan', 'jurusan.id_jurusan = prodi.id_jurusan');
    $this->db->order_by('id_prodi', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_prodi_by_jurusan($id_jurusan)
  {
    $this->db->select('*');
    $this->db->from('prodi');
    $this->db->where('id_jurusan', $id_jurusan);
    $this->db->order_by('nama_prodi', 'ASC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_prodi_by_jurusan_js($id_jurusan)
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

  public function get_detail_prodi($id_prodi){
    $this->db->select('*');
    $this->db->from('prodi');
		$this->db->where('id_prodi',$id_prodi);
		$query = $this->db->get();
		return $query->row();
  }

  public function add_prodi($data)
  {
    $this->db->insert('prodi', $data);
  }

  public function update_prodi($data)
  {
      $this->db->where('id_prodi', $data['id_prodi']);
      $this->db->update('prodi', $data);
  }

  public function delete_prodi($data)
  {
    $this->db->where('id_prodi',$data['id_prodi']);
    $this->db->delete('prodi', $data);
  }

}
