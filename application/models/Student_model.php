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
    }