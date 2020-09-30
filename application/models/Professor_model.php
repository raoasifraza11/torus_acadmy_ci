<?php

class Professor_model extends CI_Model
{
	public function courses($data,$table="class_course",$column="class_course.class_id"){
		$this->db->select("*,class_course.id,teacher_class_course.course_id as selected");
		$this->db->where($column ,$data);
		$this->db->join('teacher_class_course', 'teacher_class_course.course_id = class_course.id',"left");
		return $this->db->get($table)->result();
	}
}
