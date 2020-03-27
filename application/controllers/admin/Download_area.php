<?php

class Download_area extends MY_Controller{

    function __construct()
    {
        parent::__construct();

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('download_area_model');
        $this->load->helper('url');
    }

    /*
     * Show download_area
     */
    function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Unggah File | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/download_area/index', $data);
    }

    function get_data()
	{
        $site = $this->Konfigurasi_model->listing();
		$list = $this->download_area_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
            $arsip;
            $kata ="'Anda akan menghapus permanen data ini !'";

			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $field->judul;
            $row[] = $field->file;
            $row[] = '<a href="'.site_url('admin/download_area/edit/'.$field->id_download).'" class="btn btn-warning btn-sm" title="Ubah"><span class="fa  fa-pencil "></span></a>'.' <a href="'.site_url('admin/download_area/hapus/'.$field->id_download).'" class="btn btn-danger btn-sm" title="Hapus Permanen"  onclick="return confirm('.$kata.')"><span class="fa fa-trash"></span></a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->download_area_model->count_all(),
			"recordsFiltered" => $this->download_area_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
	}

    /*
     * Adding a new download_area
     */
    function tambah()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Tambah File| '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul Artikel','max_length[200]|required|is_unique[download_area.judul]');
        $this->form_validation->set_rules('teks','Teks Artikel','required');
        if($this->form_validation->run())
        {
        date_default_timezone_set('ASIA/JAKARTA');
        $params = array( 
            'judul'         => $this->input->post('judul'),
            'teks'          => $this->input->post('teks'),
            'tanggal_input' => date("Y-m-d\TH:i:sP"),
            'slug'          => slug($this->input->post('judul',TRUE)),
            'arsip'         => False
        );

        if (!empty($_FILES['file']['name'])) {
            $nama_file    = $this->upload_file($this->input->post('judul'));
            $params['file'] = $nama_file;
        }
        $this->download_area_model->input_data($params);
        
        redirect('admin/download_area');
        }
        else
        {
            $this->template->load('alayout/template', 'admin/download_area/add', $data);
            
        }
    }


    function edit($id_download)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit File | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['download_area'] = $this->download_area_model->detail_data($id_download);
        $this->template->load('alayout/template', 'admin/download_area/edit', $data);
    }

    function update($id_download)
    {   
        $konfirm2= $this->input->post('konfirm2');
        $data = array(
            'judul'         => $this->input->post('judul'),
            'teks'          => $this->input->post('teks'),
            'slug'          => slug($this->input->post('judul',TRUE)),
            'arsip'         => False
        );
        if (!empty($_FILES['file']['name'])) {
            $nama_file    = $this->upload_file($this->input->post('judul'));
            $data['file'] = $nama_file;
        }
        $this->download_area_model->update_data($data, $id_download);
        redirect('admin/download_area/edit/'.$id_download);

    }


    function hapus($id)
    {   
        $download_area = $this->download_area_model->detail_data($id);

        // check if the download_area exists before trying to delete it
        if(isset($download_area->id_download))
        {
        $this->download_area_model->hapus_data($download_area->id_download);
        unlink('./assets/upload/download_area/'.$download_area->file);
        redirect('admin/download_area');
    }
    else
        show_error('Data download_area tidak ada');
    }

    /*
     * fungsi upload file
     */

    function upload_file($nama){
        $set_name   = $nama."-".RAND(00000,99999);
        $path       = $_FILES['file']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/download_area/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 9024;
        // $config['width']                = 200;
        // $config['height']               = 200;
        $config['file_name']            = "$set_name".$extension;
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('file');

        if ( ! $upload )
        {
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('alayout/template', 'admin/download_area/add', $error);
        }

        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function hapusfile($id_download)
    {
        $download_area = $this->download_area_model->detail_data($id_download);

        if(isset($download_area->id_download))
        {

            unlink('./assets/upload/download_area/'.$download_area->file);
            $data['file'] = "";
            $this->download_area_model->update_data($data, $download_area->id_download);
            redirect('admin/download_area/edit/'.$id_download);
        }
        else
          show_error('Data file tidak ada');
    }

}
