<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AuthUser_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	public function getUser($nik, $pass)
	{
    $this->db->where(['nik' => $nik, 'password' => $pass]);
    return $this->db->get("warga");
	}
}
