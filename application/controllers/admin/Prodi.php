<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_Model');
    $this->load->model('Jurusan_Model');
  }

  function index()
  {
    $prodis = $this->Prodi_Model->get_all_prodi();
    $jurusans = $this->Jurusan_Model->get_all_jurusan();
    $data = array('isi'           => 'admin/view-prodi',
                  'prodis'        => $prodis,
                  'jurusans'      => $jurusans
                  );
    $this->load->view("layouts/wrapper", $data, false);
  }

  function add_prodi()
  {
    $valid = $this->form_validation;

    $valid->set_rules(
        'jurusan',
        'Jurusan',
        'required',
        array(  'required'  =>  'Anda belum memilih nama jurusan.')
      );

    $valid->set_rules(
        'nama_prodi',
        'Nama_prodi',
        'required',
        array(  'required'  =>  'Anda belum mengisikan nama program studi.')
      );

      if ($valid->run()===false)
      {
        $prodis = $this->Prodi_Model->get_all_prodi();
        $jurusans = $this->Jurusan_Model->get_all_jurusan();
        $data = array('isi'           => 'admin/view-prodi',
                      'prodis'        => $prodis,
                      'jurusans'      => $jurusans
                      );
        $this->load->view("layouts/wrapper", $data, false);
      }
      else
      {
          $i  = $this->input;
          $data = array(
                'id_jurusan'      =>  $i->post('jurusan'),
                'nama_prodi'      =>  $i->post('nama_prodi')
              );
          $this->Prodi_Model->add_prodi($data);
          $this->session->set_flashdata('sukses', 'Berhasil menambah Program Studi.');
          redirect('admin/prodi');
      }
    }

    public function get_detail_prodi($id_prodi){
      $data = $this->Prodi_Model->get_detail_prodi($id_prodi);
      echo json_encode($data);
    }

    public function update_prodi()
    {
      $valid = $this->form_validation;
      $valid->set_rules(
                'nama_jurusan_up',
                'nama_jurusan_up',
                'required',
              array(
                'required'  =>  'Anda belum memilih Jurusan.')
      );

      $valid->set_rules(
                'nama_prodi_up',
                'nama_prodi_up',
                'required',
              array(
                'required'  =>  'Anda belum mengisikan Nama Jurusan.')
     );

            $i  = $this->input;
            if ($valid->run()===false) {
              $data = array('isi'           => 'admin/view-prodi',
                            'prodis'        => $prodis,
                            'jurusans'      => $jurusans
                            );
              $this->load->view("layouts/wrapper", $data, false);
            } else {
                $data = array(
                  'id_jurusan'       =>  $i->post('nama_jurusan_up'),
                  'nama_prodi'       =>  $i->post('nama_prodi_up'),
                  'id_prodi'         =>  $i->post('id_prodi_up')
                  );
                $this->Prodi_Model->update_prodi($data);
                $this->session->set_flashdata('sukses', 'Berhasil memperbarui Program Studi');
                redirect('admin/prodi');
              }
            }

    public function delete_prodi($id)
    {
      $data = array('id_prodi'  =>  $id);
      $this->Prodi_Model->delete_prodi($data);
      $this->session->set_flashdata('sukses', 'Berhasil menghapus Program Studi.');
      redirect('admin/prodi');
    }

    public function get_prodi_by_jurusan_js(){
      if($this->input->post('id_jurusan'))
      {
      echo $this->Prodi_Model->get_prodi_by_jurusan_js($this->input->post('id_jurusan'));
      }
    }

}
