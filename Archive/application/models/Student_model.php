<?php   

    class Student_model extends CI_Model{

            public function __construct(){
                $this->load->database();
            }

                //student registration
            public function registerStudent($table,$form_data)
            {
                return $this->db->insert($table,$form_data);
                
                
            }
             //login student
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
            //get students
            public function getStudents($table){
                    $query=$this->db->get($table);
                    return $query->result_array();
              
            }

            //view student
            public function viewStudent($id,$table){
                $query=$this->db->get_where($table,array('id'=>$id));
                return $query->row_array();
            }

            //update student
            public function updateStudent($table,$form_data,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$form_data);
                return true;
            }

            //delete student
            public function deleteStudent($table,$id){
                $this->db->where('id',$id);
                $this->db->delete($table);
                return true;
                
            }
            //active student
            public function activeStudent($table,$form_data,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$form_data);
                return true;
                
            }
             //active student
             public function inactiveStudent($table,$form_data,$id){
                $this->db->where('id',$id);
                $this->db->update($table,$form_data);
                return true;
                
            }

           
    }