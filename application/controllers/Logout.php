<?php

class Logout extends CI_Controller
{
	public function index()
	{
		$this->session->unset_userdata('user_id');
		return redirect('Login');
	}
}