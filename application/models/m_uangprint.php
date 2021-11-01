<?php
class M_uangprint extends CI_Model {
 
    var $tabel = 'donasi_uang';
 
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