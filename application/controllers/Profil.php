<?php

class Profil extends CI_Controller {
    public function visiMisi()
    {
        $data['judul'] = 'Profil';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('profil/visiMisi');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }

    public function sejarah()
    {
        $data['judul'] = 'Profil';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('profil/sejarah');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }

    public function organisasi()
    {
        $data['judul'] = 'Profil';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('profil/organisasi');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }
    public function index()
    {
        $data['judul'] = 'Profil';
        // $data['nama'] = $nama;

        $this->load->view('templates/header', $data);
        
        $this->load->view('profil/index');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');

    }
}