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
		$this->load->model('Course_model');

	}

	public function index()
	{
		$this->slice->view('app_alpha.be.students.dashboard');

	}

   public function profile(){

		if ($this->input->post()){
			$form_data=$this->input->post();
			var_dump($form_data);
			die();
		}
	   $data["user"] = $this->Crud_model->get("users", $this->auth->userID());

	   $this->slice->view('app_alpha.be.students.profile_setting',$data);
   }

   public function singleCourse(){
		$data=null;
		if ($this->input->post("id")) {
          $data["course"] =  $this->Course_model->getCourse($this->input->post("id"));
		}else{
			redirect(base_url("courses"));
		}
			$this->slice->view('landing_alpha.course-single',$data);
   }
	public function payNow()
	{
		if ($this->input->post("id")) {
		}else{
		}
		$this->slice->view('landing_alpha.paynow');
	}


}

?>
