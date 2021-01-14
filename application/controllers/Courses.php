<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends TTT_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('Course_model');
    }
    public function index()
    {
    	var_dump("i m hear");
    	die();
        //$data['course_details'] = $this->course_model->getAllCourses();
        //$this->load->view('backend/courses', $data);
        $this->course_model->courseTypeJoin();
        $this->course_model->ProfessorJoin();
        
    }

	public function singleCourse(){
		if (!$this->session->has_userdata('userID')) {
			$this->session->set_flashdata('login', 'You Need to Logged In To Proceed');
			$c_status = array(
				'redirect_to' => "courses"
			);
			$this->session->set_userdata($c_status);
			redirect(base_url(), 'refresh');
		}
		$this->session->unset_userdata("redirect_to");

		$data=null;
		if ($this->input->post("id")) {
			$data["course"] =  $this->Course_model->getCourse($this->input->post("id"));
		}else{
			redirect(base_url("courses"));
		}
		$this->slice->view('landing_alpha.course-single',$data);
	}

	public function courses()
	{
		$data["courses"]=$this->Course_model->getAllCourses();
		$this->slice->view('landing_alpha.courses',$data);
	}

    
}
?>
