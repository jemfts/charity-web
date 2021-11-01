<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasiuang_admin extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->helper(array('url'));
                $this->load->model('donasiuangadmin_model');
        }

        public function index(){
                $this->load->database();
                $jumlah_data = $this->donasiuangadmin_model->jumlah_data();
                $this->load->library('pagination');
                $config['base_url'] = base_url().'index.php/donasiuang_admin/index/';
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
                $data['donasi_uang'] = $this->donasiuangadmin_model->data($config['per_page'],$from);
                $data['pagination'] = $this->pagination->create_links();
                $this->load->view('donasiuang_admin',$data);
        }

        function hapus($id_donasi_uang){
                $where = array('id_donasi_uang' => $id_donasi_uang);
                $this->donasiuangadmin_model->hapus_data($where,'donasi_uang');
                redirect('donasiuang_admin/index');
        }

        function edit($id_donasi_uang){
                $where = array('id_donasi_uang' => $id_donasi_uang);
                $data['donasi_uang'] = $this->donasiuangadmin_model->edit_data($where,'donasi_uang')->result();
                $this->load->view('edit_donasiuang',$data);
        }

        function update($id_donasi_uang){
        $id_donasi_uang = $this->input->post('id_donasi_uang');
        $nm_donatur = $this->input->post('nm_donatur');
        $alamat = $this->input->post('alamat');
        $jml_uang = $this->input->post('jml_uang');
        $no_telp = $this->input->post('no_telp');
        $email = $this->input->post('email');
        $status = $this->input->post('status');

        $data = array(
                'nm_donatur' => $nm_donatur,
                'alamat' => $alamat,
                'jml_uang' => $jml_uang,
                'no_telp' => $no_telp,
                'email' => $email,
                'status' => $status
        );

        $where = array(
                'id_donasi_uang' => $id_donasi_uang
        );

        $this->donasiuangadmin_model->update_data($where,$data,'donasi_uang');
        redirect('donasiuang_admin/index');
        }
}