<?php

class Provider extends CI_Controller
{
		public function index()
		{
			$this->load->view("provider");
		}

		public function show()
		{

			$id=$this->session->userdata('user_id');

			$model = $this->load->model('Provider_model');
			$j_uid = $this->input->post('$id');
			$j_title = $this->input->post('job_title');
			$j_desc = $this->input->post('job_desc');
			$data1 = array('job_id' =>"null",
				'job_u_id' => $id,
				'job_title' => $j_title,
				'job_description' => $j_desc
			);
			$this->Provider_model->insert($data1);
			return redirect('Provider');
		}

}
