<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quisioner extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Quisioner_Model');
  }

  function index()
  {
    $paket_soals = $this->Quisioner_Model->listing();
    $list_jenjang = $this->Quisioner_Model->get_jenjang();
    $data = array('isi'     => 'admin/view-quisioner',
                  'paket_soals'=> $paket_soals,
                  'list_jenjang' => $list_jenjang
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function tambah_paket_soal()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
        'jenjang_soal',
        'Jenjang_soal',
        'required',
        array(  'required'  =>  'Anda belum memilih jenjang soal.')
      );

    $valid->set_rules(
        'nama_paket',
        'Nama_paket',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
      );

      if ($valid->run()===false)
      {
          $data = array('title' => 'Data Quisioner - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/quisioner', $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'jenjang_soal'    =>  $i->post('jenjang_soal'),
                'nama_paket'      =>  $i->post('nama_paket')
              );
          $this->Quisioner_Model->tambah_paket_soal($data);
          $this->session->set_flashdata('sukses', 'Berhasil menambah Paket Soal.');
          redirect('admin/quisioner');
      }
    }

    public function getDetailPaket($id_paket){
      $data = $this->Quisioner_Model->getDetailPaket($id_paket);
      echo json_encode($data);
    }

    public function update_paket_soal()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
          'jenjang_soal_up',
          'jenjang_soal_up',
          'required',
          array(
        'required'  =>  'Anda belum memilih jenjang soal.')
      );

      $valid->set_rules(
          'nama_paket_up',
          'nama_paket_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
        );
        $i  = $this->input;
        if ($valid->run()===false)
        {
            $paket_soals= $this->Quisioner_Model->listing();
            $list_jenjang = $this->Quisioner_Model->get_jenjang();
            $data = array('isi'          => 'admin/view-quisioner',
                          'paket_soals'  => $paket_soals,
                          'list_jenjang' => $list_jenjang
                          );
            // $this->load->view('admin/v_quisioner', $data, false);
            $this->load->view("layouts/wrapper", $data, false);
        }
        else
        {
            $data = array(
                  'jenjang_soal'    => $i->post('jenjang_soal_up'),
                  'nama_paket'      => $i->post('nama_paket_up'),
                  'id_paket'        => $i->post('id_paket_up')
                );
            $this->Quisioner_Model->update_paket_soal($data);
            $this->session->set_flashdata('notifikasi', 'Berhasil merubah paket soal!');
            redirect('admin/quisioner');
        }
    }

    public function hapus_paket_soal($id)
    {
      $data = array('id_paket'  =>  $id);
      $this->Quisioner_Model->hapus_paket_soal($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus paket soal');
      redirect('admin/quisioner');
    }
  }
