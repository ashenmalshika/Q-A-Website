<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('Dashboard');
	}
	public function PostQuestion()
	{
		$this->load->view('DashboardPostQuestion');
	}

}
