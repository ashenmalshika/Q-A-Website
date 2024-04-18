<?php

class Login extends CI_Controller{
    public function LoginUser(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE){
            $error_message = validation_errors();
    
            // Check if both username and password fields are empty
            if (empty($this->input->post('username')) && empty($this->input->post('password'))) {
                $error_message = 'Username and password are required';
            }elseif(empty($this->input->post('username'))){
                $error_message = 'Username is required';
            }elseif(empty($this->input->post('password'))){
                $error_message = 'Password is required';
            }
            $this->session->set_flashdata('msg', $error_message);
            redirect('login');
        }else{
            $this->load->model('LoginModel');
            $result=$this->LoginModel->getdata();

            if($result!=false){
                $userdata=array(
                    'user_id'=>$result->id,
                    'name'=>$result->username,
                    'loggedin'=>TRUE
                );
                $this->session->set_userdata($userdata);
                $this->session->set_flashdata('Welcomemsg','Welcome to Dashboard..!');
                $this->load->view('Dashboard');

            }else{
                $this->session->set_flashdata('msg','Username or Password Incorrect.');
                redirect('login');
            }
        }
    }public function LogoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('loggedin');
        redirect('Welcome/Login');
    }
    
    public function ResetPassword(){
        $this->load->view('PasswordResetPage');
    }

    public function SendOTP(){
        $this->load->view('PasswordResetPage');
    }
}
?>