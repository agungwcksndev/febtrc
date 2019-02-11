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
    $operators = $this->Operator_Model->listing();
    $data = array('isi'     => 'admin/v-operator',
                  'operators'=> $operators
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_operator()
  {
    $operators      = $this->Operator_Model->listing();
    $data = array('isi'          => 'admin/add-operator',
                  'operators'      =>  $operators
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function proses_add_operator(){
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
          $operators      = $this->Operator_Model->listing();
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

    public function edit_operator($username)
    {
      $data_operator = $this->Operator_Model->find_operator($username);
      $valid       = $this->form_validation;
      $valid->set_rules(
        'nama',
        'nama',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama')
      );

      $valid->set_rules(
        'nim',
        'nim',
        'numeric',
        array(  'numeric'  =>  'NIM harus berupa angka')
      );

      $valid->set_rules(
        'nim',
        'nim',
        'numeric',
        array(  'numeric'  =>  'NIM harus berupa angka')
      );

      $valid->set_rules(
        'email',
        'email',
        'valid_email|is_unique[operator.email]',
        array(  'valid_email'  =>  'Email tidak valid',
                'is_unique[operator.email]' => 'Email sudah terdaftar')
      );

      $valid->set_rules(
        'nim',
        'nim',
        'numeric',
        array(  'numeric'  =>  'NIM harus berupa angka')
      );

      $valid->set_rules(
        'kode_pos_asal',
        'kode_pos_asal',
        'numeric',
        array(  'numeric'  =>  'Kode Pos Alamat Asal harus berupa angka')
      );

      $valid->set_rules(
        'kode_pos_sekarang',
        'kode_pos_sekarang',
        'numeric',
        array(  'numeric'  =>  'Kode Pos Alamat Sekarang harus berupa angka')
      );

      $valid->set_rules(
        'nomor_telepon',
        'nomor_telepon',
        'numeric',
        array(  'numeric'  =>  'Nomor Telepon harus berupa angka')
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
        'jenjang',
        'jenjang',
        'required',
        array(  'required'  =>  'Anda belum mengisikan Jenjang ')
      );

      $valid->set_rules(
        'jurusan',
        'jurusan',
        'required',
        array(  'required'  =>  'Anda belum mengisikan Jurusan')
      );

      $valid->set_rules(
        'prodi',
        'prodi',
        'required',
        array(  'required'  =>  'Anda belum mengisikan Program Studi')
      );

      $valid->set_rules(
        'angkatan',
        'angkatan',
        'required',
        array(  'required'  =>  'Anda belum mengisikan Tahun Angkatan')
      );

      $valid->set_rules(
        'ipk',
        'ipk',
        'decimal',
        array(  'decimal'  =>  'IPK harus berupa angka desimal. Contoh : 4.00')
      );
          if ($valid->run()===false) {
            $operators      = $this->Operator_Model->listing();
            $negaras      = $this->Negara_Model->get_negara();
            $provinsis    = $this->Provinsi_Model->get_provinsi();
            $list_jurusan = $this->Jurusan_Model->listing();
            $data = array('isi'          => 'admin/edit-operator',
                          'negaras'      =>  $negaras,
                          'list_jurusan' =>  $list_jurusan,
                          'provinsis'    =>  $provinsis,
                          'data_operator'  =>  $data_operator
                          );
            $this->load->view("layouts/wrapper", $data, false);
          } else {
              $i  = $this->input;
              $tgl_lahir_proc = date("Y-m-d",strtotime($_POST['tanggal_lahir']));
              $tgl_yudisium_proc = date("Y-m-d",strtotime($_POST['tanggal_yudisium']));
              $data = array(
                    'nama'               =>  $i->post('nama'),
                    'nim'                =>  $i->post('nim'),
                    'email'              =>  $i->post('email'),
                    'jenis_kelamin'      =>  $i->post('jenis_kelamin'),
                    'golongan_darah'     =>  $i->post('golongan_darah'),
                    'tempat_lahir'       =>  $i->post('tempat_lahir'),
                    'tanggal_lahir'      =>  $tgl_lahir_proc,
                    'kewarganegaraan'    =>  $i->post('kewarganegaraan'),
                    'alamat_asal'        =>  $i->post('alamat_asal'),
                    'kode_pos_asal'      =>  $i->post('kode_pos_asal'),
                    'alamat_sekarang'    =>  $i->post('alamat_sekarang'),
                    'kode_pos_sekarang'  =>  $i->post('kode_pos_sekarang'),
                    'negara'             =>  $i->post('negara'),
                    'provinsi'           =>  $i->post('provinsi'),
                    'kota'               =>  $i->post('kota'),
                    'nomor_telepon'      =>  $i->post('nomor_telepon'),
                    'nomor_hp'           =>  $i->post('nomor_hp'),
                    'website'            =>  $i->post('website'),
                    'facebook'           =>  $i->post('facebook'),
                    'twitter'            =>  $i->post('twitter'),
                    'instagram'          =>  $i->post('instagram'),
                    'jenjang'            =>  $i->post('jenjang'),
                    'id_jurusan'         =>  $i->post('jurusan'),
                    'id_prodi'           =>  $i->post('prodi'),
                    'angkatan'           =>  $i->post('angkatan'),
                    'tahun_lulus'        =>  $i->post('tahun_lulus'),
                    'tanggal_yudisium'   =>  $tgl_yudisium_proc,
                    'judul_skripsi'      =>  $i->post('judul_skripsi'),
                    'ipk'                =>  $i->post('ipk')
                  );
              $this->Operator_Model->edit_operator($data);
              $this->session->set_flashdata('success', 'Berhasil menambah operator.');
              redirect('admin/operator/'.$i->post('username'));
          }
    }

    public function detail_operator($username){
      $data_operator = $this->Operator_Model->find_operator($username);
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
