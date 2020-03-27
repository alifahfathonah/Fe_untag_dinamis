<?php

class Carousel_model extends CI_Model
{
    private $table ='carousel';
    private $id ='carousel.id_carousel';
    var $column_order = array(null, 'h1','h2','foto'); //field yang ada di table user
	var $column_search = array('h1','h2','foto'); //field yang diizin untuk pencarian 
	var $order = array('h1' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "carousel";
        parent::__construct();
    }
    function semua_data()
    {
        $this->db->select('
            carousel.*
            ');
        $this->db->from('carousel');
        $this->db->where('carousel.arsip',false);
        $query = $this->db->get();
        return $query->result();
	}

}

?>
