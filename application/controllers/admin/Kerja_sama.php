<?php

class Kerja_sama extends MY_Controller{

    function __construct()
    {
        parent::__construct();

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('kerja_sama_model');
        $this->load->helper('url');
    }

    /*
     * Show kerja_sama
     */
    function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'kerja_sama Baru | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/kerja_sama/index', $data);
    }

    function get_data()
	{
        $site = $this->Konfigurasi_model->listing();
		$list = $this->kerja_sama_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
            $arsip;
            if(!empty($field->foto)){
                $foto = '<img src="'.base_url('assets/upload/foto_kerja_sama/'.$field->foto).'" height="100">';
            }
            $kata ="'Anda akan menghapus permanen data ini !'";

			$no++;
			$row = array();
            $row[] = $no;
            $row[] = $foto;
            $row[] = '<a href="'.site_url('admin/kerja_sama/edit/'.$field->id_kerja_sama).'" class="btn btn-warning btn-sm" title="Ubah"><span class="fa  fa-pencil "></span></a>'.' <a href="'.site_url('admin/kerja_sama/hapus/'.$field->id_kerja_sama).'" class="btn btn-danger btn-sm" title="Hapus Permanen"  onclick="return confirm('.$kata.')"><span class="fa fa-trash"></span></a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->kerja_sama_model->count_all(),
			"recordsFiltered" => $this->kerja_sama_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
	}

    /*
     * Adding a new kerja_sama
     */
    function tambah()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'kerja_sama | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        if($this->form_validation->run())
        {
        date_default_timezone_set('ASIA/JAKARTA');
        $params = array( 
            'tanggal' => date("Y-m-d\TH:i:sP"),
            'deskripsi' => $this->input->post('deskripsi'),
            'arsip' => False
        );

        if (!empty($_FILES['foto']['name'])) {
            $nama_foto    = $this->upload_foto($this->input->post('deskripsi'));
            $params['foto'] = $nama_foto;
        }
        $this->kerja_sama_model->input_data($params);
        
        redirect('admin/kerja_sama');
        }
        else
        {
            $this->template->load('alayout/template', 'admin/kerja_sama/add', $data);
            
        }
    }


    function edit($id_kerja_sama)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit kerja_sama | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['kerja_sama'] = $this->kerja_sama_model->detail_data($id_kerja_sama);
        $this->template->load('alayout/template', 'admin/kerja_sama/edit', $data);
    }

    function update($id_kerja_sama)
    {   
        $konfirm2= $this->input->post('konfirm2');
        $data = array(
            'deskripsi' => $this->input->post('deskripsi'),
            'arsip' => False
        );
        if (!empty($_FILES['foto']['name'])) {
            $nama_foto    = $this->upload_foto($this->input->post('deskripsi'));
            $data['foto'] = $nama_foto;
        }
        $this->kerja_sama_model->update_data($data, $id_kerja_sama);
        redirect('admin/kerja_sama/edit/'.$id_kerja_sama);

    }


    function hapus($id)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'kerja_sama | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $kerja_sama = $this->kerja_sama_model->detail_data($id);

            // check if the kerja_sama exists before trying to delete it
        if(isset($kerja_sama->id_kerja_sama))
        {
        $this->kerja_sama_model->hapus_data($kerja_sama->id_kerja_sama);
        unlink('./assets/upload/foto_kerja_sama/'.$kerja_sama->foto);
        redirect('admin/kerja_sama');
    }
    else
        show_error('Data kerja_sama tidak ada');
    }

    /*
     * fungsi upload foto
     */

    function upload_foto($nama){
        $set_name   = $nama."-".RAND(00000,99999);
        $path       = $_FILES['foto']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/foto_kerja_sama/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 9024;
        $config['width']                = 200;
        $config['height']               = 200;
        $config['file_name']            = "$set_name".$extension;
        $this->load->library('upload', $config);
        // proses upload
        $upload = $this->upload->do_upload('foto');

        if ( ! $upload )
        {
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('alayout/template', 'admin/kerja_sama/add', $error);
        }

        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function hapusfoto($id_kerja_sama)
    {
        $kerja_sama = $this->kerja_sama_model->detail_data($id_kerja_sama);

        if(isset($kerja_sama->id_kerja_sama))
        {

            unlink('./assets/upload/foto_kerja_sama/'.$kerja_sama->foto);
            $data['foto'] = "";
            $this->kerja_sama_model->update_data($data, $kerja_sama->id_kerja_sama);
            redirect('admin/kerja_sama/edit/'.$id_kerja_sama);
        }
        else
          show_error('Data foto tidak ada');
    }

}
