<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_Pekerjaan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Riwayat_Pekerjaan_Model');
  }

  function index()
  {

  }

  public function get_riwayat_by_id($id_riwayat_pekerjaan){
    $data = $this->Riwayat_Pekerjaan_Model->get_riwayat_by_id($id_riwayat_pekerjaan);
    echo json_encode($data);
  }

  public function add_riwayat_pekerjaan(){
    $valid = $this->form_validation;

    $valid->set_rules(
        'tempat_kerja_add',
        'tempat_kerja_add',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Tempat Kerja.')
    );

    $valid->set_rules(
        'mulai_kerja_add',
        'mulai_kerja_add',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Mulai Kerja.')
    );

    $valid->set_rules(
        'berhenti_kerja_add',
        'berhenti_kerja_add',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
    );

    $i  = $this->input;
    if ($valid->run()===false) {
      $this->session->set_flashdata('success', 'Gagal menambah riwayat pekerjaan.');
      redirect('admin/alumni/detail_alumni/'.$i->post('username_add'));
    } else {
        $tanggal_mulai = date("Y-m-d",strtotime($_POST['mulai_kerja_add']));
        $tanggal_berhenti = date("Y-m-d",strtotime($_POST['berhenti_kerja_add']));
        $data = array(
          'username'               =>  $i->post('username_add'),
          'tempat_kerja'           =>  $i->post('tempat_kerja_add'),
          'posisi'                 =>  $i->post('posisi_add'),
          'mulai_kerja'            =>  $tanggal_mulai,
          'berhenti_kerja'         =>  $tanggal_berhenti,
          'posisi'                 =>  $i->post('posisi_add'),
          'alamat_kerja'           =>  $i->post('alamat_kerja_add'),
          'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan_add'),
          'golongan_pns'           =>  $i->post('golongan_pns_add')
          );
        $this->Riwayat_Pekerjaan_Model->add_riwayat_pekerjaan($data);
        $this->session->set_flashdata('success', 'Berhasil menambah Riwayat Pekerjaan');
        redirect('admin/alumni/detail_alumni/'.$i->post('username_add'));
      }

  }

  public function update_riwayat_pekerjaan(){
    $valid = $this->form_validation;

    $valid->set_rules(
        'tempat_kerja_up',
        'tempat_kerja_up',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Tempat Kerja.')
    );

    $valid->set_rules(
        'mulai_kerja_up',
        'mulai_kerja_up',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Mulai Kerja.')
    );

    $valid->set_rules(
        'berhenti_kerja_up',
        'berhenti_kerja_up',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
    );

    $i  = $this->input;
    if ($valid->run()===false) {
      $this->session->set_flashdata('success', 'Profil alumni berhasil dirubah.');
      redirect('admin/alumni/detail_alumni/'.$i->post('username_up'));
    } else {
        $tanggal_mulai = date("Y-m-d",strtotime($_POST['mulai_kerja_up']));
        $tanggal_berhenti = date("Y-m-d",strtotime($_POST['berhenti_kerja_up']));
        $data = array(
          'id_riwayat_pekerjaan'   =>  $i->post('id_riwayat_pekerjaan_up'),
          'username'               =>  $i->post('username_up'),
          'tempat_kerja'           =>  $i->post('tempat_kerja_up'),
          'posisi'                 =>  $i->post('posisi_up'),
          'mulai_kerja'            =>  $tanggal_mulai,
          'berhenti_kerja'         =>  $tanggal_berhenti,
          'posisi'                 =>  $i->post('posisi_up'),
          'alamat_kerja'           =>  $i->post('alamat_kerja_up'),
          'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan_up'),
          'golongan_pns'           =>  $i->post('golongan_pns_up')
          );
        $this->Riwayat_Pekerjaan_Model->update_riwayat_pekerjaan($data);
        $this->session->set_flashdata('success', 'Berhasil memperbarui Riwayat Pekerjaan');
        redirect('admin/alumni/detail_alumni/'.$i->post('username_up'));
      }
  }
  public function delete_riwayat_pekerjaan($id_riwayat_pekerjaan)
  {
    $data = array('id_riwayat_pekerjaan'  =>  $id_riwayat_pekerjaan);
    $this->Riwayat_Pekerjaan_Model->delete_riwayat_pekerjaan($data);
    $this->session->set_flashdata('success', 'Berhasil menghapus Riwayat Pekerjaan.');
    redirect('admin/alumni/');
  }
}
