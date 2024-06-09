<?php

class Dash_model extends CI_Model
{
	public function jobs_list($limit,$offset)
	{
		$this->db->select('*');
		$this->db->from('jobs');
		$this->db->limit($limit,$offset);
		$query = $this->db->get();
		return $query->result();
	}
/*
	public function get_search($search)
	{
		//echo $search;
		$s = $this->db->where('job_title',$search)
				->get('jobs');

		
		if(!empty($s->row()))
		{
			return $s->row();
			echo "0";
			return true;
		}
		else
		{
		//	$this->session->set_flashdata('login Failed','invalid user email and password');
			echo "1";

			return false;
		}
	}*/
}