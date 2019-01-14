<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumni_Model');
    $this->load->model('Jurusan_Model');
  }

  function index()
  {
    $alumnis = $this->Alumni_Model->listing();
    $data = array('isi'     => 'admin/view-alumni',
                  'alumnis'=> $alumnis
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function tambah_alumni()
  {
    $alumnis      = $this->Alumni_Model->listing();
    $negaras      = $this->Alumni_Model->get_negara();
    $provinsis    = $this->Alumni_Model->get_provinsi();
    $list_jurusan = $this->Jurusan_Model->listing();
    $data = array('isi'          => 'admin/tambah-data-alumni',
                  'negaras'      =>  $negaras,
                  'list_jurusan' =>  $list_jurusan,
                  'provinsis'    =>  $provinsis,
                  'alumnis'      =>  $alumnis
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function proses_tambah_alumni(){
    $valid = $this->form_validation;
    $valid->set_rules(
      'nama',
      'Nama',
      'required',
      array(  'required'  =>  'Anda belum mengisikan nama alumni.')
    );
        if ($valid->run()===false) {
          $data = array('title' => 'Data Alumni - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/alumni', $data, false);
        } else {
            $i  = $this->input;
            $data = array(
                  'nama'      =>  $i->post('nama')
                );
            $this->Alumni_Model->tambah_alumni($data);
            $this->session->set_flashdata('sukses', 'Berhasil menambah alumni.');
            redirect('admin/alumni');
        }
    }

    public function fetch_provinsi(){
      if($this->input->post('id_negara'))
      {
      echo $this->Alumni_Model->fetch_provinsi($this->input->post('id_negara'));
      }
    }

    public function fetch_kota(){
      if($this->input->post('id_provinsi'))
      {
      echo $this->Alumni_Model->fetch_kota($this->input->post('id_provinsi'));
      }
    }

    public function update_alumni()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
          'nama_up',
          'Nama_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan nama alumni.')
        );
        if ($valid->run()===false)
        {
            $data = array('title' => 'Data Alumni - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
            $this->load->view('admin/v_alumni', $data, false);
        }
        else
        {
            $i  = $this->input;
            $data = array(
                  'username'        => $i->post('username_up'),
                  'nama'      =>  $i->post('nama_up')
                );
            $this->Alumni_Model->update_alumni($data);
            $this->session->set_flashdata('notifikasi', 'Berhasil menambahkan alumni!');
            redirect('admin/alumni');
        }
    }

    public function hapus_alumni($id)
    {
      $data = array('username'  =>  $id);
      $this->Alumni_Model->hapus_alumni($data);
      $this->session->set_flashdata('success', '<center>Berhasil menghapus alumni.');
      redirect('admin/alumni');
    }
  }
