<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_download extends CI_Model
{
    public function getTodayDownload($user_id)
    {
        $this->db->select('*');
        $this->db->from('tb_log_download');
        $this->db->like('date_created', date('Y-m-d'));
        $this->db->where('id_user', $user_id);
        return $this->db->get()->num_rows();
    }
    public function totalDownload($user_id)
    {
        $this->db->select('*');
        $this->db->from('tb_log_download');
        $this->db->where('id_user', $user_id);
        return $this->db->get()->num_rows();
    }

    public function insert($data){
        return $this->db->insert('tb_log_download', $data);
    }
}