<?php

class Sekre extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model(['AuthAdmin_m', 'Admin_m', 'Sekre_m','Solusi_m', 'User_m']);
		// if ($this->session->userdata('tipe_user') != 'admin') {
    //   redirect('authAdmin');
    // }
	}

	public function index()
	{
		if($this->session->userdata('filter')) {
			$this->session->unset_userdata('filter');
			$this->session->unset_userdata('stat_work');
			$this->session->unset_userdata('rt');
		}
		$data['user'] = $this->Admin_m->getAdminById($this->session->userdata('id'))->row_array();
		$data['page'] = 'input_sekre';
		$this->load->view('components/header');
		$this->load->view('sekre/v_input_warga', $data);
		$this->load->view('components/footer', $data);
	}

	public function data_warga() {
		// $data['rw'] = $this->Admin_m->getRW()->result_array();
		$data['rt'] = $this->Sekre_m->getRT()->result_array();
		$data['warga'] = $this->Sekre_m->getWarga()->result_array();

		$rt = array();
		foreach ($data['rt'] as $key) {
			$rt[] = $key['rt'];
		}

		$data['rt'] = $rt;

		// print_r($data);

		// die();

		$data['page'] = 'data_warga';

		$this->load->view('components/header');
		$this->load->view('sekre/v_data_warga', $data);
		$this->load->view('components/footer', $data);
	}

	public function filter_data() {
		$post = $this->input->post();

		$data_session = array(
			'filter' => true,
			'rt' 			=> $post['rt'],
			'stat_work' => $post['stat_work']
		);

		$this->session->set_userdata($data_session);
		redirect('sekre/data_warga');
	}

	public function remove_filter() {
		$this->session->unset_userdata('filter');
		$this->session->unset_userdata('stat_work');
		$this->session->unset_userdata('rt');
		redirect('sekre/data_warga');
	}

	public function insertWarga() {
		$post = $this->input->post();

		$ins = [
			'nik'			=> $post['nik'],
			'password' => md5('12345'),
			'nama'			=> $post['nama'],
			'agama'			=> $post['agama'],
			'jenis_kelamin'			=> $post['jekel'],
			'tempat_lahir'			=> $post['tmp-lhr'],
			'tanggal_lahir'			=> $post['tgl-lhr'],
			'alamat'			=> $post['alamat'],
			'stats_alamat'	=> 0,
			'rw'			=> $this->session->userdata('sekre_rw'),
			'rt'			=> $post['rt'],
			'bekerja' => $post['bekerja']
		];

		$this->Admin_m->insertWarga($ins);

		$this->session->set_flashdata("wargaSaved", "Data warga berhasil disimpan");

		redirect('sekre');
	}

	public function edit_warga($nik) {
		$data['page'] = 'edit_berita';
		$data['warga'] = $this->User_m->getDetailWarga($nik)->row_array();
		$this->load->view('components/header');
		$this->load->view('sekre/v_edit_warga', $data);
		$this->load->view('components/footer', $data);
	}

	public function delete_warga() {
		$post = $this->input->post();
		$nik = $post['idWarga'];
		$this->Admin_m->deleteWarga($nik);
		redirect('sekre/data_warga');
	}

	public function updateWarga() {
		$post = $this->input->post();
		$nik = $post['nik'];

		$data = [
			'nama'			=> $post['nama'],
			'agama'			=> $post['agama'],
			'jenis_kelamin'			=> $post['jekel'],
			'tempat_lahir'			=> $post['tmp-lhr'],
			'tanggal_lahir'			=> $post['tgl-lhr'],
			'alamat'			=> $post['alamat'],
			'rt'			=> $post['rt'],
			'bekerja' => $post['bekerja']
		];

		$this->Admin_m->updateWarga($data, $nik);

		redirect('sekre/data_warga');
	}
}


?>
