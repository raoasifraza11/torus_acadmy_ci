<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends TTT_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('professor_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
		$this->load->model('users_model');
		$this->load->model('users_model');

	}
    public function index()
    {
		$this->slice->view('app_alpha.be.teachers.dashboard');
	}

    public function profile(){
    			if($this->input->post()) {
    				var_dump($_POST);
    				die();
				}
		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());

		$this->slice->view('app_alpha.be.teachers.profile_setting',$data);
	}

	public function academic(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		redirect(base_url("teacher/profile"));
	}


	public function experience(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	}

	public function availability(){
	if($this->input->post()) {
		var_dump($_POST);
		die();
	}
	$this->slice->view('app_alpha.be.teachers.profile_setting');
}


	public function courseSelection(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	}

	public function account(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	}

	public function students(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.enrolled_students');

	}


    
}
?>
