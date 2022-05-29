<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('home');
		$this->load->view('template_frontend/footer');
	}

	public function about()
	{
		$data['title'] = 'About';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('about');
		$this->load->view('template_frontend/footer');
	}

	public function gallery()
	{
		$data['title'] = 'Gallery';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('gallery');
		$this->load->view('template_frontend/footer');
	}


	public function gallery1()
	{
		$data['title'] = 'Gallery';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('gallery1');
		$this->load->view('template_frontend/footer');
	}


	public function gallery2()
	{
		$data['title'] = 'Gallery';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('gallery2');
		$this->load->view('template_frontend/footer');
	}

	public function donation()
	{
		$data['title'] = 'Donation';

		$this->load->view('template_frontend/header', $data);
		$this->load->view('donation');
		$this->load->view('template_frontend/footer');
	}

	public function send_donation(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Donation';

			$this->load->view('template_frontend/header', $data);
			$this->load->view('donation');
			$this->load->view('template_frontend/footer');
		} else{
			$nama_program = $this->input->post('nama_program');
			$nama_donatur = $this->input->post('nama_donatur');
			$email = $this->input->post('email');
			$pesan = $this->input->post('pesan');
			$nominal = $this->input->post('nominal');
			$metode_pembayaran = $this->input->post('metode_pembayaran');

			$data = array(
				'nama_program' => $nama_program,
				'nama_donatur' => $nama_donatur,
				'email' => $email,
				'pesan' => $pesan,
				'nominal' => $nominal,
				'metode_pembayaran' => $metode_pembayaran
			);

			$this->Donasi_model->insertData('tbl_donasi', $data);
			// redirect('home/donation');
			echo '<script>alert("Terima kasih. Donasi Berhasil dikirim.");
						window.location.href="'.base_url('home/donation').'";</script>';
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('nama_program', 'Nama Program', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('nama_donatur', 'Nama Donatur', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('email', 'Email', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('pesan', 'Pesan', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('nominal', 'Nominal', 'required', ['required' => '%s tidak boleh kosong']);
		$this->form_validation->set_rules('metode_pembayaran', 'Metode Pembayaran', 'required', ['required' => '%s tidak boleh kosong']);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */