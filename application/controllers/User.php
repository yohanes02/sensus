<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'dashboard_user';
		$this->load->view('components/header');
		$this->load->view('user/v_dashboard');
		$this->load->view('components/footer', $data);
	}
}

?>
