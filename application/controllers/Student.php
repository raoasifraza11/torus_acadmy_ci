<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends TTT_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('professor_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
		$this->load->model('users_model');
    }
    public function index()
    {
		$data['student_details'] = $this->users_model->getAllUsers();
		//$data['user_details'] = $this->users_model->getUser($id);
		//$user_id = $data['student_details']->id;
		//var_dump($first_name); die();
		$this->slice->view('backend.student-detail-info' , $data);
//		$this->slice->view('backend.student-course-info');

    }

    public function addProfessor()
    {

            $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
            $this->form_validation->set_rules('dob', 'dob', 'trim|required');
            $this->form_validation->set_rules('gender', 'gender', 'trim|required');
            $this->form_validation->set_rules('department', 'department', 'trim|required');
            $this->form_validation->set_rules('position', 'position', 'trim|required');
            $this->form_validation->set_rules('phone', 'phone', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('url', 'url', 'trim|required');
            $this->form_validation->set_rules('image', 'image', 'trim');
            $this->form_validation->set_rules('message', 'message', 'trim|required');
           
           

            if ($this->form_validation->run() == TRUE)
            {
                
                $result = $this->professor_model->insertProfessor([
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'dob' => $this->input->post('dob'),
                    'gender' => $this->input->post('gender'),
                    'department' => $this->input->post('department'),
                    'position' => $this->input->post('position'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'url' => $this->input->post('url'),
                    'image' => $this->input->post('image'),
                    'message' => $this->input->post('message'),
                    
                ]);

                // $config['encrypt_name'] = true;
                // $config['allowed_types'] = 'pdf|jpg|png';
                // $config['upload_path'] = './uploads/';

                // $this->load->library('upload',$config
                // );

                // if ($this->upload->do_upload('image')) {
                //     $data =  array('upload_data' => $this->upload->data());
                //     $image = $data['upload_data']['image'];
                //     return $image;
                // } else {
                //     print_r($this->upload->display_errors());
                // }
                
                if($result)
                {
                    $this->session->set_flashdata("success", "Professor Added Successfully!");
                }


            } else {
                $data_error = ['error' => validation_errors()];

                $this->session->set_flashdata($data_error);

            }
            print_r($this->input->post());
        //redirect(base_url('professors'));
    }

    
}
?>