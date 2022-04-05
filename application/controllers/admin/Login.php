<?php

class Login extends CI_Controller {
	public function login_view() {
		$data=array('title'=>'Login Administrator',
					'isi'  =>'admin/login_view'
						);
		$this->load->view('admin/login_view',$data);	
	}
}