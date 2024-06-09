<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Provider_model extends CI_Model {

	public function insert($data1)
	{
		$insert = $this->db->insert('jobs',$data1);
		return $insert?true:false;

	}
}
