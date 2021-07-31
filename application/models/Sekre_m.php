<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sekre_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getRT()
	{
		$sekre_rw = $this->session->userdata('sekre_rw');
		$rawQuery = "SELECT rt FROM warga where rw=$sekre_rw GROUP BY rt";
		$execQuery = $this->db->query($rawQuery);
		return $execQuery;
	}

	function getWarga()
	{
		$this->db->where(['rw' => $this->session->userdata('sekre_rw')]);

		if ($this->session->userdata('filter')) {
			if ($this->session->userdata('rt') != 0) {
				$this->db->where(['rt' => $this->session->userdata('rt')]);
			}
			if ($this->session->userdata('stat_work') != 3) {
				$this->db->where(['bekerja' => $this->session->userdata('stat_work')]);
			}
		}

		return $this->db->get('warga');
	}
}
