<?php

class Kerja_sama_model extends CI_Model
{
    private $table ='kerja_sama';
    private $id ='kerja_sama.id_kerja_sama';
    var $column_order = array(null, 'deskripisi','foto'); //field yang ada di table user
	var $column_search = array('deskripisi'); //field yang diizin untuk pencarian 
	var $order = array('tanggal' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "kerja_sama";
        parent::__construct();
    }

    function semua_data()
    {
        $this->db->select('
            kerja_sama.*
            ');
        $this->db->from('kerja_sama');
        $this->db->order_by('tanggal','desc');
        $query = $this->db->get();
        return $query->result();
	}
}

?>
