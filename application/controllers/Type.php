<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends CI_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model('type_model');
    }
    public function index()
    {
        $data['course_details'] = $this->type_model->getAllTypes();
        $this->load->view('backend/courses', $data);
        
    }

    public function addType()
    {
        
            $this->form_validation->set_rules('type_name', 'Course Type', 'trim|required');
           
           

            if ($this->form_validation->run() == TRUE)
            {
                
                $result = $this->type_model->insertType([
                    'type_name' => $this->input->post('type_name'),
                ]);

                var_dump($result);

                if($result)
                {
                    $this->session->set_flashdata("success", "Course Type Added Successfully!");
                }


            } else {
                $data_error = ['error' => validation_errors()];

                $this->session->set_flashdata($data_error);

            }

        redirect(base_url('courses'));
    }

    
}
?>