<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
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
            $this->load->view('admin/index_admin', $data);
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
}
