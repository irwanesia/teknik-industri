<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Kontak';

        $this->load->view('templates/header', $data);

        $this->load->view('kontak/index');
        $this->load->view('templates/jumbotron');
        $this->load->view('templates/footer');
    }
}
