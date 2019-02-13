<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Operator_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Negara_Model');
    $this->load->model('Provinsi_Model');
    $this->load->model('Kota_Model');
  }

  function index()
  {
    $operators = $this->Operator_Model->get_all_operator();
    $data = array('isi'     => 'admin/view-operator',
                  'operators'=> $operators
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_operator()
  {
    $operators      = $this->Operator_Model->get_all_operator();
    $data = array('isi'          => 'admin/add-operator',
                  'operators'      =>  $operators
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function process_add_operator(){
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
      'valid_email|is_unique[operator.email]',
      array(  'valid_email'  =>  'Email tidak valid',
              'is_unique[operator.email]' => 'Email sudah terdaftar')
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
      'required|is_unique[operator.username]',
      array(  'required'  =>  'Email tidak valid',
              'is_unique[operator.username]' => 'Username sudah terdaftar')
    );

    $valid->set_rules(
      'password',
      'password',
      'required|is_unique[operator.username]',
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
          $operators      = $this->Operator_Model->get_all_operator();
          $data = array('isi'          => 'admin/add-operator',
                        'operators'      =>  $operators
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
            $this->Operator_Model->add_operator($data);
            $this->session->set_flashdata('success', 'Berhasil menambah operator.');
            redirect('admin/operator');
        }
    }

    public function update_operator($username)
    {
      $data_operator = $this->Operator_Model->detail_operator($username);
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
            $operators      = $this->Operator_Model->get_all_operator();
            $data = array('isi'          => 'admin/update-operator',
                          'data_operator'  =>  $data_operator
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
              $this->Operator_Model->update_operator($data);
              $this->session->set_flashdata('success', 'Berhasil merubah data operator.');
              redirect('admin/operator/detail_operator/'.$i->post('username'));
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
          $result = $this->Operator_Model->check_unique_user_email($username, $email);
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

    public function detail_operator($username){
      $data_operator = $this->Operator_Model->detail_operator($username);
      $data = array('isi'     => 'admin/detail-operator',
                    'data_operator'=> $data_operator
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }
    public function delete_operator($username)
    {
      $data = array('username'  =>  $username);
      $this->Operator_Model->delete_operator($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus operator');
      redirect('admin/operator');
    }
  }
