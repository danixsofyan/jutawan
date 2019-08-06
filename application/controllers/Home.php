<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$data['title'] = 'Jutawan Disbudpar Kota Bandung';
		$data['list'] = $this->Home_model->getListHome();
		$this->load->view('templates/home/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/home/footer', $data);
	}
}