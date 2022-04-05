<?php

class Informasi extends CI_Controller
{
    public function arsip()
    {
        $data['judul'] = 'Arsip';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('informasi/arsip');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        $data['judul'] = 'Artikel';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('informasi/artikel');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }

    public function kerjasama()
    {
        $data['judul'] = 'Kerja Sama';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('informasi/kerjasama');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }

    public function fasilitas()
    {
        $data['judul'] = 'Fasilitas';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('informasi/fasilitas');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }
    public function penelitian()
    {
        $data['judul'] = 'penelitian';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);

        $this->load->view('informasi/penelitian');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }
}

