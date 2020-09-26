<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends TTT_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('professor_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('users_model');
	}

	public function index()
	{
		$this->slice->view('app_alpha.be.students.dashboard');

	}




}

?>
