<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->Donasi_model->getData('tbl_user')->result();

		$this->load->view('template_backend/header', $data);
		$this->load->view('template_backend/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('template_backend/footer');
	}

	public function tambah(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Tambah Data User';

			$this->load->view('template_backend/header', $data);
			$this->load->view('template_backend/sidebar');
			$this->load->view('admin/tambah_user');
			$this->load->view('template_backend/footer');
		} else{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$hak_akses = $this->input->post('hak_akses');

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
				Data user berhasil ditambahkan.
				</div>');
			redirect('admin/user');
		}
	}

	public function edit($id_user){
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required', ['required' => '%s tidak boleh kosong']);

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Edit Data User';

			$where = [
				'id_user' =>$id_user
			];

			$data['user'] = $this->Donasi_model->getWhere($where, 'tbl_user')->result();

			$this->load->view('template_backend/header', $data);
			$this->load->view('template_backend/sidebar');
			$this->load->view('admin/edit_user', $data);
			$this->load->view('template_backend/footer');
		} else{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$hak_akses = $this->input->post('hak_akses');

			if($this->input->post('password') == ''){
				$data = array(
				'nama' => $nama,
				'username' => $username,
				'hak_akses' => $hak_akses
			);
			} else{
				$data = array(
				'nama' => $nama,
				'username' => $username,
				'password' => md5($this->input->post('password')),
				'hak_akses' => $hak_akses
			);
			}

			$where = array(
				'id_user' => $id_user
			);

			$this->Donasi_model->updateData('tbl_user', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="icon fa fa-check"></i>
				Data user berhasil diedit.
				</div>');
			redirect('admin/user');
		}
	}

	public function hapus($id_user){

		$where = [
			'id_user' =>$id_user
		];

		$this->Donasi_model->deleteData($where, 'tbl_user');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="icon fa fa-check"></i>
			Data user berhasil dihapus.
			</div>');
		redirect('admin/user');
	}

	public function _rules(){
		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required', ['required' => '%s tidak boleh kosong']);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/Admin/user.php */