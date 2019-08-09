<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    //get
    public function getAll()
    {
        return $this->db->get('lokasi')->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function getIdSosmed()
    {
        return $this->db->query("SELECT max(id) as id FROM sosmed")->result_array();
    }

    //get member
    public function getListMember($id)
    {
        $this->db->select('lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name, icon');
        $this->db->from('lokasi');
        $this->db->join('kategori', 'kategori.id = lokasi.kategori');
        $this->db->where('lokasi.iduser', $id);
        $this->db->group_by('lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name');
        return $this->db->get()->result_array();
    }

    public function getPengunjung($id)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();
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
    
    //add
    public function addLokasi($data)
    {
        $this->db->insert('lokasi', $data);
    }

    public function addSosmed($sosmed)
    {
        $this->db->insert('sosmed', $sosmed);
    }
}
