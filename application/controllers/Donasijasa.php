<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Donasijasa extends CI_Controller {  
   function __Construct(){  
    parent::__Construct();  
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();  
    $this->load->model('donasijasa_model');  
    }    
   public function index()  
   {  
    $this->load->view('donasijasa');  
   }  
   public function register()  
   {  
    //validate input value with form validation class of codeigniter  
    $this->form_validation->set_rules('nm_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('usia', 'Usia', 'required'); 
    $this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
    $this->form_validation->set_rules('pend_akhir', 'Pendidikan Terakhir', 'required');  
    $this->form_validation->set_rules('no_telp', 'No. Telp', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]'); 
        
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
        $this->load->view('donasijasa');  
      }  
      else  
      {  
        $nm_pengirim = $_POST['nm_pengirim'];
        $usia = $_POST['usia']; 
        $alamat = $_POST['alamat'];
        $pend_akhir = $_POST['pend_akhir']; 
        $no_telp = $_POST['no_telp'];  
        $email = $_POST['email'];  
        
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data = array('nm_pengirim' => $nm_pengirim,
         'usia' => $usia,  
         'alamat' => $alamat,
         'pend_akhir' => $pend_akhir,
         'no_telp' => $no_telp, 
         'email' => $email,  
        
         'status' => $status);  
     if($this->donasibarang_model->insertuser($data))  
     {  
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
            $this->session->set_flashdata('msg','<script language="javascript">
alert("Donasi Anda Berhasil! Terima Kasih.")
</script>');  
            redirect(base_url('index.php/donasijasa'));  
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Silahkan coba lagi...</div>');  
            redirect(base_url('index.php/donasijasa'));  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div align="center" class="alert alert-danger text-center" >Terjadi Kesalahan, silahkan coba lagi...</div>');  
            redirect(base_url('index.php/donasijasa'));  
     }  
      }  
   }  
   function sendemail($email,$saltid){  
    // configure the email setting  
    $config['protocol'] = 'smtp';  
      $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name  
      $config['smtp_port'] = '465'; //smtp port number  
      $config['smtp_user'] = 'arsitektur.ebusiness@gmail.com';  
      $config['smtp_pass'] = 'aplikasi999'; //$from_email password  
      $config['mailtype'] = 'html';  
      $config['charset'] = 'iso-8859-1';  
      $config['wordwrap'] = TRUE;  
      $config['newline'] = "\r\n"; //use double quotes  
      $this->email->initialize($config);  
      $url = base_url()."index.php/donasibarang/confirmation/".$saltid;  
      $this->email->from('arsitektur.ebusiness@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Thank You.');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Terima kasih untuk donasinya.</p><p>Silahkan klik link di bawah ini untuk memverifikasi email Anda.</p>".$url."<br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation($key)  
    {  
      if($this->yayasan_model->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center" align="center">Email Anda Berhasil Diverifikasi!</div>');  
        redirect(base_url('index.php/dashboarduser'));  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center" align="center">Verifikasi Email Anda Gagal. Silahkan coba beberapa saat lagi...</div>');  
        redirect(base_url('index.php/donasijasa'));  
      }  
    } 
  }