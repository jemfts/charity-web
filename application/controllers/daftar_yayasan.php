<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_yayasan extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url'));
                $this->load->model('daftaryayasan_model');
        }

        public function index(){
                $this->load->database();
                $jumlah_data = $this->daftaryayasan_model->jumlah_data();
                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php/daftar_yayasan/index/';
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
                $data['yayasan'] = $this->daftaryayasan_model->data($config['per_page'],$from);
                $data['pagination'] = $this->pagination->create_links();
                $this->load->view('daftar_yayasan',$data);
        }

        function hapus($id_yayasan){
                $where = array('id_yayasan' => $id_yayasan);
                $this->daftaryayasan_model->hapus_data($where,'dftr_yayasan');
                redirect('daftar_yayasan/index');
        }

        function edit($id_yayasan){
                $where = array('id_yayasan' => $id_yayasan);
                $data['yayasan'] = $this->daftaryayasan_model->edit_data($where,'dftr_yayasan')->result();
                $this->load->view('edit_daftaryayasan',$data);
        }

        function update($id_yayasan){
        $id_yayasan = $this->input->post('id_yayasan');
        $nm_yayasan = $this->input->post('nm_yayasan');
        $nm_penanggungjwb = $this->input->post('nm_penanggungjwb');
        $nm_pemohon = $this->input->post('nm_pemohon');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');
        $status = $this->input->post('status');

        $data = array(
                'nm_yayasan' => $nm_yayasan,
                'nm_penanggungjwb' => $nm_penanggungjwb,
                'nm_pemohon' => $nm_pemohon,
                'alamat' => $alamat,
                'no_telp' => $no_telp,
                'email' => $email,
                'status' => $status
        );

        $where = array(
                'id_yayasan' => $id_yayasan
        );

        $this->daftaryayasan_model->update_data($where,$data,'dftr_yayasan');
        redirect('daftar_yayasan/index');
        }
}