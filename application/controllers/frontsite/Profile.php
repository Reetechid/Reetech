<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->library('user_agent');
    
    if($this->session->userdata('role_id') != 2){
      return redirect('my404/');
    }

    // load library
    $this->load->library('form_validation');
    
    //load model
    $this->load->model('M_member');
    $this->load->model('M_setting');
    $this->load->model('M_download');
    $this->load->model('M_user');
  }

  public function index()
  {
         // LOAD FUNCTION DARI MODEL
    $member = $this->M_member->detail($this->session->id_user);
    $setting = $this->M_setting->daftar();

    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $data = array(
      'title'     => $title,
      'member'    =>  $member,
      'image'    =>  $image,
    );


    $this->load->view('front-end/v_member_profile', $data, false);

  }

  public function edit($user_id)
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Nama tidak boleh kosong!']);
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim', ['required' => 'Pekerjaan tidak boleh kosong!']);
    $this->form_validation->set_rules('instansi', 'Instansi', 'required|trim', ['required' => 'Instansi tidak boleh kosong!']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat tidak boleh kosong!']);
  
    if($this->form_validation->run() == FALSE){
        redirect('frontsite/profile/');
    }

    $data = $this->input->post();

    $member = [
        'nama' => $data['nama'],
        'pekerjaan' => $data['pekerjaan'],
        'instansi' => $data['instansi'],
        'alamat' => $data['alamat'],
    ];

    $user = [
        'nama' => $data['nama'],
    ];

    $this->M_member->update($member,$user_id);
    $this->M_user->updateDataUserFromMember($user,$user_id);

    $this->session->set_flashdata('success', 'Berhasil mengupdate data');
    return redirect('frontsite/profile/');
  }

  public function updateAvatar($user_id){

    $member = $this->M_member->detail($user_id);


    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = FCPATH.'/assets/img/profile/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '12000'; // KB  
        $config['file_name']     = 'member-'.$user_id;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    }

    if(!$this->upload->do_upload('image')) {
        var_dump($this->upload->display_errors());
        die;
    }

    $upload_data = $this->upload->data();


    if($member->image != 'default.png') {
        unlink(FCPATH.'assets/img/profile/' . $member->image);
    }

    $data = [
        'image' => $upload_data['file_name'],
    ];


    $this->M_member->update($data, $user_id);
    $this->M_user->updateDataUserFromMember($data, $user_id);

    $this->session->set_flashdata('success', 'Berhasil mengupdate avatar');
    return redirect('frontsite/profile/');

  }

}