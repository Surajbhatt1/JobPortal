<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup_model extends CI_Model {

	public function insert($data)
	{
		$insert = $this->db->insert('user_tbl',$data);
		return $insert?true:false;

	}
}
