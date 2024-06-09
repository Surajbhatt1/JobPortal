<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model{

	 public function select($data)
	{
		$q = $this->db->where($data)
			->get('user_tbl');
		if(!empty($q->row()))
		{
			return $q->row();
			return true;
		}
		else
		{
			$this->session->set_flashdata('login Failed','invalid user email and password');
			return false;
		}
	}

}