<?php

 class Dashboard extends CI_Controller
 {

 	public function __construct() {
        parent::__construct();

        if(!$this->session->userdata('user_id'))
        {
        	return('login');
        }
        else
        {
        	$id=$this->session->userdata('user_id');
        //    $user_type =$this->session->userdata('user_type');
        //	echo $id;
        //   echo $user_type;
        }
        $this->load->model('Dash_model');
    }
        public function index($offset = 0)
 	{
        $config['base_url'] = base_url().'Dashboard/index';
        $config['total_rows'] = $this->db->count_all('jobs');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');


        $this->pagination->initialize($config);
        $data['Jobs'] = $this->Dash_model->jobs_list($config['per_page'] ,$offset);
 		// $this->load->view('dashboard/header');
 		 $this->load->view('dashboard',$data);
 		// $this->load->view('dashboard/footer');         
 	}

    public function apply($id)
    {
        echo $id;

        $this->session->set_userdata('job_id',$id);

        return redirect('Apply');
        
    }
/*
    public function search()
    {
             $model = $this->load->model('Dash_model');

             $search = $this->input->post('Search');

                 // $data = 'job_title' => $search
             echo $search;
             // $this->Dash_model->get_search($search);
            $get_s = $this->Dash_model->get_search($search)->job_title;
    }*/
}