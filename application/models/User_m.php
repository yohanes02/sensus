<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	public function getDetailWarga($nik) {
		$rawQuery = "SELECT a.*, b.* FROM warga a, warga_additional b WHERE a.nik = '$nik' AND a.nik = b.nik";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	public function updateUser($nik, $data, $status) {
		$this->db->where(['nik' => $nik])->update('warga', $status);
		$this->db->where(['nik' => $nik])->update('warga_additional', $data);
		return $this->db->affected_rows();
	}

	public function insertWork($ins) {
		$this->db->insert('history_work', $ins);
		return $this->db->affected_rows();
	} 

	public function getWork($nik) {
		$this->db->where(['nik' => $nik]);
		return $this->db->get('history_work');
	}

	public function updateWork($id, $data) {
		$this->db->where(['id'=>$id])->update('history_work', $data);
		return $this->db->affected_rows();
	}

	public function deleteWork($id) {
		$this->db->where(['id'=>$id])->delete("history_work");
		return $this->db->affected_rows();
	}
}
