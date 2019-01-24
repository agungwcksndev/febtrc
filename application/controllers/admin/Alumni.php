<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumni_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Prodi_Model');
    $this->load->model('Negara_Model');
    $this->load->model('Provinsi_Model');
    $this->load->model('Kota_Model');
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
    $negaras      = $this->Negara_Model->get_negara();
    $provinsis    = $this->Provinsi_Model->get_provinsi();
    $list_jurusan = $this->Jurusan_Model->listing();
    $data = array('isi'          => 'admin/tambah-alumni',
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
      'valid_email|is_unique[alumni.email]',
      array(  'valid_email'  =>  'Email tidak valid',
              'is_unique[alumni.email]' => 'Email sudah terdaftar')
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
      'required|is_unique[alumni.username]',
      array(  'required'  =>  'Anda belum mengisikan username',
              'is_unique[alumni.username]' => 'Username sudah terdaftar')
    );

    $valid->set_rules(
      'password',
      'password',
      'required|is_unique[alumni.username]',
      array(  'required'  =>  'Anda belum mengisikan password')
    );

    $valid->set_rules(
      'passconf',
      'passconf',
      'required|matches[password]',
      array(  'required'  =>  'Anda belum mengisikan password konfirmasi',
              'matches[password]' => 'Konfirmasi password tidak sesuai')
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
          $alumnis      = $this->Alumni_Model->listing();
          $negaras      = $this->Negara_Model->get_negara();
          $provinsis    = $this->Provinsi_Model->get_provinsi();
          $list_jurusan = $this->Jurusan_Model->listing();
          $data = array('isi'          => 'admin/tambah-alumni',
                        'negaras'      =>  $negaras,
                        'list_jurusan' =>  $list_jurusan,
                        'provinsis'    =>  $provinsis,
                        'alumnis'      =>  $alumnis
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
                  'username'           =>  $i->post('username'),
                  'password'           =>  md5($i->post('password')),
                  'jenjang'            =>  $i->post('jenjang'),
                  'id_jurusan'         =>  $i->post('jurusan'),
                  'id_prodi'           =>  $i->post('prodi'),
                  'angkatan'           =>  $i->post('angkatan'),
                  'tahun_lulus'        =>  $i->post('tahun_lulus'),
                  'tanggal_yudisium'   =>  $tgl_yudisium_proc,
                  'judul_skripsi'      =>  $i->post('judul_skripsi'),
                  'ipk'                =>  $i->post('ipk')
                );
            $this->Alumni_Model->tambah_alumni($data);
            $this->session->set_flashdata('success', 'Berhasil menambah alumni.');
            redirect('admin/alumni');
        }
    }

    public function fetch_provinsi(){
      if($this->input->post('id_negara'))
      {
      echo $this->Provinsi_Model->fetch_provinsi($this->input->post('id_negara'));
      }
    }

    public function fetch_provinsi_edit(){
      echo $this->Provinsi_Model->fetch_provinsi($this->input->post('id_negara'));
    }

    public function fetch_kota(){
      if($this->input->post('id_provinsi'))
      {
      echo $this->Kota_Model->fetch_kota($this->input->post('id_provinsi'));
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
          $result = $this->Alumni_Model->check_unique_user_email($username, $email);
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

    public function edit_alumni($username)
    {
      $data_alumni = $this->Alumni_Model->find_alumni($username);
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
        'Email',
        'email',
        'valid_email|callback_check_user_email',
        array(  'valid_email'  =>  'Email tidak valid')
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
            $alumnis      = $this->Alumni_Model->listing();
            $negaras      = $this->Negara_Model->get_negara();
            $provinsis    = $this->Provinsi_Model->get_provinsi();
            $kotas        = $this->Kota_Model->get_kota($data_alumni->provinsi);
            $jurusans     = $this->Jurusan_Model->listing();
            $prodis       = $this->Prodi_Model->list_prodi($data_alumni->id_jurusan);
            $data = array('isi'          => 'admin/edit-alumni',
                          'negaras'      =>  $negaras,
                          'provinsis'    =>  $provinsis,
                          'kotas'        =>  $kotas,
                          'jurusans'     =>  $jurusans,
                          'prodis'       =>  $prodis,
                          'data_alumni'  =>  $data_alumni
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
                    'username'           =>  $username,
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
              $this->Alumni_Model->update_alumni($data);
              $this->session->set_flashdata('success', 'Profil alumni berhasil dirubah.');
              redirect('admin/alumni/'.$i->post('username'));
          }
    }

    public function detail_alumni($username){
      $data_alumni = $this->Alumni_Model->find_alumni($username);
      $data = array('isi'     => 'admin/detail-alumni',
                    'data_alumni'=> $data_alumni
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }

    public function hapus_alumni($username)
    {
      $data = array('username'  =>  $username);
      $this->Alumni_Model->hapus_alumni($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus alumni');
      redirect('admin/alumni');
    }
  }
