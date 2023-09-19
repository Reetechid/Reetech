<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_membership extends CI_Model
{
    public function daftar(){
        $this->db->select('*');
        $this->db->from('tb_membership');
        $this->db->join('tb_member', 'tb_membership.id_member = tb_member.id', 'left');
        return $this->db->get()->result();
    }

    public function detail($id_user){
        $this->db->select('*');
        $this->db->from('tb_membership');
        $this->db->where('id_user', $id_user);
        return $this->db->get()->row();
    }
    
    public function tambah($data){
        return $this->db->insert('tb_membership',$data);
    }

    public function hapus($id_user){
        $this->db->where('id_user',$id_user);
        return $this->db->delete('tb_membership');
    }

}