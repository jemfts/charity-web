<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        
	public function login()
	{
                redirect('dashboard1');
	}
        
        public function logout()
	{
                redirect('homepage');
	}
}
