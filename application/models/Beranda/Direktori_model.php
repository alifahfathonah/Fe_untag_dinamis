<?php

class Direktori_model extends CI_Model
{
    private $table ='direktori';
    private $id ='direktori.id_direktori';
    var $column_order = array(null, 'judul','link'); //field yang ada di table user
	var $column_search = array('judul'); //field yang diizin untuk pencarian 
	var $order = array('tanggal_input' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "direktori";
        parent::__construct();
    }

    function semua_data()
    {
        $this->db->select('
            direktori.*
            ');
        $this->db->from('direktori');
        $this->db->order_by('tanggal_input','desc');
        $query = $this->db->get();
        return $query->result();
	}

}

?>
