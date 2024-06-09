<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model Extends CI_Model
{
	public function select_job()
	{
		$j = $this->db->where(*)
			->gets('jobs');
			
	}
}