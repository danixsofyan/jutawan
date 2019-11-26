<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('Home_model');
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['title'] 				= 'Jutawan Disbudpar Kota Bandung';
		$data['chart'] 				= $this->Admin_model->getChartAll();
		$data['list'] 				= $this->Home_model->getListHome();
		$data['homeadukasi']		= $this->Home_model->getTotalEdukasi();
		$data['homebelanja']		= $this->Home_model->getTotalBelanja();
		$data['homemenginap']		= $this->Home_model->getTotalMenginap();
		$data['homesenibudaya']		= $this->Home_model->getTotalSeniBudaya();
		$data['homewisata']			= $this->Home_model->getTotalWisata();
		$data['homeekraf']			= $this->Home_model->getTotalEkraf();
		$data['hometransportasi']	= $this->Home_model->getTotalTransportasi();
		$data['homekuliner']		= $this->Home_model->getTotalKuliner();

		$this->load->view('templates/home/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/home/footer_chart', $data);
	}
	
	public function listedukasi()
	{
		$data['title']			= 'Daftar Kategori Edukasi Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiEdukasi();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);

	}

	public function listbelanja()
	{
		$data['title']			= 'Daftar Kategori Belanja Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiBelanja();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);

	}

	public function listmenginap()
	{
		$data['title']			= 'Daftar Kategori Menginap Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiMenginap();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}

	public function listsenibudaya()
	{
		$data['title']			= 'Daftar Kategori Seni Budaya Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiSenibudaya();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}

	public function listwisata()
	{
		$data['title']			= 'Daftar Kategori Wisata Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiWisata();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}

	public function listekraf()
	{
		$data['title']			= 'Daftar Kategori Ekonomi Kreatif Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiEkraf();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}

	public function listtransportasi()
	{
		$data['title']			= 'Daftar Kategori Transportasi Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiTransportasi();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}

	public function listkuliner()
	{
		$data['title']			= 'Daftar Kategori Kuliner Di Kota Bandung';
		$data['lokasiedukasi']	= $this->Home_model->getLokasiKuliner();
		$this->load->view('home/menu/header', $data);
		$this->load->view('home/menu/kategori', $data);
		$this->load->view('templates/home/footer', $data);		
	}
}