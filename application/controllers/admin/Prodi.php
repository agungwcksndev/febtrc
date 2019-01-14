<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_Model');
    $this->load->model('Jurusan_Model');
  }

  function index()
  {
    $prodis = $this->Prodi_Model->listing();
    $list_jurusan = $this->Jurusan_Model->get_jurusan();
    $data = array('isi'           => 'admin/view-prodi',
                  'prodis'       => $prodis,
                  'list_jurusan' => $list_jurusan
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function tambah_prodi()
  {
    $valid = $this->form_validation;

    $valid->set_rules(
        'jurusan',
        'Jurusan',
        'required',
        array(  'required'  =>  'Anda belum memilih nama jurusan.')
      );

    $valid->set_rules(
        'nama_prodi',
        'Nama_prodi',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama program studi.')
      );

      if ($valid->run()===false)
      {
          $data = array('title' => 'Data Program Studi - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/prodi', $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'id_jurusan'      =>  $i->post('jurusan'),
                'nama_prodi'      =>  $i->post('nama_prodi')
              );
          $this->Prodi_Model->tambah_prodi($data);
          $this->session->set_flashdata('sukses', 'Berhasil menambah prodi.');
          redirect('admin/prodi');
      }
    }

    public function getDetailProdi($id_prodi){
      $data = $this->Prodi_Model->getDetailProdi($id_prodi);
      echo json_encode($data);
    }

    public function update_prodi()
        {
            $valid = $this->form_validation;

            $valid->set_rules(
                'nama_jurusan_up',
                'nama_jurusan_up',
                'required',
                array(
              'required'  =>  'Anda belum memilih Jurusan.')
            );

            $valid->set_rules(
                'nama_prodi_up',
                'nama_prodi_up',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Nama Jurusan.')
            );

            $i  = $this->input;
            if ($valid->run()===false) {
              $prodis = $this->Prodi_Model->listing();
              $list_jurusan = $this->Jurusan_Model->get_jurusan();
              $data = array('isi'           => 'admin/view-prodi',
                            'prodis'       => $prodis,
                            'list_jurusan' => $list_jurusan
                            );
              $this->load->view("layouts/wrapper", $data, false);
            } else {
                $data = array(
                  'id_jurusan'       =>  $i->post('nama_jurusan_up'),
                  'nama_prodi'       =>  $i->post('nama_prodi_up'),
                  'id_prodi'         =>  $i->post('id_prodi_up')
                  );
                $this->Prodi_Model->update_prodi($data);
                $this->session->set_flashdata('notifikasi', '<center>Data Program Studi berhasil di update');
                redirect('admin/prodi');
              }
            }

    public function hapus_prodi($id)
    {
      $data = array('id_prodi'  =>  $id);
      $this->Prodi_Model->hapus_prodi($data);
      $this->session->set_flashdata('success', '<center>Berhasil menghapus program studi.');
      redirect('admin/prodi');
    }

}
