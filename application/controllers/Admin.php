<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Admin extends TTT_Controller
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


	}

	public function index(){
		$this->slice->view('app_alpha.be.admin.dashboard');
	}

	public function course()
	{
		$data["classes"]=$this->Crud_model->get_all_data("classes");
		foreach ($data["classes"] as $class){
			$class->courses = $this->Crud_model->get_all_data_by_column_id("class_course","class_id",$class->id);
		}

		$this->slice->view('app_alpha.be.admin.courses.view',$data);
	}


	//todo: add class with courses
	public function addCourse()
	{

		if ($this->input->post()) {
			$class["name"] = $this->input->post("class_name");
			$class["tag"] = $this->input->post("class_tag");
			$class_id = $this->Crud_model->insert('classes', $class);
			$i = 0;
			$courese_tags = $this->input->post("course_tag");
			$courese_prices = $this->input->post("course_price");
			$courese_descriptions = $this->input->post("course_description");
			foreach ($this->input->post("course_name") as $c) {

				$course["name"] = $c;
				$course["tag"] = $courese_tags[$i];
				$course["price"] = $courese_prices[$i];
				$course["description"] = $courese_descriptions[$i];
				$course["class_id"] = $class_id;
				$this->Crud_model->insert('class_course', $course);

				$i++;
			}
			redirect(base_url("admin/courses"));
		}
		$this->slice->view('app_alpha.be.admin.courses.add');
	}


}
