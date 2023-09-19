<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    
    if($this->session->userdata('role_id') != 2){
      return redirect('my404/');
    }
    
    //load model
    $this->load->model('M_member');
    $this->load->model('M_setting');
    $this->load->model('M_download');
    $this->load->model('M_membership');
  }

  public function index()
  {
     // LOAD FUNCTION DARI MODEL
    
    $member = $this->M_member->detail($this->session->id_user);
    $setting = $this->M_setting->daftar();
    $total_download = $this->M_download->totalDownload($this->session->id_user);
    $limit = 0;
    $membership = $this->M_membership->detail($this->session->id_user);
    $isMembershipExpired = false;
    
    if($member->jenis_member == 1){
      $limit = 5 - $this->M_download->getTodayDownload($this->session->id_user);
    }else {
      $limit = $membership->limit_download - $this->M_download->getTodayDownload($this->session->id_user);

      $date_now = date('Y-m-d');
      if(date('Y-m-d', strtotime($membership->date_expired)) < $date_now){
        $limit = 5 - $this->M_download->getTodayDownload($this->session->id_user);
        $isMembershipExpired = true;
      }
    }

    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $data = array(
      'title'     => $title,
      'member'    =>  $member,
      'image'    =>  $image,
      'limit'    =>  $limit,
      'total_download'    =>  $total_download,
      'is_membership_expired' => $isMembershipExpired,
    );


    $this->load->view('front-end/v_dashboard', $data, false);
  }

}