<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function index()
	{
		$this->load->view('register');
	}
}
