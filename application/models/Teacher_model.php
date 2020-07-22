<?php

        class Teacher_model extends CI_Model{

            public function __contruct(){   

                $this->load->database();
            }

                //teacher registration
            public function registerTeacher($table,$data_form){

                return $this->db->insert($table,$data_form);
            }
             //login teacher
             public function login($table,$email,$password){
                $this->db->where('email',$email);
                $this->db->where('password',$password);
                $result=$this->db->get($table);
                if($result->num_rows()==1){
                    return $result->row(0)->id;
                }
                else{
                    return false;
                }
            } 

            //get all teachers
            public function getTeachers($table,$subject_id=FALSE,$group_id=FALSE){
                if($subject_id==FALSE && $group_id==FALSE){
                
                $query=$this->db->get($table);
                return $query->result_array();
                }
                if($subject_id==FALSE){
                    $this->db->where('group_id',$group_id);
                    $query=$this->db->get($table);
                    return $query->result_array();
                }
                $this->db->where('subject_id',$subject_id);
                $query=$this->db->get($table);
                return $query->result_array();
            }
            //get teacher data by id
            public function viewTeacher($table,$id){
               $query=$this->db->get_where($table,array('id'=>$id));
               return $query->row_array();

            }
            //update teacher
            public function updateTeacher($table,$data_form,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$data_form);
                return true;
            }
            
            //delete teacher
            public function deleteTeacher($table,$id){
                $this->db->where('id',$id);
                $this->db->delete($table);
                return true;
            }
            //make teacher active
            public function activeTeacher($table,$data_form,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$data_form);
                return true;
            }
             //make teacher inactive
             public function inactiveTeacher($table,$data_form,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$data_form);
                return true;
            }
            public function getTeacherData($table,$email){
                $query=$this->db->get_where($table,array('email'=>$email));
                return $query->row_array();
             }
        }
?>