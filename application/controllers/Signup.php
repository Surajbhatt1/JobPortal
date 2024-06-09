<?php

class Signup extends CI_Controller
{
		public function index()
		{
			$this->load->view("signup");
		}

		public function show()
		{

			$model = $this->load->model('Signup_model');
			$fname = $this->input->post('name');
			$upass = $this->input->post('pass');
			$uemail = $this->input->post('email');
			$ucontact = $this->input->post('contact');
			$utype = $this->input->post('U_Type');
			$data = array('user_id' =>"null",
				'user_name' => $fname,
				'user_pass' => $upass,
				'user_email' => $uemail,
				'user_contact' => $ucontact,
				'user_type' => $utype
			);
			$this->Signup_model->insert($data);
			return redirect('Login');
		}
}
