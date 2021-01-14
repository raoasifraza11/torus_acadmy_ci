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

	public function profile()
	{
		if ($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$data["active_tab"] = $this->session->userdata("active_tab");

		if ($data["active_tab"] == "selection") {
			$data["courses"] = $this->professor_model->courses($this->session->userdata("class_id"));
		} else {
			$data["courses"] = null;
		}


		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());
		$data["academics"] = $this->Crud_model->get_all_data_by_column_id("teacher_academic_details", "user_id", $this->auth->userID());
		$data["organisations"] = $this->Crud_model->get_all_data_by_column_id("teacher_experience_details", "user_id", $this->auth->userID());
		$data["classes"] = $this->Crud_model->get_all_data("classes");
		$data["account"] = $this->Crud_model->get("bank_details", $this->auth->userID());


		$this->slice->view('app_alpha.be.teachers.profile_setting', $data);
	}

	public function academic()
	{

		if ($this->input->post()) {
			$i = 0;
			$years = $this->input->post("year");
			foreach ($this->input->post("degree") as $d) {
				$degree["degree"] = $d;
				$degree["year"] = $years[$i];
				$degree["user_id"] = $this->auth->userID();
				$this->Crud_model->insert('teacher_academic_details', $degree);
				$i++;

			}
		}
		$tab = array(
			'active_tab' => "acadmic",
		);
		$this->session->set_userdata($tab);
		redirect(base_url("teacher/profile"));
	}


	public function experience()
	{
		if ($this->input->post()) {
			$i = 0;
			$years = $this->input->post("years");
			foreach ($this->input->post("organisations") as $d) {
				$degree["organisation"] = $d;
				$degree["year"] = $years[$i];
				$degree["user_id"] = $this->auth->userID();
				$this->Crud_model->insert('teacher_experience_details', $degree);
				$i++;

			}
		}
		$tab = array(
			'active_tab' => "exp",
		);
		$this->session->set_userdata($tab);
		redirect(base_url("teacher/profile"));
	}


	public function availability()
	{
		if ($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$tab = array(
			'active_tab' => "avaInfo",
		);
		$this->session->set_userdata($tab);
		redirect(base_url("teacher/profile"));

	}


	public function courseSelection()
	{

		if ($this->input->post("coures_s")) {

			if ($this->input->post("sujects")) {
				foreach ($this->input->post("sujects") as $subject) {
					$teacher_course["class_id"] = $this->session->userdata("class_id");
					$teacher_course["course_id"] = $subject;
					$teacher_course["teacher_id"] = $this->auth->userID();
					$this->Crud_model->insert('teacher_class_course', $teacher_course);
				}

			} else {
				$class = array(
					'class_id' => $this->input->post("class"),
				);
				$this->session->set_userdata($class);

			}

		}

		$tab = array(
			'active_tab' => "selection",
		);

		$this->session->set_userdata($tab);
		redirect(base_url("teacher/profile"));

	}

	public function account()
	{
		if ($this->input->post()) {

			$form_data = $this->input->post();
			$bank["ibn"] = $form_data["IBAN"];
			$bank["branch_code"] = $form_data["branch_code"];
			$bank["title"] = $form_data["account_title"];
			$bank["user_id"] = $this->auth->userID();

			$account = $this->Crud_model->get("bank_details", $this->auth->userID());
			if (!$account) {
				$this->Crud_model->insert('bank_details', $bank);
			} else {
				unserialize($bank["user_id"]);
				$this->Crud_model->update('bank_details', $this->auth->userID(), $bank);

			}

		}
		$tab = array(
			'active_tab' => "account",
		);
		$this->session->set_userdata($tab);


		redirect(base_url("teacher/profile"));
	}
   public function bank(){
	   $tab = array(
		   'active_tab' => "account",
	   );
	   $this->session->set_userdata($tab);
	   redirect(base_url("teacher/profile"));

   }

	public function students()
	{
		$data["students"]=$this->users_model->teacherEnrolledStudents($this->auth->userID());
		$this->slice->view('app_alpha.be.teachers.enrolled_students',$data);
	}


}

?>
