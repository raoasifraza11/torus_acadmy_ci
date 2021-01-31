<?php

class Professor_model extends CI_Model
{
	public function courses($data,$teacher_id,$table="class_course",$column="class_course.class_id"){
		$this->db->select("*,class_course.id");
		$this->db->where($column ,$data);
		return $this->db->get($table)->result();
	}

	public function teacher_courses($data,$teacher_id,$table="teacher_class_course",$column="teacher_class_course.class_id"){
		$this->db->select("*");
		$this->db->where($column ,$data);
		$this->db->where("teacher_class_course.teacher_id" ,$teacher_id);
		$t_c = $this->db->get($table)->result();
		$t_cources=null;

		foreach ($t_c as $c){
			$t_cources[]=$c->course_id;
		}
		return $t_cources;
	}
}
