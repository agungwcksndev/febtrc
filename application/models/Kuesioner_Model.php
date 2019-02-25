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

  public function listingByFakultas()
  {
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->where('tingkat_kuesioner',"Fakultas");
    $this->db->order_by('id_paket', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listingByJurusan()
  {
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->where('tingkat_kuesioner',"Jurusan");
    $this->db->order_by('id_paket', 'DESC');
    $query  = $this->db->get();
    return $query->result();
  }

  public function listingByProdi()
  {
    $this->db->select('*');
    $this->db->from('paket_soal');
    $this->db->where('tingkat_kuesioner',"Prodi");
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

  public function get_tingkat_jurusan()
  {
    $this->db->distinct();
    $this->db->select('nama_tingkat');
    $this->db->from('paket_soal');
    $this->db->where('tingkat_kuesioner',"Jurusan");
    $this->db->order_by('nama_tingkat');
    $query  = $this->db->get();
    return $query->result();
  }

  public function get_tingkat_prodi()
  {
    $this->db->distinct();
    $this->db->select('nama_tingkat');
    $this->db->from('paket_soal');
    $this->db->where('tingkat_kuesioner',"Prodi");
    $this->db->order_by('nama_tingkat');
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

  public function add_paket_soal($data)
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

  public function delete_paket_soal($data)
  {
    $this->db->where('id_paket',$data['id_paket']);
    $this->db->delete('paket_soal', $data);
  }

  public function gets()
  {
    $this->db->select('*');
    $this->db->from('quation_view');
    $query  = $this->db->get();
    return $query->result();
  }

  // public function get_kuesioner(){
  //   // $query1=$this->db->query("SELECT
  //   // daftar_soal.id_soal,
  //   // daftar_soal.soal,
  //   // daftar_soal.tipe_soal,
  //   // daftar_jawaban.jawaban
  //   // FROM
  //   // paket_soal
  //   // INNER JOIN daftar_soal ON daftar_soal.id_paket = paket_soal.id_paket
  //   // INNER JOIN daftar_jawaban ON daftar_jawaban.id_soal = daftar_soal.id_soal
  //   // WHERE
  //   // paket_soal.jenjang_soal = 'S1' AND
  //   // paket_soal.nama_tingkat = 'FEB' OR
  //   // paket_soal.nama_tingkat = 'Ilmu Ekonomi' OR
  //   // paket_soal.nama_tingkat = 'Ekonomi Islam'
  //   // ");
  //   $result = array();
  //   $query1=$this->db->query("SELECT *
  //     FROM paket_soal
  //     WHERE
  //     paket_soal.jenjang_soal = 'S1' AND
  //     paket_soal.nama_tingkat = 'FEB' OR
  //     paket_soal.nama_tingkat = 'Ilmu Ekonomi' OR
  //     paket_soal.nama_tingkat = 'Ekonomi Islam'");
  //     $firstQuerys = $query1->result();
  //
  //   foreach ($firstQuerys as $firstQuery {
  //       // $query2=$this->db->query("SELECT *
  //       //   FROM daftar_soal
  //       //   WHERE
  //       //   daftar_soal.id_paket = $firstQuery->id_paket");
  //         // $secQuerys = $query2->result();
  //         array_push($result['paket'], $firstQuery->id_paket);
  //
  //         foreach ($secQuerys as $secQuery) {
  //           $query3=$this->db->query("SELECT *
  //             FROM daftar_jawaban
  //             WHERE
  //             daftar_jawaban.id_soal = $secQuery->id_soal");
  //             $thrQuerys = $query3->result();
  //             array_push($result['paket']['soal'], $secQuery->soal);
  //
  //             foreach ($thrQuerys as $thrQuery) {
  //               array_push($result['paket']['soal']['jawaban'], $secQuery->jawaban);
  //             }
  //         }
  //   }
  //   echo "<pr>";
  //   print_e($result);
  //   exit();
  // }
}
