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
            var_dump($_POST);
            var_dump("i am hear");
            die();
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('rpassword', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array(
                        'error' => $this->form_validation->error_array(),
                        'type' => 'danger'
                    )));
            } else {

                $form_data = $this->input->post();

                unset($form_data["rpassword"]);
                unset($form_data["agree"]);
                $form_data["full_name"] = $form_data["fullname"];
                unset($form_data["fullname"]);
                $form_data["user_type"] = 1;
                $form_data["password"] = md5($form_data['password']);
                $form_data["token"] = md5($form_data['email']);
                $form_data["status"] = 1;
                //inserting data in database
                $user_id = $this->Crud_model->insert('users', $form_data);
                $user_detail["user_id"] = $user_id;
                $this->Crud_model->insert('user_details', $user_detail);
                $payment_details["user_id"] = $user_id;
                $this->Crud_model->insert('payment_details', $payment_details);
                $data['token'] = md5($form_data['email']);
                $msg = $this->load->view('emailnotifications/confirm_email', $data, true);
                MailSender::sendEmailSMTP('LinksChild', $form_data['email'], 'Email Verification', 'Hello', $msg);

                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode(array(
                        'type' => 'success'
                    )));


            }
        } else {
            //redirect(base_url("404_override"));
//			var_dump("not post request");
//			die();
        }

    }

    public function student()
    {
        if ($this->input->post()) {

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
//			$this->form_validation->set_rules('rpassword', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {

            } else {

                $form_data = $this->input->post();


				$form_data["role_id"] = 2;
                $form_data["password"] = md5($form_data['password']);
                $form_data["token"] = md5($form_data['email']);
                $form_data["status"] = 1;
                //inserting data in database
                $user_id = $this->Crud_model->insert('users', $form_data);
                $user_detail["user_id"] = $user_id;
//				$this->Crud_model->insert('user_details', $user_detail);
//				$payment_details["user_id"]=$user_id;
//				$this->Crud_model->insert('payment_details', $payment_details);
//				$data['token'] = md5($form_data['email']);
//				$msg = $this->load->view('emailnotifications/confirm_email', $data, true);
//				MailSender::sendEmailSMTP('LinksChild', $form_data['email'], 'Email Verification', 'Hello', $msg);


            }
        }

		$this->slice->view('landing_alpha.student_register');

	}

    public function teacher()
    {
        if ($this->input->post()) {

            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
//			$this->form_validation->set_rules('rpassword', 'Confirm Password', 'required|matches[password]');
            if ($this->form_validation->run() == FALSE) {
//				$this->slice->view('landing_alpha.teacher_register');

            } else {

                $form_data = $this->input->post();


                $form_data["role_id"] = 1;
                $form_data["password"] = md5($form_data['password']);
                $form_data["token"] = md5($form_data['email']);
                $form_data["status"] = 1;
                unset($form_data["terms"]);
                unset($form_data["Address"]);
                //inserting data in database
                $user_id = $this->Crud_model->insert('users', $form_data);
                $user_detail["user_id"] = $user_id;
//				$this->Crud_model->insert('user_details', $user_detail);
//				$payment_details["user_id"]=$user_id;
//				$this->Crud_model->insert('payment_details', $payment_details);
//				$data['token'] = md5($form_data['email']);
//				$msg = $this->load->view('emailnotifications/confirm_email', $data, true);
//				MailSender::sendEmailSMTP('LinksChild', $form_data['email'], 'Email Verification', 'Hello', $msg);


            }
        } else {
            //redirect(base_url("404_override"));
//			var_dump("not post request");
//			die();
        }
		$this->slice->view('landing_alpha.teacher_register');
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

    public function test()
    {
        var_dump("test");
        die();
    }
}
