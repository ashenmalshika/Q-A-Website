<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function register_account()
	{
		$this->load->view('Registerpage');
	}
}
