<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Yayasan_model extends CI_Model  
  {  
   public function insertuser($data)  
   {  
    return $this->db->insert('dftr_yayasan', $data);  
   }  
   public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('dftr_yayasan', $data);  
   }
   public function check_user($email,$pass)
  {
    $sql = "SELECT status , id_yayasan , nm_yayasan FROM dftr_yayasan where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }
  // public function view(){
  //   return $this->db->get('yayasan')->result();
  // }
  
  // public function view_row(){
  //   return $this->db->get('yayasan')->result();
  // }  
  }  