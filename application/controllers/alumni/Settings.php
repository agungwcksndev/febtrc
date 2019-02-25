<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Alumni_Model');
    $this->load->model('Riwayat_Pekerjaan_Model');
    $this->load->model('Negara_Model');
    $this->load->model('Provinsi_Model');
    $this->load->model('Kota_Model');
    $this->load->model('Jurusan_Model');
    $this->load->model('Prodi_Model');
  }

  function index()
  {
    $username = $this->session->userdata('username');
    $user = $this->Alumni_Model->detail_alumni($username);
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

        if ($valid->run()===false) {
          $username = $this->session->userdata('username');
          $user = $this->Alumni_Model->detail_alumni($username);
          $negaras      = $this->Negara_Model->get_all_negara();
          $provinsis    = $this->Provinsi_Model->get_provinsi_by_negara($user->negara);
          $kotas        = $this->Kota_Model->get_kota_by_provinsi($user->provinsi);
          $data = array('isi'     => 'alumni/update-identitas',
                        'user'=> $user,
                        'negaras'=> $negaras,
                        'provinsis'=> $provinsis,
                        'kotas'=> $kotas
                        );
          $this->load->view("layouts/user-settings-wrapper", $data, false);
        } else {
            $i  = $this->input;
            $tgl_lahir = str_replace('/', '-', $_POST['datetimepicker']);
            $tgl_lahir_proc = date('Y-m-d', strtotime($tgl_lahir));
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
                  'instagram'          =>  $i->post('instagram')
                );
                // echo "<pre>";
                // print_r($_POST['datetimepicker']);
                // exit();
            $this->Alumni_Model->update_alumni($data);
            $this->session->set_flashdata('success', 'Identitas diri berhasil diperbarui.');
            redirect('alumni/settings/');
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
  public function change_password(){
    $username = $this->session->userdata('username');
    $user = $this->Alumni_Model->detail_alumni($username);
    $valid       = $this->form_validation;
    $i  = $this->input;
    $valid->set_rules(
      'password_old',
      'password_old',
      'required',
      array(  'required'  =>  'Anda belum mengisikan Password saat ini')
    );
    $valid->set_rules(
      'password_new',
      'password_new',
      'required',
      array(  'required'  =>  'Anda belum mengisikan Password baru')
    );
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password_new]');

        if ($valid->run()===false) {
          $username = $this->session->userdata('username');
          $user = $this->Alumni_Model->detail_alumni($username);
          $data = array('isi'     => 'alumni/update-password',
                        'user'=> $user,
                        );
          $this->load->view("layouts/user-settings-wrapper", $data, false);
        } else if(md5($i->post('password_old')) == $user->password){

            $i  = $this->input;
            $data = array(
                  'password'           =>  md5($i->post('password_new')),
                  'username'           =>  $username,
                );
            $this->Alumni_Model->update_alumni($data);
            $this->session->set_flashdata('success', 'Password berhasil diperbarui.');
            redirect('alumni/settings/change_password');
        }
        else{
          $username = $this->session->userdata('username');
          $user = $this->Alumni_Model->detail_alumni($username);
          $data = array('isi'     => 'alumni/update-password',
                        'user'=> $user,
                        );
          $this->session->set_flashdata('error', 'Password saat ini salah');
          $this->load->view("layouts/user-settings-wrapper", $data, false);
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

      public function informasi_lulusan(){
        $username = $this->session->userdata('username');
        $user     = $this->Alumni_Model->detail_alumni($username);
        $valid    = $this->form_validation;
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
              $username = $this->session->userdata('username');
              $user = $this->Alumni_Model->detail_alumni($username);
              $jurusans     = $this->Jurusan_Model->get_all_jurusan();
              $prodis       = $this->Prodi_Model->get_prodi_by_jurusan($user->id_jurusan);
              $data = array('isi'     => 'alumni/update-informasi-lulusan',
                            'user'=> $user,
                            'jurusans' => $jurusans,
                            'prodis'  =>  $prodis
                            );
              $this->load->view("layouts/user-settings-wrapper", $data, false);
            } else {
                $i  = $this->input;
                $yudisium = str_replace('/', '-', $_POST['datetimepicker']);
                $tgl_yudisium_proc = date("Y-m-d",strtotime($yudisium));
                $data = array(
                      'username'           =>  $username,
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
                $this->session->set_flashdata('success', 'Informasi Lulusan berhasil diperbarui.');
                redirect('alumni/settings/informasi_lulusan');
            }
          }
          public function riwayat_pekerjaan(){
            $username = $this->session->userdata('username');
            $user = $this->Alumni_Model->detail_alumni($username);
            $pekerjaans = $this->Riwayat_Pekerjaan_Model->get_riwayat_by_alumni($username);
            $data = array('isi'     => 'alumni/v-riwayat-pekerjaan',
                          'user'=> $user,
                          'pekerjaans'=> $pekerjaans
                          );
            $this->load->view("layouts/user-settings-wrapper", $data, false);
          }

          public function add_riwayat_pekerjaan(){
            $valid = $this->form_validation;

            $valid->set_rules(
                'tempat_kerja',
                'tempat_kerja',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Tempat Kerja.')
            );

            $valid->set_rules(
                'datetimepicker',
                'datetimepicker',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Mulai Kerja.')
            );

            $valid->set_rules(
                'datetimepicker2',
                'datetimepicker2',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
            );

            $i  = $this->input;
            if ($valid->run()===false) {
                $username = $this->session->userdata('username');
                $user = $this->Alumni_Model->detail_alumni($username);
                $data = array('isi'     => 'alumni/add-riwayat-pekerjaan',
                              'user'=> $user
                              );
                $this->load->view("layouts/user-settings-wrapper", $data, false);
            } else {
              if(!isset($_POST['sekarang'])){
                $username = $this->session->userdata('username');
                $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker']));
                $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2']));
                $data = array(
                  'username'               =>  $username,
                  'tempat_kerja'           =>  $i->post('tempat_kerja'),
                  'posisi'                 =>  $i->post('posisi'),
                  'mulai_kerja'            =>  $tanggal_mulai,
                  'berhenti_kerja'         =>  $tanggal_berhenti,
                  'posisi'                 =>  $i->post('posisi'),
                  'alamat_kerja'           =>  $i->post('alamat'),
                  'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan'),
                  'golongan_pns'           =>  $i->post('golongan_pns')
                  );
                $this->Riwayat_Pekerjaan_Model->add_riwayat_pekerjaan($data);
                $this->session->set_flashdata('success', 'Berhasil menambah Riwayat Pekerjaan');
                redirect('alumni/settings/riwayat_pekerjaan');
              }else{
                $username = $this->session->userdata('username');
                $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker']));
                $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2']));
                $data = array(
                  'username'               =>  $username,
                  'tempat_kerja'           =>  $i->post('tempat_kerja'),
                  'posisi'                 =>  $i->post('posisi'),
                  'mulai_kerja'            =>  $tanggal_mulai,
                  'berhenti_kerja'         =>  $tanggal_berhenti,
                  'sekarang'               =>  '1',
                  'posisi'                 =>  $i->post('posisi'),
                  'alamat_kerja'           =>  $i->post('alamat'),
                  'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan'),
                  'golongan_pns'           =>  $i->post('golongan_pns')
                  );
                $this->Riwayat_Pekerjaan_Model->add_riwayat_pekerjaan($data);
                $this->session->set_flashdata('success', 'Berhasil menambah Riwayat Pekerjaan');
                redirect('alumni/settings/riwayat_pekerjaan');
              }
              }
          }

          public function update_riwayat_pekerjaan($id_riwayat_pekerjaan){
            $data_riwayat = $this->Riwayat_Pekerjaan_Model->get_riwayat_by_id($id_riwayat_pekerjaan);
            $valid = $this->form_validation;

            $valid->set_rules(
                'tempat_kerja',
                'tempat_kerja',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Tempat Kerja.')
            );

            $valid->set_rules(
                'datetimepicker',
                'datetimepicker',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Mulai Kerja.')
            );

            $valid->set_rules(
                'datetimepicker2',
                'datetimepicker2',
                'required',
                array(
              'required'  =>  'Anda belum mengisikan Berhenti Kerja.')
            );

            $i  = $this->input;
            if ($valid->run()===false) {
                $username = $this->session->userdata('username');
                $user = $this->Alumni_Model->detail_alumni($username);
                $data = array('isi'     => 'alumni/update-riwayat-pekerjaan',
                              'user' => $user,
                              'data_riwayat' => $data_riwayat
                              );
                $this->load->view("layouts/user-settings-wrapper", $data, false);
            } else {
              if(!isset($_POST['sekarang'])){
                $username = $this->session->userdata('username');
                $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker']));
                $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2']));
                $data = array(
                  'username'               =>  $username,
                  'tempat_kerja'           =>  $i->post('tempat_kerja'),
                  'posisi'                 =>  $i->post('posisi'),
                  'mulai_kerja'            =>  $tanggal_mulai,
                  'berhenti_kerja'         =>  $tanggal_berhenti,
                  'posisi'                 =>  $i->post('posisi'),
                  'alamat_kerja'           =>  $i->post('alamat'),
                  'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan'),
                  'golongan_pns'           =>  $i->post('golongan_pns')
                  );
                $this->Riwayat_Pekerjaan_Model->update_riwayat_pekerjaan($data);
                $this->session->set_flashdata('success', 'Berhasil memperbarui Riwayat Pekerjaan');
                redirect('alumni/settings/riwayat_pekerjaan');
              }else{
                $username = $this->session->userdata('username');
                $tanggal_mulai = date("Y-m-d",strtotime($_POST['datetimepicker']));
                $tanggal_berhenti = date("Y-m-d",strtotime($_POST['datetimepicker2']));
                $data = array(
                  'username'               =>  $username,
                  'tempat_kerja'           =>  $i->post('tempat_kerja'),
                  'posisi'                 =>  $i->post('posisi'),
                  'mulai_kerja'            =>  $tanggal_mulai,
                  'berhenti_kerja'         =>  $tanggal_berhenti,
                  'sekarang'               =>  '1',
                  'posisi'                 =>  $i->post('posisi'),
                  'alamat_kerja'           =>  $i->post('alamat'),
                  'pendapatan_per_bulan'   =>  $i->post('pendapatan_per_bulan'),
                  'golongan_pns'           =>  $i->post('golongan_pns')
                  );
                $this->Riwayat_Pekerjaan_Model->update_riwayat_pekerjaan($data);
                $this->session->set_flashdata('success', 'Berhasil memperbarui Riwayat Pekerjaan');
                redirect('alumni/settings/riwayat_pekerjaan');
              }
              }
          }
        }
