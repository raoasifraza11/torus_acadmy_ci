<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends TTT_Controller
{

	public function __construct()
	{
		parent::__construct();
	}



	/**
	 * Handle the general login.
	 * @return string json_response with status code
	 *
	 * Based on the user category
	 */


	public function index(){
		if ($this->input->post()){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist|callback_isEmailverified|callback_isAccountApproved');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				return $this->output
					->set_content_type('application/json')
					->set_status_header(400)
					->set_output(json_encode(array(
						'error' => $this->form_validation->error_array(),
						'type' => 'danger'
					)));

			}else{
				$status = $this->auth->login($_POST);

				if ($status){
					return $this->output
						->set_content_type('application/json')
						->set_status_header(200)
						->set_output(json_encode(array(
							'redirectTo' => 'dashboard',
							'type' => 'success'
						)));
				}else{
					return $this->output
						->set_content_type('application/json')
						->set_status_header(400)
						->set_output(json_encode(array(
							'error' => array('error' => 'Email or Password is Incorrect!.'),
							'type' => 'danger'
						)));
				}
			}



		}else{

		}
	}


    /**
     * SignUpCook / Become host for dine
     * @return string json_resp with status code
     *
     * 400 - for invalid
     * 200 - for valid
     */
    public function loginBecomeHost()
    {

        if ($this->input->post()) {

            if ($this->session->has_userdata('adminID')) {
                $this->session->unset_userdata('adminID');
            }


            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_isEmailExist|callback_isEmailverified|callback_isAccountApproved');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(400)
                    ->set_output(json_encode(array(
                        'error' => $this->form_validation->error_array(),
                        'type' => 'danger'
                    )));

            } else {

                $status = $this->auth->login($_POST);
                if ($status) {

                    if ($this->input->post('optout')) {
//
//                        $my_cookie= array(
//                            'name'   => 'remember_me',
//                            'value'  => 'test value',
//                            'expire' => '3000',
//                            'secure' => TRUE
//
//                        );
//                        $this->input->set_cookie($my_cookie);

//                        $data['new_expiration'] = 60*60*24*30;//30 days
//                        $this->session->sess_expiration = $data['new_expiration'];
//
//                    $this->session->set_userdata("remember_me",true);
                        $this->load->helper('cookie');
                        $cookie = $this->input->cookie('ci_session'); // we get the cookie
                        $this->input->set_cookie('ci_session', $cookie, '35580000'); // and add one year to it's expiration

                       // $this->config->config["sess_expiration"] = '14400';// expires in 4 hours

                    }
                    return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode("Success"));
                } else {
                    return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(400)
                        ->set_output(json_encode(array(
                            'error' => array('error' => 'Email or Password is Incorrect!.'),
                            'type' => 'danger'
                        )));

                }
            }

        }

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(400)
            ->set_output(json_encode(array(
                'error' => 'Something happend! Please contact system administrator.',
                'type' => 'danger'
            )));
    }





    /**
     * Logout.
     */
    public function logout()
    {
        $this->session->sess_destroy();
            return redirect(base_url());

        return false;
    }




//check email aready exists
    public function isEmailExist($email)
    {
        $this->load->library('form_validation');
        $is_exist = $this->Crud_model->isEmailExist($email);

        if (!$is_exist) {
            $this->form_validation->set_message(
                'isEmailExist', 'Email address not exist.'
            );
            return false;
        } else {
            return true;
        }
    }

//check admin email aready exists

    public function isAdminEmailExist($email)
    {
        $this->load->library('form_validation');
        $is_exist = $this->Admin_model->isEmailExist($email);

        if (!$is_exist) {
            $this->form_validation->set_message(
                'isAdminEmailExist', 'Email address not exist.'
            );
            return false;
        } else {
            return true;
        }
    }

    public function isEmailverified($email)
    {
        $this->load->library('form_validation');
        $is_exist = $this->Crud_model->isEmailverified($email);

        if (!$is_exist) {
            $this->form_validation->set_message(
                'isEmailverified', 'Email address not verified.'
            );
            return false;
        } else {
            return true;
        }
    }


    public function isAccountApproved($email)
    {
        $this->load->library('form_validation');
        $is_exist = $this->Crud_model->isAccountApproved($email);

        if ($is_exist) {
            $this->form_validation->set_message(
                'isAccountApproved', 'Account Disabled.'
            );
            return false;
        } else {
            return true;
        }
    }




}
