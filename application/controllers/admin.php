<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "index.php/login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$this->load->view('dashboard1');
	}
}




