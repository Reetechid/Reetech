<?php

defined('BASEPATH') or exit('No direct script access allowed');

class portfolio extends CI_Controller
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
    $this->load->model('M_layanan');
    $this->load->model('M_Setting');
    $this->load->model('M_portfolio');
    $this->load->model('M_client');
    //load helper
    $this->load->helper('portfolio');
  }

  public function index()
  {
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    $portfolio  = $this->M_portfolio->daftar();

    $data = array(
      'title'     => $title,
      'subtitle'  => 'Daftar portfolio',
      'isi'       => 'back_end/portfolio/v_daftar',
      'user'      =>  $user,
      'image'     =>  $image,
      'portfolio' => $portfolio
    );

    $this->load->view('back_end/layout/v_wrapper', $data, false);
  }

  public function tambah()
  {
    tambah_validation();
    if ($this->form_validation->run() ==  false) {
      $setting = $this->M_Setting->daftar();
      $title = $setting->nama_perusahaan;
      $image = $setting->image;
      $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
      $layanan  = $this->M_layanan->daftar();

      $data = array(
        'title'     => $title,
        'subtitle'  => 'Tambah Portfolio',
        'isi'       => 'back_end/portfolio/v_tambah',
        'user'      =>  $user,
        'image'     =>  $image,
        'layanan'   =>  $layanan,
      );

      $this->load->view('back_end/layout/v_wrapper', $data, false);
    } else {
      $this->M_portfolio->tambah();
    }
  }

  public function edit($id_portfolio)
  {

    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $layanan = $this->M_layanan->daftar();
    $portfolio   = $this->M_portfolio->detail($id_portfolio);
    $user = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

    // jika post data kosong berarti mengakses halaman edit
    if ($this->input->post() == null) {

      $data = array(
      'title'     => $title,
      'subtitle'  => 'Edit portfolio',
      'layanan'   => $layanan,
      'portfolio' => $portfolio,
      'isi'       => 'back_end/portfolio/v_edit',
      'user'      => $user,
      'image'     =>  $image,
      );
      return $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
    }

    $update_portfolio = [
        'nama_layanan'      => $this->input->post('layanan'),
        'judul_portfolio'   => $this->input->post('judul', true),
        'slug_portfolio'    => url_title($this->input->post('judul', true), 'dash', true),
        'isi_portfolio'     => $this->input->post('isi'),
        'status_portfolio'  => $this->input->post('status'),
        'testimoni'         => $this->input->post('testimoni'),
        'last_modified'     => date('Y-m-d'),
        'date_project'      => $this->input->post('date'),
    ];


    if (!empty($_FILES['image']['name'])) {

      $config['upload_path']   = './assets/img/portfolio/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '5000'; // KB  
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('image')) {
        // End validasi
        $data = array(
          'title'     => $title,
          'subtitle'  => 'Edit portfolio',
          'layanan'  => $layanan,
          'portfolio' => $portfolio,
          'error'     => $this->upload->display_errors(),
          'isi'       => 'back_end/portfolio/v_edit',
          'user'      => $user,
          'image'     =>  $image,
        );
        $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
        // Masuk database
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        //Hapus gambar
        if ($portfolio->gambar_portfolio != "") {
          unlink('./assets/img/portfolio/' . $portfolio->gambar_portfolio);
        }
        // End hapus
       
        $update_portfolio['gambar_portfolio'] = $upload_data['uploads']['file_name'];
      }

    } 

    if(!empty($_FILES['model']['name'])){
      $extension = pathinfo($_FILES['model']['name'], PATHINFO_EXTENSION);
                      
      if($extension != 'zip'){
        $data = array(
          'title'     => $title,
          'subtitle'  => 'Edit portfolio',
          'layanan'  => $layanan,
          'portfolio' => $portfolio,
          'error'     => 'File model harus bertipe zip',
          'isi'       => 'back_end/portfolio/v_edit',
          'user'      => $user,
          'image'     =>  $image,
        );
        return $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
      }
    }

    if (!empty($_FILES['model']['name'])) {
      $config['allowed_types']  = '*';
      $config['file_name']      = $update_portfolio['slug_portfolio'];
      $config['upload_path']    = './files/portfolio/';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('model')) {
        // End validasi
        $data = array(
          'title'     => $title,
          'subtitle'  => 'Edit portfolio',
          'layanan'  => $layanan,
          'portfolio' => $portfolio,
          'error'     => $this->upload->display_errors(),
          'isi'       => 'back_end/portfolio/v_edit',
          'user'      => $user,
          'image'     =>  $image,
        );
        return $this->load->view('back_end/layout/v_wrapper', $data, FALSE);
        // Masuk database
      } else {
        $upload_data = array('uploads' => $this->upload->data());
        //Hapus gambar
        if ($portfolio->url_file != "") {
          unlink('./files/portfolio/' . $portfolio->url_file);
        }
        // End hapus
       
        $update_portfolio['url_file'] = $upload_data['uploads']['file_name'];
      }

    } 
      $this->M_portfolio->edit($update_portfolio, $id_portfolio);
      $this->session->set_flashdata('success', 'Berhasil mengedit data');
      redirect('portfolio');
    
  }

  public function hapus($id_portfolio)
  {
    $portfolio = $this->M_portfolio->detail($id_portfolio);
    // MENGHAPUS FOTO
    if ($portfolio->gambar_portfolio != "") {
      unlink('./assets/img/portfolio/' . $portfolio->gambar_portfolio);
    }
    // MENGHAPUS FILE MODE
    if ($portfolio->url_file != "") {
      unlink('./files/portfolio/' . $portfolio->url_file);
    }

    $this->M_portfolio->hapus($id_portfolio);
  }
}
