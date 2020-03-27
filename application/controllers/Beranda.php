<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	function __construct()
    {
       parent::__construct();
       
    $this->load->model('beranda/artikel_model');
    $this->load->model('beranda/kerja_sama_model');
    $this->load->model('beranda/download_area_model');
    $this->load->model('beranda/direktori_model');
    $this->load->model('beranda/carousel_model');
    $this->load->model('beranda/sub_menu_model');
	$this->load->helper('url');
	$this->load->library('pagination');
    
}

	public function index()
	{
		$site = $this->Konfigurasi_model->listing();
		$data = array(
			'title'     			=> $site['nama_website'],
			'favicon'   			=> $site['favicon'],
			'logo'   				=> $site['logo'],
			'bg'   					=> $site['bg'],
			'icon'   				=> $site['icon'],
			'alamat'   	 			=> $site['alamat'],
			'email'   	 			=> $site['email'],
			'no_telp'   	 		=> $site['no_telp'],
			'jam_buka'   			=> $site['jam_buka'],
			'sambutan'   			=> $site['sambutan'],
			'foto_sambutan'   		=> $site['foto_sambutan'],
			'teks'   				=> $site['teks'],
			'caption_1'   			=> $site['caption_1'],
			'caption_2'   			=> $site['caption_2'],
			'link_pendaftaran'   	=> $site['link_pendaftaran'],
			'site'      			=> $site
		);

		$uri_segment		= 3;
		$limit 				= 6;
		$data['limit']		= $limit;
		$data['offset']		= $this->uri->segment($uri_segment);
		$data['artikel']	= $this->artikel_model->get_data($data)->result();
		$data['pengumuman']	= $this->artikel_model->get_kategori('papan pengumuman')->result();
		$data['loker']		= $this->artikel_model->get_kategori('lowongan kerja')->result();
		// sub menu
		$data['profil']			= $this->sub_menu_model->get_menu('profil')->result();
		$data['kemahasiswaan']	= $this->sub_menu_model->get_menu('kemahasiswaan')->result();
		$data['layanan']		= $this->sub_menu_model->get_menu('layanan')->result();
		$data['pendidikan']		= $this->sub_menu_model->get_menu('pendidikan')->result();
		$data['fasilitas']		= $this->sub_menu_model->get_menu('fasilitas')->result();
		$data['penelitian']		= $this->sub_menu_model->get_menu('penelitian')->result();
		unset($data['limit']);
		unset($data['offset']);
		$total_rows 			= $this->artikel_model->get_data($data)->num_rows();
		$data['pagination']	= paging('beranda/index', $total_rows, $limit, $uri_segment);	

        $data['direktori'] 	= $this->direktori_model->semua_data();
        $data['kerja_sama'] = $this->kerja_sama_model->semua_data();
        $data['carousel'] = $this->carousel_model->semua_data();
        $data['download'] = $this->download_area_model->semua_data();

		$this->template->load('layoututama/template', 'beranda/index', $data);
	}

	function menu($slug){ 
		$data = array();
		$site = $this->Konfigurasi_model->listing();
		$data = array(
			'title'     			=> $this->sub_menu_model->detail_data($slug)->nama_sub_menu.' - '.$site['nama_website'],
			'favicon'   			=> $site['favicon'],
			'logo'   				=> $site['logo'],
			'bg'   					=> $site['bg'],
			'icon'   				=> $site['icon'],
			'alamat'   	 			=> $site['alamat'],
			'email'   	 			=> $site['email'],
			'no_telp'   	 		=> $site['no_telp'],
			'jam_buka'   			=> $site['jam_buka'],
			'sambutan'   			=> $site['sambutan'],
			'foto_sambutan'   		=> $site['foto_sambutan'],
			'teks'   				=> $site['teks'],
			'caption_1'   			=> $site['caption_1'],
			'caption_2'   			=> $site['caption_2'],
			'link_pendaftaran'   	=> $site['link_pendaftaran'],
			'site'      			=> $site
		);
		$data['konten']		= $this->sub_menu_model->detail_data($slug);
		$uri_segment		= 3;
		$limit 				= 6;
		$data['limit']		= $limit;
		$data['offset']		= $this->uri->segment($uri_segment);

		$data['semua_konten']	= $this->sub_menu_model->get_menu($this->sub_menu_model->detail_data($slug)->nama_menu)->result();
		// sub menu
		$data['profil']			= $this->sub_menu_model->get_menu('profil')->result();
		$data['kemahasiswaan']	= $this->sub_menu_model->get_menu('kemahasiswaan')->result();
		$data['layanan']		= $this->sub_menu_model->get_menu('layanan')->result();
		$data['pendidikan']		= $this->sub_menu_model->get_menu('pendidikan')->result();
		$data['fasilitas']		= $this->sub_menu_model->get_menu('fasilitas')->result();
		$data['penelitian']		= $this->sub_menu_model->get_menu('penelitian')->result();
		unset($data['limit']);
		unset($data['offset']);
		$total_rows 			= $this->artikel_model->get_data($data)->num_rows();
		$data['pagination']	= paging('beranda/menu', $total_rows, $limit, $uri_segment);	

        $data['direktori'] 	= $this->direktori_model->semua_data();
        $data['kerja_sama'] = $this->kerja_sama_model->semua_data();
        $data['carousel'] = $this->carousel_model->semua_data();
        $data['download'] = $this->download_area_model->semua_data();
		$this->template->load('layoututama/artikel_template', 'beranda/menu', $data);
		
	}
	
}
