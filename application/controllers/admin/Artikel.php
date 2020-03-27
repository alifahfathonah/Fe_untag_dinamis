<?php

class Artikel extends MY_Controller{

    function __construct()
    {
        parent::__construct();

        $this->check_login();
        if ($this->session->userdata('id_role') != "1") {
            redirect('', 'refresh');
        }
        $this->load->model('artikel_model');
        $this->load->model('Kategoria_model');
        $this->load->model('auth_model');
        $this->load->helper('url');
    }

    /*
     * Show artikel
     */
    function index()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Artikel Baru | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/artikel/index', $data);
    }

    function arsip_artikel()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Artikel Baru | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $this->template->load('alayout/template', 'admin/artikel/arsip', $data);
    }

    function get_data_terpublikasi()
	{
        $site = $this->Konfigurasi_model->listing();
		$list = $this->artikel_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
            $arsip;
            $kata ="'Artikel tidak akan terlihat di halaman utama web'";
            $gambar = '<img src="'.base_url('assets/upload/images/'.$site['icon']).'"  width="100">';
            if($field->arsip==False){ 
                $arsip = 'tidak';
            }else{ 
                $arsip = 'ya';
            }

            if(!empty($field->gambar)){
                $gambar = '<img src="'.base_url('assets/upload/foto_artikel/'.$field->gambar).'" height="100">';
            }

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = tgl($field->tanggal);
			$row[] = $field->judul;
			$row[] = $gambar;
			$row[] = $field->kategori_artikel;
            $row[] = '<a href="'.site_url('admin/artikel/edit/'.$field->id_artikel).'" class="btn btn-warning btn-sm" title="Sunting Kata"><span class="fa  fa-pencil "></span></a>'.' <a href="'.site_url('admin/artikel/arsip/'.$field->id_artikel).'" class="btn btn-info btn-sm" title="Arsipkan" onclick="return confirm('.$kata.')"><span class="fa fa-eye-slash "></span></a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->artikel_model->count_all(),
			"recordsFiltered" => $this->artikel_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
    }
    
    function get_data_arsip()
	{
        $site = $this->Konfigurasi_model->listing();
		$list = $this->artikel_model->get_datatables_arsip();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $field) {
            $arsip;
            $kata ="'Artikel akan tampil kembali pada halaman utama'";
            $hapus ="'Artikel akan dihapus permanen'";
            $gambar = '<img src="'.base_url('assets/upload/images/'.$site['icon']).'"  width="100">';
            if($field->arsip==False){ 
                $arsip = 'tidak';
            }else{ 
                $arsip = 'ya';
            }

            if(!empty($field->gambar)){
                $gambar = '<img src="'.base_url('assets/upload/foto_artikel/'.$field->gambar).'" height="100">';
            }

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = tgl($field->tanggal);
			$row[] = $field->judul;
			$row[] = $gambar;
			$row[] = $field->kategori_artikel;
            $row[] = '<a href="'.site_url('admin/artikel/hapus/'.$field->id_artikel).'" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('.$hapus.')"><span class="fa  fa-trash"></span></a> '.'<a href="'.site_url('admin/artikel/edit/'.$field->id_artikel).'" class="btn btn-warning btn-sm" title="Sunting"><span class="fa  fa-pencil "></span></a>'.' <a href="'.site_url('admin/artikel/publikasi/'.$field->id_artikel).'" class="btn btn-info btn-sm" title="Publikasikan" onclick="return confirm('.$kata.')"><span class="fa fa-eye "></span></a>';
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->artikel_model->count_all(),
			"recordsFiltered" => $this->artikel_model->count_filtered(),
			"data" => $data,
        );
        
		//output dalam format JSON
		echo json_encode($output);
	}

    /*
     * Adding a new artikel
     */
    function tambah()
    {   
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Artikel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['kategorinya']=$this->Kategoria_model->tampil_datanya();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul Artikel','max_length[200]|required|is_unique[artikel.judul]');
        $this->form_validation->set_rules('teks','Teks Artikel','required');
        if($this->form_validation->run())
            {   date_default_timezone_set('ASIA/JAKARTA');
        $params = array(
            'judul' => $this->input->post('judul'),
            'teks'      => $this->input->post('teks'),
            'sumber' => $this->input->post('sumber'),
            'tanggal' => date("Y-m-d\TH:i:sP"),
            'id_user' => $this->input->post('id_user'),
            'id_kategori' => $this->input->post('id_kategori'),
            'slug' => slug($this->input->post('judul',TRUE)),
            'arsip' => False
        );

        if (!empty($_FILES['gambar']['name'])) {
            $nama_gambar    = $this->upload_foto($this->input->post('judul'));
            $params['gambar'] = $nama_gambar;
        }
        $this->artikel_model->input_data($params);
        
        redirect('admin/artikel');
        }
        else
        {
            $this->template->load('alayout/template', 'admin/artikel/add', $data);
            
        }
    }


    function detail($slug){ 
        $site = $this->Konfigurasi_model->listing();
        $x = array(
            'title'                 => 'Artikel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );

        $x['k1']=$this->artikel_model->admink1($slug);
        $datanya=$this->artikel_model->get_post_by_slug($slug);
        if($datanya->num_rows() > 0){
            $x['artikel']= $datanya;
            $this->template->load('alayout/template', 'admin/artikel/diskusi', $x);
        }else{
            redirect('admin/artikel');
        }
        
    }


    function edit($id_artikel)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Edit Artikel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $data['kategorinya']=$this->Kategoria_model->tampil_datanya();
        $data['artikel'] = $this->artikel_model->detail_data($id_artikel);
        $this->template->load('alayout/template', 'admin/artikel/edit', $data);
    }

    function update($id_artikel)
    {   
        $konfirm2= $this->input->post('konfirm2');
        $data = array(
            'judul' => $this->input->post('judul'),
            'teks' => $this->input->post('teks'),
            'sumber' => $this->input->post('sumber'),
            'id_kategori' => $this->input->post('id_kategori'),
            'slug' => slug($this->input->post('judul',TRUE)),
            'tgl_edit' => date("Y-m-d\TH:i:sP"),
        );
        if (!empty($_FILES['gambar']['name'])) {
            $nama_gambar    = $this->upload_foto($this->input->post('judul'));
            $data['gambar'] = $nama_gambar;
        }
        $this->artikel_model->update_data($data, $id_artikel);
        redirect('admin/artikel/edit/'.$id_artikel);

    }

    function arsip($id_artikel)
    {   
        $konfirm2= $this->input->post('konfirm2');
        $data = array(
            'arsip' => true,
        );
        $this->artikel_model->update_data($data, $id_artikel);
        redirect('admin/artikel/');

    }

    function publikasi($id_artikel)
    {   
        $konfirm2= $this->input->post('konfirm2');
        $data = array(
            'arsip' => false,
        );
        $this->artikel_model->update_data($data, $id_artikel);
        redirect('admin/artikel/arsip_artikel');

    }


    function hapus($id)
    {   $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Artikel | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $artikel = $this->artikel_model->detail_data($id);

            // check if the artikel exists before trying to delete it
        if(isset($artikel->id_artikel))
        {
        $this->artikel_model->hapus_data($artikel->id_artikel);
        unlink('./assets/upload/foto_artikel/'.$artikel->gambar);
        redirect('admin/artikel/arsip_artikel');
    }
    else
        show_error('Data Artikel tidak ada');
    }

    /*
     * fungsi upload gambar
     */

    function upload_foto($nama){
        $set_name   = $nama."-".RAND(00000,99999);
        $path       = $_FILES['gambar']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config['upload_path']          = './assets/upload/foto_artikel/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 9024;
        $config['width']                = 500;
        $config['height']               = 500;
        $config['file_name']            = "$set_name".$extension;
        $this->load->library('upload', $config);
        // proses upload
        $upload = $this->upload->do_upload('gambar');

        if ( ! $upload )
        {
            $error = array('error' => $this->upload->display_errors());
            $this->template->load('alayout/template', 'admin/artikel/add', $error);
        }

        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    function hapusgambar($id_artikel)
    {
        $artikel = $this->artikel_model->detail_data($id_artikel);

        if(isset($artikel->id_artikel))
        {

            unlink('./assets/upload/foto_artikel/'.$artikel->gambar);
            $data['gambar'] = "";
            $this->artikel_model->update_data($data, $artikel->id_artikel);
            redirect('admin/artikel/edit/'.$id_artikel);
        }
        else
          show_error('Data Gambar tidak ada');
    }

}
