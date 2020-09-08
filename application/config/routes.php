<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/




//Todo: Under Process



$route['student'] =  'Signup/student';
$route['teacher'] = 'Signup/teacher';
$route['register'] = 'Signup/index';

$route['login'] =  'Login/index';

$route['forgotPassword'] =  'UiTest/forgot_password';//todo:workig

$route['studentd'] =  'Student/index';
$route['studentDetailInfo'] =  'UiTest/student_detail_info';
$route['PaymentsReceipt'] =  'UiTest/payments_receipt';


$route['teacherinfoo'] =  'Professor/index';
$route['Teacherdashboard'] = 'UiTest/teacher_dashboard';



//Todo:Admin
$route['teachers'] =  'UiTest/teachers';
$route['payments'] =  'UiTest/payments';
$route['addPayments'] =  'UiTest/add_payments';
$route['coursesDetails'] =  'UiTest/courses_details';
$route['studentList'] =  'UiTest/students_list';
$route['taskboard'] =  'UiTest/taskboard';
$route['settings'] =  'UiTest/settings';


// BackEnd Routes ---------------------------------------------------
$route['index'] =  'UiTest/index';
//$route['teachers'] =  'UiTest/teachers';//todo:workig
//$route['payments'] =  'UiTest/payments';//todo:workig
//$route['addPayments'] =  'UiTest/add_payments';//todo:workig
//$route['PaymentsReceipt'] =  'UiTest/payments_receipt';//todo:workig
$route['courses'] =  'UiTest/courses';
//$route['coursesDetails'] =  'UiTest/courses_details';//todo:workig
$route['ourCentres'] =  'UiTest/our_centres';
//$route['studentDetailInfo'] =  'UiTest/student_detail_info';
$route['teacherDetailInfo'] =  'UiTest/teacher_detail_info';//todo:workig
$route['studentDashboard1'] =  'UiTest/student_dashboard_2';
$route['studentPayments'] =  'UiTest/student_dashboard_payments';
//$route['studentList'] =  'UiTest/students_list';//todo:workig
//$route['taskboard'] =  'UiTest/taskboard';//todo:workig
$route['teacherDetails'] =  'UiTest/teacher_details';
//$route['settings'] =  'UiTest/settings';//todo:workig
//$route['login'] =  'UiTest/login';
//$route['forgotPassword'] =  'UiTest/forgot_password';//todo:workig
//$route['appCompose'] =  'UiTest/app_compose'; //todo: not included
//$route['attendance'] =  'UiTest/attendance';  //todo: not included
//$route['appEmailView'] =  'UiTest/email_view'; //todo: not included
//$route['studentInfo'] = 'users/studentInfo';
//$route['teacherInfo'] = 'users/teacherInfo';
//$route['UpdateStudentPersonalInfo'] = 'users/UpdateStudentRegistrationInfo';//todo: not included
//$route['logout'] = 'users/logout';
$route['checkDetails'] = 'users/checkDetails';//todo: not included
$route['Teacherdashboard'] = 'UiTest/teacher_dashboard';
$route['Studentdashboard'] = 'UiTest/student_dashboard';
$route['loginUser'] = 'users/loginUser';

// BackEnd Routes ---------------------------------------------------------

$route['index1'] =  'UiTest/frontend_index';
//$route['studentRegister'] =  'UiTest/student_register';//todo:under working
//$route['teacherRegister'] =  'UiTest/teacher_register';//todo:uner working
$route['courses1'] =  'UiTest/frontend_courses';
$route['singleCourse'] =  'UiTest/single_course';
$route['contacts'] =  'UiTest/contacts';
$route['blogItem'] =  'UiTest/blog_item';
//$route['blog'] =  'UiTest/blog';//todo: not included
$route['about'] =  'UiTest/about';
//$route['signup'] =  'UiTest/signup';


// Default Routes ---------------------------------------------------------

$route['dev'] = 'home';
$route['default_controller'] = 'UiTest/frontend_index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


