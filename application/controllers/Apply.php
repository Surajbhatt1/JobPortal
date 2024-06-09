<?php

class Apply extends CI_Controller
{

 	public function __construct() {
        parent::__construct();

        
        	$id=$this->session->userdata('job_id');
        	//$jid = $this->session->userdata('j_uid');		//extra

        //	echo $id;
       // 	echo $jid;
        //    $user_type =$this->session->userdata('user_type');
        //	echo $id;
        //   echo $user_type;
        $this->load->model('Apply_model');

        $data['Jobs']=$this->Apply_model->get_job($id);

         //echo $data['Jobs']->job_title;

        $this->load->view('apply',$data);
    }
 
	public function insert()
	{
			$model = $this->load->model('Apply_model');
			$job_u_id = $this->input->post('job_u_id');
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$contact = $this->input->post('contact');
			
			$job_title = $this->input->post('job_title');
			$job_desc = $this->input->post('job_desc');
			$skill = $this->input->post('skills');

			$data = array('apply_id' =>"null",
				'job_id' => $this->session->userdata('job_id') ,
				'user_id' => $this->session->userdata('user_id') ,
				'job_u_id'=> $job_u_id,
				'name' => $name,
				'email' => $email,
				'contact' => $contact,

				'job_title' => $job_title,
				'job_desc' => $job_desc,
				'skills' => $skill
			);
			$this->Apply_model->insert($data);
			return redirect('Home');

	}

		public function index()
		{
				 $this->load->view("apply");
		}
}
?>