<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Contact extends CI_Controller {  
   function __Construct(){  
    parent::__Construct();  
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();  
    $this->load->model('contact_model');  
    }    
   public function index()  
   {  
    $this->load->view('contact');  
   }  
   public function register()  
   {  
    //validate input value with form validation class of codeigniter  
    $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('pesan', 'Pesan', 'required');    
        
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
        $this->load->view('contact');  
      }  
      else  
      {  
        $nm_lengkap = $_POST['nm_lengkap'];
        $no_telp = $_POST['no_telp'];  
        $email = $_POST['email'];  
        $pesan = $_POST['pesan'];
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data = array('nm_lengkap' => $nm_lengkap,
         'no_telp' => $no_telp,    
         'email' => $email, 
         'pesan' => $pesan, 
         'status' => $status);  
     if($this->contact_model->insertuser($data))  
     {  
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Terima Kasih! Kami akan menghubungi Anda kembali secepatnya.</div>');  
            redirect(base_url('index.php/contact'));  
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Silahkan coba lagi...</div>');  
            redirect(base_url('index.php/contact'));  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Terjadi Kesalahan, silahkan coba lagi...</div>');  
            redirect(base_url('index.php/contact'));  
     }  
      }  
   }  
   function sendemail($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'rameinajaweb@gmail.com';  
      $config['smtp_pass'] = 'RameinajaUdah'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = base_url()."index.php/contact/confirmation/".$saltid;  
      $this->email->from('arsitektur.ebusiness@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Terima Kasih');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for your feedback.</p><p>Tim kami akan menghubungi Anda kembali secepatnya.</p><br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation($key)  
    {  
      if($this->contact_model->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Email Anda Berhasil Diverifikasi!</div>');  
        redirect(base_url('index.php/contact'));  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Verifikasi Email Anda Gagal. Silahkan coba beberapa saat lagi...</div>');  
        redirect(base_url('index.php/contact'));  
      }  
    } 
  }