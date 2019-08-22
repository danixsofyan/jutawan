<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	//get
	public function getUser($email){
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function getTotalPengunjung()
    {
        return $this->db->query("SELECT SUM(jumlah) as jumlah_pengunjung FROM data_pengunjung")->result_array();
    }

    public function getTotalLokasi()
    {
        return $this->db->query("SELECT COUNT(id) as jumlah_lokasi FROM lokasi")->result_array();
    }

    public function getTotalPengguna()
    {
        return $this->db->query("SELECT COUNT(id) as jumlah_pengguna FROM user")->result_array();
    }

    public function getTotalKategori()
    {
        return $this->db->query("SELECT COUNT(id) as jumlah_kategori FROM kategori")->result_array();
    }

    public function getTotalLokasiKelola($id)
    {
        return $this->db->query("SELECT COUNT(iduser) as jumlah_lokasi FROM lokasi WHERE iduser = $id")->result_array();
    }

    public function getTotalKunjungan($id)
    {
        return $this->db->query("SELECT SUM(jumlah) AS jumlah_kunjungan FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id")->result_array();
    }

    public function getTerakhirUpdate($id)
    {
        return $this->db->query("SELECT date FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id ORDER BY date DESC LIMIT 1;")->result_array();
	}
	
	public function getChart($id)
    {
        $query = $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, iduser FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE lokasi.iduser = $id
        group by year(date), month(date)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getChartAll()
    {
        $query = $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
        group by year(date), month(date)");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getKategoriChart()
    {
        return  $this->db->get('kategori')->result_array();
    }

}