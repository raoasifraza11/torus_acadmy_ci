<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends TTT_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('professor_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
		$this->load->model('users_model');
		$this->load->model('users_model');

	}
    public function index()
    {
		if($this->input->post()) {

			$form_data = $this->input->post();

			$teacher["department"]=$form_data["department"];
			$teacher["website_url"]=$form_data["url"];
			$teacher["description"]=$form_data["brief"];
			$teacher["user_id"]=$this->auth->userID();
			$this->Crud_model->insert('teacher_details', $teacher);


			foreach ($form_data["class"] as $c){

                 $cources["class_id"]=$c;
                 $cources["teacher_id"]=$this->auth->userID();

				$this->Crud_model->insert('teacher_classes', $cources);

			}



		}
		$data["courses"]=$this->Crud_model->get_all_data("courses");
		$data["classes"]=$this->Crud_model->get_all_data("classes");
		$this->slice->view('backend.teacher-details' , $data);

    }

    public function profile(){
    			if($this->input->post()) {
    				var_dump($_POST);
    				die();
				}
		$data["user"] = $this->Crud_model->get("users", $this->auth->userID());

		$this->slice->view('app_alpha.be.teachers.profile_setting',$data);
	}

	public function academic(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		redirect(base_url("teacher/profile"));
	}
	public function experience(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	} public function availability(){
	if($this->input->post()) {
		var_dump($_POST);
		die();
	}
	$this->slice->view('app_alpha.be.teachers.profile_setting');
}
	public function courseSelection(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	}

	public function account(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.profile_setting');
	}

	public function students(){
		if($this->input->post()) {
			var_dump($_POST);
			die();
		}
		$this->slice->view('app_alpha.be.teachers.enrolled_students');

	}

//    public function addProfessor()
//    {
//
//            $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
//            $this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
//            $this->form_validation->set_rules('dob', 'dob', 'trim|required');
//            $this->form_validation->set_rules('gender', 'gender', 'trim|required');
//            $this->form_validation->set_rules('department', 'department', 'trim|required');
//            $this->form_validation->set_rules('position', 'position', 'trim|required');
//            $this->form_validation->set_rules('phone', 'phone', 'trim|required');
//            $this->form_validation->set_rules('email', 'email', 'trim|required');
//            $this->form_validation->set_rules('url', 'url', 'trim|required');
//            $this->form_validation->set_rules('image', 'image', 'trim');
//            $this->form_validation->set_rules('message', 'message', 'trim|required');
//
//
//
//            if ($this->form_validation->run() == TRUE)
//            {
//
//                $result = $this->professor_model->insertProfessor([
//                    'first_name' => $this->input->post('first_name'),
//                    'last_name' => $this->input->post('last_name'),
//                    'dob' => $this->input->post('dob'),
//                    'gender' => $this->input->post('gender'),
//                    'department' => $this->input->post('department'),
//                    'position' => $this->input->post('position'),
//                    'phone' => $this->input->post('phone'),
//                    'email' => $this->input->post('email'),
//                    'url' => $this->input->post('url'),
//                    'image' => $this->input->post('image'),
//                    'message' => $this->input->post('message'),
//
//                ]);
//
//                // $config['encrypt_name'] = true;
//                // $config['allowed_types'] = 'pdf|jpg|png';
//                // $config['upload_path'] = './uploads/';
//
//                // $this->load->library('upload',$config
//                // );
//
//                // if ($this->upload->do_upload('image')) {
//                //     $data =  array('upload_data' => $this->upload->data());
//                //     $image = $data['upload_data']['image'];
//                //     return $image;
//                // } else {
//                //     print_r($this->upload->display_errors());
//                // }
//
//                if($result)
//                {
//                    $this->session->set_flashdata("success", "Professor Added Successfully!");
//                }
//
//
//            } else {
//                $data_error = ['error' => validation_errors()];
//
//                $this->session->set_flashdata($data_error);
//
//            }
//            print_r($this->input->post());
//        //redirect(base_url('professors'));
//    }

    
}
?>
