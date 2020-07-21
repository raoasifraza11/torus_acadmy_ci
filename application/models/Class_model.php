<?php

    class Class_model extends CI_Model{

            public function __construct(){
                $this->load->database();
            }

            public function getClasses($table){
                $query=$this->db->get($table);
                return $query->result_array();
            }

    }