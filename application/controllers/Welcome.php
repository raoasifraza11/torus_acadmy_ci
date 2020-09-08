<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Welcome extends TTT_Controller
{

	public function index()
	{
        $this->slice->view('master');
	}
}
