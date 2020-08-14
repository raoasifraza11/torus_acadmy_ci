<?php

class Course_model extends CI_Model
{
    public function courseJoin()
    {
        $this->db->select('*');
        $this->db->from('course_type');
        $this->db->join('courses' , 'course_type.type_id = courses.c_id');
        $query = $this->db->get();
    }

    public function ProfessorJoin()
    {
        $this->db->select('*');
        $this->db->from('professors');
        $this->db->join('courses' , 'professors.p_id = courses.c_id');
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            echo $row->c_id.'<br>';
            echo $row->professor_name.'<br>';

        }
    }

    public function getAllCourses()
    {
        $query = $this->db->get('courses');

        if($query)
        {
            return $query->result();
        }
    }

    public function insertCourse($data)
    {
        $query = $this->db->insert('courses', $data);

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