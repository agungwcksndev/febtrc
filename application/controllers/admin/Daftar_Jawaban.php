<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_Jawaban extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DaftarJawaban_Model');
    $this->load->model('DaftarSoal_Model');
  }

  function index()
  {

  }

  function add_jawaban()
  {
    $valid->set_rules(
        'soal',
        'Soal',
        'required',
        array(  'required'  =>  'Anda belum mengisikan soal kuesioner.')
      );

    $valid->set_rules(
        'jawaban',
        'Jawaban',
        'required',
        array(  'required'  =>  'Anda belum mengisikan jawaban soal kuesioner.')
        );

      if ($valid->run()===false)
      {
          $data = array('title' => 'Data Jawaban Soal Kuesioner - Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya' );
          $this->load->view('admin/daftar_jawaban', $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'id_soal'      =>  $i->post('soal'),
                'jawaban'      =>  $i->post('jawaban')
              );
          $this->DaftarJawaban_Model->add_jawaban($data);
          $this->session->set_flashdata('sukses', 'Berhasil Menambah Jawaban Soal Kuesioner.');
          redirect('admin/daftar_jawaban');
      }
    }

    public function getDetailJawaban($id_jawaban){
      $data = $this->Daftarjawaban_Model->getDetailJawaban($id_jawaban);
      echo json_encode($data);
    }

    public function update_jawaban()
    {
      $valid->set_rules(
          'soal_up',
          'soal_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan soal kuesioner.')
      );

      $valid->set_rules(
          'jawaban_up',
          'jawaban_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan jawaban soal kuesioner.')
      );

        $i  = $this->input;
        if ($valid->run()===false)
        {
            $daftar_jawabs = $this->DaftarJawaban_Model->listing();
            $data = array('isi'            => 'admin/v-jawaban',
                          'daftar_jawabs'  => $daftar_jawabs
                          );
            $this->load->view("layouts/wrapper", $data, false);
        }
        else {
            $data = array(
              'id_soal'            =>  $i->post('soal_up'),
              'jawaban'            =>  $i->post('jawaban_up'),
              'id_jawaban'         =>  $i->post('id_jawaban_up')
              );
            $this->DaftarJawaban_Model->update_jawaban($data);
            $this->session->set_flashdata('notifikasi', '<center>Data Jawban Soal Kuesioner berhasil di update');
            redirect('admin/daftar_jawaban');
        }
    }

    public function get_jawaban_soal($id_soal)
    {
      $daftar_jawaban = $this->DaftarJawaban_Model->find_daftar_jawaban($id_soal);
      $data = array('isi'            => 'admin/v-jawaban',
                    'daftar_jawaban' => $daftar_jawaban
                   );
      $this->load->view("layouts/wrapper", $data, false);
    }

    public function delete_jawaban($id_jawaban,$id_soal)
    {
      $data = array('id_jawaban'  =>  $id_jawaban);
      $this->DaftarJawaban_Model->delete_jawaban($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus jawaban soal kuesioner');
      redirect('admin/daftar_jawaban/get_jawaban_soal/'.$id_soal);
    }
  }
