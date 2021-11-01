<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

	public function __construct(){
		parent::__construct();	
		//$this->load->helper(array('url'));	
		$this->load->model(array('user_model', 'donasiuangadmin_model', 'donasibrgadmin_model', 'donasijasaadmin_model'));
	}

	public function index()
	{
		$this->load->database();
        $jumlah_data = $this->user_model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/dashboard1/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);         
        $data['yayasan'] = $this->user_model->data($config['per_page'],$from);
        $data['donasi_uang'] = $this->donasiuangadmin_model->donasi_uang();
        $data['donasi_brg'] = $this->donasibrgadmin_model->donasi_brg();
        $data['donasi_jasa'] = $this->donasijasaadmin_model->donasi_jasa();
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('dashboard1',$data);
	}
	
}