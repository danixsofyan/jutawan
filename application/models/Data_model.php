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
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date, date_created, date_update, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();
    }

    public function getLokasiByUser($id)
    {
        $query = "SELECT *
                  FROM `lokasi`
                  WHERE `iduser` = '$id'
                ";
        return $this->db->query($query)->result_array();
    }

    public function getTotalPengunjung()
    {
        return $this->db->query("SELECT SUM(jumlah) as jumlah_pengunjung FROM data_pengunjung")->result_array();
    }

    public function getListById($id)
    {
        // return $this->db->get_where('lokasi', ['id' => $id])->row_array();
        return $this->db->query("SELECT *, lokasi.id FROM lokasi JOIN sosmed ON sosmed.id = lokasi.sosmed JOIN kategori ON kategori.id = lokasi.kategori WHERE lokasi.id = $id")->row_array();
    }

    public function oprational($id)
    {
        return $this->db->query("SELECT * FROM oprational WHERE id_lokasi = $id")->result_array();
    }

    //edit
    public function editLokasi($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('lokasi', $data);;
    }

    public function editSosmed($idsosmed, $data)
    {
        $this->db->where('id', $idsosmed);
        $this->db->update('sosmed', $data);;
    }

    public function setCover($new_image){
        $this->db->set('photo', $new_image);
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

    public function addPengunjung($pengunjung)
    {
        $this->db->insert('data_pengunjung', $pengunjung);
    }

    //edit
    public function editPengunjung($id_pengunjung, $pengunjung)
    {
        $this->db->where('id', $id_pengunjung);
        $this->db->update('data_pengunjung', $pengunjung);
    }

    //delete
    public function deletePengunjung($id){
        $this->db->delete('data_pengunjung', ['id' => $id]);
    }
}
