<?php
class M_jasaprint extends CI_Model {
 
    var $tabel = 'donasi_jasa';
 
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