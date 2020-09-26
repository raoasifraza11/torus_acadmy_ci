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


/*
 *
 * Landing:
 *          Website URL's mostly static
 *
 */

$route['registration_category'] = 'Landing/registration_role';



/*
 *
 * Landing:
 *          Website URL's mostly static
 *
 */

//$route['registration_category'] = 'Landing/registration_role';
$route['teacher/register'] = 'Signup/teacher';
$route['student/register'] = 'Signup/student';
$route['login'] = 'Login/index';



/*
 *
 * Backend:
 *          Administration apart Working
 *
 */

$route['admin'] = 'Login/adminlogin';
$route['admin/dashboard'] = 'Admin/index';
$route['admin/users'] = 'Backend/admin_users';
$route['admin/courses'] = 'Admin/course';
$route['admin/courses/add'] = 'Admin/addCourse';
$route['admin/setting'] = 'Backend/admin_site_setting';





// Site settings
$route['admin/site-setting'] = 'Backend/site_configuration';
$route['admin/copyrights'] = 'Backend/copyrights';



/*
 *
 * Backend:
 *          Student apart
 *
 */
$route['student/dashboard'] = 'Student/index';//working on backend
$route['student/profile'] = 'Backend/student_profile_setting';
$route['student/payment/history'] = 'Backend/student_payment_history';
$route['student/course/enrolled'] = 'Backend/student_course_enrolled';

$route['student/test_reg'] = 'Student/student_reg_data';


/*
 *
 * Backend:
 *          Teacher apart
 *
 */
//$route['teacher/dashboard'] = 'Backend/dashboard_teacher';
//$route['teacher/profile'] = 'Backend/profile_setting';
//$route['teacher/enrolled/students'] = 'Backend/enrolled_student';
$route['teacher/revenue'] = 'Backend/revenue_teacher';
$route['teacher/courses'] = 'Backend/teacher_courses';

//todo:under working on backend
$route['teacher/dashboard'] = 'Professor/index';
$route['teacher/profile'] = 'Professor/profile'; //at backend
$route['teacher/academic'] = 'Professor/academic'; //at backend
$route['teacher/experience'] = 'Professor/experience'; //at backend
$route['teacher/availability'] = 'Professor/availability'; //at backend
$route['teacher/courseselection'] = 'Professor/courseSelection'; //at backend
$route['teacher/account'] = 'Professor/account'; //at backend
$route['teacher/enrolled/students'] = 'Professor/students';



// Default Routes ---------------------------------------------------------

$route['default_controller'] = 'Welcome/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['assets/(:any)'] = 'assets/$1';



