<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard');
	}
	public function Home()
	{
		$userdata = $this->session->userdata('user_details');

		$this->load->model('GetDataModel');
		$data['questions'] = $this->GetDataModel->getAllQuestionData();
		$data['userdata']= $userdata;
				
		$this->load->view('DashboardHome',$data);
	}
	public function PostQuestion()
	{
		$userdata = $this->session->userdata('user_details');
		$this->load->view('PostQuestion',$userdata);
	}
	public function SearchQuestion()
	{
		$userdata = $this->session->userdata('user_details');
		$this->load->view('SearchQuestion',$userdata);
	}
	public function ViewQuestion()
	{
		$userdata = $this->session->userdata('user_details');

		$user_id = $userdata['user_id']; 
        $this->load->model('GetDataModel');
    
        $data['questions'] = $this->GetDataModel->getQuestionData($user_id);
		$data['userdata']= $userdata;

        $this->load->view('ViewQuestion', $data);
	}
	public function ViewProfile()
	{
		$userdata = $this->session->userdata('user_details');
		$this->load->view('ViewProfile',$userdata);
	}

}
