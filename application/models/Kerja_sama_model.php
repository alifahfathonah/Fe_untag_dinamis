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



    function detail_data($id_kerja_sama)
    {   $this->db->select('
        kerja_sama.*
        ');
        $query =  $this->db->get_where($this->table, array('id_kerja_sama' => $id_kerja_sama));
        return $query->row();
    }

    function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update_data($data, $id_kerja_sama)
    {
        $this->db->where('id_kerja_sama', $id_kerja_sama);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id_data)
    {
        $this->db->where('id_kerja_sama', $id_data);
        $this->db->delete($this->table);
    }

     // Datatables

     private function _get_datatables_query()
     {
         $this->db->select('
            kerja_sama.*, 
            ');
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
