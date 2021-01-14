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

	public function profile()
	{

		if ($this->input->post()) {
			$form_data = $this->input->post();
			var_dump($form_data);
			die();
		}
		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());

		$this->slice->view('app_alpha.be.students.profile_setting', $data);
	}


	public function payNow()
	{
		if ($this->input->post("id")) {
			$c_status = array(
				'course_id' => $this->input->post("id")
			);
			$this->session->set_userdata($c_status);

		}



		if (!$this->session->has_userdata('course_id')) {
			redirect(base_url(), 'courses');
		}

		if ($this->input->post("type")) {
			$course["course_id"]=$this->session->userdata('course_id');
			$course["payment_method"]=$this->input->post("type");
			$course["student_id"]=$this->auth->userID();
			$course["payment_status"]=0;
			$this->Crud_model->insert('student_enrolled_courses', $course);
//			$this->session->set_flashdata('course_purchase', '');
			redirect(base_url("courses"));
		}

		$data["course"] = $this->Course_model->getCourse($this->session->userdata('course_id'));


		$this->slice->view('landing_alpha.paynow', $data);
	}

	public function student_course_enrolled()
	{
		$data["courses"]=$this->users_model->enrolledCourse($this->auth->userID());
		$this->slice->view('app_alpha.be.students.enrolled',$data);
	}

	public function student_course_enrolled_proof()
	{
		$data["courses"]=$this->users_model->enrolledCourse($this->auth->userID());
		$this->slice->view('app_alpha.be.students.proof',$data);
	}


	public function studentPaymentHistory()
	{
		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());
		$data["courses"]=$this->users_model->enrolledCourse($this->auth->userID());
//		var_dump($data);
//		die();
		$this->slice->view('app_alpha.be.students.payment_history',$data);
	}

}

?>
