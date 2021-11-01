<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        
	public function login()
	{
                redirect('dashboarduser');
	}
        
        public function logout()
	{
        $this->cart->destroy();
		$this->session->sess_destroy();
		redirect('login');
	}
}
