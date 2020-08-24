<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('users_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    public function index()
    {
        $data['student_details'] = $this->users_model->getAllUsers();
        //$this->load->view('backend/detail-info',  $data);
        //var_dump($data);die();

    }

    public function loginUser()
    {
        //echo 'string'; die();
        // // if ($this->session->userdata('authenticated')) {
        // //     redirect(base_url('dashboard'));
        // // }

        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');

        


        // // $this->form_validation->set_error_delimiters('<div class="error">' , '</div>');

        if ($this->form_validation->run() == true) {
            
            $data_error = ['error' => validation_errors()];
            $this->session->set_flashdata($data_error);
            echo 'error'; die();
            redirect(base_url('index1'));
        } else {
           echo 'pass';
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));

            $user = $this->users_model->login($email, $password);
            var_dump($user); die();
        }

        //     if ($user) {
        //         $userdata = array(
        //             'id' => $user->id,
        //             'email' => $user->email,
        //             'password' => $user->password,
        //             'authenticated' => True

        //         );
        //         

        //         $this->session->set_userdata($userdata);

        //         if ($user->role_id == 1) {
        //            $this->checkStudentDetails();
        //         } elseif ($user->role_id == 2) {
        //             $this->checkTeacherDetails();
        //         }
        //     } else {
        //         $this->session->set_flashdata('message', 'Invalid email or password');
        //         redirect();
        //     }
        // }
    }

    // -------------------------- Student related Functions ---------------------------
    public function studentSignup()
    {

        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('country', 'country', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('dob', 'dob', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'zip_code', 'trim');



        if ($this->form_validation->run() == TRUE) {

            $result = $this->users_model->insert([
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
                'city' => $this->input->post('city'),
                'zip_code' => $this->input->post('zip_code'),
                'role_id' => 1,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),

            ]);

            if ($result) {
                // seesion 
                $this->session->set_userdata('user_id', $result);
                $this->session->set_flashdata("success", "Registeration Successfully Completed!");
                $this->checkStudentDetails();
            }
        } else {
            $data_error = ['error' => validation_errors()];
            $this->session->set_flashdata($data_error);
            //redirect();
        }

        
    }
    public function UpdateStudentRegistrationInfo($id)
    {
        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
        $this->form_validation->set_rules('country', 'country', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('dob', 'dob', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $result = $this->users_model->updateStudentInfo([
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'city' => $this->input->post('city'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
            ], $id);

            if ($result) {
                $this->session->set_flashdata("updated", "Info Updated Successfully!");
            }
        } else {
            $data_error = ['error' => validation_errors()];

            $this->session->set_flashdata($data_error);
        }

        redirect(base_url('studentDetailInfo'));
    }

    public function studentInfo()
    {
        $this->uploadFile('studentImg');
        $this->studentPersonalInfo();
    }



    public function uploadFile($file_name)
    {

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'pdf|jpg|png';
        $config['encrypt_name'] = true;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);


        if ($this->upload->do_upload($file_name)) {
            $user_id = $this->session->userdata('user_id');
            //var_dump($user_id); die();
            $data =  array('upload_data' => $this->upload->data());
            $image = $data['upload_data']['file_name'];
            $Img = array(
                'profile_photo' => $image
            );
            $this->users_model->updateProfilePhoto($user_id, $Img);
            $this->session->set_flashdata("success", "Photo Added Successfully!");
        } else {
            print_r($this->upload->display_errors());
        }
        return;
    }

    public function studentPersonalInfo()
    {
        $this->form_validation->set_rules('parent_name', 'parent_name', 'trim|required');
        $this->form_validation->set_rules('parent_mobile', 'parent_mobile', 'trim|required');
        $this->form_validation->set_rules('registration_date', 'registration_date', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $student_id = $this->session->userdata('user_id');

            $result = $this->users_model->insertStudentInfo([
                'student_id' =>  $student_id,
                'parent_name' => $this->input->post('parent_name'),
                'parent_mobile' => $this->input->post('parent_mobile'),
                'registration_date' => $this->input->post('registration_date'),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),

            ]);

            if ($result) {
                // seesion 
                //$this->session->set_userdata('user_id' , $result);
                $this->session->set_flashdata("success", "Info Added Completed!");
            }
        } else {
            $data_error = ['error' => validation_errors()];

            $this->session->set_flashdata($data_error);
        }

        //print_r($this->input->post());

        redirect(base_url('studentDetailInfo'));
    }

    // -------------------------- teacher related Functions ---------------------------

    public function teacherSignup()
    {

        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'last_name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('country', 'country', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('dob', 'dob', 'trim|required');
        $this->form_validation->set_rules('gender', 'gender', 'trim|required');
        $this->form_validation->set_rules('city', 'city', 'trim|required');
        $this->form_validation->set_rules('zip_code', 'zip_code', 'trim');



        if ($this->form_validation->run() == TRUE) {

            $userdata = $this->users_model->insert([
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'country' => $this->input->post('country'),
                'phone' => $this->input->post('phone'),
                'dob' => $this->input->post('dob'),
                'gender' => $this->input->post('gender'),
                'city' => $this->input->post('city'),
                'zip_code' => $this->input->post('zip_code'),
                'role_id' => 2,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),

            ]);

            $this->session->set_userdata($userdata);

            if ($userdata) {
                // seesion 

                //$this->session->set_userdata('user_id', $userdata);
                $this->session->set_flashdata("success", "Registerated Successfully!");
                $this->checkTeacherDetails();
            }
        } else {
            $data_error = ['error' => validation_errors()];
            $this->session->set_flashdata($data_error);
            redirect(base_url('teacherRegister'));
        }
        //redirect(base_url('checkDetails'));

    }

    public function checkTeacherDetails()
    {
        $data['teacher_details'] = $this->users_model->getTeacherDetails();
        //var_dump($data); die();
        foreach ($data['teacher_details'] as $row) {
            if ($this->session->userdata('user_id') == $row->teacher_id) {
                redirect(base_url('Teacherdashboard'));
                // echo 'dashboard';
                break;
            } else {
                redirect(base_url('teacherDetailInfo'));
                continue;
                //echo 'profile';
                //continue;

            }
        }
    }

    public function checkStudentDetails()
    {
        $data['student_details'] = $this->users_model->getStudentDetails();
        //var_dump($data); die();
        foreach ($data['student_details'] as $row) {
            if ($this->session->userdata('user_id') == $row->student_id) {
                redirect(base_url('Studentdashboard'));
                // echo 'dashboard';
                break;
            } else {
                redirect(base_url('studentDetailInfo'));
                continue;
                //echo 'profile';
                //continue;

            }
        }
    }

    public function teacherInfo()
    {
        //$this->uploadFile('teacherImg');
        $this->teacherAcademicInfo();
        //redirect(base_url('teacherDetailInfo'));
    }

    public function teacherAcademicInfo()
    {
        $this->form_validation->set_rules('department', 'department', 'trim|required');
        $this->form_validation->set_rules('url', 'url', 'trim|required');
        $this->form_validation->set_rules('class[]', 'class[]', 'trim|required');
        $this->form_validation->set_rules('subject[]', 'subject[]', 'trim|required');
        $this->form_validation->set_rules('brief', 'brief', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $class = $this->input->post('class');
            $data = implode('  ', $class);

            $subject = $this->input->post('subject');
            $data1 = implode('  ', $subject);

            $teacher_id = $this->session->userdata('user_id');

            $result = $this->users_model->insertTeacherInfo([
                'teacher_id' =>  $teacher_id,
                'department' => $this->input->post('department'),
                'url' => $this->input->post('url'),
                'class' => $data,
                'subject' => $data1,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),

            ]);

            if ($result) {
                $this->session->set_flashdata("success", "Info Added Completed!");
            }
        } else {
            $data_error = ['error' => validation_errors()];

            $this->session->set_flashdata($data_error);
        }

        print_r($this->input->post());

        //redirect(base_url('teacherDetailInfo'));


    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('index1'));
    }
}
