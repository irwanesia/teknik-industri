<?php

class Admin1 extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kurikulum_model');
		$this->load->model('Dosen_model');
		$this->load->library('form_validation');
	}

	public function beranda()
	{
		$data['judul'] = 'Admin';
		$this->load->view('admin1/layout/header', $data);
		$this->load->view('admin1/layout/menu');
		$this->load->view('admin1/layout/konten');
		$this->load->view('admin1/beranda');
		$this->load->view('admin1/layout/footer');
	}
	public function profil()
	{
		$data['judul'] = 'admin1';
		$this->load->view('admin1/layout/header', $data);
		$this->load->view('admin1/layout/menu');
		$this->load->view('admin1/layout/konten');
		$this->load->view('admin1/profil');
		$this->load->view('admin1/layout/footer');
	}
	public function artikel()
	{
		$data['judul'] = 'admin1';
		$this->load->view('admin1/layout/header', $data);
		$this->load->view('admin1/layout/menu');
		$this->load->view('admin1/layout/konten');
		$this->load->view('admin1/artikel');
		$this->load->view('admin1/layout/footer');
	}
	public function galery()
	{
		$data['judul'] = 'admin1';
		$this->load->view('admin1/layout/header', $data);
		$this->load->view('admin1/layout/menu');
		$this->load->view('admin1/layout/konten');
		$this->load->view('admin1/galery');
		$this->load->view('admin1/layout/footer');
	}

	public function stafDosen()
	{
		$data['judul'] = 'admin1';
		$data['stafDosen'] = $this->Dosen_model->getAllDosen();

		$this->load->view('admin1/layout/header', $data);
		$this->load->view('admin1/layout/menu');
		$this->load->view('admin1/layout/konten');
		$this->load->view('admin1/stafDosen');
		$this->load->view('admin1/layout/footer');
	}

	public function tambahDosen()
	{
		$data['judul'] = 'Form Tambah Data Dosen';
		// jika ingin tampilan validasi erro bhs indonesia edit di file form_validation_lang
		$this->form_validation->set_rules('nidn', 'Nidn', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin1/layout/header', $data);
			$this->load->view('admin1/layout/menu');
			$this->load->view('admin1/layout/konten');
			$this->load->view('admin1/tambahDosen');
			$this->load->view('admin1/layout/footer');
		} else {
			$this->Dosen_model->tambahDosen();
			$this->session->set_flashdata('flash', 'ditambahkan!');
			redirect('admin1/stafDosen');
		}
	}

	public function hapusDosen($id)
	{
		$this->Dosen_model->hapusDataDosen($id);
		$this->session->set_flashdata('flash', 'di hapus!');
		redirect('admin1/stafDosen');
	}

	public function editDosen($id)
	{
		$data['judul'] = 'Form Edit Data Dosen';
		$data['stafDosen'] = $this->Dosen_model->getDosenById($id);
		$data['status'] = ['Dosen Tetap Yayasan', 'Dosen Tidak Tetap']; // harusnya bisa menggunakan dari database
		$data['konsentrasi'] = ['Supply Chain Management', 'Operation Research and Optimasi', 'Quality and Strategy', 'Statistic', 'Production System', 'Project Management', 'Design of Experiment', 'K3 dan Ergonomi', 'Quality'];

		// jika ingin tampilan validasi erro bhs indonesia edit di file form_validation_lang
		$this->form_validation->set_rules('nidn', 'Nidn', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin1/layout/header', $data);
			$this->load->view('admin1/layout/menu');
			$this->load->view('admin1/layout/konten');
			$this->load->view('admin1/editDosen', $data);
			$this->load->view('admin1/layout/footer');
		} else {
			$this->Dosen_model->editDataDosen();
			// flash data parameter 2 nama session dan isinya apa
			$this->session->set_flashdata('flash', 'di edit!');
			redirect('admin1/stafDosen');
		}
	}



	public function dataMahasiswa()
	{
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dataMahasiswa');
		$this->load->view('admin/layout/footer');
	}
}
