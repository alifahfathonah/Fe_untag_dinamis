<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoria extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->helper('url');
        $this->load->model('Kategoria_model');
    }

    public function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Kategori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );

        $data['data']=$this->Kategoria_model->tampil_data();
        $this->template->load('alayout/template', 'admin/kategoria/index', $data);

    }

    public function tambah(){
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Tambah Kategori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/kategoria/tambah_v', $data);
    }

    public function simpan()
    {
        $data=array(
            'kategori_artikel'=>$this->input->post('kategori_artikel'),
            'slug_k' => slug($this->input->post('kategori_artikel',TRUE)),
        );

        $this->Kategoria_model->input_data($data);
        redirect('admin/Kategoria');
    }

    public function edit($id){
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit Kategori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['data'] = $this->Kategoria_model->spesifik_data($id);

        $this->template->load('alayout/template', 'admin/kategoria/edit_v', $data);
    }


    public function update()
    {
        $id_Kategoria= $this->input->post('id_kategori');
        $data =  array(
            'kategori_artikel' => $this->input->post('kategori_artikel'),
            'slug_k' => slug($this->input->post('kategori_artikel',TRUE)),
        );

        $this->Kategoria_model->update_data($data, $id_Kategoria);
        redirect('admin/kategoria');

    }

    public function hapus($id){
        $this->Kategoria_model->hapus_data($id);
        redirect('admin/kategoria');
    }
}