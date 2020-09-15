<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Backend extends TTT_Controller
{

    public function index()
    {
        $this->slice->view('app_alpha.be.index');
    }

    public function students()
    {
        $this->slice->view('app_alpha.be.students.list_view');
    }

    public function courses()
    {
        $this->slice->view('app_alpha.be.courses.list_view');
    }

    public function teachers()
    {
        $this->slice->view('app_alpha.be.teachers.list_view');
    }

    public function invoices()
    {
        $this->slice->view('app_alpha.be.invoices.list_view');
    }

    public function revenue()
    {
        $this->slice->view('app_alpha.be.revenue.list_view');
    }

    public function payments()
    {
        $this->slice->view('app_alpha.be.payments.list_view');
    }

    public function site_configuration()
    {
        $this->slice->view('app_alpha.be.settings.site-configuration');
    }

    public function copyrights()
    {
        $this->slice->view('app_alpha.be.settings.copyrights');
    }


    /**
     *
     * TEACHER
     *
     */
    public function profile_setting()
    {
        $this->slice->view('app_alpha.be.teachers.profile_setting');
    }

}