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

    function get_post_by_slug($slug){
        $this->db->select('
            sub_menu.*, kategori_sub_menu.id_kategori AS id_kategori, kategori_sub_menu.kategori_sub_menu
            ');
        $this->db->select('sub_menu.*, user.id_user AS id_user, user.nama');
        $this->db->join('kategori_sub_menu', 'sub_menu.id_kategori = kategori_sub_menu.id_kategori');
        $this->db->join('user', 'sub_menu.id_user = user.id_user');
        $hsl =  $this->db->get_where($this->table, array('slug' => $slug));
        return $hsl;
    }

    function get_product_by_categories($slug){
        $id_kategori=$this->db->get_where('kategori_sub_menu',array('slug_k'=>$slug))->row('id_kategori');
        $this->db->select('sub_menu.*, user.id_user AS id_user, user.nama');
        $this->db->join('user', 'sub_menu.id_user = user.id_user');
        return $this->db->order_by('id_sub_menu','desc')->get_where('sub_menu',array('id_kategori'=>$id_kategori))->result();
    }

    function hitungta()
    {   $this->db->from('sub_menu');
        $this->db->where('sub_menu.konfirm2 != 0 ');
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

    function detail_data($id_sub_menu)
    {   $this->db->select('
        sub_menu.*,
        ');
        $query =  $this->db->get_where($this->table, array('id_sub_menu' => $id_sub_menu));
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

    function update_data($data, $id_sub_menu)
    {
        $this->db->where('id_sub_menu', $id_sub_menu);
        $this->db->update($this->table, $data);
    }

    function update_data_s($data, $slug)
    {
        $this->db->where('slug', $slug);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id_data)
    {
        $this->db->where('id_sub_menu', $id_data);
        $this->db->delete($this->table);
    }

     // Datatables

     private function _get_datatables_query()
     {
         $this->db->select('
            sub_menu.*, 
            menu.*
            ');
         $this->db->join('menu', 'sub_menu.id_menu = menu.id_menu');
         $this->db->where('sub_menu.arsip',FALSE);
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
 
     function get_datatables($id_menu)
     {
         $this->_get_datatables_query();
         $this->db->where('sub_menu.id_menu',$id_menu);
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
