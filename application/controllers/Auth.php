<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		// if ($this->session->userdata('hak_akses') == 'Admin'){
		// 	redirect('admin/dashboard');
		// } elseif ($this->session->userdata('hak_akses') == 'Anggota'){
		// 	redirect('booking/dashboard');
		// }

		$data['title'] = 'Login';
		$this->_rules();

		if ($this->form_validation->run() == FALSE){
			$this->load->view('login', $data);
		} else{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->Donasi_model->cekLogin($username, $password);

			if ($cek == FALSE){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<i class="icon fa fa-check"></i>
					User tidak ditemukan! Silahkan login dengan benar.
					</div>');
				redirect('auth/login');
			}else{
				if ($cek->hak_akses == 'Admin'){
					$this->session->set_userdata('id_user', $cek->id_user);
					$this->session->set_userdata('nama', $cek->nama);
					$this->session->set_userdata('username', $cek->username);
					$this->session->set_userdata('hak_akses', $cek->hak_akses);

					redirect('admin/dashboard');
				} else{
					$this->session->set_userdata('id_user', $cek->id_user);
					$this->session->set_userdata('nama', $cek->nama);
					$this->session->set_userdata('username', $cek->username);
					$this->session->set_userdata('hak_akses', $cek->hak_akses);

					redirect('home');
				}
			}

		}
	}

	public function regist(){

		// if ($this->session->userdata('hak_akses') == 'Admin'){
		// 	redirect('admin/dashboard');
		// } elseif ($this->session->userdata('hak_akses') == 'Anggota'){
		// 	redirect('booking/dashboard');
		// }

		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tbl_user.username]', ['required' => '%s tidak boleh kosong', 'is_unique' => '%s tidak tersedia', 'min_length' => '%s harus lebih dari 5 karakter']);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]', ['required' => '%s tidak boleh kosong', 'min_length' => '%s harus lebih dari 5 karakter']);

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Registrasi';

			$this->load->view('regist', $data);
		} else{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$hak_akses = 'User';

			$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => $password,
				'hak_akses' => $hak_akses
			);

			$this->Donasi_model->insertData('tbl_user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="icon fa fa-check"></i>
				Registrasi berhasil. Silahkan Anda Login!
				</div>');
			redirect('auth/login');

		}
	}

	public function _rules(){
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => '%s tidak boleh kosong']);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */