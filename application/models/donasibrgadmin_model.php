<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donasibrgadmin_model extends CI_Model{
	function data($number,$offset){
		return $query = $this->db->get('donasi_barang',$number,$offset)->result();
	}

	function jumlah_data(){
		return $this->db->get('donasi_barang')->num_rows();
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function donasi_brg(){
		$sql = "SELECT sum(jml_brg) totalbrg FROM donasi_barang";
    $data = $this->db->query($sql);
        return ($data->result()) ;
	}
}