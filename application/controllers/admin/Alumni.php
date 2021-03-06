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
    $this->load->model('Riwayat_Pekerjaan_Model');
  }

  function index()
  {
    $alumnis = $this->Alumni_Model->get_all_alumni();
    $data = array('isi'     => 'admin/view-alumni',
                  'alumnis'=> $alumnis
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_alumni()
  {
    $alumnis      = $this->Alumni_Model->get_all_alumni();
    $negaras      = $this->Negara_Model->get_all_negara();
    $provinsis    = $this->Provinsi_Model->get_all_provinsi();
    $jurusans     = $this->Jurusan_Model->get_all_jurusan();
    $data = array('isi'          => 'admin/add-alumni',
                  'negaras'      =>  $negaras,
                  'jurusans'     =>  $jurusans,
                  'provinsis'    =>  $provinsis,
                  'alumnis'      =>  $alumnis
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function process_add_alumni(){
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
      'callback_ipk_check'
    );
        if ($valid->run()===false) {
          $alumnis      = $this->Alumni_Model->get_all_alumni();
          $negaras      = $this->Negara_Model->get_all_negara();
          $provinsis    = $this->Provinsi_Model->get_all_provinsi();
          $jurusans = $this->Jurusan_Model->get_all_jurusan();
          $data = array('isi'          => 'admin/add-alumni',
                        'negaras'      =>  $negaras,
                        'jurusans' =>  $jurusans,
                        'provinsis'    =>  $provinsis,
                        'alumnis'      =>  $alumnis
                        );
          $this->load->view("layouts/wrapper", $data, false);
        } else {
            $i  = $this->input;
            $rand = bin2hex(random_bytes(12));
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
                  'foto'                =>  'default.jpg',
                  'password'           =>  md5($i->post('password')),
                  'jenjang'            =>  $i->post('jenjang'),
                  'id_jurusan'         =>  $i->post('jurusan'),
                  'id_prodi'           =>  $i->post('prodi'),
                  'angkatan'           =>  $i->post('angkatan'),
                  'tahun_lulus'        =>  $i->post('tahun_lulus'),
                  'tanggal_yudisium'   =>  $tgl_yudisium_proc,
                  'judul_skripsi'      =>  $i->post('judul_skripsi'),
                  'ipk'                =>  $i->post('ipk'),
                  'registered_date'    =>  date("Y-m-d"),
                  'generatednum'       =>  $rand
                );
            $this->Alumni_Model->add_alumni($data);
            $encrypted_id = md5($rand);
            $this->load->library('email');
            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'Codeigniter';
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "400";
            $config['smtp_user']= "sam.paijo77@gmail.com"; // isi dengan email kamu
            $config['smtp_pass']= "eyeofluci666"; // isi dengan password kamu
            $config['crlf']="\r\n";
            $config['newline']="\r\n";
            $config['wordwrap'] = true;
            //memanggil library email dan set konfigurasi untuk pengiriman email

            $this->email->initialize($config);
            //konfigurasi pengiriman
            $this->email->from($config['smtp_user']);
            $this->email->to($i->post('email'));
            $this->email->subject("Verifikasi Akun");
            $message .="Hi ".$i->post('nama')."<br>";
            $message .="Anda terdaftar sebagai alumni di Tracert Alumni Fakultas Ekonomi Bisnis Universitas Brawijaya<br>";
            $message .="Untuk dapat mengakses akun anda, silahkan verifikasi email anda terlebih dahulu melalui link berikut<br>";
            $message .="<br>";
            $message .="<a href='".site_url('alumni/account/verification/'.$i->post('username').'/'.$encrypted_id.'')."'>Verifikasi Disini</a><br>";
            $message .="<br>";
            $message .="<br>";
            $message .="===========================================================================<br>";
            $message .="PSIK Fakultas Ekonomi Bisnis<br>";
            $message .="Universitas Brawijaya<br>";
            $message .="<a href='http://feb.ub.ac.id'>feb.ub.ac.id</a>";
            $this->email->message($message);

            if ($this->email->send()) {
              $this->session->set_flashdata('success', 'Berhasil menambah alumni.');
              redirect('admin/alumni');
            } else {
              echo "gagal kirim email";
            }
          }
        }

    public function update_foto($username){
      $data_alumni = $this->Alumni_Model->detail_alumni($username);
      $data = array('isi'          => 'admin/update-foto-alumni',
                    'data_alumni'  =>  $data_alumni
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }

    public function proses_update_foto($username){
      $config['upload_path']          = './img/alumni_pic/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 3000;
      $config['max_width']            = 5000;
      $config['max_height']           = 5000;
      $config['encrypt_name']         = TRUE;
      $this->load->library('upload', $config);
      // $ayam = $this->upload->do_upload('foto');
      // echo "<pre>";
      // print_r($this->upload->data('file_name'));
      // exit();

      if(! $this->upload->do_upload('foto')){
              $i  = $this->input;
              $data = array(
                    'foto'               =>  'default.jpg',
                    'username'           =>  $username
                  );
              $this->Alumni_Model->update_alumni($data);
              $this->session->set_flashdata('success', 'Update foto alumni gagal.');
              redirect('admin/alumni/detail_alumni/'.$username);
            }else{
              $i  = $this->input;
              $data = array(
                    'foto'               =>  $this->upload->data('file_name'),
                    'username'           =>  $username
                  );
              $this->Alumni_Model->update_alumni($data);
              $this->session->set_flashdata('success', 'Update foto alumni berhasil.');
              redirect('admin/alumni/detail_alumni/'.$username);
            }
          }
    public function ipk_check($ipk)
    {
        if ( is_numeric($ipk) || is_float($ipk) ) {
            return TRUE;
        }
        else if($ipk == "" || $ipk == null)
        {
          return TRUE;
        }
        else {
          {
            $this->form_validation->set_message('ipk_check', 'IPK harus angka.');
            return FALSE;
          }
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

    public function update_alumni($username)
    {
      $data_alumni = $this->Alumni_Model->detail_alumni($username);
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
        'callback_ipk_check'
      );


          if ($valid->run()===false) {
            $alumnis      = $this->Alumni_Model->get_all_alumni();
            $negaras      = $this->Negara_Model->get_all_negara();
            $provinsis    = $this->Provinsi_Model->get_provinsi_by_negara($data_alumni->negara);
            $kotas        = $this->Kota_Model->get_kota_by_provinsi($data_alumni->provinsi);
            $jurusans     = $this->Jurusan_Model->get_all_jurusan();
            $prodis       = $this->Prodi_Model->get_prodi_by_jurusan($data_alumni->id_jurusan);
            $data = array('isi'          => 'admin/update-alumni',
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
                    'ipk'                =>  $i->post('ipk'),
                  );
              $this->Alumni_Model->update_alumni($data);
              $this->session->set_flashdata('success', 'Profil alumni berhasil dirubah.');
              redirect('admin/alumni/detail_alumni/'.$username);
          }
    }

    public function detail_alumni($username){
      $data_alumni = $this->Alumni_Model->detail_alumni($username);
      $riwayat_pekerjaans = $this->Riwayat_Pekerjaan_Model->get_riwayat_by_alumni($username);
      $data = array('isi'     => 'admin/detail-alumni',
                    'data_alumni'=> $data_alumni,
                    'riwayat_pekerjaans' => $riwayat_pekerjaans
                    );
      $this->load->view("layouts/wrapper", $data, false);
    }

    public function delete_alumni($username)
    {
      $data = array('username'  =>  $username);
      $this->Alumni_Model->delete_alumni($data);
      $this->session->set_flashdata('success', 'Berhasil menghapus alumni');
      redirect('admin/alumni');
    }
  }
