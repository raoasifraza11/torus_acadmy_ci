<?php
//require 'application/controllers/MailSender.php';

class Signup extends TTT_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }


    /**
     * Handle School Sign up
     *
     * @param post
     * @return array
     */
    public function index()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            if ($this->form_validation->run() == FALSE) {
                var_dump($this->form_validation->error_array());
                die();
            } else {
                $form_data = $this->input->post();
                //inserting data in database
                $user_id = $this->Crud_model->insert('teachers', $form_data);
            }
        }
		$this->slice->view('edu_view.register');

    }


    /**
     * Handle  Email varification
     *
     * @param data
     * @return array
     */

    public function verify($data)
    {
        $status = $this->Crud_model->verifyaccount($data);
        redirect(base_url("dev"));

    }

    //check email aready exists
    public function isEmailExist($email)
    {
        $is_exist = $this->Crud_model->isEmailExist($email);

        if ($is_exist) {
            $this->form_validation->set_message(
                'isEmailExist', 'Email address already exists.'
            );
            return false;
        } else {
            return true;
        }
    }

}
