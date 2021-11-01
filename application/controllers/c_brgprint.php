<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_brgprint extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('m_brgprint');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $data['title'] = 'Laporan Donasi Barang'; //judul title
        $data['donasi_barang'] = $this->m_brgprint->getAllItem(); //query model semua barang
        $this->load->view('donasibrg_admin',$data);
    }
 
    // fungsi cetak pdf
    public function cetakpdf(){
        $data['title'] = 'Cetak PDF Donasi Barang'; //judul title
        $data['donasi_barang'] = $this->m_brgprint->getAllItem(); //query model semua barang
 
        $this->load->view('brgprint', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Donasi Barang.pdf", array('Attachment'=>0));
    }
}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */