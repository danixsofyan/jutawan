<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('lokasi')->result_array();
    }
    
    public function getListHome()
    {
        $this->db->select('lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name, icon, SUM(jumlah) AS jumlah_total');
        $this->db->from('lokasi');
        $this->db->join('kategori', 'kategori.id = lokasi.kategori');
        $this->db->join('data_pengunjung', 'data_pengunjung.id_lokasi = lokasi.id');
        $this->db->group_by('lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name');
        $this->db->order_by('jumlah_total', 'DESC');
        $this->db->limit(3);
        return $this->db->get()->result_array();
    }

    public function getListById($id)
    {
        // return $this->db->get_where('lokasi', ['id' => $id])->row_array();
        return $this->db->query("SELECT * FROM lokasi JOIN sosmed ON sosmed.id = lokasi.sosmed JOIN kategori ON kategori.id = lokasi.kategori WHERE lokasi.id = $id")->row_array();
    }

    public function oprational($id)
    {
        return $this->db->query("SELECT * FROM oprational WHERE id_lokasi = $id")->result_array();
    }
}
