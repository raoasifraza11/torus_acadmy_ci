<?php   

    class Admin extends CI_Controller{

        public function index(){
            $this->load->view('admintemplates/header');
            $this->load->view('admin/index');
            $this->load->view('admintemplates/footer');
        }
        //STUDENT PANEL
        //get all the students
        public function allstudents(){
            //get all the data of students from student model
            $data['students']=$this->student_model->getStudents('student');
            $this->load->view('admintemplates/header');
            $this->load->view('admin/allstudents',$data);
            $this->load->view('admintemplates/footer');
        }
        //get one student on basis of id
        public function viewstudent($id){
            //get the data of student
            $data['student']=$this->student_model->viewStudent($id,'student');
            if(empty($data['student'])){
                show_404();
            }
            $this->load->view('admintemplates/header');
            $this->load->view('admin/profilestudent',$data);
            $this->load->view('admintemplates/footer');
        }
        //edit the student 
        public function editstudent($id){
                //get data of student
                $data['student']=$this->student_model->viewStudent($id,'student');
                if(empty($data['student'])){
                    show_404();
                }
                $this->load->view('admintemplates/header');
                $this->load->view('admin/editstudent',$data);
                $this->load->view('admintemplates/footer');
        }

        //update student
        public function updatestudent(){
            $id=$this->input->post('student_id');
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
              $data_form['call_type']=$this->input->post('call_type');
              $data_form['teacher_level']=$this->input->post('teacher_level');

              //calling function in student_model 
              $this->student_model->updateStudent('student',$data_form,$id);
              //session flash
              $this->session->set_flashdata('studentupdated','Student is now updated');
              redirect('admin/allstudents');
            
        }

        //delete student
        public function deletestudent(){
            $id=$this->input->post('del_id');
          $this->student_model->deleteStudent('student',$id);
          //show response message back to user
          echo 'Deleted Sucessfully';            
               }
        //active student
        public function activestudent(){
            $id=$this->input->post('active_id');
                $data_form['status']=1;
                $this->student_model->activeStudent('student',$data_form,$id);
                //show response message back to user
                echo 'Student made active Sucessfully';      
                 }
         //active student
        public function inactivestudent(){
            $id=$this->input->post('inactive_id');
            $data_form['status']=0;
            $this->student_model->inactiveStudent('student',$data_form,$id);
            //show response message back to user
            echo 'Student made Inactive Sucessfully';      
             }
         //END STUDENT PANEL

         //TEACHER PANEL 
        //show all teachers
        public function allteachers(){
                //get all teachers data from teachers model 
                $data['teachers']=$this->teacher_model->getTeachers('teacher');

                //bring in views
                $this->load->view('admintemplates/header');
                $this->load->view('admin/allteachers',$data);
                $this->load->view('admintemplates/footer');
        }

        //show teacher 
        public function viewteacher($id){
                //get  data of specific teacher from teacher model

                $data['teacher']=$this->teacher_model->viewTeacher('teacher',$id);
                if(empty($data['teacher'])){
                    show_404();
                }
                //bring in views
                $this->load->view('admintemplates/header');
                $this->load->view('admin/profileteacher',$data);
                $this->load->view('admintemplates/footer');
        }

        //edit teacher
        public function editteacher($id){
             //get  data of specific teacher from teacher model
             $data['teacher']=$this->teacher_model->viewTeacher('teacher',$id);
             if(empty($data['teacher'])){
                 show_404();
             }
             //bring in views
             $this->load->view('admintemplates/header');
             $this->load->view('admin/editteacher',$data);
             $this->load->view('admintemplates/footer');

        }
        //update teacher
        public function updateteacher(){
            //getting the teacher id
                $id=$this->input->post('id');
            //getting the values from the form    
                $data_form['fname']=$this->input->post('fname');
                $data_form['lname']=$this->input->post('lname');
                $data_form['email']=$this->input->post('email');
                $data_form['gender']=$this->input->post('gender');
                $data_form['location']=$this->input->post('location');
                $data_form['address']=$this->input->post('address');
                $data_form['dob']=$this->input->post('date');
                $data_form['phno']=$this->input->post('phno');
                $data_form['link']=$this->input->post('link');
                $data_form['description']=$this->input->post('description');
                $data_form['prof_bg']=$this->input->post('prof_bg');
                //calling function in the teacher model for update
                $this->teacher_model->updateTeacher('teacher',$data_form,$id);
                //session message
                $this->session->set_flashdata('teacherupdated','Teacher is now updated');
                redirect('admin/allteachers');
        }
        //delete teacher
        public function deleteteacher(){
            $id=$this->input->post('teacher_del_id');
            //calling function in teacher model for delete
            $this->teacher_model->deleteTeacher('teacher',$id);
            //show message back to user
            echo 'Teacher deleted successfully';
        }
        //make teacher active
        public function activeteacher(){
            $id=$this->input->post('teacher_active_id');
            $data_form['status']=1;
            //calling function in teacher model for active
            $this->teacher_model->activeTeacher('teacher',$data_form,$id);
            //show message back to user
            echo 'Teacher made active successfully';
        }

        //make teacher inactive
        public function inactiveteacher(){
            $id=$this->input->post('teacher_inactive_id');
            $data_form['status']=0;
            //calling function in teacher model for inactive
            $this->teacher_model->inactiveTeacher('teacher',$data_form,$id);
            //show message back to user
            echo 'Teacher made inactive successfully';
        }
        //  END TEACHER PANEL

        // SUBJECTS PANEL
        //show all subjects
        public function allsubjects(){
            $data['subjects']=$this->subject_model->showSubjects('subjects');

            //bring in views
            $this->load->view('admintemplates/header');
            $this->load->view('admin/allsubjects',$data);
            $this->load->view('admintemplates/footer');
            
        }
        //add subjects
        public function addsubjects(){

            //bring teacher model to show all teachers in select box
           $data['teachers']=$this->teacher_model->getTeachers('teacher');
            //validations
            $this->form_validation->set_rules('name','Subject Name','required');
            $this->form_validation->set_rules('fees','Subject Fees ','required');
            $this->form_validation->set_rules('teacher','Subject Teacher','required');
            if($this->form_validation->run()===FALSE){
            $this->load->view('admintemplates/header');
            $this->load->view('admin/addsubjects',$data);
            $this->load->view('admintemplates/footer');
            }
            else{
                //values from form
                $data_form['name']=$this->input->post('name');
                $data_form['fees']=$this->input->post('fees');
                $data_form['teacher_id']=$this->input->post('teacher');
                //now calling function in subject model to insert
                $this->subject_model->addSubjects('subjects',$data_form);
                //session message
                $this->session->set_flashdata('subjectadded','Subject Added Successfully');
                //redirect
                redirect('admin/allsubjects');
            }
        }
    }