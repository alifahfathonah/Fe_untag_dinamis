<?php

class Download_area_model extends CI_Model
{
    private $table ='download_area';
    private $id ='download_area.id_download';
    var $column_order = array(null, 'judul','teks','file,','slug'); //field yang ada di table user
	var $column_search = array('judul','teks','file,','slug'); //field yang diizin untuk pencarian 
	var $order = array('tanggal_input' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "download_area";
        parent::__construct();
    }

    function semua_data()
    {
        $this->db->select('
            download_area.*
            ');
        $this->db->from('download_area');
        $this->db->order_by('tanggal_input','desc');
        $query = $this->db->get();
        return $query->result();
	}


    function detail_data($slug)
    {   $this->db->select('
        download_area.*
        ');
        $query =  $this->db->get_where($this->table, array('slug' => $slug));
        return $query->row();
    }


}

?>
