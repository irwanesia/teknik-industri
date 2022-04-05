<?php

class Fasilitas extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Fasilitas';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('fasilitas/index');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }
}

