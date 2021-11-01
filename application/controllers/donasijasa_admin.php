<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasijasa_admin extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url'));
                $this->load->model('donasijasaadmin_model');
        }

        public function index(){
                $this->load->database();
                $jumlah_data = $this->donasijasaadmin_model->jumlah_data();
                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php/donasijasa_admin/index/';
                $config['total_rows'] = $jumlah_data;
                $config['per_page'] = 5;
                $from = $this->uri->segment(3);

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
 
        $config['first_link']='First';
        $config['last_link']='Last';
        $config['next_link']='Next';
        $config['prev_link']='Prev';
                
                $this->pagination->initialize($config);         
                $data['donasi_jasa'] = $this->donasijasaadmin_model->data($config['per_page'],$from);
                $data['pagination'] = $this->pagination->create_links();
                $this->load->view('donasijasa_admin',$data);
        }

        function hapus($id_donasi_jasa){
                $where = array('id_donasi_jasa' => $id_donasi_jasa);
                $this->donasijasaadmin_model->hapus_data($where,'donasi_jasa');
                redirect('donasijasa_admin/index');
        }

        function edit($id_donasi_jasa){
                $where = array('id_donasi_jasa' => $id_donasi_jasa);
                $data['donasi_jasa'] = $this->donasijasaadmin_model->edit_data($where,'donasi_jasa')->result();
                $this->load->view('edit_donasijasa',$data);
        }

        function update($id_donasi_jasa){
        $id_donasi_jasa = $this->input->post('id_donasi_jasa');
        $nm_lengkap = $this->input->post('nm_lengkap');
        $usia = $this->input->post('usia');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $pend_akhir = $this->input->post('pend_akhir');
        $email = $this->input->post('email');

        $data = array(
                'nm_lengkap' => $nm_lengkap,
                'usia' => $usia,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
                'pend_akhir' => $pend_akhir,
                'email' => $email
        );

        $where = array(
                'id_donasi_jasa' => $id_donasi_jasa
        );

        $this->donasijasaadmin_model->update_data($where,$data,'donasi_jasa');
        redirect('donasijasa_admin/index');
        }
}