<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model(['Admin_m']);
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['page'] = 'dashboard_admin';
		$this->load->view('components/header');
		$this->load->view('admin/v_dashboard');
		$this->load->view('components/footer', $data);
	}

	public function all_unemployed() {
		echo json_encode($this->Admin_m->getAllWargaByBekerja()->result());
	}

	public function unemployed_per_rw() {
		$unemployedPerRw = $this->Admin_m->getUnemployedPerRw()->result_array();
		$wargaPerRw = $this->Admin_m->getWargaByRw()->result_array();

		for ($i=0; $i < count($wargaPerRw); $i++) { 
			$unemployedPerRw[$i]['jml_warga'] = $wargaPerRw[$i]['jml_warga'];
		}
		
		// echo json_encode($this->Admin_m->getUnemployedPerRw()->result());
		echo json_encode($unemployedPerRw);
	}
}

?>
