<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 31/8/2019
 * Time: 4:00 PM
 */

class Migrate extends CI_Controller
{
    public  function  __construct()
    {
        parent::__construct();
		$this->load->library('migration');
    }

    public function index()
    {
		$this->load->library('migration');
    	$this->migration->version(0);
        if ($this->migration->current() === FALSE)
        {
           var_dump( show_error($this->migration->error_string()));
        }
        else{

			$this->seed();
        	show_error("<p style='color: red;'>Now you have to re-enter or re-create the all accounts...</p>",
                200, "<h1 style='color: green;'>Data migrated Successfully!</h1>");
        }
    }


     public function seed(){
	//  todo: insert dummy users
	// 	$this->insertSiteConfigs();
	// 	$this->insertRoles();
	// 	$this->insertAdmin();
	// 	$this->insertSchool();
	// 	$this->insertSchoolprivileges();
	// 	$this->insertSchoolRoles();
	 	$this->insertTeacher();
	 	$this->insertStudent();
	 	$this->insertAdmin();
//	 	$this->insertClasses();
//	 	$this->insertCourses();
	// 	$this->insertSessions();
	// 	$this->insertRooms();

	 }

	// public function insertSiteConfigs(){
	// 	$site["value"] = "demologo.png";
	// 	$site["entity"] = "logo";
	// 	$this->Crud_model->insert('site_configs', $site);
	// }



	// public function insertRoles(){
	// 	$role1["name"] = "Admin";
	// 	$this->Crud_model->insert('roles', $role1);

	// 	$role1["name"] = "School";
	// 	$this->Crud_model->insert('roles', $role1);
	// 	$role1["name"] = "School Employee";
	// 	$this->Crud_model->insert('roles', $role1);
	// 	$role1["name"] = "Student";
	// 	$this->Crud_model->insert('roles', $role1);
	// }

	// public function insertSchoolprivileges(){
	// 	$privilege["name"] = "Attendance / Calendar";
	// 	$privilege["school_id"] = 2;
	// 	$this->Crud_model->insert('school_level_privileges', $privilege);

	// 	$privilege["name"] = "Observation and Development";
	// 	$privilege["school_id"] = 2;
	// 	$this->Crud_model->insert('school_level_privileges', $privilege);

	// 	$privilege["name"] = "Progress Management";
	// 	$privilege["school_id"] = 2;
	// 	$this->Crud_model->insert('school_level_privileges', $privilege);

	// }

	// public function insertSchoolRoles(){
	// 	$role["name"] = "Teacher";
	// 	$role["school_id"] = 2;
	// 	$id=$this->Crud_model->insert('school_level_roles', $role);
	// 	$rolep["role_id"] = $id;
	// 	$rolep["privilege_id"] = 1;
	// 	$id=$this->Crud_model->insert('school_level_role_privileges', $rolep);
	// 	$rolep["role_id"] = $id;
	// 	$rolep["privilege_id"] = 2;
	// 	$id=$this->Crud_model->insert('school_level_role_privileges', $rolep);




	// }

	// public  function insertSessions(){
	// 	$session["name"] = "2020";
	// 	$session["description"] = "school session";
	// 	$session["school_id"] = 2;
	// 	$this->Crud_model->insert('school_sessions', $session);
	// }
	// public  function insertRooms(){
	// 	$session["name"] = "Class 1";
	// 	$session["session_id"] = 1;
	// 	$session["school_id"] = 2;
	// 	$this->Crud_model->insert('school_rooms', $session);
	// }



	// public function insertAdmin(){

	// 	$admin['password']=123;
	// 	$admin["role_id"] = 0;
	// 	$admin["email"]="admin@linkschild.com";
	// 	$admin["password"] = md5(123);
	// 	$admin["token"]=md5("admin@linkschild.com");
	// 	$admin["full_name"]="NANA DEBRAH";
	// 	$admin["school_id"]=0;
	// 	$admin["status"]=1;
	// 	$admin["is_verified"]=1;
	// 	$student_id=$this->Crud_model->insert('users', $admin);
	// }


	public function insertCourses(){
		for ($i=1;$i<10;$i++) {
			$school['name'] ="course".$i;
			$student_id=$this->Crud_model->insert('courses', $school);

		}

	}

	 public function insertClasses(){
    	for ($i=1;$i<10;$i++) {
			$school['name'] ="class".$i;
			$student_id=$this->Crud_model->insert('classes', $school);

		}

	 }


	 public function insertTeacher(){

		 $student['password']=123;
		 $student["role_id"] = 1;
		 $student["email"]="teacher@torus.com";
		 $student["password"] = md5(123);
		 $student["token"]=md5("school@linkschild.com");
		 $student["first_name"]="Asif";
		 $student["last_name"]="Raza";
		 $student["phone"]="1234";
		 $student["gender"]="Male";
		 $student["country"]="Pakistan";
		 $student["city"]="Multan";
		 $student["zip_code"]="4600";
		 $student["dob"]="01-02-2020";
		 $student["status"]=1;
		 $student["is_verified"]=1;
		 $student_id=$this->Crud_model->insert('users', $student);
	 }


	 public function insertStudent(){

	 	$student['password']=123;
	 	$student["role_id"] = 2;
	 	$student["email"]="studnet@torus.com";
	 	$student["password"] = md5(123);
	 	$student["token"]=md5("school@linkschild.com");
	 	$student["first_name"]="Arslan";
	 	$student["last_name"]="Ahmad";
	 	$student["phone"]="1234";
	 	$student["gender"]="Male";
	 	$student["country"]="Pakistan";
	 	$student["city"]="Islamabad";
	 	$student["zip_code"]="4600";
	 	$student["dob"]="01-02-2020";
	 	$student["status"]=1;
	 	$student["is_verified"]=1;
	 	$student_id=$this->Crud_model->insert('users', $student);
	 }

	public function insertAdmin(){

		$student['password']=123;
		$student["role_id"] = 0;
		$student["email"]="admin@torus.com";
		$student["password"] = md5(123);
		$student["token"]=md5("school@linkschild.com");
		$student["first_name"]="Arslan";
		$student["last_name"]="Ahmad";
		$student["phone"]="1234";
		$student["gender"]="Male";
		$student["country"]="Pakistan";
		$student["city"]="Islamabad";
		$student["zip_code"]="4600";
		$student["dob"]="01-02-2020";
		$student["status"]=1;
		$student["is_verified"]=1;
		$student_id=$this->Crud_model->insert('users', $student);
	}

}
