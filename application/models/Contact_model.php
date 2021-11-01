<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Contact_model extends CI_Model  
  {  
   public function insertuser($data)  
   {  
    return $this->db->insert('feedback', $data);  
   }  
   public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('feedback', $data);  
   }
   public function check_user($email,$pass)
  {
    $sql = "SELECT status , id_feedback , nm_lengkap FROM feedback where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }

  }  