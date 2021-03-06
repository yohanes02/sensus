<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAdminById($id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->get('user_admin');
	}

	function getAllWargaByBekerja()
	{
		$rawQuery = "SELECT bekerja, COUNT(bekerja) as total FROM warga GROUP BY bekerja";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getWargaByRw()
	{
		$rawQuery = "SELECT COUNT(rw) as jml_warga FROM warga GROUP BY rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}


	function getUnemployedPerRw()
	{
		$rawQuery = "SELECT rw, COUNT(rw) as total FROM warga WHERE bekerja = 0 GROUP BY rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getEmployedPerRw()
	{
		$rawQuery = "SELECT rw, COUNT(rw) as total FROM warga WHERE bekerja = 1 GROUP BY rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getSummaryNow()
	{
		$rawQuery = "SELECT a.rw, work, nonwork FROM 
		(select rw, count(rw) as work from warga where bekerja = 1 GROUP BY rw) as a,
		(select rw, count(rw) as nonwork from warga where bekerja = 0 GROUP BY rw) as b
		where a.rw = b.rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getAllAdmin($isSekre = false)
	{
		if ($isSekre) {
			$this->db->where(['type' => 2]);
		} else {
			$this->db->where(['type' => 1]);
		}
		return $this->db->get('user_admin');
	}

	function getLastAutoIncrement()
	{
		$rawQuery = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'sensus_db' AND TABLE_NAME = 'solusi'";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function updateAdmin($id, $data)
	{
		$this->db->where(['id' => $id])->update("user_admin", $data);
		return $this->db->affected_rows();
	}

	function deleteAdmin($id)
	{
		$this->db->where(['id' => $id])->delete("user_admin");
		return $this->db->affected_rows();
	}

	function insertAdmin($input)
	{
		$this->db->insert('user_admin', $input);
		return $this->db->affected_rows();
	}

	function insertWarga($input)
	{
		$this->db->insert('warga', $input);
		$this->db->insert('warga_additional', ['nik'=>$input['nik']]);
		return $this->db->affected_rows();
	}

	function checkPass($id, $pass)
	{
		$this->db->where(['id' => $id, 'password' => $pass]);
		return $this->db->get('user_admin');
	}

	function deleteBerita($id)
	{
		$this->db->where(['id' => $id])->delete("solusi");
		return $this->db->affected_rows();
	}

	function getRW()
	{
		$rawQuery = "SELECT rw FROM warga GROUP BY rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getRT()
	{
		$rawQuery = "SELECT rt FROM warga GROUP BY rt";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getWarga()
	{
		if ($this->session->userdata('filter')) {
			if ($this->session->userdata('rw') != 0) {
				$this->db->where(['rw' => $this->session->userdata('rw')]);
			}
			if ($this->session->userdata('rt') != 0) {
				$this->db->where(['rt' => $this->session->userdata('rt')]);
			}
			if ($this->session->userdata('stat_work') != 3) {
				$this->db->where(['bekerja' => $this->session->userdata('stat_work')]);
			}
		}

		return $this->db->get('warga');
	}

	function deleteWarga($nik) {
		// echo $nik;
		// die();
		$this->db->where(['nik' => $nik])->delete("warga_additional");
		$this->db->where(['nik' => $nik])->delete("warga");
		return $this->db->affected_rows();
	}

	function updateWarga($data, $nik) {
		$this->db->where(['nik' => $nik])->update("warga", $data);
		// print_r($data);
		// die();
		return $this->db->affected_rows();
	}
}
