<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
{
    public $table = 'konfigurasi';
    public $id = 'id_konfigurasi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // Listing Konfigurasi
    public function listing() {
        $this->db->select('*');
        $this->db->from('konfigurasi');
        $query = $this->db->get();
        return $query->row_array();
    }

    function semua_data()
    {
        $query =  $this->db->get($this->table);
        return $query->result();
    }

    function detail_data($id)
    {
        $query =  $this->db->get_where($this->table, array('id_konfigurasi' => $id));
        return $query->row();
    }

    function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update_data($data, $id_data)
    {
        $this->db->where('id_konfigurasi', $id_data);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id_data)
    {
        $this->db->where('id_konfigurasi', $id_data);
        $this->db->delete($this->table);
    }

}
