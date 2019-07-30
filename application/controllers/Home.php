<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$data['title'] = 'Jutawan Disbudpar Kota Bandung';
		$data['list'] = $this->M_home->getListHome();
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/home_footer', $data);
	}
}