<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'application/controllers/MailSender.php';
class  ChildMinder extends TTT_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
		$this->load->model('Childminder_model');
		if(!$this->session->has_userdata('userID')){
			$this->session->set_flashdata('error', 'You Need to Logged In To Access This Page');
			redirect(base_url(),'refresh');
		}
    }
    public function index()
	{
        $this->slice->view('user.login');
	}
	public function profile(){
		if ($this->input->post()) {
			$form_data = $this->input->post();
			$form_data["user_id"] = $this->auth->userID();
			$payment_detail["ccname"]=$form_data["ccname"];
			$payment_detail["ccnumber"]=$form_data["ccnumber"];
			$payment_detail["ccname"]=$form_data["ccname"];
			$payment_detail["ccmonth"]=$form_data["ccmonth"];
			$payment_detail["ccyear"]=$form_data["ccyear"];
			$payment_detail["cccvv"]=$form_data["cccvv"];
			unset($form_data["email"]);
			unset($form_data["ccname"]);
			unset($form_data["ccnumber"]);
			unset($form_data["ccmonth"]);
			unset($form_data["ccyear"]);
			unset($form_data["cccvv"]);

			$this->Crud_model->update_by_user_id('user_details',$this->auth->userID(), $form_data);
			$this->Crud_model->update_by_user_id('payment_details',$this->auth->userID(), $payment_detail);
		}else{
			$data["user"] =$this->Crud_model->get("users",$this->auth->userID());
			$data["user_details"] =$this->Crud_model->get_by_user_id("user_details",$this->auth->userID());
			$data["payment_details"] =$this->Crud_model->get_by_user_id("payment_details",$this->auth->userID());
			$this->slice->view('user.crud_profile',$data);
		}
	}
	public function keyWorker()
	{
		$data["k_w_n"]=false;

		if ($this->input->post()) {
			$form_data=$this->input->post();
			$data['password']=$form_data['password'];

			$school_user["school_role_id"]=$form_data["school_role_id"];
			unset($form_data["school_role_id"]);
			$form_data["role_id"] = 2;
			$form_data["password"] = md5($form_data['password']);
			$form_data["token"]=md5($form_data['email']);
			$form_data["school_id"]=$this->auth->userID();
			$form_data["status"]=1;
			$user_id=$this->Crud_model->insert('users', $form_data);
			$school_user["user_id"]=$user_id;
			$school_user_id=$this->Crud_model->insert('school_user_details', $school_user);



			$data['user']=$this->Crud_model->get("users",$this->auth->userID());
			$data['token'] = md5($form_data['email']);
			$msg = $this->load->view('emailnotifications/confirm_email_key_worker', $data, true);
			MailSender::sendEmailSMTP('LinksChild', $form_data['email'], 'Email Verification', 'Hello', $msg);
			$data["k_w_n"]=true;
		}

		     $data["key_workers"]=$this->Childminder_model->get_key_workers($this->auth->userID());
			$this->slice->view('user.crud_keyworker',$data);


	}
	public function addKeyWorker(){
		$data["school_roles"]= $this->Crud_model->get_all_data_by_column_id("school_level_roles","school_id",$this->auth->userID());

		$this->slice->view('user.add_keyworker',$data);

	}
	public function student(){
		$data["s_n"]=false;

		$data["students"]=$this->Childminder_model->get_students($this->auth->userID());
		$this->slice->view('user.crud_student',$data);
	}
	public function addStudent(){

		if ($this->input->post()) {


			$form_data=$this->input->post();

			$student["role_id"] = 3;
			$student["email"]=$form_data['email'];
			$student["password"] = md5("123");
			$student["token"]=md5($form_data['email']);
			$student["full_name"]=$form_data['g_full_name'];
			$student["school_id"]=$this->auth->userID();
			$student["status"]=1;
			$student_id=$this->Crud_model->insert('users', $student);
//			unset($form_data['password']);
			unset($form_data['email']);
			unset($form_data['g_full_name']);

			$form_data["user_id"]=$student_id;
			$form_data['dob'] = date('Y/m/d/', strtotime($form_data["dob"]));
			$form_data['g_dob'] = date('Y/m/d/', strtotime($form_data["g_dob"]));
			$form_data['emergency_treatment']=1;
			$form_data['outing']=1;
			$form_data['keep_us_informed']=1;
			$form_data['terms_and_conditions']=1;
			unset($form_data['communication']);
			$student_details_id=$this->Crud_model->insert('student_details', $form_data);

			$data['user']=$this->Crud_model->get("users",$this->auth->userID());
			$data["token"]=md5($student["email"]);
			$data["password"]=123;
			$msg = $this->load->view('emailnotifications/confirm_email_key_worker', $data, true);
			MailSender::sendEmailSMTP('LinksChild', $student["email"], 'Email Verification', 'Hello', $msg);
			$data["s_n"]=true;

		}

		$this->slice->view('user.add_student');
	}
	public function addRole(){

		if ($this->input->post()) {
			$privileges =array();
			$form_data = $this->input->post();
			$form_data["school_id"] = $this->auth->userID();
			$privileges[]  =$form_data["priviliges"];
			unset($form_data["priviliges"]);

			$role_id=$this->Crud_model->insert('school_level_roles', $form_data);


			foreach ($privileges[0] as $privilege ){
				$role_privilege["role_id"]=$role_id;
				$role_privilege["privilege_id"]=$privilege;

				$role_id=$this->Crud_model->insert('school_level_role_privileges', $role_privilege);

			}
			redirect(base_url("roles"));

		}

		$this->slice->view('user.add_role');

	}
	public function addSession(){
		if ($this->input->post()) {
			$form_data = $this->input->post();
			$form_data["school_id"] = $this->auth->userID();
			$session_id=$this->Crud_model->insert('school_sessions', $form_data);
		 	redirect(base_url("sessions"));
		}
		$this->slice->view('user.add_session');
	}
	public function addRoom(){
		if ($this->input->post()) {
			$form_data = $this->input->post();
			$form_data["school_id"] = $this->auth->userID();
			$room_id=$this->Crud_model->insert('school_rooms', $form_data);
			redirect(base_url("rooms"));

		}
		$data["school_teachers"] =$this->Childminder_model->get_teachers($this->auth->userID());
		$data["school_sessions"]= $this->Crud_model->get_all_data_by_column_id("school_sessions","school_id",$this->auth->userID());
		$this->slice->view('user.add_room',$data);

	}


	public function addLetter(){
		if ($this->input->post()) {
			$form_data = $this->input->post();
//			$form_data[""]=;
			var_dump($_FILES);
			var_dump($form_data);
			die();
		}
		$this->slice->view('user.viewLetters');


	}

	public function viewRoles(){
    	$data["school_roles"]= $this->Crud_model->get_all_data_by_column_id("school_level_roles","school_id",2);
		$this->slice->view('user.view_roles',$data);

	}
	public function viewSessions(){
    	$data["school_sessions"]= $this->Crud_model->get_all_data_by_column_id("school_sessions","school_id",$this->auth->userID());
		$this->slice->view('user.view_session',$data);

	}
	public function viewRooms(){
		$data["school_rooms"]= $this->Crud_model->get_all_data_by_column_id("school_rooms","school_id",$this->auth->userID());
		$this->slice->view('user.view_rooms',$data);

	}
	public function viewStaffRoomStatus(){
		$data["rooms_status"] =$this->Childminder_model->get_teacher_room($this->auth->userID());


		$this->slice->view('user.staffRoomStatus',$data);

	}

	public function upload_file(){
		$config['allowed_types'] = 'pdf';
		$config['allowed_path'] = './assets/uploads/';

		$this->load->library('upload' , $config);

		if($this->upload->do_upload())
		{
			
		} else
		{
			
		}

	}

}
