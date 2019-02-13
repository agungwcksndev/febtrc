<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Negara_Model');
    $this->load->model('Provinsi_Model');
    $this->load->model('Kota_Model');
  }

  function index()
  {
    $admins = $this->Admin_Model->get_all_admin();
    $data = array('isi'     => 'admin/view-admin',
                  'admins'=> $admins
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_admin()
  {
    $admins      = $this->Admin_Model->get_all_admin();
    $data = array('isi'          => 'admin/add-admin',
                  'admins'      =>  $admins
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function process_add_admin(){
    $valid = $this->form_validation;
    $valid->set_rules(
      'nama',
      'nama',
      'required',
      array(  'required'  =>  'Anda belum mengisikan nama')
    );

    $valid->set_rules(
      'email',
      'email',
      'valid_email|is_unique[admin.email]',
      array(  'valid_email'  =>  'Email tidak valid',
              'is_unique[admin.email]' => 'Email sudah terdaftar')
    );

    $valid->set_rules(
      'nomor_hp',
      'nomor_hp',
      'required|numeric',
      array(  'required' =>  'Anda belum mengisikan nomor hp',
              'numeric'  =>  'Nomor Telepon harus berupa angka')
    );

    $valid->set_rules(
      'username',
      'username',
      'required|is_unique[admin.username]',
      array(  'required'  =>  'Email tidak valid',
              'is_unique[admin.username]' => 'Username sudah terdaftar')
    );

    $valid->set_rules(
      'password',
      'password',
      'required|is_unique[admin.username]',
      array(  'required'  =>  'Anda belum mengisikan password')
    );

    $valid->set_rules(
      'passconf',
      'passconf',
      'required|matches[password]',
      array(  'required'  =>  'Anda belum mengisikan password konfirmasi',
              'matches[password]' => 'Konfirmasi password tidak sesuai')
    );

        if ($valid->run()===false) {
          $admins      = $this->Admin_Model->get_all_admin();
          $data = array('isi'          => 'admin/add-admin',
                        'admins'      =>  $admins
                        );
          $this->load->view("layouts/wrapper", $data, false);
        } else {
            $i  = $this->input;
            $tgl_lahir_proc = date("Y-m-d",strtotime($_POST['tanggal_lahir']));
            $tgl_yudisium_proc = date("Y-m-d",strtotime($_POST['tanggal_yudisium']));
            $data = array(
                  'nama'               =>  $i->post('nama'),
                  'email'              =>  $i->post('email'),
                  'jenis_kelamin'      =>  $i->post('jenis_kelamin'),
                  'nomor_hp'           =>  $i->post('nomor_hp'),
                  'username'           =>  $i->post('username'),
                  'password'           =>  md5($i->post('password')),
                );
            $this->Admin_Model->add_admin($data);
            $this->session->set_flashdata('success', 'Berhasil menambah admin.');
            redirect('admin/admin');
        }
    }

    public function update_admin($username)
    {
      $data_admin = $this->Admin_Model->detail_admin($username);
      $valid       = $this->form_validation;
      $valid->set_rules(
        'nama',
        'nama',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama')
      );

      $valid->set_rules(
        'email',
        'email',
        'valid_email|callback_check_user_email',
        array(  'valid_email'  =>  'Email tidak valid')
      );

      $valid->set_rules(
        'nomor_hp',
        'nomor_hp',
        'required|numeric',
        array(  'required' =>  'Anda belum mengisikan nomor hp',
                'numeric'  =>  'Nomor Telepon harus berupa angka')
      );
          if ($valid->run()===false) {
            $admins      = $this->Admin_Model->get_all_admin();
            $data = array('isi'          => 'admin/update-admin',
                          'data_admin'  =>  $data_admin
                          );
            $this->load->view("layouts/wrapper", $data, false);
          } else {
              $i  = $this->input;
              $data = array(
                    'nama'               =>  $i->post('nama'),
                    'email'              =>  $i->post('email'),
                    'jenis_kelamin'      =>  $i->post('jenis_kelamin'),
                    'nomor_hp'           =>  $i->post('nomor_hp'),
                    'username'           =>  $i->post('username')
                  );
              $this->Admin_Model->update_admin($data);
              $this->session->set_flashdata('success', 'Berhasil merubah data admin.');
              redirect('admin/admin/detail_admin/'.$i->post('username'));
          }
    }

    public function check_user_email($email) {
          if($this->input->post('username'))
          {
              $username = $this->input->post('username');
          }
          else
          {
              $username = '';
          }
          $result = $this->Admin_Model->check_unique_user_email($username, $email);
          if($result == 0)
          {
              $response = true;
          }
          else
          {
              $this->form_validation->set_message('check_user_email', 'Email must be unique');
              $response = false;
          }
          return $response;
      }

    public function detail_admin($username){
      $data_admin = $this->Admin_Model->detail_admin($username);
      $data = array('isi'     => 'admin/detail-admin',
                    'data_admin'=> $data_admin
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }
    public function delete_admin($username)
    {
      $data = array('username'  =>  $username);
      $this->Admin_Model->delete_admin($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus admin');
      redirect('admin/admin');
    }
  }
