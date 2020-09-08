<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function getAllUsers()
    {
        $query = $this->db->get('users');

        if($query)
        {
           return $query->result();

        }
    }

    public function login($email , $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users');

        var_dump($query); die();

        if($query->num_rows()){
            return $query->row();
        }

        return false;
    }

    public function getTeacherDetails()
    {
        $query = $this->db->get('teacher_info');

        if($query)
        {
           return $query->result();

        }
    }
    public function getStudentDetails()
    {
        $query = $this->db->get('student_info');

        if($query)
        {
           return $query->result();

        }
    }

    public function insert($userdata)
    {
        $query = $this->db->insert('users', $userdata);
        $user_id = $this->db->insert_id();
        //var_dump($user_id);

        if($query)
        {
            return $user_id;
        }
        else
        {
            return false;
        }

    }

    public function updateStudentInfo($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('users', $data);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function insertStudentInfo($userdata)
    {
        $query = $this->db->insert('student_info', $userdata);

        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    // public function current_user()
    // {
    //     $query = $this->db->get('users');
    //     //$user_id['data'] = $query->result();
    //     $user_id = $this->db->insert_id();
    //     //var_dump($user_id['data']); die();
    //     //return $query->result();
    // //    foreach($query->result() as $row)
    // //    {
    // //        $user_id[] = $row->id;
    // //    }
    //    //var_dump(-$user_id); die();
    // }


   

    public function updateProfilePhoto($user_id , $Img)
    {
        $this->db->where('id' , $user_id);
        $this->db->update('users' , $Img);
    }



    public function getUser($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        if($query)
        {
            return $query->row();
        }

    }

    public function insertTeacherInfo($userdata)
    {
        $query = $this->db->insert('teacher_info', $userdata);
        //$user_id = $this->db->insert_id();
        //var_dump($user_id);

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

?>