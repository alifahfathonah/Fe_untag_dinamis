<?php

class direktori extends MY_Controller{

    function __construct()
    {
        parent::__construct();

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('direktori_model');
        $this->load->helper('url');
    }

    /*
     * Show direktori
     */
    function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'direktori Baru | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/direktori/index', $data);
    }

    function get_data()
	{
		$list = $this->direktori_model->get_datatables();
        $data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {

            if(!empty($field->gambar)){
                $gambar = '<img src="'.base_url('assets/upload/foto_direktori/'.$field->gambar).'" height="100">';
            }
            $kata ="'Anda akan menghapus permanen data ini !'";

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $field->judul;
			$row[] = '<a href="'.$field->link.'">'.$field->link.'</a>';
            $row[] = '<a href="'.site_url('admin/direktori/edit/'.$field->id_direktori).'" class="btn btn-warning btn-sm" title="Sunting Kata"><span class="fa  fa-pencil "></span></a>'.' <a href="'.site_url('admin/direktori/hapus/'.$field->id_direktori).'" class="btn btn-danger btn-sm" title="Hapus Permanen"  onclick="return confirm('.$kata.')"><span class="fa fa-trash"></span></a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->direktori_model->count_all(),
			"recordsFiltered" => $this->direktori_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
	}

    /*
     * Adding a new direktori
     */
    function tambah()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'direktori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul direktori','max_length[200]|required|is_unique[direktori.judul]');
        $this->form_validation->set_rules('link','Link direktori','required');
        $link = $this->input->post('link');
        if(substr($this->input->post('link'),0,4)!='http'){
            $link = 'http://'.$this->input->post('link');
        }

        if($this->form_validation->run())
            {   date_default_timezone_set('ASIA/JAKARTA');
        $params = array(
            'judul'         => $this->input->post('judul'),
            'link'          => $link,
            'tanggal_input' => date("Y-m-d\TH:i:sP"),
        );

        $this->direktori_model->input_data($params);
        
        redirect('admin/direktori');
        }
        else
        {
            $this->template->load('alayout/template', 'admin/direktori/add', $data);
            
        }
    }

    function edit($id_direktori)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit direktori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['direktori'] = $this->direktori_model->detail_data($id_direktori);
        $this->template->load('alayout/template', 'admin/direktori/edit', $data);
    }

    function update($id_direktori)
    {   
        $link = $this->input->post('link');
        if(substr($this->input->post('link'),0,4)!='http'){
            $link = 'http://'.$this->input->post('link');
        }
        $data = array(
            'judul' => $this->input->post('judul'),
            'link' => $link,
        );
        $this->direktori_model->update_data($data, $id_direktori);
        redirect('admin/direktori');
        // redirect('admin/direktori/edit/'.$id_direktori);

    }


    function hapus($id)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'direktori | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $direktori = $this->direktori_model->detail_data($id);

            // check if the direktori exists before trying to delete it
        if(isset($direktori->id_direktori))
        {
        $this->direktori_model->hapus_data($direktori->id_direktori);
        redirect('admin/direktori');
    }
    else
        show_error('Data direktori tidak ada');
    }

}
