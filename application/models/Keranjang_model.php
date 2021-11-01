<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Keranjang_model extends CI_Model {

	public function get_produk_all()
	{
		$query = $this->db->get('tbl_yayasan');
		return $query->result_array();
	}
	
	public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('kategori',$kategori);
			}
		$query = $this->db->get('tbl_yayasan');
		return $query->result_array();
	}
	
	public function get_kategori_all()
	{
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}
	
	public  function get_produk_id($id)
	{
		$this->db->select('tbl_yayasan.*,nama_kategori');
		$this->db->from('tbl_yayasan');
		$this->db->join('tbl_kategori', 'kategori=tbl_kategori.id','left');
   		$this->db->where('id_yayasan',$id);
        return $this->db->get();
    }	
	
    public function insertuser($data)  
   {  
    $this->db->insert('donasi_uang', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE; 
   }
   public function insertuser_brg($data)  
   {  
    $this->db->insert('donasi_barang', $data);
    $id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;  
   }
   public function insertuser_jasa($data)  
   {  
     $this->db->insert('donasi_jasa', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;  
   }  
   public function verifyemail($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('donasi_uang', $data);  
   }
   public function verifyemail_brg($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('donasi_barang', $data);  
   }
   public function verifyemail_jasa($key)  
   {  
    $data = array('status' => 1);  
      $this->db->where('md5(email)', $key);  
      return $this->db->update('donasi_jasa', $data);  
   }
   public function check_user($email)
  {
    $sql = "SELECT status , id_donasi_uang , nm_donatur FROM donasi_uang where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }  
  public function check_user_brg($email)
  {
    $sql = "SELECT status , id_donasi_barang , nm_pengirim FROM donasi_barang where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }  
  public function check_user_jasa($email)
  {
    $sql = "SELECT status , id_donasi_jasa , nm_lengkap FROM donasi_jasa where email = ?"
    ;
    $data = $this->db->query($sql, array($email,$pass));
        return ($data->result_array()) ;
  }  
	
	public function tambah_pelanggan($data)
	{
		$this->db->insert('donasi_uang', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function tambah_pelanggan_brg($data)
	{
		$this->db->insert('donasi_barang', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function tambah_pelanggan_jasa($data)
	{
		$this->db->insert('donasi_jasa', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_donasi($data)
	{
		$this->db->insert('tbl_donasi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_donasi($data)
	{
		$this->db->insert('tbl_detail_donasi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
}
?>