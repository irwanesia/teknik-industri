<?php

class Akademik extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kurikulum_model');
    }


    public function staffDosen()
    {
        $data['judul'] = 'Akademik';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('akademik/staffDosen');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

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
        $data['kurikulum'] = $this->Kurikulum_model->getAllKurikulum();

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