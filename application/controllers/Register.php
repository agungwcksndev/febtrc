<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumni_Model');
    $this->load->model('User_Model');
  }

  function index()
  {
    $data = array('title' => 'Pendaftaran Alumni - Fakultas Ekonomi Bisni Universitas Brawijaya' );
    $this->load->view('register', $data, false);
  }

  function regist()
  {
    $valid = $this->form_validation;

    $valid->set_rules(
      'nama',
      'Nama',
      'required',
      array(  'required'  =>  'Anda belum mengisikan nama.')
    );

    $valid->set_rules(
      'nim',
      'Nim',
      'required',
      array(  'required'  =>  'Anda belum mengisikan nim.')
    );

    $valid->set_rules(
      'jenjang',
      'Jenjang',
      'required',
      array(  'required'  =>  'Anda belum mengisikan jenjang.')
    );

    $valid->set_rules(
      'jurusan',
      'Jurusan',
      'required',
      array(  'required'  =>  'Anda belum mengisikan jurusan.')
    );

    $valid->set_rules(
      'prodi',
      'Prodi',
      'required',
      array(  'required'  =>  'Anda belum mengisikan prodi.')
    );

    $valid->set_rules(
      'angkatan',
      'Angkatan',
      'required',
      array(  'required'  =>  'Anda belum mengisikan angkatan.')
    );

    $valid->set_rules(
      'email',
      'Email',
      'required|valid_email|is_unique[alumni.email]',
      array(  'required'    =>  'Anda belum mengisikan email.',
              'valid_email' =>  'Email tidak valid, silahkan gunakan email lain.',
              'is_unique'   =>  'Email sudah terdaftar, silahkan login')
    );

    $valid->set_rules(
      'no_hp',
      'No_hp',
      'required',
      array(  'required'  =>  'Anda belum mengisikan Nomor HP.')
    );

    $valid->set_rules(
      'username',
      'Username',
      'required|is_unique[user.username]',
      array(  'required'  =>  'Anda belum mengisikan username.',
              'is_unique'  =>'Username sudah terdaftar, silahkan gunakan username lain.')
    );

    $valid->set_rules(
      'password',
      'Password',
      'required|min_length[6]',
      array(  'required'  =>  'Anda belum mengisikan password.',
              'min_length'  =>'Password minimal 6 karakter')
    );

    $valid->set_rules(
      'passconf',
      'Password Confirmation',
      'required|matches[password]'
    );

        if ($valid->run()===false) {
          $data = array('title' => 'Pendaftaran Alumni - Fakultas Ekonomi Bisni Universitas Brawijaya' );
          $this->load->view('login', $data, false);
        } else {
            $i  = $this->input;
            $data = array(
                  'nama'          =>  $i->post('nama'),
                  'nim'           =>  $i->post('nim'),
                  'jenis_kelamin' =>  $i->post('jenis_kelamin'),
                  'jenjang'       =>  $i->post('jenjang'),
                  'id_jurusan'    =>  $i->post('jurusan'),
                  'id_prodi'      =>  $i->post('prodi'),
                  'angkatan'      =>  $i->post('angkatan'),
                  'email'         =>  $i->post('email'),
                  'nomor_hp'      =>  $i->post('no_hp'),
                  'username'      =>  $i->post('username')
                );
            $data2 = array(
              'username'      =>  $i->post('username'),
              'password'      =>  md5($i->post('password')),
              'akses_level'   =>  "Alumni"
            );
            $this->Alumni_Model->add($data);
            $this->User_Model->add($data2);
            $this->session->set_flashdata('notifikasi', 'Registrasi berhasil, silahkan login');
            redirect('login');
        }
  }

}
