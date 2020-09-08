<?php
class UiTest extends TTT_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }


}

