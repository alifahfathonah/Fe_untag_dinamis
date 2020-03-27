<?php



class Profil extends MY_Controller{

    function __construct(){

        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->helper('url');
        $this->load->model('Konfigurasi_model');

    }



    /*

     * Listing of profil

     */

    function profil_web()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'          => 'Profil Web | '.$site['nama_website'],
            'favicon'        => $site['favicon'],
            'site'           => $site,
        );
        $data['profil'] = $this->Konfigurasi_model->detail_data(1);
        $this->template->load('alayout/template', 'admin/profil', $data);

    }


    /*

     * Adding a new profil

     */

    function add()

    {



    }



    /*

     * Editing a profil

     */

    function edit($id)
    {

        $params = array(
            'nama_website'      => $this->input->post('nama_website'),
            'teks'              => $this->input->post('teks'),
            'no_telp'           => $this->input->post('no_telp'),
            'email'             => $this->input->post('email'),
            'facebook'          => $this->input->post('facebook'),
            'instagram'         => $this->input->post('instagram'),
            'jam_buka'          => $this->input->post('jam_buka'),
            'alamat'            => $this->input->post('alamat'),
            'link_pendaftaran'  => $this->input->post('link_pendaftaran'),
        );

        if (!empty($_FILES['favicon']['name'])) {
            $nama_favicon    = $this->upload_foto($this->input->post('nama_website'));
            $params['favicon'] = $nama_favicon;
        }
        $this->Konfigurasi_model->update_data($params, $id);
        redirect('admin/profil/profil_web');

    }



    /*

     * Deleting profil

     */

    function hapus($id)

    {



    }

    function upload_foto($nama){

        $set_name   = $nama."-".RAND(0000,9999);
        $path       = $_FILES['favicon']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/images/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 9024;
        $config['width']                = 25;
        $config['height']               = 25;
        $config['file_name']            = "$set_name".$extension;
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('favicon');

        if ($upload == FALSE) {
            $error = array('error' => $this->upload->display_errors());
            dump($error);
            dump('favicon gagal diupload! Periksa Gambar');
        }
        $upload = $this->upload->data();
        return $upload['file_name'];
    }



    function hapusfavicon($id)
    {

        $profil = $this->Konfigurasi_model->detail_data(1);
        if(isset($profil->id_konfigurasi))
        {
            unlink('./assets/upload/images/'.$profil->favicon);
            $data['favicon'] = "";
            $this->Konfigurasi_model->update_data($data, $profil->id_konfigurasi);
            redirect('admin/profil/profil_web');
        }

        else
          show_error('Data Profil tidak ada');
    }

    // Untuk menu halaman awal

    function halaman_awal()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'          => 'Halaman Awal | '.$site['nama_website'],
            'favicon'        => $site['favicon'],
            'site'           => $site,
        );
        $data['profil'] = $this->Konfigurasi_model->detail_data(1);
        $this->template->load('alayout/template', 'admin/halaman_awal', $data);

    }

    function edit_halaman_awal($id)
    {

        $params = array(
            'sambutan'      => $this->input->post('sambutan'),
            'caption_1'     => $this->input->post('caption_1'),
            'caption_2'     => $this->input->post('caption_2'),
        );

        if (!empty($_FILES['foto_sambutan']['name'])) {
            $nama_favicon    = $this->upload_foto_sambutan($this->input->post('sambutan'));
            $params['foto_sambutan'] = $nama_favicon;
        }
        $this->Konfigurasi_model->update_data($params, $id);
        redirect('admin/profil/halaman_awal');
    }

    function upload_foto_sambutan($nama){

        $set_name   = $nama."-".RAND(0000,9999);
        $path       = $_FILES['foto_sambutan']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/images/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 9024;
        $config['file_name']            = "$set_name".$extension;
        $config['width']                = 300;
        $config['height']               = 400;
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('foto_sambutan');

        if ($upload == FALSE) {
            $error = array('error' => $this->upload->display_errors());
            dump($error);
            dump('Foto sambutan gagal diupload! Periksa Gambar');
        }
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function hapus_foto_sambutan($id)
    {
        $profil = $this->Konfigurasi_model->detail_data(1);
        if(isset($profil->id_konfigurasi))
        {
            unlink('./assets/upload/images/'.$profil->foto_sambutan);
            $data['foto_sambutan'] = "";
            $this->Konfigurasi_model->update_data($data, $profil->id_konfigurasi);
            redirect('admin/profil/halaman_awal');
        }

        else
          show_error('Data Profil tidak ada');
    }

     // Untuk menu Logo Fakultas

     function logo_fakultas()
     {   
         $site = $this->Konfigurasi_model->listing();
         $data = array(
             'title'          => 'Lofo Fakultas | '.$site['nama_website'],
             'favicon'        => $site['favicon'],
             'site'           => $site,
         );
         $data['profil'] = $this->Konfigurasi_model->detail_data(1);
         $this->template->load('alayout/template', 'admin/logo_fakultas', $data);
 
     }
 
     function edit_logo_fakultas($id)
     {
        $params = [];
         if (!empty($_FILES['icon']['name'])) {
             $nama_favicon   = $this->upload_logo_fakultas('logo_fakultas');
             $params['icon'] = $nama_favicon;
         }
         $this->Konfigurasi_model->update_data($params, $id);
         redirect('admin/profil/logo_fakultas');
     }
 
     function upload_logo_fakultas($nama){
 
         $set_name   = $nama."-".RAND(0000,9999);
         $path       = $_FILES['icon']['name'];
         $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);
 
         $config['upload_path']          = './assets/upload/images/';
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
         $config['max_size']             = 9024;
         $config['file_name']            = "$set_name".$extension;
         $config['width']                = 300;
         $config['height']               = 100;
         $this->load->library('upload', $config);
         $upload = $this->upload->do_upload('icon');
 
         if ($upload == FALSE) {
             $error = array('error' => $this->upload->display_errors());
             dump($error);
             dump('Foto sambutan gagal diupload! Periksa Gambar');
         }
         $upload = $this->upload->data();
         return $upload['file_name'];
     }
 
     function hapus_logo_fakultas($id)
     {
         $profil = $this->Konfigurasi_model->detail_data(1);
         if(isset($profil->id_konfigurasi))
         {
             unlink('./assets/upload/images/'.$profil->icon);
             $data['icon'] = "";
             $this->Konfigurasi_model->update_data($data, $profil->id_konfigurasi);
             redirect('admin/profil/logo_fakultas');
         }
 
         else
           show_error('Data Profil tidak ada');
     }


     // Untuk menu Logo Universitas

     function logo_universitas()
     {   
         $site = $this->Konfigurasi_model->listing();
         $data = array(
             'title'          => 'Logo Fakultas | '.$site['nama_website'],
             'favicon'        => $site['favicon'],
             'site'           => $site,
         );
         $data['profil'] = $this->Konfigurasi_model->detail_data(1);
         $this->template->load('alayout/template', 'admin/logo_universitas', $data);
 
     }
 
     function edit_logo_universitas($id)
     {
        $params = [];
         if (!empty($_FILES['logo']['name'])) {
             $nama_favicon   = $this->upload_logo_universitas('logo_univ');
             $params['logo'] = $nama_favicon;
         }
         $this->Konfigurasi_model->update_data($params, $id);
         redirect('admin/profil/logo_universitas');
     }
 
     function upload_logo_universitas($nama){
 
         $set_name   = $nama."-".RAND(0000,9999);
         $path       = $_FILES['logo']['name'];
         $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);
 
         $config['upload_path']          = './assets/upload/images/';
         $config['allowed_types']        = 'gif|jpg|jpeg|png';
         $config['max_size']             = 9024;
         $config['file_name']            = "$set_name".$extension;
         $config['width']                = 300;
         $config['height']               = 100;
         $this->load->library('upload', $config);
         $upload = $this->upload->do_upload('logo');
 
         if ($upload == FALSE) {
             $error = array('error' => $this->upload->display_errors());
             dump($error);
             dump('Foto sambutan gagal diupload! Periksa Gambar');
         }
         $upload = $this->upload->data();
         return $upload['file_name'];
     }
 
     function hapus_logo_universitas($id)
     {
         $profil = $this->Konfigurasi_model->detail_data(1);
         if(isset($profil->id_konfigurasi))
         {
             unlink('./assets/upload/images/'.$profil->logo);
             $data['logo'] = "";
             $this->Konfigurasi_model->update_data($data, $profil->id_konfigurasi);
             redirect('admin/profil/logo_universitas');
         }
 
         else
           show_error('Data Profil tidak ada');
     }

}

