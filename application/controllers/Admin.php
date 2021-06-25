<?php

class Admin extends Core_Controller
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model(['AuthAdmin_m', 'Admin_m', 'Solusi_m']);
		// if ($this->session->userdata('tipe_user') != 'admin') {
    //   redirect('authAdmin');
    // }
	}

	public function index()
	{
		$data['user'] = $this->Admin_m->getAdminById($this->session->userdata('id'))->row_array();
		$data['page'] = 'dashboard_admin';
		$this->load->view('components/header');
		$this->load->view('admin/v_dashboard', $data);
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

	public function logout() {
		$this->session->sess_destroy();
		redirect('authAdmin');
	}

	public function berita() {
		$berita = $this->Solusi_m->getBerita()->result_array();
		$data['berita'] = $berita;
		$data['page'] = 'berita_admin';
		$this->load->view('components/header');
		$this->load->view('admin/v_berita_admin', $data);
		$this->load->view('components/footer', $data);
	}

	public function buat_berita() {
		$data['page'] = 'buat_berita';
		$this->load->view('components/header');
		$this->load->view('admin/v_buat_berita');
		$this->load->view('components/footer', $data);
	}
	
	public function kelola_admin() {
		$data['admin_data'] = $this->Admin_m->getAllAdmin()->result_array();
		$data['page'] = 'kelola_admin';

		$this->load->view('components/header');
		$this->load->view('admin/v_kelola_admin', $data);
		$this->load->view('components/footer', $data);
	}

	public function submit_buat_berita() {
		$lastID = $this->Admin_m->getLastAutoIncrement()->row_array();
		$id = (int) $lastID['AUTO_INCREMENT'];


		$input = $this->input->post();

		$ins = [
			'title'				=> $input['title'],
			'deskripsi'		=> $input['deskripsi'],
			'isi'					=> $input['isi'],
			'id_admin'		=> $this->session->userdata('id') 
		];

		if(!empty($_FILES['photo']['name'])) {
			$upload = $this->ups("photo", "berita-$id");
			$ins['foto'] = $upload;
		}

		$this->Solusi_m->insertBerita($ins);

    redirect('admin/berita');
	}

	public function updateProfil() {
		$input = $this->input->post();

		$id = $input['idAdmin'];
		$data = [
			"name" => $input['namaAdmin'],
			"username" => $input['usernameAdmin']
		];

		$this->Admin_m->updateAdmin($id, $data);

		redirect('admin/kelola_admin');
	}

	public function changePassword() {
		$input = $this->input->post();

		$id = $input['idAdmin'];
		$data = [
			"password" => md5($input['newPass'])
		];

		$this->Admin_m->updateAdmin($id, $data);

		redirect('admin/kelola_admin');
	}

	public function deleteAdmin() {
		$id = $this->input->post('idAdmin');
		
		$this->Admin_m->deleteAdmin($id);
		
		redirect('admin/kelola_admin');
	}

	public function createAdmin() {
		$input = $this->input->post();

		$ins = [
			"name" => $input['namaBaru'],
			"username" => $input['unameBaru'],
			"password" => md5($input['passBaru'])
		];

		$this->Admin_m->insertAdmin($ins);

		redirect('admin/kelola_admin');
	}
}

?>
