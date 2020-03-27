<?php

class Carousel extends MY_Controller{

    function __construct()
    {
        parent::__construct();

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('carousel_model');
        $this->load->helper('url');
    }

    /*
     * Show carousel
     */
    function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'carousel Baru | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/carousel/index', $data);
    }

    function get_data()
	{
        $site = $this->Konfigurasi_model->listing();
		$list = $this->carousel_model->get_datatables();
        $data = array();
        $kata ="'Slide tidak akan ditampilkan di halaman utama'";
        $kata2 ="'Slide ini akan ditampilkan kembali di halaman utama'";
        $no = $_POST['start'];
		foreach ($list as $field) {
            $status = '<small class="label label-danger">Diarsipkan</small>';
            $arsip  = '<a href="'.site_url('admin/carousel/publikasi/'.$field->id_carousel).'" class="btn btn-info btn-sm" title="Tampilkan"  onclick="return confirm('.$kata2.')"><span class="fa fa-eye"></span></a>';
            if(!empty($field->foto)){
                $foto = '<img src="'.base_url('assets/upload/images/'.$field->foto).'" height="100">';
            }

            if($field->arsip==false){
                $arsip = '<a href="'.site_url('admin/carousel/arsip/'.$field->id_carousel).'" class="btn btn-info btn-sm" title="Arsip"  onclick="return confirm('.$kata.')"><span class="fa fa-eye-slash"></span></a>';
                $status = '<small class="label label-success">Aktif</small>';
            }

			$no++;
            $row = array();
            $row[]  = $no;
            $row[]  = $foto;
            $row[]  = $status;
            $row[]  = '<a href="'.site_url('admin/carousel/edit/'.$field->id_carousel).'" class="btn btn-warning btn-sm" title="Sunting Kata"><span class="fa  fa-pencil "></span></a> '.$arsip;
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->carousel_model->count_all(),
			"recordsFiltered" => $this->carousel_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
	}

    /*
     * Adding a new carousel
     */
    function tambah()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'carousel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules('h1','h1','max_length[50]|required');
        $this->form_validation->set_rules('h2','h2','max_length[50]|required');
        if($this->form_validation->run())
        {  
            $params = array(
                'h1' => $this->input->post('h1'),
                'h2' => $this->input->post('h2'),
            );
            if (!empty($_FILES['foto']['name'])) {
                $nama_foto    = $this->upload_foto($this->input->post('h1'));
                $params['foto'] = $nama_foto;
            }

            $this->carousel_model->input_data($params);
            redirect('admin/carousel');
        }
        else
        {
            $this->template->load('alayout/template', 'admin/carousel/add', $data);
            
        }
    }

    function edit($id)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit carousel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['carousel'] = $this->carousel_model->detail_data($id);
        $this->template->load('alayout/template', 'admin/carousel/edit', $data);
    }

    function update($id)
    {   
        $data = array(
            'h1' => $this->input->post('h1'),
            'h2' => $this->input->post('h2'),
        );
        if (!empty($_FILES['foto']['name'])) {
            $nama_foto    = $this->upload_foto($this->input->post('h1'));
            $data['foto'] = $nama_foto;
        }
        $this->carousel_model->update_data($data, $id);
        redirect('admin/carousel/edit/'.$id);

    }

    function arsip($id)
    {   
        $data = array(
            'arsip' => true,
        );
        $this->carousel_model->update_data($data, $id);
        redirect('admin/carousel');
    }

    function publikasi($id)
    {   
        $data = array(
            'arsip' => false,
        );
        $this->carousel_model->update_data($data, $id);
        redirect('admin/carousel');
    }


    // function hapus($id)
    // {   
    //     $carousel = $this->carousel_model->detail_data($id);
    //     if(isset($carousel->id_carousel))
    //     {
    //         $this->carousel_model->hapus_data($carousel->id_carousel);
    //         unlink('./assets/upload/images/'.$carousel->foto);
    //         redirect('admin/carousel');
    //     }
    //     else
    //         show_error('Data carousel tidak ada');
    // }

    function upload_foto($nama){
        $set_name   = $nama."-".RAND(00000,99999);
        $path       = $_FILES['foto']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/images/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 9024;
        $config['width']                = 800;
        $config['height']               = 500;
        $config['file_name']            = "$set_name".$extension;
        $this->load->library('upload', $config);
        // proses upload
        $upload = $this->upload->do_upload('foto');

        if ( ! $upload )
        {
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('alayout/template', 'admin/carousel/add', $error);
        }

        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function hapusfoto($id)
    {
        $carousel = $this->carousel_model->detail_data($id);

        if(isset($carousel->id_carousel))
        {
            unlink('./assets/upload/images/'.$carousel->foto);
            $data['foto'] = "";
            $this->carousel_model->update_data($data, $carousel->id_carousel);
            redirect('admin/carousel/edit/'.$id);
        }
        else
          show_error('Data foto tidak ada');
    }

}
