<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('homepage');
	}

	public function register() {
        $data = array(
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) // You should hash the password
        );

		$this->load->model('Save_user_model');
        $this->Save_user_model->save_details($data);

        redirect('login'); // Redirect to login page after saving user
    }
}
