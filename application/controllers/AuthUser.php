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
		$this->load->view('components/header');
		$this->load->view('user/v_login_user');
		$this->load->view('components/footer');
	}

	public function login()
	{
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');

		$user = $this->AuthUser_m->getUser($nik, md5($password))->row_array();

		if (empty($user)) {
			redirect('authUser');
		}

		redirect('user');
	}
}

?>
