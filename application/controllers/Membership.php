<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Membership extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    // validasi form

    if($this->session->userdata('role_id') != 1){
      return redirect('my404/');
    }
    $this->load->library('form_validation');
    //load model
    $this->load->model('M_kategori');
    $this->load->model('M_Setting');
    $this->load->model('M_member');
    $this->load->model('M_user');
    $this->load->model('M_download');
    $this->load->model('M_membership');
  }

  public function index()
  {
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $membership  = $this->M_membership->daftar();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Daftar Membership',
      'isi'       => 'back_end/membership/v_daftar',
      'user'      =>  $user,
      'membership'    => $membership,
      'image'     => $image,
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function tambah(){
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $member  = $this->M_member->freeMember();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Tambah Membership',
      'isi'       => 'back_end/membership/v_tambah',
      'user'      =>  $user,
      'member'    => $member,
      'image'     => $image,
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function tambahMembership(){
      $this->form_validation->set_rules('jenis_member', 'Jenis_member', 'required', ['required' => 'Jenis member tidak boleh kosong']);
      $this->form_validation->set_rules('id_user', 'Id_user', 'required', ['required' => 'Nama member tidak boleh kosong']);
      $this->form_validation->set_rules('limit_download', 'Limit_download', 'required|integer', ['required' => 'Limit download tidak boleh kosong', 'integer' => 'Inputan berupa angka']);
      $this->form_validation->set_rules('date_expired', 'Date_expired', 'required', ['required' => 'Limit download tidak boleh kosong']);

       if ($this->form_validation->run() == FALSE)
       {
         return redirect('membership/tambah');
       }

       $data = $this->input->post();

       $member = $this->M_member->detail($data['id_user']);
    //    var_dump($data);die;
       $membership = [
            'id_user' => $data['id_user'],
            'id_member' => $member->id,
            'jenis_member' => $data['jenis_member'],
            'limit_download' => $data['limit_download'],
            'date_expired' => $data['date_expired'],
       ];

       $update_member = [
        'jenis_member' => $data['jenis_member'],
       ];

       $this->db->trans_begin();

       $this->M_membership->tambah($membership);
       $this->M_member->update($update_member, $member->user_id);

       if($this->db->trans_status() === FALSE){
            
           $this->db->trans_rollback();
           $this->session->set_flashdata('error', 'Terjadi kesalahan');
           return redirect('membership/tambah');
       }


      $this->db->trans_commit();
      $this->session->set_flashdata('success', 'Berhasil menambahkan data');
      return redirect('membership/tambah');
    }
    
    public function hapus ($id_user){
        $this->db->trans_begin();

        $data = [
            'jenis_member' => '1'
        ];

        $this->M_membership->hapus($id_user);
        $this->M_member->update($data, $id_user);

        if($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->session->set_flashdata('error', 'Terjadi kesalahan');
            return redirect('membership/');
        }

        $this->db->trans_commit();
        $this->session->set_flashdata('success', 'Berhasil menghapus data');
        return redirect('membership/');
    }
}