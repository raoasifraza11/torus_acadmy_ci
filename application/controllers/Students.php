<?php

    class Students extends CI_Controller{
        //student registration
        public function register(){
                         //check login
                         if($this->session->userdata('logged_in')){
                            redirect('students/login');
                        }
           //validations
                $this->form_validation->set_rules('fname','First Name','required');
                $this->form_validation->set_rules('lname','Last Name','required');
                $this->form_validation->set_rules('email','Email','required');
                $this->form_validation->set_rules('location','Location ','required');
                $this->form_validation->set_rules('guardian_name','Guardian Name','required');
                $this->form_validation->set_rules('phone','Phone Number ','required');
                $this->form_validation->set_rules('psd','Password is ','required|min_length[8]');
                $this->form_validation->set_rules('cpsd','Confirm Password','matches[psd]');
               
                    if($this->form_validation->run()===FALSE)
                        {
                        $this->load->view('templates/header');
                        $this->load->view('students/register');
                        $this->load->view('templates/footer');
                                    }
                    else{
                        //upload image
                        $config['upload_path']='./assets/uploads/students';
                        $config['allowed_types']='gif|jpg|png|jpeg';
                        $this->load->library('upload',$config);
                            if(!$this->upload->do_upload()){
                                //if image is not uploaded
                                $errors=array('error',$this->upload->display_errors());
                                $studentimg='noimage.png
                                ';
                            }
                            else{
                                //if it is uploaded
                                $data=array('upload_data',$this->upload->data());
                                $studentimg=$_FILES['userfile']['name'];
                            }
                                //getting the values from form
                                $data_form['fname']=$this->input->post('fname');
                                $data_form['lname']=$this->input->post('lname');
                                $data_form['email']=$this->input->post('email');
                                $data_form['gender']=$this->input->post('gender');
                                $data_form['location']=$this->input->post('location');
                                $data_form['guardian_name']=$this->input->post('guardian_name');
                                $data_form['address']=$this->input->post('address');
                                $data_form['dob']=$this->input->post('date');
                                $data_form['phone']=$this->input->post('phone');
                                $hashpass=md5($this->input->post('psd'));
                                $data_form['password']=$hashpass;
                                $data_form['call_type']=$this->input->post('call_type');
                                $data_form['teacher_level']=$this->input->post('teacher_level');
                                $data_form['profile_img']=$studentimg;
                            
                                //calling function
                                $this->student_model->registerStudent('student',$data_form);
                                $this->session->set_flashdata('student_registered','You are now registered! Log in Now');

                                redirect('students/login');
                        
                    }
        }
        //end student registration

        public function login(){
            //validations
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required|min_length[8]x');
            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header');
                $this->load->view('students/login');
                $this->load->view('templates/footer');

            }
            else{   
                //Get email
                $email=$this->input->post('email');
                //Get and encrypt password
                $password=md5($this->input->post('password'));
                //login user
                $student_id=$this->student_model->login('student',$email,$password);
                if($student_id){
                    //create session
                   $student_data=array(
                       'student_id'=>$student_id,
                       'email'=>$email,
                       'logged_in'=>true
                   );
                   $this->session->set_userdata($student_data);
                   
             $this->session->set_flashdata('user_logged_in','You are now logged in!');
             redirect('students/profilestudent');

                }
                else{
                    //error
             $this->session->set_flashdata('login_failed','**Login error**');
             redirect('students/login');

                }

        }
  
    }
       //logout user
       public function logout(){
        //unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('student_id');
        $this->session->unset_userdata('email');
                 
        $this->session->set_flashdata('user_logged_out','You are now logged out!');
        redirect('students/login');
    }
    
    //profile of student for selection of subjects and teachers
    public function profilestudent(){
        //get email from session
        $email=$this->session->userdata('email');
        //calling function to get student data
        $data['student']=$this->student_model->getStudents('student',$email);
        //bring class model
        $data['classes']=$this->class_model->getClasses('class');
        //bring groups model
        $data['groups']=$this->group_model->getGroups('groups');
        //get record of teaher in profile page
        $data['student_teacher']=$this->student_model->getStudentTeacher('student_teacher',$this->session->userdata('student_id'));
        $this->load->view('templates/header');
        $this->load->view('students/profilestudent',$data);
        $this->load->view('templates/footer');
        
    }
    public function selectTeacher(){
        //subject id for less then 5
        $subject_id=$this->input->post('subject');
        //group id for greater then 5
        $group_id=$this->input->post('group');
        $data['teachers']=$this->teacher_model->getTeachers('teacher',$subject_id,$group_id);
        $this->load->view('templates/header');
        $this->load->view('students/select-teachers',$data);
        $this->load->view('templates/footer');

    }
    //for according to class show subject
    public function fetchsubject(){
        $class_id=$this->input->post('class_id');
        if($class_id){
            echo $this->subject_model->showSubjects('subjects',$class_id);
        }
    }

    public function addteachers($teacher_id,$teacher_name,$teacher_fess){
        //getting values from form
       $data_form['student_id']=$this->session->userdata('student_id');
       $data_form['teacher_id']=$teacher_id;
        $data_form['teacher_name']=$teacher_name;
        $data_form['teacher_fees']=$teacher_fess;
        //calling function
        $this->student_model->addTeachers('student_teacher',$data_form);
           //session message
        $this->session->set_flashdata('teacher_added','You have selected'.' '.''.$teacher_name.'');
        $subject_id=$this->session->userdata('subject_id');
        redirect('students/profilestudent');
    }

    public function removeteacher($teacher_id){
        //calling function
        $this->student_model->removeTeacher('student_teacher',$teacher_id);
        //session message
        $this->session->set_flashdata('remove_teacher','Teacher removed successfully!');
        //redirect
        redirect('students/profilestudent');
    }
}