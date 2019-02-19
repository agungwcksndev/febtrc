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
    $list_jurusan = $this->Jurusan_Model->get_all_jurusan();
    $list_prodi   = $this->Prodi_Model->get_all_prodi();

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
      }
      else {
          $i            = $this->input;
          $username     = $i->post('username');
          $password     = md5($i->post('password'));
          $check_login_admin     = $this->User_Model->login_admin($username, $password);
          $check_login_operator  = $this->User_Model->login_operator($username, $password);
          $check_login_alumni    = $this->User_Model->login_alumni($username, $password);

          if ($check_login_admin['count_admin'] > 0) {
              if ($check_login_admin['detail_admin']->active == 1) {
                  $this->session->set_userdata('username', $username);
                  $this->session->set_userdata('nama', $check_login_admin['detail_admin']->nama);
                  $this->session->set_userdata('foto', $check_login_admin['detail_admin']->foto);
                  $this->session->set_userdata('akses_level', 'admin');
                    redirect(site_url('admin/dashboard'), 'refresh');
                  }
                  else{
                    $this->session->set_flashdata('notifikasi', '<center>Akun belum aktif.<br> Silahkan verifikasi email terlebih dahulu</center>');
                    redirect(site_url('login'), 'refresh');
                  }
              }
              else if($check_login_operator['count_operator'] > 0) {
                if($check_login_operator['detail_operator']->active == 1){
                  $this->session->set_userdata('username', $username);
                  $this->session->set_userdata('nama', $check_login_operator['detail_operator']->nama);
                  $this->session->set_userdata('foto', $check_login_operator['detail_operator']->foto);
                  $this->session->set_userdata('akses_level', 'operator');
                    redirect(site_url('operator/dashboard'), 'refresh');
                }
                else{
                  $this->session->set_flashdata('notifikasi', '<center>Akun belum aktif.<br> Silahkan verifikasi email terlebih dahulu</center>');
                  redirect(site_url('login'), 'refresh');
                }
              }
              else if($check_login_alumni['count_alumni'] > 0) {
                if($check_login_alumni['detail_alumni']->active == 1){
                  $this->session->set_userdata('username', $username);
                  $this->session->set_userdata('nama', $check_login_alumni['detail_alumni']->nama);
                  $this->session->set_userdata('foto', $check_login_alumni['detail_alumni']->foto);
                  $this->session->set_userdata('jurusan', $check_login_alumni['detail_alumni']->nama_jurusan);
                  $this->session->set_userdata('akses_level', 'alumni');
                    redirect(site_url('alumni/profile/'.$username), 'refresh');
                }
                else{
                  $this->session->set_flashdata('notifikasi', '<center>Akun belum aktif.<br> Silahkan verifikasi email terlebih dahulu</center>');
                  redirect(site_url('login'), 'refresh');
                }
              }
              else{
                $this->session->set_flashdata('notifikasi', '<center>Akun Tidak Terdaftar / Password Salah<br> Pastikan Username & Password sudah benar</center>');
                redirect(site_url('login'), 'refresh');
              }
            }
}
  public function fetch_prodi()
  {
    if($this->input->post('id_jurusan'))
    {
    echo $this->Prodi_Model->get_prodi_by_jurusan_js($this->input->post('id_jurusan'));
    }
  }

  public function logout(){
  $this->session->unset_userdata('username');
  $this->session->unset_userdata('akses_level');
  $this->session->unset_userdata('foto');
  $this->session->unset_userdata('nama');
  $this->session->set_flashdata('notifikasi', '<center>Anda berhasil logout</center>');
  redirect(site_url('login'));
}
}
