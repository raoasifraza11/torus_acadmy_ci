<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Backend extends TTT_Controller
{
    /**
     * ADMIN
     */
    public function admin_login()
    {
        $this->slice->view('app_alpha.be.admin.login');
    }

    public function admin_dashboard()
    {
        $this->slice->view('app_alpha.be.admin.dashboard');
    }

    public function admin_users()
    {
        $this->slice->view('app_alpha.be.admin.users');
    }

    public function admin_courses()
    {
        $this->slice->view('app_alpha.be.admin.courses.view');
    }

    public function admin_add_course()
    {
        $this->slice->view('app_alpha.be.admin.courses.add');
    }

    public function admin_site_setting()
    {
        $this->slice->view('app_alpha.be.admin.site_setting');
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
    public function dashboard_teacher()
    {
        $this->slice->view('app_alpha.be.teachers.dashboard');
    }

    public function profile_setting()
    {
        $this->slice->view('app_alpha.be.teachers.profile_setting');
    }

    public function enrolled_student()
    {
        $this->slice->view('app_alpha.be.teachers.enrolled_students');
    }

    public function revenue_teacher()
    {
        $this->slice->view('app_alpha.be.teachers.revenue');
    }

    public function teacher_courses()
    {
        $this->slice->view('app_alpha.be.teachers.courses');
    }


    /**
     * STUDENTS
     */
    public function student_dashboard()
    {
        $this->slice->view('app_alpha.be.students.dashboard');
    }

    public function student_profile_setting()
    {
        $this->slice->view('app_alpha.be.students.profile_setting');
    }

    public function student_payment_history()
    {
        $this->slice->view('app_alpha.be.students.payment_history');
    }


    public function student_course_enrolled()
    {
        $this->slice->view('app_alpha.be.students.enrolled');
    }

}