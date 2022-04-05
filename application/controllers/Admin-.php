<?php

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    // databse ke autoload    
    public function index()
    {
        
        $data['judul'] = 'Admin';
        $data['admin'] = $this->Admin_model->getAllAdmin();
        $this->load->view('templates/header-2', $data);
        // $this->load->view('templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer-admin');

    }

    public function kompetensi()
    {
        $data['judul'] = 'Akademik';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('akademik/kompetensi');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }

    public function kurikulum()
    {
        $data['judul'] = 'Akademik';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('akademik/kurikulum');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }

    public function pendaftaran()
    {
        $data['judul'] = 'Akademik';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('akademik/pendaftaran');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }
}