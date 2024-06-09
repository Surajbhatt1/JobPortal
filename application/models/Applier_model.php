<?php

class Applier_model extends CI_Model
{
	public function show_apply($id)
	{

	$q = $this->db->where('job_u_id',$id)
			->get('apply');

	}
	
}