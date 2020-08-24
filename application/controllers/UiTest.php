<?php
class UiTest extends TTT_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

// ------------------------ BackEnd----------------------------

    public function index()
    {
        $this->slice->view('backend.index');
    }

    public function teachers()
    {
        $this->slice->view('backend.teachers');
    }

    public function payments()
    {
        $this->slice->view('backend.payments');
    }

    public function add_payments()
    {
        $this->slice->view('backend.payments-add');
    }

    public function payments_receipt()
    {
        $this->slice->view('backend.payments-recipt');
    }

    public function courses()
    {
        $this->slice->view('backend.courses');
    }

    public function courses_details()
    {
        $this->slice->view('backend.courses-details');
    }

    public function our_centres()
    {
        $this->slice->view('backend.our-centres');
    }

    public function student_detail_info()
    {
        $data['student_details'] = $this->users_model->getAllUsers();
        //$data['user_details'] = $this->users_model->getUser($id);
        //$user_id = $data['student_details']->id;
        //var_dump($first_name); die();
        $this->slice->view('backend.student-detail-info' , $data);
        //$this->load->view('crud_view', $data);
    }

    public function teacher_detail_info()
    {
        $data['teacher_details'] = $this->users_model->getAllUsers();
        //$data['user_details'] = $this->users_model->getUser($id);
        //$user_id = $data['student_details']->id;
        //var_dump($first_name); die();
        $this->slice->view('backend.teacher-details' , $data);
        //$this->load->view('crud_view', $data);
    }

    public function student_dashboard_2()
    {
        $this->slice->view('backend.student-course-info');
    }
    
    public function teacher_dashboard()
    {
        $this->slice->view('backend.teacher-dashboard');
    }

    public function student_dashboard()
    {
        $this->slice->view('backend.student-dashboard');
    }

    public function student_dashboard_payments()
    {
        $this->slice->view('backend.student-dashboard-payments');
    }

    public function students_list()
    {
        $this->slice->view('backend.student-list');
    }

    public function taskboard()
    {
        $this->slice->view('backend.taskboard');
    }

    public function teacher_details()
    {
        $this->slice->view('backend.teacher-details');
    }

    public function settings()
    {
        $this->slice->view('backend.settings');
    }

    public function login()
    {
        $this->slice->view('backend.login');
    }

    public function forgot_password()
    {
        $this->slice->view('backend.forgot-password');
    }

    public function app_compose()
    {
        $this->slice->view('backend.app-compose');
    }

    public function attendance()
    {
        $this->slice->view('backend.attendance');
    }

    public function email_view()
    {
        $this->slice->view('backend.app-emailview');
    }

    // ------------------------ FrontEnd----------------------------

    public function frontend_index()
    {
        $this->slice->view('frontend.index');
    }

    public function student_register()
    {
        $this->slice->view('frontend.student-register');
    }

    public function teacher_register()
    {
        $this->slice->view('frontend.teacher-register');
    }

    public function frontend_courses()
    {
        $this->slice->view('frontend.courses');
    }

    public function single_course()
    {
        $this->slice->view('frontend.single-course');
    }

    public function contacts()
    {
        $this->slice->view('frontend.contact');
    }

    public function blog_item()
    {
        $this->slice->view('frontend.blog-item');
    }

    public function blog()
    {
        $this->slice->view('frontend.blog-grid');
    }

    public function about()
    {
        $this->slice->view('frontend.about');
    }

    public function signup()
    {
        $this->slice->view('frontend.signup');
    }

    //------------------------------------------------------------------


}

