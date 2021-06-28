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

	public function profile() {
		$data['works'] = $this->User_m->getWork($this->session->userdata('nik'))->result_array();
		$data['warga'] = $this->User_m->getDetailWarga($this->session->userdata('nik'))->row_array();
		if($data['warga']['jenis_kelamin'] === "P") {
			$data['warga']['jenis_kelamin'] = "Perempuan";
		} else {
			$data['warga']['jenis_kelamin'] = "Laki-laki";
		}

		$tgl_lahir = date_create($data['warga']['tanggal_lahir']);
		$data['warga']['tanggal_lahir'] = date_format($tgl_lahir, "d F Y");

		$data['page'] = 'profile_user';
		$this->load->view('components/header');
		$this->load->view('user/v_profile', $data);
		$this->load->view('components/footer', $data);
	}

	public function beritaDetail($id) {
		$data['detail'] = $this->Solusi_m->getBeritaById($id)->row_array();

		$data['page'] = 'berita_detail';
		$this->load->view('components/header');
		$this->load->view('user/v_detail_berita', $data);
		$this->load->view('components/footer', $data);
	}

	public function changePassword() {
		$nik = $this->session->userdata('nik');
		$input = $this->input->post();

		$data = [
			'password' => md5($input['newPass']),
		];

		$this->User_m->updateUser($nik, $data);

		redirect('user/profile');
	}

	public function updateData() {
		$nik = $this->session->userdata('nik');
		$input = $this->input->post();
		// var_dump($input['sameAddress']);

		$status = ['stats_alamat'=>0];

		$data = [
			'email' => $input['email'],
			'handphone' => $input['handphone']
		];

		if($input['sameAddress'] == 'not same') {
			$status = ['stats_alamat'=>1];
			$data['cur_alamat'] = $input['cur_alamat'];
			$data['cur_rt'] = $input['cur_rt'];
			$data['cur_rw'] = $input['cur_rw'];
		}

		// print_r($data);

		$this->User_m->updateUser($nik, $data, $status);

		redirect('user/profile');
	}

	public function insertWork() {
		$nik = $this->session->userdata('nik');
		$post = $this->input->post();
		
		$data = [
			"nik"						=> $nik, 
			"perusahaan"		=> $post['perusahaan'],
			"bidang"				=> $post['bidang'],
			"start_work"		=> date('Y-m-d', strtotime($post['start-working'])),
			"status"				=> $post['status']
		];

		if($post['status'] == '1') {
			$data['end_work'] = null;
		} else {
			$data['end_work'] = date('Y-m-d', strtotime($post['end-working']));
		}
		
		$this->User_m->insertWork($data);

		redirect('user/profile');
	}

	public function deleteWork() {
		$id = $this->input->post('idWork');
		$this->User_m->deleteWork($id);
		redirect('user/profile');
	}
}

?>
