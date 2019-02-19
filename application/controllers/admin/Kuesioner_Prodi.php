<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_Prodi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kuesioner_Model');
    $this->load->model('Prodi_Model');
  }

  function index()
  {
    $paket_soals        = $this->Kuesioner_Model->listingByProdi();
    $list_jenjang       = $this->Kuesioner_Model->get_jenjang();
    $list_nama_tingkat  = $this->Kuesioner_Model->get_tingkat_prodi();
    $prodis             = $this->Prodi_Model->get_all_prodi();
    $data = array('isi'               => 'admin/view-kuesioner-prodi',
                  'paket_soals'       => $paket_soals,
                  'list_jenjang'      => $list_jenjang,
                  'prodis'            => $prodis,
                  'list_nama_tingkat' => $list_nama_tingkat
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_paket_soal()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
        'jenjang_soal',
        'Jenjang_soal',
        'required',
        array(  'required'  =>  'Anda belum memilih jenjang soal.')
      );

    $valid->set_rules(
        'angkatan',
        'Angkatan',
        'required',
        array(  'required'  =>  'Anda belum memilih angkatan.')
      );

    $valid->set_rules(
        'nama_paket',
        'Nama_paket',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
      );

    $valid->set_rules(
        'tingkat_kuesioner',
        'Tingkat_kuesioner',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
    );

    $valid->set_rules(
        'nama_tingkat',
        'Nama_tingkat',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
    );

      if ($valid->run()===false)
      {
          $this->session->set_flashdata('natifikasi', 'Gagal menambah Paket Soal.');
          redirect('admin/kuesioner_prodi');
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'jenjang_soal'      =>  $i->post('jenjang_soal'),
                'angkatan'      =>  $i->post('angkatan'),
                'nama_paket'        =>  $i->post('nama_paket'),
                'tingkat_kuesioner' =>  $i->post('tingkat_kuesioner'),
                'nama_tingkat'      =>  $i->post('nama_tingkat')
              );
          $this->Kuesioner_Model->add_paket_soal($data);
          $this->session->set_flashdata('sukses', 'Berhasil menambah Paket Soal.');
          redirect('admin/kuesioner_prodi');
      }
    }

    public function getDetailPaket($id_paket){
      $data = $this->Kuesioner_Model->getDetailPaket($id_paket);
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
          'angkatan_up',
          'angkatan_up',
          'required',
          array(
        'required'  =>  'Anda belum memilih angkatan.')
      );

      $valid->set_rules(
          'nama_paket_up',
          'nama_paket_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
      );

      $valid->set_rules(
          'nama_tingkat_up',
          'Nama_tingkat_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan nama paket soal.')
      );

        $i  = $this->input;
        if ($valid->run()===false)
        {
            $paket_soals        = $this->Kuesioner_Model->listingByProdi();
            $list_jenjang       = $this->Kuesioner_Model->get_jenjang();
            $list_nama_tingkat  = $this->Kuesioner_Model->get_tingkat_prodi();
            $prodis             = $this->Prodi_Model->get_all_prodi();
            $data = array('isi'          => 'admin/view-kuesioner-prodi',
                          'paket_soals'  => $paket_soals,
                          'list_jenjang' => $list_jenjang,
                          'prodis'        => $prodis,
                          'list_nama_tingkat' => $list_nama_tingkat
                          );
            $this->load->view("layouts/wrapper", $data, false);
        }
        else
        {
            $data = array(
                  'jenjang_soal'    => $i->post('jenjang_soal_up'),
                  'angkatan'    => $i->post('angkatan_up'),
                  'nama_paket'      => $i->post('nama_paket_up'),
                  'id_paket'        => $i->post('id_paket_up'),
                  'nama_tingkat'      => $i->post('nama_tingkat_up')
                );
            $this->Kuesioner_Model->update_paket_soal($data);
            $this->session->set_flashdata('notifikasi', 'Berhasil merubah paket soal!');
            redirect('admin/kuesioner_prodi');
        }
    }

    public function delete_paket_soal($id)
    {
      $data = array('id_paket'  =>  $id);
      $this->Kuesioner_Model->delete_paket_soal($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus paket soal');
      redirect('admin/kuesioner_prodi');
    }
  }
