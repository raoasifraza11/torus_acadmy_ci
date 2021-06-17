<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends TTT_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	/**
	 * Handle the general login.
	 * @return string json_response with status code
	 *
	 * Based on the user category
	 */


	public function index()
	{

		if ($this->input->post()) {

			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				var_dump("error");
				die();
			} else {
				$status = $this->auth->login($_POST);
				if ($status){
					var_dump("success");
					die();
				}else{
					var_dump("Email or password is not valid");
					die();

				}
			}


		}

		$this->slice->view('edu_view.login');
	}

	public function adminlogin(){
		$this->slice->view('app_alpha.be.admin.login');

	}

	/**
	 * Logout.
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		return redirect(base_url());

		return false;
	}


//check email aready exists
	public function isEmailExist($email)
	{
		$this->load->library('form_validation');
		$is_exist = $this->Crud_model->isEmailExist($email);

		if (!$is_exist) {
			$this->form_validation->set_message(
				'isEmailExist', 'Email address not exist.'
			);
			return false;
		} else {
			return true;
		}
	}

//check admin email aready exists

	public function isAdminEmailExist($email)
	{
		$this->load->library('form_validation');
		$is_exist = $this->Admin_model->isEmailExist($email);

		if (!$is_exist) {
			$this->form_validation->set_message(
				'isAdminEmailExist', 'Email address not exist.'
			);
			return false;
		} else {
			return true;
		}
	}

	public function isEmailverified($email)
	{
		$this->load->library('form_validation');
		$is_exist = $this->Crud_model->isEmailverified($email);

		if (!$is_exist) {
			$this->form_validation->set_message(
				'isEmailverified', 'Email address not verified.'
			);
			return false;
		} else {
			return true;
		}
	}


	public function isAccountApproved($email)
	{
		$this->load->library('form_validation');
		$is_exist = $this->Crud_model->isAccountApproved($email);

		if ($is_exist) {
			$this->form_validation->set_message(
				'isAccountApproved', 'Account Disabled.'
			);
			return false;
		} else {
			return true;
		}
	}


}
