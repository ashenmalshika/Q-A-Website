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

		$this->load->model('GetDataModel');
		$data['questions'] = $this->GetDataModel->getAllQuestionData();
		$data['userdata']= $userdata;

		$this->load->view('SearchQuestion',$data);
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

		$user_id = $userdata['user_id']; 
        $this->load->model('GetDataModel');

		$data['leftUserData'] = $this->GetDataModel->getUserData($user_id);
		$data['userdata']= $userdata;

		$this->load->view('ViewProfile',$data);
	}
	public function updateProfile() {
        $userdata = $this->session->userdata('user_details');

		$user_id = $userdata['user_id']; 

        // Get data
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $profession = $this->input->post('profession');
        $biography = $this->input->post('biography');

		$this->load->model('UpdateProfileModel');
        // Update profile in database
        $result = $this->UpdateProfileModel->updateProfile($user_id, $username, $email, $profession, $biography);

		redirect('viewProfile');
        
    }
	public function removeProfile() {
    	$user_id = $this->input->post('user_id'); 

		$this->load->model('RemoveUserModel');
		$this->RemoveUserModel->removeUser($user_id);

        redirect('Welcome'); // Redirect to homepage   
    }

}
