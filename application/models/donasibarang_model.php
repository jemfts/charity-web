<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');  
  class Donasibarang_model extends CI_Model  
  {  
   public function insertuser($data)  
   {  
    return $this->db->insert('donasi_barang', $data);  
   }  
   public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('donasi_barang', $data);  
   }
   public function check_user($email)
  {
    $sql = "SELECT status , id_donasi_barang , nm_donatur FROM donasi_barang where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }  
  }  