<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Homepage');
	}

	public function register() {
        //new added 
        $userID =mt_rand(1,9).date("His") . mt_rand(11,99);
        
        $data = array(
            'id' => $userID ,
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'profile_picture' => $this->input->post('profilePic'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) 
        );

		$this->load->model('Save_user_model');
        $this->Save_user_model->save_details($data);

        redirect('login'); 
    }
}
