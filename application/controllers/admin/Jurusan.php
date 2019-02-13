<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Jurusan_Model');
  }

  function index()
  {
    $jurusans = $this->Jurusan_Model->get_all_jurusan();
    $data = array('isi'     => 'admin/view-jurusan',
                  'jurusans'=> $jurusans
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_jurusan()
  {
    $valid = $this->form_validation;
    $valid->set_rules(
        'nama_jurusan',
        'Nama_jurusan',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama jurusan.')
      );

      if ($valid->run()===false)
      {
          $data = array('title' => 'Data Jurusan - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/jurusan', $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'nama_jurusan'      =>  $i->post('nama_jurusan')
              );
          $this->Jurusan_Model->add_jurusan($data);
          $this->session->set_flashdata('sukses', 'Berhasil menambah jurusan.');
          redirect('admin/jurusan');
      }
    }

    public function update_jurusan()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
                'nama_jurusan_up',
                'Nama_jurusan_up',
                'required',
              array(
                'required'  =>  'Anda belum mengisikan nama jurusan.')
              );

        if ($valid->run()===false)
        {
            $data = array('title' => 'Data Jurusan - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
            $this->load->view('admin/view-jurusan', $data, false);
        }
        else
        {
            $i  = $this->input;
            $data = array(
                  'id_jurusan'        => $i->post('id_jurusan_up'),
                  'nama_jurusan'      =>  $i->post('nama_jurusan_up')
                );
            $this->Jurusan_Model->update_jurusan($data);
            $this->session->set_flashdata('sukses', 'Jurusan berhasil diperbarui');
            redirect('admin/jurusan');
        }
    }

    public function delete_jurusan($id)
    {
      $data = array('id_jurusan'  =>  $id);
      $this->Jurusan_Model->delete_jurusan($data);
      $this->session->set_flashdata('sukses', 'Berhasil menghapus jurusan.');
      redirect('admin/jurusan');
    }



  }
