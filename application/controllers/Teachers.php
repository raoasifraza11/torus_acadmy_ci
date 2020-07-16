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
                        $this->load->view('templates/header');
                        $this->load->view('teachers/register');
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
                                //calling function in model
                                $this->teacher_model->registerTeacher('teacher',$data_form);
                                //session flash
                                $this->session->set_flashdata('teacher_registered','You are now registered!');
                                redirect('teachers/register');

                    }
         }

            
    }