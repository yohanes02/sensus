<?php

class AuthUser extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model(['AuthUser_m']);

	}

	public function index()
	{
		if ($this->session->userdata('tipe_user') == 'admin') {
      redirect('admin');
    } elseif ($this->session->userdata('tipe_user') == 'sekre') {
      redirect('sekre');
    } elseif ($this->session->userdata('tipe_user') == 'warga') {
      redirect('user');
    } else {
			$this->load->view('components/header');
			$this->load->view('user/v_login_user');
			$this->load->view('components/footer');
		}
	}

	public function login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->AuthUser_m->getUser($nik, md5($password))->row_array();

		if (empty($user)) {
			redirect('authUser');
		}

		$data_session = array(
			'nik' 			=> $user['nik'],
			'nama' 			=> $user['nama'],
			'tipe_user' => 'warga'
		);

		$this->session->set_userdata($data_session);

		redirect('user');
	}
}

?>
