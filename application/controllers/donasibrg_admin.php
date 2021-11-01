<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasibrg_admin extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url'));
                $this->load->model('donasibrgadmin_model');
        }

        public function index(){
                $this->load->database();
                $jumlah_data = $this->donasibrgadmin_model->jumlah_data();
                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php/donasibrg_admin/index/';
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
                $data['donasi_barang'] = $this->donasibrgadmin_model->data($config['per_page'],$from);
                $data['pagination'] = $this->pagination->create_links();
                $this->load->view('donasibrg_admin',$data);
        }

        function hapus($id_donasi_barang){
                $where = array('id_donasi_barang' => $id_donasi_barang);
                $this->donasibrgadmin_model->hapus_data($where,'donasi_barang');
                redirect('donasibrg_admin/index');
        }

        function edit($id_donasi_barang){
                $where = array('id_donasi_barang' => $id_donasi_barang);
                $data['donasi_barang'] = $this->donasibrgadmin_model->edit_data($where,'donasi_barang')->result();
                $this->load->view('edit_donasibrg',$data);
        }

        function update($id_donasi_barang){
        $id_donasi_barang = $this->input->post('id_donasi_barang');
        $nm_pengirim = $this->input->post('nm_pengirim');
        $nm_brg = $this->input->post('nm_brg');
        $jml_brg = $this->input->post('jml_brg');
        $no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');

        $data = array(
                'nm_pengirim' => $nm_pengirim,
                'nm_brg' => $nm_brg,
                'jml_brg' => $jml_brg,
                'no_telp' => $no_telp,
                'email' => $email
        );

        $where = array(
                'id_donasi_barang' => $id_donasi_barang
        );

        $this->donasibrgadmin_model->update_data($where,$data,'donasi_barang');
        redirect('donasibrg_admin/index');
        }
}