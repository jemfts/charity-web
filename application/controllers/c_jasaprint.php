<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_jasaprint extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('m_jasaprint');
        $this->load->library('dompdf_gen');
    }
 
    public function index()
    {
        $data['title'] = 'Laporan Donasi Jasa'; //judul title
        $data['donasi_jasa'] = $this->m_jasaprint->getAllItem(); //query model semua barang
        $this->load->view('donasijasa_admin',$data);
    }
 
    // fungsi cetak pdf
    public function cetakpdf(){
        $data['title'] = 'Cetak PDF Donasi Jasa'; //judul title
        $data['donasi_jasa'] = $this->m_jasaprint->getAllItem(); //query model semua barang
 
        $this->load->view('jasaprint', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan Donasi Jasa.pdf", array('Attachment'=>0));
    }
}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */