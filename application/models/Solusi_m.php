<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Solusi_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	function getBerita($tipe=null) {
		if($tipe != null) {
			$this->db->where(['tipe'=>$tipe]);
		}
		
		return $this->db->get('solusi');
		// return $this->db->get('solusi');
	}

	function insertBerita($input) {
		$this->db->insert('solusi', $input);
    return $this->db->affected_rows();
	}

	public function getBeritaById($id) {
		$this->db->where(['id' => $id]);
		return $this->db->get('solusi');
	}
}
