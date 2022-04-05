<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen_model');
        $this->load->model('Profil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // cara mengambil data user berdasarkan email yg ada disession
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function profil()
    {
        // cara mengambil data user berdasarkan email yg ada disession
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->Profil_model->getAllProfil();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/profil', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit_profil($id_profil)
    {
        $data['title'] = 'Edit Profil Teknik Industri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->Profil_model->getProfilById($id_profil);

        // jika ingin tampilan validasi erro bhs indonesia edit di file form_validation_lang
        // $this->form_validation->set_rules('nidn', 'Nidn', 'required|numeric');
        // $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/edit_profil', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->Dosen_model->editDataProfil();
            // flash data parameter 2 nama session dan isinya apa
            $this->session->set_flashdata('flash', 'di edit!');
            redirect('admin/profil');
        }
    }

    // dosen
    public function stafDosen()
    {
        // cara mengambil data user berdasarkan email yg ada disession
        $data['title'] = 'Staf Dosen';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['stafDosen'] = $this->Dosen_model->getAllDosen();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/stafDosen', $data);
        $this->load->view('templates/admin_footer');
    }
}
