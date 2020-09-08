<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('course_model');
        $this->course_model->courseTypeJoin();
        $this->course_model->ProfessorJoin();
    }
    public function index()
    {
        //$data['course_details'] = $this->course_model->getAllCourses();
        //$this->load->view('backend/courses', $data);
        $this->load->model('course_model');
        $this->course_model->courseTypeJoin();
        $this->course_model->ProfessorJoin();
        
    }

    public function addCourse()
    {
        
            $this->form_validation->set_rules('d_name', 'Department Name', 'trim|required');
            $this->form_validation->set_rules('d_head', 'Department Head', 'trim|required');
            $this->form_validation->set_rules('totalStudents', 'Total Students', 'trim|required');
            $this->form_validation->set_rules('d_start_date', 'Department Start Date', 'trim|required');
            $this->form_validation->set_rules('brief', 'Department Brief', 'trim|required');
           

            if ($this->form_validation->run() == TRUE)
            {
                
                $result = $this->course_model->insertCourse([
                    'd_name' => $this->input->post('d_name'),
                    'd_head' => $this->input->post('d_head'),
                    'totalStudents' => $this->input->post('totalStudents'),
                    'd_start_date' => $this->input->post('d_start_date'),
                    'brief' => $this->input->post('brief'),
                ]);

                var_dump($result);

                if($result)
                {
                    $this->session->set_flashdata("success", "Course Added Successfully!");
                }


            } else {
                $data_error = ['error' => validation_errors()];

                $this->session->set_flashdata($data_error);

            }

        redirect(base_url('courses'));
    }

    
}
?>