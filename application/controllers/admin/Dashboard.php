<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//  public function __construct(){
	// 	parent::__construct();

	// 	if (empty($this->session->userdata('hak_akses'))){
	// 		redirect('auth/login');
	// 	} elseif ($this->session->userdata('hak_akses') == 'Anggota') {
	// 		redirect('blok');
	// 	}
	// }

	public function index()
	{
		$data['title'] = 'Dashboard';

		$this->load->view('template_backend/header', $data);
		$this->load->view('template_backend/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template_backend/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Admin/Dashboard.php */