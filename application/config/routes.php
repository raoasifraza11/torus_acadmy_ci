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

// Basic Routes
$route['index'] =  'UiTest/index';
// $route['login'] = 'Login/index';
// $route['logout'] = 'Login/logout';
// $route['verify/(:any)']='Signup/verify/$1';


// //  Routes
// $route['dashboard'] = 'Home/dashboard';


// // Migration
// $route['migrate'] = 'Migrate/index';



// //Todo: Childminders routes
// $route['userprofile'] = 'ChildMinder/profile';
// $route['worker']='ChildMinder/keyWorker';
// $route['addworker']='ChildMinder/addKeyWorker';
// $route['student']='ChildMinder/student';
// $route['addstudent']='ChildMinder/addStudent';
// $route['addrole']='ChildMinder/addRole';
// $route['addsession'] = 'ChildMinder/addSession';
// $route['addroom'] = 'ChildMinder/addRoom';
// $route['addletter'] = 'ChildMinder/addLetter';


// $route['roles']='ChildMinder/viewRoles';
// $route['sessions'] = 'ChildMinder/viewSessions';
// $route['rooms'] = 'ChildMinder/viewRooms';
// $route['roomsstatus'] = 'ChildMinder/viewStaffRoomStatus';

// //Todo: Rooms routes
// $route['room'] = 'SchoolRoom/index';
// $route['newenroll'] = 'SchoolRoom/newEnroll';
// $route['enrolledstudents'] = 'SchoolRoom/enrolledStudents';

// $route['addroomsession'] = 'SchoolRoom/addRoomSession';
// $route['roomsessions'] = 'SchoolRoom/roomSessions';
// $route['markattendance'] = 'SchoolRoom/markAttendance';


// //Todo:Admin routes
// $route['mapapi']='Admin/mapApi';
// $route['sitelogo']='Admin/siteLog';




$route['dev'] = 'home';
$route['default_controller'] = 'home/commingsoon';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// // Testing routes
// $route['childminder_dashboard'] = 'UiTest/childminder_dashboard';
// $route['profile'] = 'UiTest/crud_profile';
// $route['users'] = 'UiTest/view_users';
// $route['add_student'] = 'UiTest/add_student';
// $route['add_user'] = 'UiTest/add_user';
// $route['notifications'] = 'UiTest/notification_settings';
// $route['logos'] = 'UiTest/logos';
// $route['database'] = 'UiTest/database_setting';
// $route['apis'] = 'UiTest/view_apis';
// $route['keyworkders'] = 'UiTest/view_keyworker';

// // $route['addrooms'] = 'UiTest/add_room';
// $route['addstaff'] = 'UiTest/add_staff';
// $route['calendar'] = 'UiTest/calendar';
// $route['attendence'] = 'UiTest/attendance';
// $route['attendenceSession'] = 'UiTest/attendanceSession';
// // $route['mark_attendance'] = 'UiTest/mark_attendance';

// //$route['addrooms'] = 'UiTest/add_room';todo: // working on backend
// $route['calendar'] = 'UiTest/calendar';
// //$route['mark_attendance'] = 'UiTest/mark_attendance'; todo: // working on backen

// $route['view_attendance'] = 'UiTest/view_attendance';
// //$route['addrole'] = 'UiTest/add_role'; todo: // working on backend
// //$route['viewroles'] = 'UiTest/view_roles';todo: // working on backend
// //$route['addsession'] = 'UiTest/add_session'; todo: // working on backend
// //$route['viewsession'] = 'UiTest/view_session';todo: // working on backend
// //$route['viewrooms'] = 'UiTest/view_rooms';todo: // working on backend
// //$route['roomdashboard'] = 'UiTest/room_dashboard';todo: // working on backend


// $route["testuuid"]='UiTest/uuid';


// //$route['viewstudents'] = 'UiTest/view_students';todo: // working on backend
// $route['viewattendancechart'] = 'UiTest/view_attendance_chart';
// $route['createmilestone'] = 'UiTest/create_milestone';


// // Testing routes by Yasir
// $route['viewLetters'] = 'UiTest/viewLetters'; todo: //working on backend
// $route['add_letter'] = 'UiTest/add_letter';

// $route['viewObservations'] = 'UiTest/view_observations';
// $route['addObservations'] = 'UiTest/add_observations';

// $route['viewDevelopment'] = 'UiTest/view_development';
// $route['addDevelopment'] = 'UiTest/add_development';

// $route['viewProgress'] = 'UiTest/view_progress';

// $route['childProfile'] = 'UiTest/child_profile';
// //$route['staffRoomStatus'] = 'UiTest/staff_room_status';  todo: //working on backend

// //--------------- Children Diaries------------------------

// $route['diaries'] = 'UiTest/C_Diaries';
// $route['test'] = 'UiTest/C_test';
// $route['viewMeal'] = 'UiTest/view_Meal';
// $route['viewFeed'] = 'UiTest/view_Fedding';
// $route['viewSleep'] = 'UiTest/view_Sleep';
// $route['viewChange'] = 'UiTest/view_Change';
// $route['viewSafeguard'] = 'UiTest/view_safeguard';
// $route['viewMedic'] = 'UiTest/view_Medic';
// $route['viewIncident'] = 'UiTest/view_Incident';
// $route['incidentReport'] = 'UiTest/incident_report';
// $route['healthReport'] = 'UiTest/health_report';
// $route['viewPhoto'] = 'UiTest/view_Photo';
// $route['viewVideo'] = 'UiTest/view_Video';
// $route['viewEmoji'] = 'UiTest/view_Emoji';
// $route['viewLearning'] = 'UiTest/view_Learning';
// $route['viewNote'] = 'UiTest/view_Note';

//  //----------------- observation Section-----------------------------------------

//  $route['observation'] = 'UiTest/observation';
//  $route['addObservation'] = 'UiTest/add_observation';
//  $route['viewObservation'] = 'UiTest/view_observation';
//  $route['rateObservation'] = 'UiTest/rate_observation';
//  $route['group_observation'] = 'UiTest/group_observation';
//  $route['graphs'] = 'UiTest/observation_graphs';
 
//  //----------------- Enrollment Section-----------------------------------------

 
// // $route['newEnrolled'] = 'UiTest/new_enrolled';todo: //working on backend
 
//  $route['viewInvoice'] = 'UiTest/view_invoice';
//  $route['viewBills'] = 'UiTest/view_bills';
 
 
 
//  $route['chooseRole'] = 'UiTest/choose_role';
//  $route['owner'] = 'UiTest/owner';
//  $route['parent'] = 'UiTest/parent';
 
 

//  //----------------- Parent Dashboard Section-----------------------------------------

//  $route['ParentDashboard'] = 'UiTest/parent_dashboard';
//  $route['childProfile'] = 'UiTest/child_profile';
//  $route['childInfo'] = 'UiTest/child_Info';
//  $route['payDues'] = 'UiTest/pay_dues';
//  $route['parentLetterView'] = 'UiTest/parent_letter';
//  $route['parentProfile'] = 'UiTest/parent_profile';
//  $route['notifications'] = 'UiTest/notifications';
//  $route['parentInvoice'] = 'UiTest/parent_invoice';
//  $route['parentBill'] = 'UiTest/parent_bill';

//  //----------------- Staff Management Section-----------------------------------------

//  $route['clockTime'] = 'UiTest/clock_time';
//  $route['staffProfile'] = 'UiTest/staff_profile';

//  $route['staffTask'] = 'UiTest/staff_task';
//  $route['staffHoliday'] = 'UiTest/staff_holiday';
 
//  //------------------- Early Year Library-----------------------------------------------
 
//  $route['earlyYearLibrary'] = 'UiTest/earlyYearLibrary';
//  $route['libraryInfo'] = 'UiTest/library_Info';
//  $route['viewLibrary'] = 'UiTest/view_Library';
 
 
//  //----------------- Student Dashboard Section-----------------------------------------
 
//  $route['studentProfile'] = 'UiTest/student_dashboard';
//  $route['learningStory'] = 'UiTest/learning_Story';
 
 
//  //----------------- Stock Management Section-----------------------------------------
 
//  $route['stockDetails'] = 'UiTest/stock_Details';

