<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 8/3/2019
 * Time: 6:21 PM
 */
class Childminder_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

  public function get_teachers($school_id){
	  $this->db->select('*');
	  $this->db->from('school_user_details');
	  $this->db->where('school_role_id', 1);
	  $this->db->join('users', 'users.id = school_user_details.user_id');
	  $this->db->where('users.school_id', $school_id);

	  $query = $this->db->get();
	  if ($query->num_rows() > 0) {
		  return $query->result();
	  } else {
		  return false;
	  }


  }


	public function get_teacher_room($school_id){
		$this->db->select('*,school_rooms.id');
		$this->db->from('school_rooms');
		$this->db->where('school_rooms.school_id', $school_id);
		$this->db->join('users', 'users.id = school_rooms.teacher_id');
		$this->db->where('users.school_id', $school_id);

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}


	}


	public function get_key_workers($user_id){
		$this->db->where('school_id', $user_id);
		$this->db->where('role_id',2);
		return $this->db->get("users")->result();
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
