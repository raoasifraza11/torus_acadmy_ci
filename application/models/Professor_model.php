<?php

class Professor_model extends CI_Model
{
    public function getAllProfessors()
    {
        $query = $this->db->get('professors');

        if($query)
        {
            return $query->result();
        }
    }

    public function insertProfessor($data)
    {
        $query = $this->db->insert('professors', $data);
        

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