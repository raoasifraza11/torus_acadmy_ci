<?php
class UiTest extends TTT_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index(){
		$this->slice->view('edu_view.index');
	}

    public function login(){
		$this->slice->view('edu_view.login');
	}


    public function reg(){
		$this->slice->view('edu_view.register');
	}

}

