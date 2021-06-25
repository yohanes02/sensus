<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Solusi_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	function getBerita() {
		return $this->db->get('solusi');
	}

	function insertBerita($input) {
		$this->db->insert('solusi', $input);
    return $this->db->affected_rows();
	}
}
