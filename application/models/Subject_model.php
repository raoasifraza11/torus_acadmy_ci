<?php
    
        class Subject_model extends CI_Model{

            public function __construct(){
                $this->load->database();
            }

            //show all subjects
            public function showSubjects($table,$class_id=FALSE){
                if($class_id==FALSE){
                $query=$this->db->get($table);
                return $query->result_array();
                }
                $this->db->where('class_id',$class_id);
                $this->db->order_by('name','ASC');
                $query=$this->db->get($table);
                $output ='<option value=" ">Select Subejcts</option>';
               
                foreach($query->result() as $row){
                    $output .='<option value="'.$row->id.'">'.$row->name.'</option>';
                 
                }
                return $output;

            }
            //add subjects
            public function addSubjects($table,$data_form){
                return $this->db->insert($table,$data_form);
            }
              
            }

        
?>