<?php

class Apply_model extends CI_Model
{
		public function get_job($id)
		{
			$v = $this->db->where('job_id',$id)
				->get('jobs');

		if(!empty($v->row()))
		{
			return $v->row();
			echo "0";
			return true;
		}
		else
		{
		//	$this->session->set_flashdata('login Failed','invalid user email and password');
			echo "1";

			return false;
		}

		}

		public function insert($data)
		{
			$insert = $this->db->insert('apply',$data);
			return $insert?true:false;

		}	
}