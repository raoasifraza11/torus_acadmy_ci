<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
			$course["course_id"] = $this->session->userdata('course_id');
			$course["payment_method"] = $this->input->post("type");
			$course["student_id"] = $this->auth->userID();
			$course["payment_status"] = 0;
			$this->Crud_model->insert('student_enrolled_courses', $course);
//			$this->session->set_flashdata('course_purchase', '');
			redirect(base_url("courses"));
		}

		$data["course"] = $this->Course_model->getCourse($this->session->userdata('course_id'));


		$this->slice->view('landing_alpha.paynow', $data);
	}

	public function student_course_enrolled()
	{
		$data["courses"] = $this->users_model->enrolledCourse($this->auth->userID());
		$this->slice->view('app_alpha.be.students.enrolled', $data);
	}

	public function studentCourseEnrolledProof($courseid = null)
	{
		$data["course_id"] =$courseid;

		$this->slice->view('app_alpha.be.students.proof',$data);
	}

	public function uploadProof(){
		if ($this->input->post()) {
		 $data["proof"] =	$this->do_upload("proof_file");
		 $data["payment_status"] =	1;
		 $this->Crud_model->updateDataToTableWithColumnId("student_enrolled_courses","id",$this->input->post("c_id"),$data);
			redirect(base_url("student/course/enrolled"));
		}else{
			redirect();
		}

	}

	public function studentPaymentHistory()
	{
		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());
		$data["courses"] = $this->users_model->enrolledCourse($this->auth->userID());
//		var_dump($data);
//		die();
		$this->slice->view('app_alpha.be.students.payment_history', $data);
	}


	/**
	 * Handle Upload
	 *
	 * @param input_name
	 * @return  Image
	 */
	public function do_upload($input_name)
	{
		//todo:set unique name to file
		$date = new DateTime();
		$startdata = $date->format('YmdHis');
		$newName = str_replace('/', '', $startdata) . $this->auth->userID();
		$file_ext = pathinfo($_FILES[$input_name]["name"], PATHINFO_EXTENSION);
		$config['file_name'] = $newName;
		$config['upload_path']='application/public_html/assets/uploads/';
		$config['allowed_types'] = '*';
		$config['max_size'] = 2048;
//      $config['max_width']            = 1920;
//      $config['max_height']           = 1080;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($input_name)) {
			$error = array('error' => $this->upload->display_errors());
			$this->validationErrors = $error;
			var_dump($this->validationErrors);
			die();
			return false;

		} else {
			$data = array('upload_data' => $this->upload->data());
			$image = $data['upload_data']['file_name'];
			return $image;
		}
	}
}



?>
