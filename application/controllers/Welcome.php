<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Homepage');
	}

	public function register() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Validate input data
            if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)) {
                $this->output
                    ->set_status_header(400)
                    ->set_output(json_encode(['status' => 'error', 'message' => 'All fields are required']));
                return;
            }
            // Generate random ID
            $id = mt_rand(1,9).date("His") . mt_rand(11,99);
            $hash_password = password_hash($password, PASSWORD_BCRYPT);

            $this->load->model("save_user_model");
            $data=$this->save_user_model->insert_user($firstname, $lastname, $email, $username, $hash_password, $id);
			
			
			echo json_encode($data);
		}
    }
}
