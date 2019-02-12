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

  public function get_jawaban_soal($id_soal)
  {
    $daftar_jawaban = $this->DaftarJawaban_Model->find_daftar_jawaban($id_soal);
    $detail_soal    = $this->DaftarSoal_Model   ->getDetailSoal($id_soal);
    $data = array('isi'            => 'admin/v-jawaban',
                  'daftar_jawaban' => $daftar_jawaban,
                  'detail_soal'    => $detail_soal
                 );
    $this->load->view("layouts/wrapper", $data, false);
  }

  public function getDetailJawaban($id_jawaban)
  {
    $data = $this->DaftarJawaban_Model->getDetailJawaban($id_jawaban);
    echo json_encode($data);
  }

  function add_jawaban()
  {
    $valid = $this->form_validation;
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

      $i  = $this->input;
      if ($valid->run()===false)
      {
        $this->session->set_flashdata('notifikasi', '<center>Pilihan Jawaban Gagal di Tambahkan');
        redirect('admin/daftar_jawaban/get_jawaban_soal/'.$i->post("soal"));
      }
      else
      {
          $data = array(
                'id_soal'     =>  $i->post('soal'),
                'jawaban'     =>  $i->post('jawaban')
              );
          $this->DaftarJawaban_Model->add_jawaban($data);
          $this->session->set_flashdata('sukses', 'Berhasil Menambah Jawaban Soal Kuesioner.');
          redirect('admin/daftar_jawaban/get_jawaban_soal/'.$i->post("soal"));
      }
    }

    public function update_jawaban()
    {
      $valid = $this->form_validation;

      $valid->set_rules(
          'jawaban_up',
          'jawaban_up',
          'required',
          array(  'required'  =>  'Anda belum mengisikan jawaban soal kuesioner.')
      );

        $i  = $this->input;
        if ($valid->run()===false)
        {
          $this->session->set_flashdata('notifikasi', '<center>Pilihan Jawaban Gagal di Update');
          redirect('admin/daftar_jawaban/get_jawaban_soal/'.$i->post("id_soal_up"));
        }
        else {
            $data = array(
              'id_soal'            =>  $i->post('id_soal_up'),
              'jawaban'            =>  $i->post('jawaban_up'),
              'id_jawaban'         =>  $i->post('id_jawaban_up')
              );
            $this->DaftarJawaban_Model->update_jawaban($data);
            $this->session->set_flashdata('notifikasi', '<center>Data Jawban Soal Kuesioner berhasil di update');
            redirect('admin/daftar_jawaban/get_jawaban_soal/'.$i->post("id_soal_up"));
        }
    }

    public function delete_jawaban($id_jawaban,$id_soal)
    {
      $data = array('id_jawaban'  =>  $id_jawaban);
      $this->DaftarJawaban_Model->delete_jawaban($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus jawaban soal kuesioner');
      redirect('admin/daftar_jawaban/get_jawaban_soal/'.$id_soal);
    }
  }
