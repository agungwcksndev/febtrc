<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni_Model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function get_all_alumni()
  {
    $query=$this->db->query("SELECT nama,posisi,tempat_kerja, max(mulai_kerja) as tanggal_mulai_kerja
                              from alumni
                              INNER JOIN Riwayat_Pekerjaan ON Riwayat_Pekerjaan.username=Alumni.Username
                              INNER JOIN Jurusan ON Jurusan.id_jurusan = Alumni.id_jurusan
                              INNER JOIN Prodi ON Prodi.id_prodi = Alumni.id_prodi
                              WHERE Riwayat_Pekerjaan.mulai_kerja = max(riwayatmulai_kerja)

                              ORDER BY nama");
     return $query->result_array();
  }

  public function add_alumni($data)
  {
    $this->db->insert('alumni', $data);
  }

  public function detail_alumni($username){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan','left');
    $this->db->join('prodi', 'prodi.id_prodi = alumni.id_prodi','left');
    $this->db->join('negara', 'negara.id_negara = alumni.negara','left');
    $this->db->join('provinsi', 'provinsi.id_provinsi = alumni.provinsi','left');
    $this->db->join('kota', 'kota.id_kota = alumni.kota','left');
    $this->db->where('username', $username);
    $query  = $this->db->get();
    return $query->row();
  }

  public function check_unique_user_email($username = '', $email) {
    $this->db->where('email', $email);
    if($username) {
        $this->db->where_not_in('username', $username);
    }
    return $this->db->get('alumni')->num_rows();
  }

  public function update_alumni($data)
  {
      $this->db->where('username', $data['username']);
      $this->db->update('alumni', $data);
  }

  public function delete_alumni($data)
  {
    $this->db->where('username',$data['username']);
    $this->db->delete('alumni', $data);
  }
}
