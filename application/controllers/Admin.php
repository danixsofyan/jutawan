<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Budpar_model');
    }

    public function index()
    {
        $data['title']  = 'Dashboard';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        if ($role == 1) {
            $data['pengunjung']     = $this->Admin_model->getTotalPengunjung();
            $data['lokasi']         = $this->Admin_model->getTotalLokasi();
            $data['pengguna']       = $this->Admin_model->getTotalPengguna();
            $data['kategori']       = $this->Admin_model->getTotalKategori();
            $data['chart']          = $this->Admin_model->getChartAll();
            $data['ktgrchart']      = $this->Admin_model->getKategoriChart();
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin/footer_dashboard');
        } else if ($role == 2) {
            $data['totaledukasi']       = $this->Budpar_model->getTotalEdukasi();
            $data['totalbelanja']       = $this->Budpar_model->getTotalBelanja();
            $data['totalmenginap']      = $this->Budpar_model->getTotalMenginap();
            $data['totalsenbud']        = $this->Budpar_model->getTotalSenbud();
            $data['totalwisata']        = $this->Budpar_model->getTotalWisata();
            $data['totalekraf']         = $this->Budpar_model->getTotalEkraf();
            $data['totaltransport']     = $this->Budpar_model->getTotalTransport();
            $data['totalkuliner']       = $this->Budpar_model->getTotalKuliner();
            $data['chart']              = $this->Admin_model->getChartAll();
            $data['ktgrchart']          = $this->Admin_model->getKategoriChart();
            $data['kunjungan']         = $this->Budpar_model->getAllPengunjung();

            $data['title']  = 'Dashboard Juatawan';
            $this->load->view('budpar/templatesbudpar/header', $data);
            $this->load->view('budpar/templatesbudpar/topbar', $data);
            $this->load->view('budpar/index', $data);
            $this->load->view('budpar/templatesbudpar/footer', $data);
        } else {
            $data['pengunjung']     = $this->Admin_model->getTotalPengunjung();
            $data['kunjungan']      = $this->Admin_model->getTotalKunjungan($id);
            $data['kelola_lokasi']  = $this->Admin_model->getTotalLokasiKelola($id);
            $data['update']         = $this->Admin_model->getTerakhirUpdate($id);
            $data['chart']          = $this->Admin_model->getChart($id);
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/index_member', $data);
            $this->load->view('templates/admin/footer_dashboard');
        }
    }

    public function allkategori()
    {
        $data['title']  = 'Semua Kategori';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $allkategori = $this->input->post('allkategori');
        $data['allkategori']      = $this->Budpar_model->getListAllKategori();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/allkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }

    public function kategori($ids)
    {
        $data['title']  = 'Tabel';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $berdasarkankategori = $this->input->post('berdasarkankategori');
        $data['berdasarkankategori']      = $this->Budpar_model->getListKategori($ids);
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/kategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }

    public function kategoriEdukasi()
    {
        $data['title']  = 'Tabel Edukasi';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriEdukasi();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriBelanja()
    {
        $data['title']  = 'Tabel Belanja';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriBelanja();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriMenginap()
    {
        $data['title']  = 'Tabel Menginap';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriMenginap();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriSeniBudaya()
    {
        $data['title']  = 'Tabel Seni Budaya';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriSeniBudaya();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriWisata()
    {
        $data['title']  = 'Tabel Wisata';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriWisata();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriEkraf()
    {
        $data['title']  = 'Tabel Ekonomi Kreatif';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriEkonomiKreatif();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriTransportasi()
    {
        $data['title']  = 'Tabel Transportasi';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriTransportasi();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
    public function kategoriKuliner()
    {
        $data['title']  = 'Tabel Kuliner';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriKuliner();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/perkategori');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }

    public function tabel()
    {
        $data['title']  = 'Tabel Kuliner';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');
        $data['kunjungan']         = $this->Budpar_model->getAllPengunjung();

        $kankategori = $this->input->post('kategori');
        $data['kategori']      = $this->Budpar_model->getKategoriKuliner();
        
        $data['judul']  = 'Dashboard Juatawan';
        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/tabel');
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }

    public function laporan()
    {
        $data['judul']  = 'Laporan';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        $tahun = $this->input->post('listTahun');
        $bulan = $this->input->post('bulan');
        $lokasi = $this->input->post('lokasi');

        $datacetak['listTahun']   = $this->Budpar_model->getListTahun();
        $datacetak['listBulan']   = $this->Budpar_model->getListBulan();
        $datacetak['lokasi']      = $this->Budpar_model->getListLokasi();

        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/laporan', $datacetak);
        $this->load->view('budpar/templatesbudpar/footer', $data); 
    }

    public function cetakExcel()
    {
        $data['title']      = 'Data Pengunjung';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        $id                 = $this->session->userdata('id');
        /*cetak*/

        $taun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $lokasi = $this->input->post('lokasi');


        if ($taun == 0 AND $bulan == 0 AND $lokasi == 0) {
            $data['pengunjung'] = $this->Budpar_model->getCetakSemuaPengunjung();
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == 0) {
            $data['pengunjung'] = $this->Budpar_model->getCetakTaunPengunjung($taun);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == 0) {
            $data['pengunjung'] = $this->Budpar_model->getCetakBulanPengunjung($bulan);
        } else if ($taun == 0 AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Budpar_model->getCetakLokasiPengunjung($lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == 0) {
            $data['pengunjung'] = $this->Budpar_model->getCetakTaunBulanPengunjung($taun, $bulan);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Budpar_model->getCetakTaunLokasiPengunjung($taun, $lokasi);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Budpar_model->getCetakBulanLokasiPengunjung($bulan, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Budpar_model->getCetakTaunBulanLokasiPengunjung($taun, $bulan, $lokasi);
        }


        if ($taun == 0 AND $bulan == 0 AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalSemuaPengunjung();
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalTaunPengunjung($taun);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalBulanPengunjung($bulan);
        } else if ($taun == 0 AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalLokasiPengunjung($lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalTaunBulanPengunjung($taun, $bulan);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalTaunLokasiPengunjung($taun, $lokasi);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalBulanLokasiPengunjung($bulan, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Budpar_model->getTotalTaunBulanLokasiPengunjung($taun, $bulan, $lokasi);
        }


        $this->load->view('admin/data/cetak_datakunjungan', $data);
    }

    public function grafik()
    {
        $data['judul']  = 'Grafik Kunjungan Wisatawan Kota Bandung';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');
       



        $datacetak['listTahun'] = $this->Budpar_model->getListTahun();
        $datacetak['listBulan'] = $this->Budpar_model->getListBulan();
        $datacetak['kategori']  = $this->Budpar_model->getPilihanKategori();

        $tahun = $this->input->post('taun');
        $bulan = $this->input->post('bulan');
        $lokasi = $this->input->post('lokasi');        

        if ($tahun == 0) {
            $data['grafik'] = $this->Budpar_model->getAllDataPengunjung();
        } else if ($tahun == $tahun) {
            $datacetak['grafik'] = $this->Budpar_model->getTahunDataPengunjung($tahun);
        }


        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/grafik', $datacetak);
        $this->load->view('budpar/templatesbudpar/footer', $data);
    }

    public function chart()
    {
        $data['title']  = 'Tabel Chart';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');        
        $data['judul']  = 'Chart';

        $datacetak['listTahun'] = $this->Budpar_model->getListTahun();
        $datacetak['listBulan'] = $this->Budpar_model->getListBulan();
        $datacetak['kategori']  = $this->Budpar_model->getPilihanKategori();

        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        $kategori = $this->input->post('kategori');

        if ($tahun == 0 AND $bulan == 0 AND $kategori == 0) {
            $data['grafik'] = $this->Budpar_model->getAllDataPengunjung();
        } else if ($tahun == $tahun AND $bulan == 0 AND $kategori == 0) {
            $data['grafik'] = $this->Budpar_model->getTahunDataPengunjung($tahun);
        } else if ($tahun == 0 AND $bulan == $bulan AND $kategori == 0) {
            $data['grafik'] = $this->Budpar_model->getBulanDataPengunjung($bulan);
        } else if ($tahun == 0 AND $bulan == 0 AND $kategori == $kategori) {
            $data['grafik'] = $this->Budpar_model->getKategoriDataPengunjung($kategori);
        } else if ($tahun == $tahun AND $bulan == $bulan AND $kategori == 0) {
            $data['grafik'] = $this->Budpar_model->getTahunBulanDataPengunjung($tahun, $bulan);
        } else if ($tahun == $tahun AND $bulan == 0 AND $kategori == $kategori) {
            $data['grafik'] = $this->Budpar_model->getTahunKategoriDataPengunjung($tahun, $kategori);
        } else if ($tahun == 0  AND $bulan == $bulan AND $kategori == $kategori) {
            $data['grafik'] = $this->Budpar_model->getBulanKategoriDataPengunjung($bulan, $kategori);
        } else if ($tahun == $tahun AND $bulan == $bulan AND $kategori == $kategori) {
            $data['grafik'] = $this->Budpar_model->getTahunBulanKategoriDataPengunjung($tahun, $bulan, $kategori);
        } else if ($tahun == "" AND $bulan == "" AND $kategori == ""){
            echo "Tidak ada data";
        }

        $this->load->view('budpar/templatesbudpar/header', $data);
        $this->load->view('budpar/templatesbudpar/topbar', $data);
        $this->load->view('budpar/menu/chart', $datacetak);
        $this->load->view('budpar/menu/tabel_grafik', $data);
        $this->load->view('budpar/templatesbudpar/footer', $data);       
    }
}
