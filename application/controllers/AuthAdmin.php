<?php

class AuthAdmin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model(['AuthAdmin_m']);
	}

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('admin/v_login_admin');
		$this->load->view('components/footer');
	}

	public function login()
	{
		echo "TRY";
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->AuthAdmin_m->getAdmin($username, md5($password))->row_array();

		if (empty($admin)) {
			redirect('authAdmin');
		}

		redirect('admin');
	}
}

?>
