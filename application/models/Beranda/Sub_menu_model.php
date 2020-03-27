<?php

class Sub_menu_model extends CI_Model
{
    private $table ='sub_menu';
    private $id ='sub_menu.id_sub_menu';
    var $column_order = array(null, 'nama_sub_menu'); //field yang ada di table user
	var $column_search = array('nama_sub_menu'); //field yang diizin untuk pencarian 
	var $order = array('nama_sub_menu' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "sub_menu";
        parent::__construct();
    }



    function get_menu($menu)
	{

		$this->db->select('
            sub_menu.*, 
            menu.*
        ');
        $this->db->join('menu', 'sub_menu.id_menu = menu.id_menu');
        $this->db->from('sub_menu');
        $this->db->where('menu.nama_menu',$menu);
        $this->db->order_by('sub_menu.nama_sub_menu','asc');

		$query = $this->db->get();
		return $query;
    }
    
    function detail_data($slug)
    {   
        $this->db->select('
            sub_menu.*, 
            menu.*
        ');
        $this->db->join('menu', 'sub_menu.id_menu = menu.id_menu');
        $query =  $this->db->get_where($this->table, array('slug_sub_menu' => $slug));
        return $query->row();
    }
}

?>
