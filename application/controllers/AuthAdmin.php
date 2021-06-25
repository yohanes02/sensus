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
		if ($this->session->userdata('tipe_user') == 'admin') {
      redirect('admin');
    } elseif ($this->session->userdata('tipe_user') == 'warga') {
      redirect('user');
    } else {
			$this->load->view('components/header');
			$this->load->view('admin/v_login_admin');
			$this->load->view('components/footer');
		}
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

		$data_session = array(
			'id' => $admin['id'],
			'nama' => $admin['username'],
			'tipe_user' => 'admin'
		);

		$this->session->set_userdata($data_session);
		redirect('admin');
	}
}

?>
