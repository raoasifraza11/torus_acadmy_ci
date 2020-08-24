<?php

class Course_model extends CI_Model
{
    public function courseTypeJoin()
    {
        $this->db->select('*');
        $this->db->from('course_type');
        $this->db->join('courses' , 'course_type.id = courses.course_type_id');
        $query = $this->db->get();
    }

    public function ProfessorJoin()
    {
        $this->db->select('*');
        $this->db->from('professors');
        $this->db->join('courses' , 'professors.id = courses.professor_id');
        $query = $this->db->get();
        foreach ($query->result() as $row)
        {
            echo $row->course_type_id.'<br>';
            echo $row->professor_id.'<br>';

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