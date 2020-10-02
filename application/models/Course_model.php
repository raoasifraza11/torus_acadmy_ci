<?php

class Course_model extends CI_Model
{

	public function getAllCourses(){
		$this->db->select('*,teacher_class_course.id,classes.name as class_name,class_course.name');
		$this->db->from("teacher_class_course");
		$this->db->join('classes', 'teacher_class_course.class_id = classes.id',"left");
		$this->db->join('class_course','teacher_class_course.id = class_course.id',"left");
		$this->db->join('users','teacher_class_course.teacher_id = users.id',"left");
		return $this->db->get()->result();
	}


	public function getCourse($id){
		$this->db->select('*,teacher_class_course.id,classes.name as class_name,class_course.name');
		$this->db->from("teacher_class_course");
		$this->db->where("teacher_class_course.id",$id);
		$this->db->join('classes', 'teacher_class_course.class_id = classes.id',"left");
		$this->db->join('class_course','teacher_class_course.id = class_course.id',"left");
		$this->db->join('users','teacher_class_course.teacher_id = users.id',"left");
		return $this->db->get()->row();
	}

}
