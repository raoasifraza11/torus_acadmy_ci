<?php

class Type_model extends CI_Model
{
    public function getAllTypes()
    {
        $query = $this->db->get('course_type');

        if($query)
        {
            return $query->result();
        }
    }

    public function insertType($data)
    {
        $query = $this->db->insert('course_type', $data);

        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}