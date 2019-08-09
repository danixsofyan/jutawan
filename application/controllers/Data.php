<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Menu_model');
        $this->load->model('Data_model');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
    }

    public function pengunjung()
    {
        $data['title']      = 'Data Pengunjung';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        $id                 = $this->session->userdata('id');
        $data['pengunjung'] = $this->Data_model->getPengunjung($id);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data/pengunjung', $data);
        $this->load->view('templates/admin/footer');
    }

    public function lokasi()
    {
        $data['title']  = 'Data Lokasi';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        if ($role == 1) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin/footer');
        } else if ($role == 2) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $data['list']   = $this->Data_model->getListMember($id);

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/data/lokasi_member', $data);
            $this->load->view('templates/admin/footer');
        }
    }

    public function tambahlokasi()
    {
        $data['title']      = 'Tambah Lokasi';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        $id                 = $this->session->userdata('id');
        $data['kategori']   = $this->Data_model->getKategori();
        $data['sosmed']     = $this->Data_model->getIdSosmed();
        
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/data/tambah_lokasi', $data);
            $this->load->view('templates/admin/footer');
        } else {

            $data = [
                'nama_lks' => $this->input->post('namalks'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'tagline' => $this->input->post('tagline'),
                'tiket' => $this->input->post('tiket'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('notlp'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'sosmed' => $this->input->post('idsosmed'),
                'oprational' => 1,
                'photo' => "p1.jpg",
                'video' => 1,
                'iduser' => $this->session->userdata('id')             
            ];

            $sosmed = [
                'instagram' => $this->input->post('instagram'),
                'facebook' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter')
            ];

            $this->Data_model->addLokasi($data);
            $this->Data_model->addSosmed($sosmed);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Ditambahkan!</div>');
            redirect('data/lokasi');
        }
    }
    
    public function laporan()
    {
        $data['title']  = 'Laporan';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer');
    }

}
