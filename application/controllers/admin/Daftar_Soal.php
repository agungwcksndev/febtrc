<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Soal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DaftarSoal_Model');
    $this->load->model('Kuesioner_Model');
  }

  function index()
  {

  }

  public function lihat_daftar_soal($id_paket)
  {
    $daftar_soal_paket = $this->DaftarSoal_Model->find_daftar_soal($id_paket);
    $detail_paket = $this->Kuesioner_Model->getDetailPaket($id_paket);
    $list_paket = $this->Kuesioner_Model->get_paket_soal();
    $list_tipe = $this->DaftarSoal_Model->get_tipe();
    $data = array('isi'               => 'admin/daftar-soal',
                  'daftar_soal_paket' => $daftar_soal_paket,
                  'list_tipe'         => $list_tipe,
                  'list_paket'        => $list_paket,
                  'detail_paket'      => $detail_paket
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  public function getDetailSoal($id_soal)
  {
    $data = $this->DaftarSoal_Model->getDetailSoal($id_soal);
    echo json_encode($data);
  }

  function add_soal()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
        'nama_paket',
        'Nama_paket',
        'required',
        array(  'required'  =>  'Anda belum memilih paket soal.')
      );

    $valid->set_rules(
        'soal',
        'Soal',
        'required',
        array(  'required'  =>  'Anda belum mengisikan soal kuesioner.')
      );

    $valid->set_rules(
        'tipe_soal',
        'Tipe_soal',
        'required',
        array(  'required'  =>  'Anda belum mengisikan tipe soal kuesioner.')
        );

      $i  = $this->input;
      if ($valid->run()===false)
      {
        $this->session->set_flashdata('notifikasi', '<center>Kuesioner Gagal di Tambahkan');
        redirect('admin/daftar_soal/lihat_daftar_soal/'.$i->post("id_paket"));
      }
      else {
          $data = array(
                'id_paket'    =>  $i->post('id_paket'),
                'id_soal'     =>  $i->post('id_soal'),
                'soal'        =>  $i->post('soal'),
                'tipe_soal'   =>  $i->post('tipe_soal')
              );
          $this->DaftarSoal_Model->add_soal($data);
          $this->session->set_flashdata('sukses', 'Berhasil Menambah Soal Kuesioner.');
          redirect('admin/daftar_soal/lihat_daftar_soal/'.$i->post("id_paket"));
      }
    }

    public function update_soal()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
          'soal_up',
          'soal_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan soal kuesioner.')
      );

      $valid->set_rules(
          'tipe_soal_up',
          'tipe_soal_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan tipe soal kuesioner.')
      );

        $i  = $this->input;
        if ($valid->run()===false)
        {
          $this->session->set_flashdata('notifikasi', '<center>Data Soal Kuesioner Gagal di Update');
          redirect('admin/daftar_soal/lihat_daftar_soal/'.$i->post("id_paket_up"));
        }
        else {
            $data = array(
              'soal'            =>  $i->post('soal_up'),
              'tipe_soal'       =>  $i->post('tipe_soal_up'),
              'id_soal'         =>  $i->post('id_soal_up')
            );
            $this->DaftarSoal_Model->update_soal($data);
            $this->session->set_flashdata('notifikasi', '<center>Data Soal Kuesioner berhasil di update');
            redirect('admin/daftar_soal/lihat_daftar_soal/'.$i->post("id_paket_up"));
        }
    }

    public function delete_soal($id,$id_paket)
    {
      $data = array('id_soal'  =>  $id);
      $this->DaftarSoal_Model->delete_soal($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus soal kuesioner');
      redirect('admin/daftar_soal/lihat_daftar_soal/'.$id_paket);
    }
  }
