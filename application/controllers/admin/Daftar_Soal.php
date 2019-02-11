<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Soal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DaftarSoal_Model');
    $this->load->model('Quisioner_Model');
  }

  function index()
  {
    $daftar_soals = $this->DaftarSoal_Model->listing();
    $list_tipe = $this->DaftarSoal_Model->get_tipe();
    $list_paket = $this->Quisioner_Model->get_paket_soal();
    $data = array('isi'     => 'admin/daftar-soal',
                  'daftar_soals'=> $daftar_soals,
                  'list_tipe'=> $list_tipe,
                  'list_paket' => $list_paket
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_soal()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
        'paket_soal',
        'Paket_soal',
        'required',
        array(  'required'  =>  'Anda belum memilih paket soal.')
      );

    $valid->set_rules(
        'soal',
        'Soal',
        'required',
        array(  'required'  =>  'Anda belum mengisikan soal quisioner.')
      );

    $valid->set_rules(
        'tipe_soal',
        'Tipe_soal',
        'required',
        array(  'required'  =>  'Anda belum mengisikan tipe soal quisioner.')
        );

      if ($valid->run()===false)
      {
          $data = array('title' => 'Data Soal Quisioner - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/daftar_soal', $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'id_paket'  =>  $i->post('paket_soal'),
                'soal'      =>  $i->post('soal'),
                'tipe_soal' =>  $i->post('tipe_soal')
              );
          $this->DaftarSoal_Model->add_soal($data);
          $this->session->set_flashdata('sukses', 'Berhasil Menambah Soal Quisioner.');
          redirect('admin/daftar_soal');
      }
    }

    public function getDetailSoal($id_soal){
      $data = $this->DaftarSoal_Model->getDetailSoal($id_soal);
      echo json_encode($data);
    }

    public function update_soal()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
          'nama_paket_up',
          'nama_paket_up',
          'required',
          array(  'required'  =>  'Anda belum memilih paket soal.')
      );

      $valid->set_rules(
          'soal_up',
          'soal_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan soal quisioner.')
      );

      $valid->set_rules(
          'tipe_soal_up',
          'tipe_soal_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan tipe soal quisioner.')
      );

        $i  = $this->input;
        if ($valid->run()===false)
        {
            $prodis = $this->DaftarSoal_Model->listing();
            $list_tipe = $this->DaftarSoal_Model->get_tipe();
            $list_paket = $this->Quisioner_Model->get_paket_soal();
            $data = array('isi'           => 'admin/daftar-soal',
                          'daftar_soals'  => $daftar_soals,
                          'list_tipe'     => $list_tipe,
                          'list_paket'    => $list_paket
                          );
            $this->load->view("layouts/wrapper", $data, false);
        }
        else {
            $data = array(
              'id_paket'        =>  $i->post('nama_paket_up'),
              'soal'            =>  $i->post('soal_up'),
              'tipe_soal'       =>  $i->post('tipe_soal_up'),
              'id_soal'         =>  $i->post('id_soal_up')
              );
            $this->DaftarSoal_Model->update_soal($data);
            $this->session->set_flashdata('notifikasi', '<center>Data Soal Quisioner berhasil di update');
            redirect('admin/daftar_soal');
        }
    }

    public function lihat_daftar_soal($id_paket){
      $daftar_soal_paket = $this->DaftarSoal_Model->find_daftar_soal($id_paket);
      $list_paket = $this->Quisioner_Model->get_paket_soal();
      $list_tipe = $this->DaftarSoal_Model->get_tipe();
      $data = array('isi'     => 'admin/daftar-soal',
                    'daftar_soal_paket'=> $daftar_soal_paket,
                    'list_tipe'=> $list_tipe,
                    'list_paket' => $list_paket
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }

    public function delete_soal($id)
    {
      $data = array('id_soal'  =>  $id);
      $this->DaftarSoal_Model->delete_soal($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus soal quisioner');
      redirect('admin/daftar_soal');
    }
  }
