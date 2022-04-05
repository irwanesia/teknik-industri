<?php

class Dasbor extends CI_Controller {
	
	public function beranda() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/beranda');
		$this->load->view('admin/layout/footer');	
	}
	public function profil() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/profil');
		$this->load->view('admin/layout/footer');	
	}
	public function artikel() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/artikel');
		$this->load->view('admin/layout/footer');	
	}
	public function galery() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/galery');
		$this->load->view('admin/layout/footer');	
	}
	public function stafDosen() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/stafDosen');
		$this->load->view('admin/layout/footer');	
	}
	public function dataMahasiswa() {
		$data['judul'] = 'Admin';
		$this->load->view('admin/layout/header', $data);
		$this->load->view('admin/layout/menu');
		$this->load->view('admin/layout/konten');
		$this->load->view('admin/dasbor/dataMahasiswa');
		$this->load->view('admin/layout/footer');	
	}
}