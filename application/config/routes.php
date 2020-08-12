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

// BackEnd Routes ---------------------------------------------------
$route['index'] =  'UiTest/index';
$route['professors'] =  'UiTest/professors';
$route['payments'] =  'UiTest/payments';
$route['addPayments'] =  'UiTest/add_payments';
$route['PaymentsReceipt'] =  'UiTest/payments_receipt';
$route['courses'] =  'UiTest/courses';
$route['coursesDetails'] =  'UiTest/courses_details';
$route['ourCentres'] =  'UiTest/our_centres';
$route['studentDashboard'] =  'UiTest/student_dashboard';
$route['studentDashboard1'] =  'UiTest/student_dashboard_2';
$route['studentPayments'] =  'UiTest/student_dashboard_payments';
$route['studentList'] =  'UiTest/students_list';
$route['taskboard'] =  'UiTest/taskboard';
$route['teacherDetails'] =  'UiTest/teacher_details';
$route['settings'] =  'UiTest/settings';
$route['login'] =  'UiTest/login';
$route['forgotPassword'] =  'UiTest/forgot_password';
$route['appCompose'] =  'UiTest/app_compose';
$route['attendance'] =  'UiTest/attendance';
$route['appEmailView'] =  'UiTest/email_view';

// BackEnd Routes ---------------------------------------------------------

$route['index1'] =  'UiTest/frontend_index';
$route['studentRegister'] =  'UiTest/student_register';
$route['teacherRegister'] =  'UiTest/teacher_register';
$route['courses1'] =  'UiTest/frontend_courses';
$route['singleCourse'] =  'UiTest/single_course';
$route['contacts'] =  'UiTest/contacts';
$route['blogItem'] =  'UiTest/blog_item';
$route['blog'] =  'UiTest/blog';
$route['about'] =  'UiTest/about';
$route['signup'] =  'UiTest/signup';


// Default Routes ---------------------------------------------------------

$route['dev'] = 'home';
$route['default_controller'] = 'home/commingsoon';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


