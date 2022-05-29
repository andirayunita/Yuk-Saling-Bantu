<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Donasi';
		$data['donasi'] = $this->Donasi_model->getData('tbl_donasi')->result();

		$this->load->view('template_backend/header', $data);
		$this->load->view('template_backend/sidebar');
		$this->load->view('admin/donasi', $data);
		$this->load->view('template_backend/footer');
	}

	public function hapus($id_donasi){

		$where = [
			'id_donasi' =>$id_donasi
		];

		$this->Donasi_model->deleteData($where, 'tbl_donasi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<i class="icon fa fa-check"></i>
			Data donasi berhasil dihapus.
			</div>');
		redirect('admin/donasi');
	}


}

/* End of file Donasi.php */
/* Location: ./application/controllers/admin/Donasi.php */