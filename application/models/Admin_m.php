<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	function getAdminById($id) {
		$this->db->where(['id' => $id]);
		return $this->db->get('user_admin');
	}

	function getAllWargaByBekerja() {
		$rawQuery = "SELECT bekerja, COUNT(bekerja) as total FROM warga GROUP BY bekerja";
    $execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getWargaByRw() {
		$rawQuery = "SELECT COUNT(rw) as jml_warga FROM warga GROUP BY rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}
	

	function getUnemployedPerRw() {
		$rawQuery = "SELECT rw, COUNT(rw) as total FROM warga WHERE bekerja = 0 GROUP BY rw";
    $execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}
	
	function getEmployedPerRw() {
		$rawQuery = "SELECT rw, COUNT(rw) as total FROM warga WHERE bekerja = 1 GROUP BY rw";
    $execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getSummaryNow() {
		$rawQuery = "SELECT a.rw, work, nonwork FROM 
		(select rw, count(rw) as work from warga where bekerja = 1 GROUP BY rw) as a,
		(select rw, count(rw) as nonwork from warga where bekerja = 0 GROUP BY rw) as b
		where a.rw = b.rw";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getAllAdmin() {
		return $this->db->get('user_admin');
	}

	function getLastAutoIncrement() {
		$rawQuery = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'sensus_db' AND TABLE_NAME = 'solusi'";
    $execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function updateAdmin($id, $data) {
		$this->db->where(['id'=>$id])->update("user_admin", $data);
		return $this->db->affected_rows();
	}

	function deleteAdmin($id) {
		$this->db->where(['id'=>$id])->delete("user_admin");
    return $this->db->affected_rows();
	}

	function insertAdmin($input) {
		$this->db->insert('user_admin', $input);
    return $this->db->affected_rows();
	}
}
