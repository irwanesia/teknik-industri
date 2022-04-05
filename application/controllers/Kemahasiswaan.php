<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kemahasiswaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_model');
    }


    public function dataMahasiswa()
    {
        $data['judul'] = 'Data Mahasiswa';
        $data = $this->Chart_model->get_data()->result();
        $x['data'] = json_encode($data);

        $this->load->view('templates/header', $data);

        $this->load->view('kemahasiswaan/dataMahasiswa', $x);
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }

    public function prestasiMahasiswa()
    {
        $data['judul'] = 'Prestasi Mahasiswa';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('kemahasiswaan/prestasiMahasiswa');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $data['judul'] = 'Galery';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('kemahasiswaan/galeri');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }
}
