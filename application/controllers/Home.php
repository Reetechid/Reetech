<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    // load helpers
    $this->load->helper('download');

    //load model
    $this->load->model('M_berita');
    $this->load->model('M_kategori');
    $this->load->model('M_layanan');
    $this->load->model('M_Setting');
    $this->load->model('M_staff');
    $this->load->model('M_portfolio');
    $this->load->model('M_client');
    $this->load->model('M_dashboard');
    $this->load->model('M_member');
    $this->load->model('M_download');
    $this->load->model('M_membership');
  }

  public function index()
  {
    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->recent_berita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_Setting->daftar();
    $staff  = $this->M_staff->daftar();
    $portfolio = $this->M_portfolio->recent_portfolio();
    $client  = $this->M_client->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title'     => $title,
      'isi'       => 'front-end/v_home',
      'layanan'   => $layanan,
      'setting'   => $setting,
      'berita'    => $berita,
      'staff'     => $staff,
      'portfolio' => $portfolio,
      'client'    => $client,
      'image'     => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function blog()
  {

    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->daftar();
    $lastst_berita = $this->M_berita->lastst_berita();
    $kategori = $this->M_kategori->daftarKategoriBerita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title'         => $title,
      'subtitle'      => 'Blog',
      'isi'           => 'front-end/v_blog',
      'berita'        => $berita,
      'kategori'      => $kategori,
      'lastst_berita' => $lastst_berita,
      'layanan'       => $layanan,
      'setting'       => $setting,
      'image'         => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function detail($slug_berita)
  {
    // LOAD FUNCTION DARI MODEL
    $lastst_berita = $this->M_berita->lastst_berita();
    $berita = $this->M_berita->read($slug_berita);
    $layanan = $this->M_layanan->daftar();
    $kategori = $this->M_kategori->daftarKategoriBerita();
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title'         => $berita->judul_berita,
      'isi'           => 'front-end/v_blog_detail',
      'layanan'       => $layanan,
      'berita'        => $berita,
      'kategori'      => $kategori,
      'lastst_berita' => $lastst_berita,
      'setting'       => $setting,
      'image'         => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function detailLayanan($slug_layanan)
  {

    // LOAD FUNCTION DARI MODEL
    $detail = $this->M_layanan->read($slug_layanan);
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title'   => $detail->judul_layanan,
      'isi'     => 'front-end/v_layanan_detail',
      'layanan' => $layanan,
      'detail'  => $detail,
      'setting' => $setting,
      'image'   => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function portfolio()
  {

    // LOAD FUNCTION DARI MODEL
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $portfolio = $this->M_portfolio->daftar();

    $data = array(
      'title'     =>  $title,
      'isi'       => 'front-end/v_portfolio',
      'setting'   => $setting,
      'portfolio' => $portfolio,
      'image'     => $image,

    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }
  public function portfolioDetail($slug_portfolio)
  {

    // LOAD FUNCTION DARI MODEL
    $berita = $this->M_berita->recent_berita();
    $layanan = $this->M_layanan->daftar();
    $setting = $this->M_Setting->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;
    $staff  = $this->M_staff->daftar();
    $portfolio = $this->M_portfolio->read($slug_portfolio);

    $data = array(
      'title'     =>  $portfolio->judul_portfolio,
      'isi'       => 'front-end/v_portfolio_detail',
      'layanan'   => $layanan,
      'setting'   => $setting,
      'berita'    => $berita,
      'staff'     => $staff,
      'portfolio' => $portfolio,
      'image'     => $image,

    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function portfolioDownload($slug_portfolio)
  {
    // cek apakah sudah login
    if ($this->session->userdata('email') == null || $this->session->userdata('role_id') == 1) {
      redirect(base_url('auth'));
    }

    $member = $this->M_member->detail($this->session->id_user);


    $setting = $this->M_Setting->daftar();
    $portfolio = $this->M_portfolio->read($slug_portfolio);
    $data = array(
      'title'     =>  $portfolio->judul_portfolio,
      'isi'       => 'front-end/v_portfolio_download',
      'portfolio' => $portfolio,
      'setting'   => $setting,
      'image'     => $setting->image,
      'member'     => $member,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }

  public function download($slug_portfolio){
    // cek apakah sudah login
    if ($this->session->userdata('email') == null ) {
      redirect(base_url('auth'));
    }
    $portfolio = $this->M_portfolio->read($slug_portfolio);
    $totalDownloadToday = $this->M_download->getTodayDownload($this->session->id_user);
    $member = $this->M_member->detail($this->session->id_user);
    $membership = $this->M_membership->detail($this->session->id_user);

    if($member->jenis_member == 1){                                               
      if(5 - $totalDownloadToday <= 0){
          $this->session->set_flashdata('warning', 'Download harian mencapai limit');
          return redirect('home/portfolioDownload/'. $slug_portfolio);
      }
    }else{
      if($membership->limit_download - $totalDownloadToday <= 0){
        $this->session->set_flashdata('warning', 'Download harian mencapai limit');
        return redirect('home/portfolioDownload/'. $slug_portfolio);
      }
    }

    $date_now = date('Y-m-d');
    if(date('Y-m-d', strtotime($membership->date_expired)) < $date_now){
      if(5 - $totalDownloadToday <= 0){
          $this->session->set_flashdata('warning', 'Member anda telah expired. Download harian mencapai limit, Silahkan perpanjang member anda');
          return redirect('home/portfolioDownload/'. $slug_portfolio);
      }
    }

    $path = file_get_contents(base_url(). 'files/portfolio/'. $portfolio->url_file);
    $extension = pathinfo($portfolio->url_file, PATHINFO_EXTENSION);

    $name = $portfolio->judul_portfolio.'.'.$extension;


    if(!file_exists(FCPATH. 'files/portfolio/'. $portfolio->url_file)){
      $this->session->set_flashdata('warning', 'File tidak ditemukan');
      return redirect('home/portfolioDownload/'. $slug_portfolio);
    }
    
    $data = [
      'id_user' => $member->user_id,
    ];

    $this->M_download->insert($data);
    force_download($name, $path);
  }

  public function about()
  {
    // LOAD FUNCTION DARI MODEL
    $setting = $this->M_Setting->daftar();
    $staff  = $this->M_staff->daftar();
    $title = $setting->nama_perusahaan;
    $image = $setting->image;

    $data = array(
      'title'     => $title,
      'isi'       => 'front-end/v_profile',
      'setting'   => $setting,
      'staff'     => $staff,
      'image'     => $image,
    );

    $this->load->view('front-end/layout/v_wrapper', $data, false);
  }
}
