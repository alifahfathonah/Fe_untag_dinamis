<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Auth_model');
        $this->load->model('artikel_model');        
        
    }

    public function check_account()
    {
        //validasi login
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');

        //ambil data dari database untuk validasi login
        $query = $this->Auth_model->check_account($email, $password);

		// untuk mengecek email
        if ($query === 1) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
             <div class="info-box alert-danger">
             <div class="info-box-icon">
             <i class="fa fa-warning"></i>
             </div>
             <div class="info-box-content" style="font-size:14">
             <b style="font-size: 20px">GAGAL</b><br>Silahkan cek kembali email & kata sandi anda.</div>
             </div>
             </p>
			 ');
		// untuk akun belum aktif
        } elseif ($query === 2) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
              <div class="info-box alert-info">
              <div class="info-box-icon">
              <i class="fa fa-info-circle"></i>
              </div>
              <div class="info-box-content" style="font-size:14">
              <b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.</div>
              </div>
              </p>'
		  );
		// pengecekan untuk password 
        } elseif ($query === 3) {
            $this->session->set_flashdata('alert', '<p class="box-msg">
             <div class="info-box alert-danger">
             <div class="info-box-icon">
             <i class="fa fa-warning"></i>
             </div>
             <div class="info-box-content" style="font-size:14">
             <b style="font-size: 20px">GAGAL</b><br>Silahkan cek kembali email & kata sandi anda.</div>
             </div>
             </p>
             ');
        } else {
            //membuat session dengan nama userData yang artinya nanti data ini bisa di ambil sesuai dengan data yang login
            $userdata = array(
                'is_login'    => true,
                'id_user'     => $query->id_user,
                'paswd'    => $query->paswd,
                'photo'   => $query->photo,
                'foto_ktp'   => $query->foto_ktp,
                'id_role'     => $query->id_role,
                'nama'    => $query->nama,
                'alamat'   => $query->alamat,       
                'no_hp'       => $query->no_hp,
                'email'       => $query->email,
                'tgl_daftar'  => $query->tgl_daftar,
                'lastlogin'  => $query->lastlogin,
                'profesi'  => $query->profesi,
                'facebook'  => $query->facebook,
                'instagram'  => $query->instagram,
                'asal'  => $query->asal,
            );
            $this->session->set_userdata($userdata);
            return true;
        }
    }
    public function login()
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
			'teks'   			    => $site['teks'],
			'caption_1'   			=> $site['caption_1'],
			'caption_2'   			=> $site['caption_2'],
			'link_pendaftaran'   	=> $site['link_pendaftaran'],
			'site'      			=> $site
        );
        //melakukan pengalihan halaman sesuai dengan levelnya
        if ($this->session->userdata('id_role') == "1") {
            redirect('admin/home');
        }

        //proses login dan validasi nya
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('paswd', 'Paswd', 'trim|required|min_length[5]|max_length[22]');
            $error = $this->check_account();

            if ($this->form_validation->run() && $error === true) {
                $data = $this->Auth_model->check_account($this->input->post('email'), $this->input->post('paswd'));

                //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
                if ($data->id_role == '1') {
                    redirect('admin/home');
                }
            } else {
                $this->template->load('layoututama/template_login', 'authentication/login', $data);
            }
        } else {
            $this->template->load('layoututama/template_login', 'authentication/login', $data);
        }
    }
    public function logout()
    {

        date_default_timezone_set("ASIA/JAKARTA");
        $date = array('lastlogin' => date('Y-m-d H:i:s'));
        $id = $this->session->userdata('id_user');
        $this->Auth_model->logout($date, $id);
        $this->session->sess_destroy();
        redirect('auth/login');
    }

	public function pernyataan_register()
    {
      $site = $this->Konfigurasi_model->listing();
      $data = array(
          'title'     => 'Register | '.$site['nama_website'],
          'favicon'   => $site['favicon'],
          'logo'   => $site['logo'],
          'bg'   => $site['bg'],
          'icon'   => $site['icon'],
          'site'      => $site
      );
      $this->template->load('layoututama/template','authentication/register4',$data);
  }

  

    public function profile()
    {
        $site = $this->Konfigurasi_model->listing();
        $data = array(
            'title'                 => 'Profil | '.$site['nama_website'],
            'favicon'               => $site['favicon'],
            'site'                  => $site,
        );
        $id = $this->session->userdata('id_user');
        $data['get_all_userdata'] = $this->Auth_model->get_by_id($this->session->userdata('id_user'));
        $this->template->load('alayout/template', 'authentication/profile', $data);
    }

    public function updateProfile()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[2]|max_length[50]');

        $id = $this->session->userdata('id_user');
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
        );
        if ($this->form_validation->run() == true) {
            if (!empty($_FILES['photo']['name'])) {
                $upload = $this->_do_upload();

                //delete file
                $user = $this->Auth_model->get_by_id($this->session->userdata('id_user'));
                if (file_exists('assets/upload/foto_profil/'.$user->photo) && $user->photo) {
                    unlink('assets/upload/foto_profil/'.$user->photo);
                }

                $data['photo'] = $upload;
            }
            $result = $this->Auth_model->update($data, $id);
            if ($result > 0) {
                $this->updateProfil();
                $this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah, silakan lakukan login ulang!'));
                redirect('auth/profile');
            } else {
                $this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
                redirect('auth/profile');
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            redirect('auth/profile');
        }
    }

    public function updatePassword()
    {
        $this->form_validation->set_rules('passLama', 'Password Lama', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('passBaru', 'Password Baru', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('passKonf', 'Password Konfirmasi', 'trim|required|min_length[5]|max_length[25]');

        $id = $this->session->userdata('id_user');
        if ($this->form_validation->run() == true) {
            if (password_verify($this->input->post('passLama'), $this->session->userdata('paswd'))) {
                if ($this->input->post('passBaru') != $this->input->post('passKonf')) {
                    $this->session->set_flashdata('msg', show_err_msg('Password Baru dan Konfirmasi Password harus sama'));
                    redirect('auth/profile');
                } else {
                    $data = ['paswd' => get_hash($this->input->post('passBaru'))];
                    $result = $this->Auth_model->update($data, $id);
                    if ($result > 0) {
                        $this->updateProfil();
                        $this->session->set_flashdata('msg', show_succ_msg('Password Berhasil diubah'));
                        redirect('auth/profile');
                    } else {
                        $this->session->set_flashdata('msg', show_err_msg('Password Gagal diubah'));
                        redirect('auth/profile');
                    }
                }
            } else {
                $this->session->set_flashdata('msg', show_err_msg('Password Salah'));
                redirect('auth/profile');
            }
        } else {
            $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            redirect('auth/profile');
        }
    }

    private function _do_upload()
    {
        $config['upload_path']          = 'assets/upload/foto_profil/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5000; //set max size allowed in Kilobyte
        $config['max_width']            = 10000; // set max width image allowed
        $config['max_height']           = 10000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $this->session->set_flashdata('msg', $this->upload->display_errors('', ''));
            redirect('auth/profile');
        }
        return $this->upload->data('file_name');
    }

}
