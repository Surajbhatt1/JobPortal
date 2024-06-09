<?php
class Login extends CI_Controller
{
		public function index()
		{
			$this->load->view("login");
		}

		public function get()
		{
			$model = $this->load->model('Login_model');
			$uemail = $this->input->post('u_email');
			$upass = $this->input->post('u_pass');

			$data = array(
				'user_email' => $uemail,
				'user_pass' => $upass
			 );
			$login_id = $this->Login_model->select($data)->user_id;
			$user_type = $this->Login_model->select($data)->user_type;

			if(!$login_id)
			{
				 $this->session->set_flashdata('login Failed','invalid user email and password');
			//	$this->session->alert('login Failed','invalid user email and password');
			//	alert('login Failed','invalid user email and password');
				return redirect('Login');
			}
			else
			{
				$this->session->set_userdata('user_id',$login_id);
				// $this->session->set_userdata('user_type',$user_type);
				if ($user_type==1)
				 {
					
				return redirect('provider');
				}
				else
				{
				return redirect('Dashboard');
				}
			}

		}
}
?>