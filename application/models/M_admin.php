<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function getEmail($email)
    {
        $this->db->get_where('user', ['email' => $email])->row_array();
    }

    public function getTotalPengunjung()
    {
        return $this->db->query("SELECT SUM(jumlah) as jumlah_pengunjung FROM data_pengunjung")->result_array();
    }

    public function getTotalKunjungan($id)
    {
        return $this->db->query("SELECT SUM(jumlah) AS jumlah_kunjungan FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id")->result_array();
    }
    
    public function getUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_role', 'user_role.id = user.role_id');
        return $this->db->get()->result_array();
    }

}
