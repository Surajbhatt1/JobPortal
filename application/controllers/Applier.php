<?php
class Applier extends CI_Controller
{

	public function __construct() 
	{
        parent::__construct();

        $this->load->model('Applier_model');
    }

		public function index()
		{
			$id=$this->session->userdata('user_id');
			echo $id;


			  $this->load->model('Applier_model');
		// $config['base_url'] = base_url().'Applier/index';
  //       $config['total_rows'] = $this->db->count_all('apply');
  //       $config['per_page'] = 5;
  //       $config['uri_segment'] = 3;
  //       $config['attributes'] = array('class' => 'pagination-link');


  //       $this->pagination->initialize($config);
        $data['apply'] = $this->Applier_model->show_apply($id);
 	// 	// $this->load->view('dashboard/header');
 		 $this->load->view('applier',$data);

		}

}
?>