<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Prodi_Model');
  }

  function index()
  {
    $list_jurusan = $this->Jurusan_Model->get_jurusan();
    $list_prodi   = $this->Prodi_Model->get_prodi();

    $valid = $this->form_validation;
    $valid->set_rules(
          'username',
          'Username',
          'required',
    array('required'  =>  'Username harus diisi')
    );

    $valid->set_rules(
          'password',
          'Password',
          'required|min_length[6]',
    array('required'  =>  'Password harus diisi',
          'min_length' =>  'Password minimal 6 karakter')
    );

    if ($valid->run() == false) {
          $data = array('title' => 'Login',
                        'list_jurusan' => $list_jurusan,
                        'list_prodi'   => $list_prodi);
          $this->load->view('login', $data, false);
      } else {
          $i            = $this->input;
          $username     = $i->post('username');
          $password     = md5($i->post('password'));
          $check_login  = $this->User_Model->login($username, $password);

          if (count($check_login) > 0) {
              if ($check_login->active == 1) {
                  $this->session->set_userdata('username', $username);
                  $this->session->set_userdata('akses_level', $check_login->akses_level);
                  $this->session->set_userdata('id', $check_login->id);
                  $this->session->set_userdata('nama', $check_login->nama);
                  if($this->session->userdata('akses_level') == 'Alumni'){
                    redirect(site_url('alumni/dashboard'), 'refresh');
                  }else if($this->session->userdata('akses_level') == 'Admin'){
                    redirect(site_url('admin/dashboard'), 'refresh');
                  }
              } else {
                  $this->session->set_flashdata('notifikasi', '<center>Akun belum aktif.<br> Silahkan verifikasi email terlebih dahulu</center>');
                  redirect(site_url('login'), 'refresh');
              }
          } else {
              $this->session->set_flashdata('notifikasi', '<center>Username dan password tidak cocok</center>');
              redirect(site_url('login'), 'refresh');
          }
      }
  }
  function fetch_prodi()
  {
    if($this->input->post('id_jurusan'))
    {
    echo $this->Prodi_Model->fetch_prodi($this->input->post('id_jurusan'));
    }
  }
}
