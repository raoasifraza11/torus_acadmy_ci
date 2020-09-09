<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Welcome extends TTT_Controller
{

	public function index()
	{
        $this->slice->view('landing_alpha.index');
	}

	public function signup_view()
	{
        $this->slice->view('landing_alpha.signup');
	}
}
