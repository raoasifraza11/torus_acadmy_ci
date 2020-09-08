<?php
    
        class Subject_model extends CI_Model{

            public function __construct(){
                $this->load->database();
            }

            //show all subjects
            public function showSubjects($table){
                $query=$this->db->get($table);
                return $query->result_array();
            }
            //add subjects
            public function addSubjects($table,$data_form){
                return $this->db->insert($table,$data_form);
            }

        }
?>