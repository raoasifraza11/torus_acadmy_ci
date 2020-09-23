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
//$route['teacher/register'] = 'Landing/teacher_reg_view';
$route['student/register'] = 'Landing/student_reg_view';



/*
 *
 * Landing:
 *          Website URL's mostly static
 *
 */

$route['registration_category'] = 'Landing/registration_role';
$route['teacher/register'] = 'Signup/teacher';
$route['student/register'] = 'Landing/student_reg_view';
$route['login'] = 'Login/index';


/*
 *
 * Backend:
 *          Administration apart
 *
 */
$route['dashboard'] = 'Backend/index';
$route['admin/students'] = 'Backend/students';
$route['admin/courses'] = 'Backend/courses';
$route['admin/teachers'] = 'Backend/teachers';
$route['admin/invoices'] = 'Backend/invoices';
$route['admin/revenue'] = 'Backend/revenue';
$route['admin/payments'] = 'Backend/payments';

// Site settings
$route['admin/site-setting'] = 'Backend/site_configuration';
$route['admin/copyrights'] = 'Backend/copyrights';



/*
 *
 * Backend:
 *          Student apart
 *
 */
//$route['dashboard'] = 'Backend/index';


/*
 *
 * Backend:
 *          Teacher apart
 *
 */
$route['teacher/dashboard'] = 'Backend/dashboard_teacher';
$route['teacher/profile'] = 'Backend/profile_setting';
$route['teacher/enrolled/students'] = 'Backend/enrolled_student';
$route['teacher/revenue'] = 'Backend/revenue_teacher';
$route['teacher/courses'] = 'Backend/courses';


// Default Routes ---------------------------------------------------------

$route['default_controller'] = 'Welcome/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['assets/(:any)'] = 'assets/$1';



