<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('daftaryayasan_model');
  }
  
  public function index(){
    $data['yayasan'] = $this->daftaryayasan_model->data();
    $this->load->view('dashboard1', $data);
  }
  
  public function cetak(){
    ob_start();
    $data['yayasan'] = $this->daftaryayasan_model->data();
    $this->load->view('yayasanprint', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Yayasan.pdf', 'D');
  }
}