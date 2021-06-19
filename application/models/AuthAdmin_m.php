<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AuthAdmin_m extends CI_Model
{
	function __construct()
  {
    parent::__construct();
  }

	public function getAdmin($username, $pass)
	{
    $this->db->where(['username' => $username, 'password' => $pass]);
    return $this->db->get("user_admin");
	}
}
