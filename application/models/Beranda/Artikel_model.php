<?php

class Artikel_model extends CI_Model
{
    private $table ='artikel';
    private $id ='artikel.id_artikel';
    var $column_order = array(null, 'slug','judul','gambar','teks','kategori_artikel','arsip','tanggal'); //field yang ada di table user
	var $column_search = array('judul','gambar','teks','kategori_artikel','tanggal'); //field yang diizin untuk pencarian 
	var $order = array('tanggal' => 'asc'); // default order 

    function __construct()
    {
        $this->table = "artikel";
        parent::__construct();
    }
    
    function get_data($filter = array())
	{
		if(!empty($filter))
		{
			if(!empty($filter['limit']))
			{
				if(!empty($filter['offset']))
				{
					$this->db->limit($filter['limit'], $filter['offset']);
				}
				else
				{
					$this->db->limit($filter['limit']);
				}
			}
			
		}

		$this->db->select('
            artikel.*, 
            kategori_artikel.id_kategori AS id_kategori, 
            kategori_artikel.kategori_artikel,
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->where('artikel.arsip',false);
        $this->db->where('kategori_artikel.kategori_artikel','berita');
        $this->db->order_by('tanggal','desc');

		$query = $this->db->get();
		return $query;
    }
    
    function get_kategori($kategori)
	{

		$this->db->select('
            artikel.*, 
            kategori_artikel.id_kategori AS id_kategori, 
            kategori_artikel.kategori_artikel,
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->where('artikel.arsip',false);
        $this->db->where('kategori_artikel.kategori_artikel',$kategori);
        $this->db->order_by('tanggal','desc');

		$query = $this->db->get();
		return $query;
	}

   
    function semua_data()
    {
        $this->db->select('
            artikel.*, kategori_artikel.id_kategori AS id_kategori, kategori_artikel.kategori_artikel
            ');
        $this->db->select('
            artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->order_by('id_artikel','desc');
        $query = $this->db->get();
        return $query->result();
	}

    function total_berita()
    {   
        $this->db->select('
        artikel.id_artikel, kategori_artikel.kategori_artikel
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->where('kategori_artikel.kategori_artikel = "berita"');
        $this->db->where('artikel.arsip',false);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    function total_pengumuman()
    {   
        $this->db->select('
        artikel.id_artikel, kategori_artikel.kategori_artikel
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->where('kategori_artikel.kategori_artikel = "papan pengumuman"');
        $this->db->where('artikel.arsip',false);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    function total_loker()
    {   
        $this->db->select('
        artikel.id_artikel, kategori_artikel.kategori_artikel
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->from('artikel');
        $this->db->where('kategori_artikel.kategori_artikel = "lowongan kerja"');
        $this->db->where('artikel.arsip',false);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    function get_post_by_slug($slug){
        $this->db->select('
            artikel.*, kategori_artikel.*
            ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl;
    }

    function detail_data($slug)
    {   
        $this->db->select('
        artikel.*, kategori_artikel.*
        ');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $query =  $this->db->get_where($this->table, array('slug' => $slug));
        return $query->row();
    }

    function get_product_by_categories($slug){
        $id_kategori=$this->db->get_where('kategori_artikel',array('slug_k'=>$slug))->row('id_kategori');
        $this->db->select('artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        return $this->db->order_by('id_artikel','desc')->get_where('artikel',array('id_kategori'=>$id_kategori))->result();
    }
     // Datatables

}

?>
