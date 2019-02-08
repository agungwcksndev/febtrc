<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_Pekerjaan_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_riwayat_by_alumni($username){
    $this->db->select('*');
    $this->db->from('riwayat_pekerjaan');
    $this->db->where('username', $username);
    $this->db->order_by('id_riwayat_pekerjaan', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_riwayat_by_alumni_latest($username){
    $this->db->select('*');
    $this->db->from('riwayat_pekerjaan');
    $this->db->where('username', $username);
    $this->db->order_by('id_riwayat_pekerjaan', 'DESC');
    $this->db->limit(1);
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_riwayat_by_id($id_riwayat_pekerjaan){
    $this->db->select('*');
    $this->db->from('riwayat_pekerjaan');
    $this->db->where('id_riwayat_pekerjaan',$id_riwayat_pekerjaan);
    $query = $this->db->get();
    return $query->row();
  }


  public function add_riwayat_pekerjaan($data)
  {
    $this->db->insert('riwayat_pekerjaan', $data);
  }

  public function update_riwayat_pekerjaan($data){
    $this->db->where('id_riwayat_pekerjaan', $data['id_riwayat_pekerjaan']);
    $this->db->update('riwayat_pekerjaan', $data);
  }

  public function delete_riwayat_pekerjaan($data)
  {
    $this->db->where('id_riwayat_pekerjaan',$data['id_riwayat_pekerjaan']);
    $this->db->delete('riwayat_pekerjaan', $data);
  }

}
