<?php

class User extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthUser_m', 'User_m', 'Solusi_m']);
		if ($this->session->userdata('tipe_user') != 'warga') {
      redirect('authUser');
    }
	}

	public function index()
	{
		$berita = $this->Solusi_m->getBerita()->result_array();
		$data['page'] = 'dashboard_user';
		$data['berita'] = $berita;
		$this->load->view('components/header');
		$this->load->view('user/v_dashboard', $data);
		$this->load->view('components/footer', $data);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('authUser');
	}
}

?>
