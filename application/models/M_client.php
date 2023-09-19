<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_client extends CI_Model
{
  public function daftar()
  {
    // MENGGAMBIL SEMUA DATA DARI TABLE TB_CLIENT
    $this->db->select('*');
    $this->db->from('tb_client');
    // MENGGABUNGKAN DATA DARI TABLE TB_KATEGORI_CLIENT & TB_CLIENT
    $this->db->order_by('id_client', 'DESC');
    return $this->db->get()->result();
  }

  public function detail($id_client)
  {
    // MENGGAMBIL DATA BERDASARKAN ID_CLIENT
    $this->db->select('*');
    $this->db->from('tb_client');
    // MENGGABUNGKAN DATA DARI TABLE TB_KATEGORI_CLIENT & TB_CLIENT
    $this->db->where('id_client', $id_client);
    return $this->db->get()->row();
  }

  public function tambah()
  {
    $nama = $this->input->post('name', true);
    $website = $this->input->post('website', true);
    $email = $this->input->post('email', true);
    $status = $this->input->post('status', true);
    // CEK GAMBAR JIKA ADA GAMBAR AKAN DIUPLOAD 
    // id   // nama gambar
    $uploadImage = $_FILES['image']['name'];
    // var_dump($uploadImage);
    // die;
    if ($uploadImage) {
      // CEK FILE
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '5048';
      $config['upload_path'] = './assets/img/client/';
      $this->upload->initialize($config);
      // UPLOAD FILE  
      if ($this->upload->do_upload('image')) {
        $gambarclient = $this->upload->data('file_name');
      } else {
        echo $this->upload->display_errors();
      }
    }
    $data = [
      'nama_client'   => htmlspecialchars($nama),
      'email_client'  => htmlspecialchars($email),
      'website'       => $website,
      'gambar_client' => $gambarclient,
      'publish'       => $status,
    ];

    // QUERRY INSERT DATA
    $this->db->insert('tb_client', $data);
    $this->session->set_flashdata('success', 'Berhasil Membuat Berita');
    redirect('client');
  }

  public function edit($data, $id_client)
  {
    // QUERY UPDATE
    $this->db->where('id_client', $id_client);
    return $this->db->update('tb_client', $data);
  }

  public function hapus($data)
  {
    // QUERY HAPUS
    $this->db->where('id_client', $data['id_client']);
    $this->db->delete('tb_client', $data); // FLASH DATA
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('client');
  }
}
