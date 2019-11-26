<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Budpar_model extends CI_Model
{

	public function getTotalEdukasi()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_eduasi 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 1")->result_array();
    }

    public function getTotalBelanja()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_belanja 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 2")->result_array();
    }

    public function getTotalMenginap()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_menginap 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 3")->result_array();
    }

    public function getTotalSenbud()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_senibudaya 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 4")->result_array();
    }

    public function getTotalWisata()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_wisata 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 5")->result_array();
    }

    public function getTotalEkraf()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_ekraf 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 6")->result_array();
    }

    public function getTotalTransport()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_transport 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 7")->result_array();
    }

    public function getTotalKuliner()
    {
         return $this->db->query("SELECT SUM(jumlah) AS total_kuliner 
			FROM data_pengunjung 
			JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
			WHERE lokasi.kategori = 8")->result_array();
    }

    public function getListAllKategori()
    {
        $query = "SELECT kategori.id as id, kategori.name as name, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();
    }

    public function getListKategori($ids)
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = $ids
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriEdukasi()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 1
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriBelanja()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 2
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriMenginap()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 3
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriSeniBudaya()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 4
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriWisata()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 5
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriEkonomiKreatif()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 6
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriTransportasi()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 7
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getKategoriKuliner()
    {
        $query = "SELECT kategori.id, kategori.name as name, lokasi.nama_lks as lks, sum(data_pengunjung.jumlah) as jmlh
				FROM kategori
				JOIN lokasi 
				ON lokasi.kategori = kategori.id
				JOIN data_pengunjung
				ON lokasi.id = data_pengunjung.id_lokasi 
				WHERE kategori.id = 8
				GROUP BY kategori.id ASC
                ";
        return $this->db->query($query)->result_array();    	
    }

    public function getAllPengunjung()
    {
        $query = "SELECT user.name as name, lokasi.nama_lks, kategori.name as nm, year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, date, data_pengunjung.date_created, date_update, data_pengunjung.id 
			FROM data_pengunjung
			JOIN lokasi 
			ON lokasi.id = data_pengunjung.id_lokasi
			JOIN user
			ON user.id = lokasi.iduser
			JOIN kategori
			ON kategori.id = lokasi.kategori
			group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id
        ";
        return $this->db->query($query)->result_array();   
    }

    /*view data cetak excel*/
        public function getListTahun()
    {
        $query = "SELECT DISTINCT year(`date`) as date
                FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
                ORDER BY year(`date`) ASC
                ";
        return $this->db->query($query)->result_array();
    }

    public function getListBulan()
    {
        $query = "SELECT DISTINCT month(`date`) as date
                FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
                
                ORDER BY month(`date`) ASC
                ";
        return $this->db->query($query)->result_array();
    }

    public function getListLokasi()
    {
        $query = "SELECT *
                  FROM `lokasi`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getPilihanKategori()
    {
        $query = "SELECT kategori.id as idk, kategori.name as nmk, id_lokasi as lks, nama_lks as nmlks
            FROM data_pengunjung 
            JOIN lokasi 
            ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori
            ON kategori.id = lokasi.kategori
            GROUP BY kategori.id ASC";
        return $this->db->query($query)->result_array();
    }

    /*cetak data pegunjung excel*/

    public function getCetakTaunPengunjung($taun)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE year(date) = $taun 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();        
    }

    public function getCetakBulanPengunjung($bulan)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id 
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE month(date) = $bulan 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();        
    }

    public function getCetakLokasiPengunjung($lokasi)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id 
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE lokasi.id = $lokasi 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();        
    }

    public function getCetakTaunBulanPengunjung($taun, $bulan) 
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id 
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE year(date) = $taun AND month(date) = $bulan 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();         
    }

    public function getCetakTaunLokasiPengunjung($taun, $lokasi)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE year(date) = $taun AND lokasi.id = $lokasi 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();       
    }

    public function getCetakBulanLokasiPengunjung($bulan, $lokasi)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE month(date) = $bulan AND lokasi.id = $lokasi 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();       
    }

    public function getCetakTaunBulanLokasiPengunjung($taun, $bulan, $lokasi)
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi WHERE year(date) = $taun AND month(date) = $bulan AND lokasi.id = $lokasi 
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();        
    }
    
    public function getCetakSemuaPengunjung()
    {
        return $this->db->query("SELECT year(date) as y, month(date) as m, sum(jumlah) as jumlah, id_lokasi, iduser, lokasi.nama_lks, date_created, data_pengunjung.id 
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
        group by year(date), month(date), id_lokasi, date_created, data_pengunjung.id")->result_array();
    }    

    /*cetak total*/

    public function getTotalTaunPengunjung($taun)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE year(date) = $taun")->result_array();       
    }

    public function getTotalBulanPengunjung($bulan)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE month(date) = $bulan")->result_array();        
    }

    public function getTotalLokasiPengunjung($lokasi)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE lokasi.id = $lokasi")->result_array();        
    }

    public function getTotalTaunBulanPengunjung($taun, $bulan) 
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE year(date) = $taun AND month(date) = $bulan")->result_array();         
    }

    public function getTotalTaunLokasiPengunjung($taun, $lokasi)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE year(date) = $taun AND lokasi.id = $lokasi")->result_array();       
    }

    public function getTotalBulanLokasiPengunjung($bulan, $lokasi)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE month(date) = $bulan AND lokasi.id = $lokasi")->result_array();       
    }

    public function getTotalTaunBulanLokasiPengunjung($taun, $bulan, $lokasi)
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi 
            WHERE year(date) = $taun AND month(date) = $bulan AND lokasi.id = $lokasi")->result_array();        
    } 
    
    public function getTotalSemuaPengunjung()
    {
        return $this->db->query("SELECT sum(jumlah) as jumlah
            FROM data_pengunjung JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi"
            )->result_array();
    }

    public function getAllDataPengunjung()
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            
            GROUP BY id_lokasi ASC");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getTahunDataPengunjung($tahun)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            WHERE year(date) = $tahun
            GROUP BY id_lokasi ASC");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getBulanDataPengunjung($bulan)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            WHERE month(date) = $bulan
            GROUP BY id_lokasi ASC");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getKategoriDataPengunjung($kategori)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            WHERE kategori.id = $kategori
            GROUP BY id_lokasi ASC");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function getTahunBulanDataPengunjung($tahun, $bulan)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            WHERE year(date) = $tahun AND month(date) = $bulan
            GROUP BY id_lokasi ASC");
 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            } 
            return $hasil;
        } 
    }

    public function getTahunKategoriDataPengunjung($tahun, $kategori)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            WHERE year(date) = $tahun AND kategori.id = $kategori
            GROUP BY id_lokasi ASC");
 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            } 
            return $hasil;
        } 
    }

    public function getBulanKategoriDataPengunjung($bulan, $kategori)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            WHERE month(date) = $bulan AND kategori.id = $kategori
            GROUP BY id_lokasi ASC");
 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            } 
            return $hasil;
        } 
    }

    public function getTahunBulanKategoriDataPengunjung($tahun, $bulan, $kategori)
    {
        $query = $this->db->query("SELECT id_lokasi as lks, nama_lks as nmlks, year(date) as y, month(date) as m, sum(jumlah) as jumlah 
            FROM data_pengunjung 
            JOIN lokasi ON lokasi.id = data_pengunjung.id_lokasi
            JOIN kategori ON kategori.id = lokasi.kategori
            WHERE year(date) = $tahun AND month(date) =$bulan AND kategori.id = $kategori
            GROUP BY id_lokasi ASC");
 
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            } 
            return $hasil;
        } 
    }

}