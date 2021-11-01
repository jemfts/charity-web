<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboarduser extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "index.php/login"){
			redirect('user/index');
		}
	}

	function index(){
		$this->load->view('dashboarduser');
	}
}
 

// <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Dashboarduser extends CI_Controller {

// 	public function index()
// 	{
// 		$this->load->view('dashboarduser');
// 	}
// }

