<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_member extends CI_Model
{
    public function detail($user_id)
    {
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->where('user_id', $user_id);
        return $this->db->get()->row();
    }
    
    public function update($data, $user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->update('tb_member',$data);
    }

    public function daftar()
    {
        $this->db->select('tb_member.*, COUNT(tb_log_download.id_user) as total_download');
        $this->db->from('tb_member');
        $this->db->join('tb_log_download', 'tb_log_download.id_user = tb_member.user_id', 'left');
        $this->db->group_by('tb_member.id, tb_member.user_id, tb_member.nama, tb_member.email, tb_member.pekerjaan, tb_member.instansi, tb_member.image, tb_member.alamat, tb_member.jenis_member');
        return $this->db->get()->result();
    }

    public function hapus($user_id)
    {
        $this->db->trans_begin();

        $this->db->where('user_id', $user_id);
        $this->db->delete('tb_member');
        
        $this->db->where('id_user', $user_id);
        $this->db->delete('tb_user');

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return false;
        }
        else
        {
            $this->db->trans_commit();
            return true;
        }
    }

    public function freeMember()
    {
        $this->db->select('*');
        $this->db->from('tb_member');
        $this->db->where('jenis_member', '1');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->result();
    }
}                                                                               