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
        'tempat_kerja',
        'tempat_kerja',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Tempat Kerja.')
    );

    $valid->set_rules(
        'datetimepicker',
        'datetimepicker',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Mulai Kerja.')
    );

    $valid->set_rules(
        'datetimepicker2',
        'datetimepicker2',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
    );
    print_r($valid);
    exit();
    $i  = $this->input;
    if ($valid->run()===false) {
      $this->session->set_flashdata('success', 'Gagal menambah riwayat pekerjaan.');
      redirect('admin/alumni/detail_alumni/'.$i->post('username'));
    } else {
        $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker']));
        $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2']));
        $data = array(
          'username'               =>  $i->post('username'),
          'tempat_kerja'           =>  $i->post('tempat_kerja'),
          'posisi'                 =>  $i->post('posisi_add'),
          'datetimepicker'            =>  $tanggal_mulai,
          'datetimepicker2'         =>  $tanggal_berhenti,
          'posisi'                 =>  $i->post('posisi_add'),
          'alamat_kerja'           =>  $i->post('alamat_kerja'),
          'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan'),
          'golongan_pns'           =>  $i->post('golongan_pns')
          );

          print_r($data);
          exit();
        $this->Riwayat_Pekerjaan_Model->add_riwayat_pekerjaan($data);
        $this->session->set_flashdata('success', 'Berhasil menambah Riwayat Pekerjaan');
        redirect('admin/alumni/detail_alumni/'.$i->post('username'));
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
        'datetimepicker_up',
        'datetimepicker_up',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Mulai Kerja.')
    );

    $valid->set_rules(
        'datetimepicker2_up',
        'datetimepicker2_up',
        'required',
        array(
      'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
    );

    $i  = $this->input;
    if ($valid->run()===false) {
      $this->session->set_flashdata('success', 'Profil alumni berhasil dirubah.');
      redirect('admin/alumni/detail_alumni/'.$i->post('username_up'));
    } else {
        $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker_up']));
        $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2_up']));
        $data = array(
          'id_riwayat_pekerjaan'   =>  $i->post('id_riwayat_pekerjaan_up'),
          'username'               =>  $i->post('username_up'),
          'tempat_kerja'           =>  $i->post('tempat_kerja_up'),
          'posisi'                 =>  $i->post('posisi_up'),
          'datetimepicker'            =>  $tanggal_mulai,
          'datetimepicker2'         =>  $tanggal_berhenti,
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
  public function delete_riwayat_pekerjaan($id_riwayat_pekerjaan,$username)
  {
    $data = array('id_riwayat_pekerjaan'  =>  $id_riwayat_pekerjaan);
    $this->Riwayat_Pekerjaan_Model->delete_riwayat_pekerjaan($data);
    $this->session->set_flashdata('success', 'Berhasil menghapus Riwayat Pekerjaan.');
    redirect('admin/alumni/detail_alumni/'.$username);
  }
}
