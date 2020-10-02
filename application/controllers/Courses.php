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

	public function courses()
	{
		$data["courses"]=$this->Course_model->getAllCourses();
		$this->slice->view('landing_alpha.courses',$data);
	}

    
}
?>
