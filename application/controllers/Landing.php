<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Landing extends TTT_Controller
{

	public function index()
	{
        $this->slice->view('landing_alpha.index');
	}

	public function registration_role()
	{
        $this->slice->view('landing_alpha.signup');
	}

	public function teacher_reg_view()
	{
        $this->slice->view('landing_alpha.teacher_register');
	}

	public function student_reg_view()
	{
        $this->slice->view('landing_alpha.student_register');
	}

	public function list_courses()
	{
        $this->slice->view('landing_alpha.courses');
	}

	public function single_course()
	{
        $this->slice->view('landing_alpha.course-single');
	}

	public function paynow()
	{
        $this->slice->view('landing_alpha.paynow');
	}
}
