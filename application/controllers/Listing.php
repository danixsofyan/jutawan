<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Listing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $data['title'] = 'Tambah Tempat';
        $this->load->view('templates/home/header', $data);
        $this->load->view('templates/home/breadcrumb', $data);
        $this->load->view('home/addlisting', $data);
        $this->load->view('templates/home/footer', $data);
    }

    public function add()
    {
            $data = [
                'nama'          => $this->input->post('namalks'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'tagline'       => $this->input->post('tagline'),
                'tiket'         => $this->input->post('tiket'),
                'ket'           => $this->input->post('ket'),
                'alamat'        => $this->input->post('alamat'),
                'no_tlp'        => $this->input->post('notlp'),
                'email'         => $this->input->post('email'),
                'website'       => $this->input->post('website'),
                'sosmed'        => $this->input->post('sosmed'),
                'oprational'    => $this->input->post('oprational'),
                'photo'         => $this->input->post('photo'),
                'video'         => $this->input->post('video')         
            ];

            $this->db->insert('lokasi', $data);
    }

    public function detail($id)
	{
		$data['title'] = 'Detil Tempat';
		$data['list'] = $this->home_model->getListById($id);
		// $data['oprational'] = $this->home_model->oprational($id);
		$this->load->view('templates/home/header', $data);
		$this->load->view('templates/home/header_detil', $data);
		$this->load->view('home/detail', $data);
		$this->load->view('templates/home/footer', $data);
	}
    
}