<?php

class Home extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Beranda';
        // $data['nama'] = $nama;

        $this->load->view('templates/header-home', $data);
        $this->load->view('home/index');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }
}