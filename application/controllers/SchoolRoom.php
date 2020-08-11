<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'application/controllers/MailSender.php';

class  SchoolRoom extends TTT_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Childminder_model');
		$this->load->model('Schoolroom_model');


		if (!$this->session->has_userdata('userID')) {
			$this->session->set_flashdata('error', 'You Need to Logged In To Access This Page');
			redirect(base_url(), 'refresh');
		}
	}

	public function index()
	{
		$this->slice->view('user.room_dashboard');

	}

	public function newEnroll()
	{
		if ($this->input->post()) {
			$form_data = $this->input->post();
			foreach ($form_data as $row) {
				$student["room_id"] = 1;
				$student["student_id"] = $row[0];
				$this->Crud_model->insert("school_room_students", $student);
			}

		}
		$data["students"] = $this->Childminder_model->get_students($this->auth->userID());

		$this->slice->view('user.newEnrolled', $data);
	}

	public function enrolledStudents()
	{
		$room["room_id"]=1;
		$data["room_students"] = $this->Schoolroom_model->get_enrolledstudents($room);


		$this->slice->view('user.view_students',$data);
	}

	public function markAttendance()
	{
		if($this->input->post()){

			foreach ($_POST as $student=>$attendance){
				$phrase = explode('_',$student,2);
				$stundet_id=$phrase[1];
				var_dump($stundet_id,$attendance);
				die();
			}
		}

		$room["room_id"]=1;
		$data["room_students"] = $this->Schoolroom_model->get_enrolledstudents($room);
		$this->slice->view('user.mark_attendance',$data);
	}



	public function addRoomSession(){

		if($this->input->post()){
			$form_data = $this->input->post();

//			todo : need to repalce with room id
			$form_data["room_id"] = $this->auth->userID();
			$form_data["time"]=	date("H:i", strtotime($form_data["time"]));
			$form_data["date"]=	date("Y-m-d", strtotime($form_data['date']));
			$session_id=$this->Crud_model->insert('school_room_sessions', $form_data);
redirect(base_url("roomsessions"));

		}
		$this->slice->view('user.attendenceSession');

	}
	public function roomSessions(){
		$this->slice->view('user.attendence');
	}
	public function profile()
	{
		if ($this->input->post()) {
			$form_data = $this->input->post();
			$form_data["user_id"] = $this->auth->userID();
			$payment_detail["ccname"] = $form_data["ccname"];
			$payment_detail["ccnumber"] = $form_data["ccnumber"];
			$payment_detail["ccname"] = $form_data["ccname"];
			$payment_detail["ccmonth"] = $form_data["ccmonth"];
			$payment_detail["ccyear"] = $form_data["ccyear"];
			$payment_detail["cccvv"] = $form_data["cccvv"];
			unset($form_data["email"]);
			unset($form_data["ccname"]);
			unset($form_data["ccnumber"]);
			unset($form_data["ccmonth"]);
			unset($form_data["ccyear"]);
			unset($form_data["cccvv"]);

			$this->Crud_model->update_by_user_id('user_details', $this->auth->userID(), $form_data);
			$this->Crud_model->update_by_user_id('payment_details', $this->auth->userID(), $payment_detail);
		} else {
			$data["user"] = $this->Crud_model->get("users", $this->auth->userID());
			$data["user_details"] = $this->Crud_model->get_by_user_id("user_details", $this->auth->userID());
			$data["payment_details"] = $this->Crud_model->get_by_user_id("payment_details", $this->auth->userID());
			$this->slice->view('user.crud_profile', $data);
		}
	}
	public function viewRoles()
	{
		$data["school_roles"] = $this->Crud_model->get_all_data_by_column_id("school_level_roles", "school_id", 2);
		$this->slice->view('user.view_roles', $data);

	}
}
