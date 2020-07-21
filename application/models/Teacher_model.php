<?php

        class Teacher_model extends CI_Model{

            public function __contruct(){   

                $this->load->database();
            }

                //teacher registration
            public function registerTeacher($table,$data_form){

                return $this->db->insert($table,$data_form);
            }

            //get all teachers
            public function getTeachers($table,$subject_id=FALSE){
                if($subject_id==FALSE){
                
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
        }
?>