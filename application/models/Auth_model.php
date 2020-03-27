<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-05-26T19:02:15+07:00
# @Email 		  : support@susantokun.com
# @Project 		: CodeIgniter
# @Filename 	: Auth_model.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-05-27T04:39:19+07:00
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'user';
    public $id_user          = 'user.id_user';

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('user', array('email'=>$email, 'paswd'=>$paswd));
        return $query->row_array();
    }

    function tampil_datanya($number = NULL, $offset = NULL){
        //ini untuk menampilkan kategori data
        $query = $this->db->get($this->table, $number, $offset);
        return $query->result();
    }

    public function check_account($email)
    {
        //cari email lalu lakukan validasi
        $this->db->where('email', $email);
        $query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka user tidak aktif
        if ($query->active == 0) {
            return 2;
        }
        //jika bernilai 3 maka password salah
        if (!hash_verified($this->input->post('paswd'), $query->paswd)) {
            return 3;
        }

        return $query;
    }

    public function logout($date, $id)
    {
        $this->db->where('user.id_user', $id);
        $this->db->update('user', $date);
    }

    public function listing() {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row_array();
    }

	
    public function reg()
    {   
    date_default_timezone_set('ASIA/JAKARTA');
    $data = array(
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'no_hp' => $this->input->post('no_hp'),
      'profesi' => $this->input->post('profesi'),
      'alamat' => $this->input->post('alamat'),
      'id_role' => '2',
      'tgl_daftar' => date('Y-m-d H:i:s'),
      'paswd' => get_hash($this->input->post('password')     
      )
    );
   $this->db->insert($this->table, $data);
   
    }

    function detail_front($link)
    {
        $this->db->select('user.*, profesi.profesi as profesi');
        $this->db->from('user');
        $this->db->join('profesi', 'user.profesi = profesi.id_profesi');
        $this->db->where("user.link = '".$link."'");

        $query = $this->db->get()->row();
        return $query;
    }

    function input($data)
{
    $this->db->insert($this->table, $data);
}

    function update_data($data, $id_data)
    {
        $this->db->where('id_user', $id_data);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id_data)
    {
        $this->db->where('id_user', $id_data);
        $this->db->delete($this->table);
    }

    public function update($data, $id)
    {
        $this->db->where($this->id_user, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function get_by_id($id)
    {
        $this->db->select('
            user.*
            ');
        $this->db->from($this->table);
        $this->db->where($this->id_user, $id);
        $query = $this->db->get();
        return $query->row();
    } 
}
