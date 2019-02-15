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
    $query=$this->db->query("SELECT alumni.username,alumni.nama,alumni.angkatan,alumni.jenjang,jurusan.nama_jurusan,prodi.nama_prodi,tempat_kerja,posisi,pendapatan_per_bulan
      FROM alumni LEFT JOIN riwayat_pekerjaan s ON s.username = alumni.username
      JOIN jurusan ON jurusan.id_jurusan = alumni.id_jurusan
      JOIN prodi ON prodi.id_prodi = alumni.id_prodi
      WHERE(
          SELECT COUNT(*)
          FROM riwayat_pekerjaan f
          WHERE s.username = f.username AND s.mulai_kerja <= f.mulai_kerja
          ) <=1
      ORDER BY s.mulai_kerja DESC");
     return $query->result();
  }

  public function count_alumni(){
    $this->db->select('*');
    $this->db->from('alumni');
    $alumni  =   $this->db->count_all_results();
    return $alumni;
  }

  public function count_alumni_registered_now(){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->where('registered_date',date('Y-m-d'));
    $alumni_today  =   $this->db->count_all_results();
    return $alumni_today;
  }

  public function count_ie(){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->where('nama_jurusan','Ilmu Ekonomi');
    $alumni_ie  =   $this->db->count_all_results();
    return $alumni_ie;
  }

  public function count_akuntansi(){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->where('nama_jurusan','Akuntansi');
    $alumni_akuntansi  =   $this->db->count_all_results();
    return $alumni_akuntansi;
  }

  public function count_manajemen(){
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->join('jurusan', 'jurusan.id_jurusan = alumni.id_jurusan');
    $this->db->where('nama_jurusan','Manajemen');
    $alumni_manajemen  =   $this->db->count_all_results();
    return $alumni_manajemen;
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
  function changeActiveState($username, $key)
  {
   $data = array(
   'active' => 1
   );

   $this->db->where('md5(generatednum)', $key);
   $this->db->where('username', $username);
   $this->db->update('alumni', $data);

   return true;
  }
}
