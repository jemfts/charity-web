<?php
class M_brgprint extends CI_Model {
 
    var $tabel = 'donasi_barang';
 
    function __construct() {
        parent::__construct();
    }
    function getAllItem() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        return $query->result();
    }
 
}
?>