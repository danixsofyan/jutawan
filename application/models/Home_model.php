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

    public function getTotalEdukasi()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 1 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalBelanja()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 2 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalMenginap()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 3 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalSeniBudaya()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 4 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalWisata()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 5 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalEkraf()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 6 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalTransportasi()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 7 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getTotalKuliner()
    {
        return $this->db->query("SELECT SUM(jumlah) AS total 
        FROM data_pengunjung 
        JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
        WHERE lokasi.kategori = 8 AND year(date) = year(CURDATE())")->result_array();
    }

    public function getLokasiEdukasi()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 1
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiBelanja()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 2
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiMenginap()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 3
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiSenibudaya()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 4
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiWisata()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 5
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiEkraf()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 6
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiTransportasi()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 7
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }

    public function getLokasiKuliner()
    {
        return $this->db->query("
            SELECT lokasi.id, nama_lks, kategori, alamat, no_tlp, oprational, website, photo, name, icon, SUM(jumlah) AS jumlah_total
            FROM lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            JOIN data_pengunjung ON data_pengunjung.id_lokasi = lokasi.id
            WHERE kategori = 8
            GROUP BY lokasi.id, nama_lks, kategori, alamat, no_tlp, website, photo, name
            ORDER BY jumlah_total DESC
            ")->result_array();
    }
}
