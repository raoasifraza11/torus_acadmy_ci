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
		$data["academics"] =  $this->Crud_model->get_all_data_by_column_id("teacher_academic_details","user_id",$this->auth->userID());
		$data["organisations"] =  $this->Crud_model->get_all_data_by_column_id("teacher_experience_details","user_id",$this->auth->userID());

		$this->slice->view('app_alpha.be.teachers.profile_setting',$data);
	}

	public function academic(){


		if($this->input->post()) {
			$i=0;
			$years=$this->input->post("year");
			foreach ($this->input->post("degree") as $d ){
               $degree["degree"]=$d;
               $degree["year"]=$years[$i];
               $degree["user_id"]=$this->auth->userID();
               $this->Crud_model->insert('teacher_academic_details', $degree);
				$i++;

			}
		}
		redirect(base_url("teacher/profile"));
	}


	public function experience(){
		if($this->input->post()) {
			$i=0;
			$years=$this->input->post("years");
			foreach ($this->input->post("organisations") as $d ){
				$degree["organisation"]=$d;
				$degree["year"]=$years[$i];
				$degree["user_id"]=$this->auth->userID();
				$this->Crud_model->insert('teacher_experience_details', $degree);
				$i++;

			}
		}
		redirect(base_url("teacher/profile"));
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
