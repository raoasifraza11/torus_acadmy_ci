<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 8/3/2019
 * Time: 6:21 PM
 */
class Schoolroom_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }


	public function get_enrolledstudents($data){
		$this->db->where("room_id" ,$data["room_id"]);
		$this->db->join('users', 'users.id = school_room_students.student_id');
		return $this->db->get("school_room_students")->result_array();
	}
	public function count_key_workers($user_id){
		$this->db->where('school_id', $user_id);
		$this->db->where('role_id',2);
		return $this->db->get("users")->num_rows();
	}
	public function get_students($user_id){
		$this->db->where('school_id', $user_id);
		$this->db->where('role_id',3);
		return $this->db->get("users")->result();
	}


}
