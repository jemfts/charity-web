<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class User extends CI_Controller {  
   function __Construct(){  
    parent::__Construct();  
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();  
    $this->load->model('user_model');  
    }    
   public function index()  
   {  
    $this->load->view('dashboarduser');  
   }  
   public function registration()  
   {  
    //validate input value with form validation class of codeigniter  
    $this->form_validation->set_rules('fname', 'First Name', 'required');  
    $this->form_validation->set_rules('lname', 'Last Name', 'required');  
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');  
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');  
      $this->form_validation->set_rules('confirmpswd', 'Password Confirmation', 'required|matches[password]');  
      //$this->form_validation->set_message('is_unique', 'This %s is already exits');  
      if ($this->form_validation->run() == FALSE)  
      {  
        $this->load->view('registration');  
      }  
      else  
      {  
        $fname = $_POST['fname'];  
        $lname = $_POST['lname'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $passhash = hash('md5', $password);  
        //md5 hashing algorithm to decode and encode input password  
        //$salt    = uniqid(rand(10,10000000),true);  
     $saltid   = md5($email);  
     $status   = 0;  
     $data = array('fname' => $fname,  
         'lname' => $lname,  
         'email' => $email,  
        'password' => $passhash,  
         'status' => $status);  
     if($this->user_model->insertuser($data))  
     {  
      if($this->sendemail($email, $saltid))  
      {  
       // successfully sent mail to user email  
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Registrasi Berhasil! Silahkan cek email Anda untuk melakukan konfirmasi.</div>');  
            redirect(base_url());  
      }  
      else  
      {  
       $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Silahkan coba lagi...</div>');  
            redirect(base_url());  
          }  
     }  
     else  
     {  
      $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Something Wrong. Please try again ...</div>');  
            redirect(base_url());  
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
      $url = base_url()."index.php/user/confirmation/".$saltid;  
      $this->email->from('rameinajaweb@gmail.com', 'RaMe');  
    $this->email->to($email);   
    $this->email->subject('Please Verify Your Email Address');  
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration.</p><p>Please click link below to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>RaMe Team</p></body></html>";  
    $this->email->message($message); 
    return $this->email->send();  
    }  
    public function confirmation($key)  
    {  
      if($this->user_model->verifyemail($key))  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Email Address is successfully verified!</div>');  
        redirect(base_url());  
      }  
      else  
      {  
        $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Your Email Address Verification Failed. Please try again later...</div>');  
        redirect(base_url());  
      }  
    } 
    public function login()
{
    $this->load->view('login');
}

public function check_login()
{
    $email = $_POST['email'];
    $pass = hash('md5', $_POST['password']);

    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');

    if($this->form_validation->run() == FALSE)
    {
        $this->load->view('login');
    }
    else
    {
        $res = $this->user_model->check_user($email , $pass);
        $hasil = $this->user_model->check_admin($email , $pass); 
        if (!empty($hasil)) {
        redirect(base_url('index.php/dashboard1'));  
        } 
        else {

        if(!empty($res))
        {
            if($res[0]['status'] == '1')
            {
                $data['user'] = $res[0]['fname'];
                $this->setSession($res[0]['id'],$res[0]['fname']);
                $this->load->view('dashboarduser', $data);
            }
            else
            {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Verify your email address first to login...</div>');
        redirect(base_url('index.php/login'));
            }
        } 
        else
        {
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">email/password not found</div>');
        redirect(base_url('index.php/login'));
        }
    } 
  }


}

function setSession($userId,$userName) {
    
    $userSession = array('userId'=>$userId,
                         'userName'=>$userName,
                         'loggedIn'=>TRUE );
    $this->session->set_userdata($userSession);
}

	function logout(){
    $this->cart->destroy();
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	} 
  }  