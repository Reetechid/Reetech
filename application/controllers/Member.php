<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    // validasi form

    if($this->session->userdata('role_id') != 1 && $this->session->userdata('role_id') != 3){
      return redirect('my404/');
    }
    $this->load->library('form_validation');
    //load model
    $this->load->model('M_kategori');
    $this->load->model('M_Setting');
    $this->load->model('M_member');
    $this->load->model('M_user');
    $this->load->model('M_download');
  }

  public function index()
  {
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $member  = $this->M_member->daftar();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Daftar Member',
      'isi'       => 'back_end/member/v_daftar',
      'user'      =>  $user,
      'member'    => $member,
      'image'     => $image,
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function detail($id_user)
  {
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $member   = $this->M_member->detail($id_user);
    $download = $this->M_download->totalDownload($id_user);
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
      $data = array(
        'title'     => $title,
        'subtitle'  => 'Detail member',
        'isi'       => 'back_end/member/v_detail',
        'user'      => $user,
        'image'     => $image,
        'download'     => $download,
        'member'    => $member,
      );
      $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
  }
  
  public function hapus($id_user)
  {
    $member = $this->M_member->detail($id_user);

    if ($member->image != "" || $member->image != "default.png") {
        unlink('./assets/img/profile/' . $member->image);
    }

    $member = $this->M_member->hapus($id_user);

    if(!$member){
        $this->session->set_flashdata('error', 'Terjadi Kesalahan');
        return redirect('member/');
    }
    
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    return redirect('member/');
  }


}