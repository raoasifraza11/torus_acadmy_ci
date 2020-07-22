<?php   
    class Group_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getGroups($table){
            $this->db->join('teacher','teacher.id=groups.teacher_id');
            $query=$this->db->get($table);
            return $query->result_array();
        }

        public function addGroups($table,$data_form)
        {
            return $this->db->insert($table,$data_form);
        }
    }