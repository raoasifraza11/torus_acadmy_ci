<?php

    class Teachers extends CI_Controller{

        //teacher registration
            public function register(){
                  //validations
                $this->form_validation->set_rules('fname','First Name','required');
                $this->form_validation->set_rules('lname','Last Name','required');
                $this->form_validation->set_rules('email','Email','required');
                $this->form_validation->set_rules('location','Location ','required');
                $this->form_validation->set_rules('phno','Phone Number ','required');
                $this->form_validation->set_rules('psd','Password is ','required');
                $this->form_validation->set_rules('cpsd','Confirm Password','matches[psd]');
              
                    if($this->form_validation->run()===FALSE)
                        {
                        $data['subjects']=$this->subject_model->showSubjects('subjects');    
                        $this->load->view('templates/header');
                        $this->load->view('teachers/register',$data);
                        $this->load->view('templates/footer');
                                    }
                    else{
                          //upload image
                          $config['upload_path']='./assets/uploads/teachers';
                          $config['allowed_types']='gif|jpg|png|jpeg';
                          $this->load->library('upload',$config);
                              if(!$this->upload->do_upload()){
                                  //if image is not uploaded
                                  $errors=array('error',$this->upload->display_errors());
                                  $teacherimg='noimage.png';
                              }
                              else{
                                  //if it is uploaded
                                  $data=array('upload_data',$this->upload->data());
                                  $teacherimg=$_FILES['userfile']['name'];
                              }
                             //getting data from form
                             $data_form['fname']=$this->input->post('fname');
                             $data_form['lname']=$this->input->post('lname');
                             $data_form['email']=$this->input->post('email');
                             $data_form['gender']=$this->input->post('gender');
                             $data_form['location']=$this->input->post('location');
                             $data_form['address']=$this->input->post('address');
                             $data_form['dob']=$this->input->post('date');
                             $data_form['phno']=$this->input->post('phno');
                             $hashpass=md5($this->input->post('psd'));
                             $data_form['password']=$hashpass;
                             $data_form['link']=$this->input->post('link');
                             $data_form['description']=$this->input->post('description');
                             $data_form['prof_bg']=$this->input->post('prof_bg');
                             $data_form['certificates']=$this->input->post('certificates');
                             $data_form['profile_img']=$teacherimg;
                             $data_form['subject_id']=$this->input->post('subjects');
                                //calling function in model
                                $this->teacher_model->registerTeacher('teacher',$data_form);
                                //session flash
                                $this->session->set_flashdata('teacher_registered','You are now registered! Log in Now');
                                redirect('teachers/login');
                    }
         }
            //login teacher

            public function login(){
                $this->form_validation->set_rules('email','Email','required');
                $this->form_validation->set_rules('password','Password','required|min_length[8]');
                if($this->form_validation->run()===FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('teachers/login');
                    $this->load->view('templates/footer');
    
                }
                else{
                    //die('continue')
                   //Get email
                $email=$this->input->post('email');
                //Get and encrypt password
                $password=md5($this->input->post('password'));
                //print_r($_POST);
                  //die();
                //login user
                $teacher_id=$this->teacher_model->login('teacher',$email,$password);
                
                if($teacher_id){
                    //create session
                   $teacher_data=array(
                       'teacher_id'=>$teacher_id,
                       'teacher_email'=>$email,
                       'teacher_logged_in'=>true
                   );
                    $this->session->set_userdata($teacher_data);
                    $this->session->set_flashdata('user_logged_in','You are now logged in!');
                    redirect('teachers/profileteacher');

                }
                else{
                    //error
                    $this->session->set_flashdata('login_failed','**Login error**');
                    redirect('teachers/login');
                }
                    }
            }
            
            //logout teacher
            public function logout(){
                //unset teacher data
                $this->session->unset_userdata('teacher_logged_in');
                $this->session->unset_userdata('teacher_id');
                $this->session->unset_userdata('teacher_email');            
                $this->session->set_flashdata('user_logged_out','You are now logged out!');
                redirect('teachers/login');
            }
            
            //profile
            public function profileteacher(){
                //getting values of teacher's email form session
                $teacher_email=$this->session->userdata('teacher_email');
                //calling function in teacher model
                $data['teacher']=$this->teacher_model->getTeacherData('teacher',$teacher_email);
                $this->load->view('templates/header');
                $this->load->view('teachers/profileteacher',$data);
                $this->load->view('templates/footer');

            }
    }