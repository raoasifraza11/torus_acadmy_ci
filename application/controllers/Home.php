<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Home extends TTT_Controller
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


	}

	public function commingSoon()
	{
		$data["user"] = "test";     // TODO:: Can we found any other alternative way?
                                    // instead of call user array in each page
		$this->slice->view('home.index', $data);
	}

	public function index()
	{
		$this->slice->view('user.login');
	}

	public function dashboard()
	{
		if(!$this->session->has_userdata('userID')){
			$this->session->set_flashdata('error', 'You Need to Logged In To Access This Page');
			redirect(base_url("dev"),'refresh');
		}

		$data["user_details"] =$this->Crud_model->get_by_user_id("user_details",$this->auth->userID());
		$data["key_workers"] =$this->Childminder_model->count_key_workers($this->auth->userID());
		$this->slice->view('user.dashboard', $data);
	}

	public function addKeyWorker()
	{


	}
}
