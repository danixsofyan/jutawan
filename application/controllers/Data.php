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
        $this->load->model('Budpar_model');
    }

    public function index()
    {
        $data['title']      = 'Data Pengunjung';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        $id                 = $this->session->userdata('id');

        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('datepicker', 'datepicker', 'required');
        $this->form_validation->set_rules('id_lokasi', 'lokasi', 'required');

        if ($this->form_validation->run() == false) {
            if ($role == 1) {
                $data['pengunjung'] = $this->Data_model->getAllPengunjung();
                $data['lokasi']     = $this->Data_model->getAllLokasi();
                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/topbar', $data);
                $this->load->view('admin/data/pengunjung_admin', $data);
                $this->load->view('templates/admin/footer');
            } else if ($role == 2) {
                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/topbar', $data);
                $this->load->view('admin/data/pengunjung', $data);
                $this->load->view('templates/admin/footer');
            } else {
                $data['pengunjung'] = $this->Data_model->getPengunjung($id);
                $data['lokasi']     = $this->Data_model->getLokasiByUser($id);
                $this->load->view('templates/admin/header', $data);
                $this->load->view('templates/admin/sidebar', $data);
                $this->load->view('templates/admin/topbar', $data);
                $this->load->view('admin/data/pengunjung', $data);
                $this->load->view('templates/admin/footer');
            }
            
        } else {
            $pengunjung = [
            // 'id_lokasi'     => $this->session->userdata('id'),
                'id_lokasi'     => $this->input->post('id_lokasi'),
                'date'          => $this->input->post('datepicker'),
                'jumlah'        => $this->input->post('jumlah'),
                'date_created'  => date("Y-m-d"),
                'date_update'  => date("Y-m-d")
            ];

            $this->Data_model->addPengunjung($pengunjung);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pengunjung berhasil Ditambahkan</div>');
            redirect('data');
        }
    }

    public function editPengunjung()
    {
        $data['title']      = 'Data Pengunjung';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        $id                 = $this->session->userdata('id');
        $data['pengunjung'] = $this->Data_model->getPengunjung($id);
        $data['lokasi']   = $this->Data_model->getLokasiByUser($id);

        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('editdatepicker', 'editdatepicker', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/data/pengunjung', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $pengunjung = [
                'date'          => $this->input->post('editdatepicker'),
                'jumlah'        => $this->input->post('jumlah'),
                'date_created'  => $this->input->post('date_created'),
                'date_update'  => date("Y-m-d")
            ];

            $id_pengunjung   = $this->input->post('id');
            $this->Data_model->editPengunjung($id_pengunjung, $pengunjung);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil diubah!</div>');
            redirect('data');
        }
    }

    public function deletePengunjung($id)
    {
        $this->Data_model->deletePengunjung($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dihapus!</div>');
        redirect('data');
    }

    public function lokasi()
    {
        $data['title']  = 'Data Lokasi';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);
        $role           = $this->session->userdata('role_id');
        $id             = $this->session->userdata('id');

        if ($role == 1) {
            $data['lokasi']   = $this->Data_model->getAllLokasiUser();

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/data/lokasi', $data);
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
        $data['kategori']   = $this->Data_model->getKategori();
        $data['sosmed']     = $this->Data_model->getIdSosmed();
        
        $this->form_validation->set_rules('namalks', 'Nama Lokasi', 'required');
        $this->form_validation->set_rules('photo', 'Photo', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin/data/tambah_lokasi', $data);
            $this->load->view('templates/admin/footer');
        } else {           

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/admin/img/cover/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/admin/img/cover/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

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
                'oprational' => $this->input->post('oprational'),
                'photo' => $new_image,
                'video' => "null",
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

    public function ubahLokasi($id)
    {
        $data['title']      = 'Ubah Lokasi';
        $email              = $this->session->userdata('email');        
        $data['user']       = $this->Admin_model->getUser($email);
        $role               = $this->session->userdata('role_id');
        // $id                 = $this->session->userdata('id');
        $data['kategori']   = $this->Data_model->getKategori();
        $data['sosmed']     = $this->Data_model->getIdSosmed();
        $data['list']       = $this->Data_model->getListById($id);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data/ubah_lokasi', $data);
        $this->load->view('templates/admin/footer');
    }

    public function save()
    {

        $id   = $this->input->post('id');
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
            'sosmed' => $this->input->post('sosmed'),
            'oprational' => $this->input->post('oprational'),
            'video' => "null" 
        ];
        $idsosmed = $this->input->post('sosmed');
        $sosmed = [
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter')
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/admin/img/cover/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/admin/img/cover/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->Data_model->setCover($new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        $this->Data_model->editLokasi($id, $data);
        $this->Data_model->editSosmed($idsosmed, $sosmed);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil dirubah!</div>');
        redirect('data/lokasi');

    }
    
    public function laporan()
    {
        $data['title']  = 'Laporan';
        $email          = $this->session->userdata('email');        
        $data['user']   = $this->Admin_model->getUser($email);

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin/data/laporan', $data);
        $this->load->view('templates/admin/footer');
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
            $data['pengunjung'] = $this->Data_model->getCetakSemuaPengunjung($id);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == 0) {
            $data['pengunjung'] = $this->Data_model->getCetakTaunPengunjung($id, $taun);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == 0) {
            $data['pengunjung'] = $this->Data_model->getCetakBulanPengunjung($id, $bulan);
        } else if ($taun == 0 AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Data_model->getCetakLokasiPengunjung($id, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == 0) {
            $data['pengunjung'] = $this->Data_model->getCetakTaunBulanPengunjung($id, $taun, $bulan);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Data_model->getCetakTaunLokasiPengunjung($id, $taun, $lokasi);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Data_model->getCetakBulanLokasiPengunjung($id, $bulan, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['pengunjung'] = $this->Data_model->getCetakTaunBulanLokasiPengunjung($id, $taun, $bulan, $lokasi);
        } 


        if ($taun == 0 AND $bulan == 0 AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalSemuaPengunjung($id);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalTaunPengunjung($id, $taun);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalBulanPengunjung($id, $bulan);
        } else if ($taun == 0 AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalLokasiPengunjung($id, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == 0) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalTaunBulanPengunjung($id, $taun, $bulan);
        } else if ($taun == $taun AND $bulan == 0 AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalTaunLokasiPengunjung($id, $taun, $lokasi);
        } else if ($taun == 0 AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalBulanLokasiPengunjung($id, $bulan, $lokasi);
        } else if ($taun == $taun AND $bulan == $bulan AND $lokasi == $lokasi) {
            $data['totalpengunjungbu'] = $this->Data_model->getTotalTaunBulanLokasiPengunjung($id, $taun, $bulan, $lokasi);
        } 


         $this->load->view('admin/data/cetak_datakunjungan', $data);
    }

}
