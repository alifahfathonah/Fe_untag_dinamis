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

    function data($number,$offset){
        $this->db->select('
        artikel.*, kategori_artikel.id_kategori AS id_kategori, kategori_artikel.kategori_artikel
        ');
         $this->db->select('
        artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        return $query = $this->db->get('artikel',$number,$offset)->result();	

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
            user.id_user AS id_user, 
            user.nama
        ');
        $this->db->from('artikel');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');

		$query = $this->db->get();
		return $query;
	}

    function jml_data()
    {
        $query = $this->db->get($this->table);
        $total = $query->num_rows();
        return $total;
    }


    function admink1($slug){
        $this->db->select('user.nama');
        $this->db->join('artikel', 'artikel.id_user= user.id_user');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl->row();
	}
	
	function editor($slug){
        $this->db->select('artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.editor = user.id_user');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl->row();
    }

    function admink2($slug){
        $this->db->select('artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.konfirm2 = user.id_user');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl->row();
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


    function hitungbta()
    {   $this->db->from('artikel');
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
            artikel.*, kategori_artikel.id_kategori AS id_kategori, kategori_artikel.kategori_artikel
            ');
        $this->db->select('artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl;
    }

    function get_product_by_categories($slug){
        $id_kategori=$this->db->get_where('kategori_artikel',array('slug_k'=>$slug))->row('id_kategori');
        $this->db->select('artikel.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'artikel.id_user = user.id_user');
        return $this->db->order_by('id_artikel','desc')->get_where('artikel',array('id_kategori'=>$id_kategori))->result();
    }

    function hitungta()
    {   $this->db->from('artikel');
        $this->db->where('artikel.konfirm2 != 0 ');
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

    function detail_data($id_artikel)
    {   $this->db->select('
        artikel.*, user.id_user AS id_user, user.nama
        ');
    $this->db->join('user', 'artikel.id_user = user.id_user');
        //$this->db->from('artikel');
    $query =  $this->db->get_where($this->table, array('id_artikel' => $id_artikel));
    return $query->row();
    }

    function detail_front($link)
    {
        $query =  $this->db->get_where($this->table, array('link' => $link));
        return $query->row();
    }

    function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update_data($data, $id_artikel)
    {
        $this->db->where('id_artikel', $id_artikel);
        $this->db->update($this->table, $data);
    }

    function update_data_s($data, $slug)
    {
        $this->db->where('slug', $slug);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id_data)
    {
        $this->db->where('id_artikel', $id_data);
        $this->db->delete($this->table);
    }

     // Datatables

     private function _get_datatables_query()
     {
         $this->db->select('
            artikel.*, 
            kategori_artikel.*,
            ');
         $this->db->join('kategori_artikel', 'artikel.id_kategori = kategori_artikel.id_kategori');
        //  $this->db->join('user', 'artikel.id_user = user.id_user');
         $this->db->from($this->table);
 
         $i = 0;
     
         foreach ($this->column_search as $item) // loop column 
         {
             if($_POST['search']['value']) // if datatable send POST for search
             {
                 
                 if($i===0) // first loop
                 {
                     $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                     $this->db->like($item, $_POST['search']['value']);
                 }
                 else
                 {
                     $this->db->or_like($item, $_POST['search']['value']);
                 }
 
                 if(count($this->column_search) - 1 == $i) //last loop
                     $this->db->group_end(); //close bracket
             }
             $i++;
         }
         
         if(isset($_POST['order'])) // here order processing
         {
             $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
         } 
         else if(isset($this->order))
         {
             $order = $this->order;
             $this->db->order_by(key($order), $order[key($order)]);
         }
     }
 
     function get_datatables()
     {
         $this->_get_datatables_query();
         $this->db->where('artikel.arsip',false);
         if($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);
         $query = $this->db->get();
         return $query->result();
     }

     function get_datatables_arsip()
     {
         $this->_get_datatables_query();
         $this->db->where('artikel.arsip',true);
         if($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);
         $query = $this->db->get();
         return $query->result();
     }
 
     function count_filtered()
     {
         $this->_get_datatables_query();
         $query = $this->db->get();
         return $query->num_rows();
     }
 
     public function count_all()
     {
         $this->db->from($this->table);
         return $this->db->count_all_results();
     }

}

?>
