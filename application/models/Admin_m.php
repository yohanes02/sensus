<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
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
}
