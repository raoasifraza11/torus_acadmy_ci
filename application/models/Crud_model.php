<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Ahmad khan
 * Date: 8/3/2019
 * Time: 6:21 PM
 */
class Crud_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }


    public function insert($table, $data){

        date_default_timezone_set('Asia/Karachi');
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
//		$this->db->set('id', 'UUID()', FALSE); use of uuid in ci
         $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function get_all_data($table){
        return $this->db->get($table)->result();
    }

    public function get($table, $id){
        $this->db->where('id', $id);
        return $this->db->get($table)->row();
    }

    public function update($table, $id , $data){
        $this->db->where('id', $id);
        return $this->db->update($table,$data);
    }

    public function delete($table, $id){
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }


    //Todo: functions by user_id
    public function get_all_data_by_user_id($table,$user_id){
        $this->db->where('user_id', $user_id);
        return $this->db->get($table)->result();
    }

    public function get_by_user_id($table,$user_id){
        $this->db->where('user_id',$user_id);
        return $this->db->get($table)->row();
    }

    public function update_by_user_id($table, $user_id , $data){
        $this->db->where('user_id', $user_id);
        return $this->db->update($table,$data);
    }

    public function delete_by_user_id($table, $user_id){
        $this->db->where('user_id', $user_id);
        return $this->db->delete($table);
    }


    public function isEmailExist($email){
        $this->db->where('email',$email );
        return $this->db->get('users')->row();
    }

	public function isEmailverified($email){
		$this->db->where('email',$email );
		$this->db->where('is_verified',1 );
		return $this->db->get('users')->row();
	}
	function  verifyaccount($hash){
		$this->db->set('is_verified','1');
		$this->db->where('token',$hash);
		return  $this->db->update('users');
	}



    public function isPayPalEmailExist($email){
        $this->db->where('email',$email );
        return $this->db->get('accounts')->row();
    }

    public function isEmailVarified($email){
        $this->db->where('email',$email );
        $this->db->where('is_verified',1 );
        return $this->db->get('users')->row();
    }


    public function isAccountApproved($email){
        $this->db->where('email',$email );
        $this->db->where('status',0 );
        return $this->db->get('users')->row();
    }

    public function isDataTableColumnExist($table,$user_id,$column){
        $this->db->where('user_id',$user_id );
        $this->db->where($column .'!= ',null);
        return $this->db->get($table)->row();
    }

    public function isSameDataTableColumnExist($table,$user_id,$column,$data){
        $this->db->where('user_id',$user_id );
        $this->db->where($column ,$data);
        return $this->db->get($table)->row();
    }

    public function get_all_data_by_column_id($table,$column,$data){
        $this->db->where($column ,$data);
        return $this->db->get($table)->result();
    }

    public function get_all_data_by_column_id_array($table,$column,$data){
        $this->db->where($column ,$data);
        return $this->db->get($table)->result_array();
    }

    public function get_unread_message_count($id){
        $this->db->where('receiver_id', $id);
        $this->db->where('is_seen', 0);
        return $this->db->get("chats")->num_rows();;
    }


    public function updateDataToTableWithRowId($table,$user_id,$row_id,$data){
        $this->db->where('user_id',$user_id );
        $this->db->where('id',$row_id);
        $this->db->update($table,$data);
        return $row_id;
    }

    public function updateDataToTableWithColumnId($table,$column,$value,$data){
    	$this->db->where($column,$value);
        return $this->db->update($table,$data);
    }
	public function getDataToTableWithColumnId($table,$column,$value){
		$this->db->where($column,$value);
		return $this->db->get($table)->row();
	}


    public function deleteDataToTableWithColumnId($table,$column,$value){
//        var_dump( $table,$column,$value,$data);
//        die();
        $this->db->where($column,$value);
        return $this->db->delete($table);
    }





    //update user hash
    public function update_hash($email, $hash)
    {
        $this->db->where('email', $email);
        $this->db->set('token', $hash);
        $this->db->update('users');
        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function checkpassword($email)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_user($email, $hash)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('token', $hash);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
    public function passwordupdate($password, $user_id)
    {
        $this->db->set('password', $password);
        $this->db->set('token', md5(rand(0, 1000)));
        $this->db->where('id', $user_id);
        $this->db->update('users');
        return true;
    }


    public  function getcities(){
        $this->db->select('city');
        $this->db->group_by('city');
        $query= $this->db->get('user_details')->result();
        if(!empty($query)){
            return $query;
        }else{
            return false;
        }
    }

    public  function getfoodtypes(){
        $this->db->select('meal_type');
        $this->db->group_by('meal_type');
        $query= $this->db->get('dining_experiences')->result();
        if(!empty($query)){
            return $query;
        }else{
            return false;
        }
    }


    public  function getcuisines(){
        $this->db->select('cuisine');
        $this->db->group_by('cuisine');
        $query= $this->db->get('dining_experiences')->result();
        if(!empty($query)){
            return $query;
        }else{
            return false;
        }
    }


    public function search($keyword)
    {

        if (array_key_exists("date", $keyword)){
            if ($keyword["date"]) {
                $date = date("Y-m-d", strtotime($keyword['date']));
            }
    }
        $this->db->select('*,dining_experiences.id,user_details.rating,host_details.status');
        $this->db->from('dining_experiences');
        $this->db->where('dining_experiences.title !=', "");
        $this->db->join('users', 'users.id = dining_experiences.user_id');
        $this->db->join('user_details', 'user_details.user_id = dining_experiences.user_id' );
        $this->db->join('host_details', 'host_details.user_id = dining_experiences.user_id' );
        if (array_key_exists("text", $keyword)){
            if ($keyword["text"]) {
                $this->db->like('user_details.city', $keyword["text"]);
                $this->db->or_like('dining_experiences.title', $keyword["text"]);
                $this->db->or_like('dining_experiences.meal_type', $keyword["text"]);
                $this->db->or_like('dining_experiences.cuisine', $keyword["text"]);
//                $this->db->where("host_details.status !=", 0);
            }
        }
        if (array_key_exists("number", $keyword)) {
            if ($keyword["number"]) {
                $this->db->where('dining_experiences.available_seats >=', $keyword["number"]);
            }
        }
//        $this->db->or_like('user_details.city', $keyword["text"]);
//        $this->db->or_like('pack.title', $keyword["text"]);
        if (array_key_exists("date", $keyword)) {
            if ($keyword["date"]) {
                $this->db->where('DATE(dining_experiences.date)', $date);
            }
        }

        $current_d = date('Y-m-d');
        $this->db->where('DATE(dining_experiences.date) >=', $current_d);
        $this->db->group_by('dining_experiences.id');
        $this->db->where("host_details.status !=", 0);

        $query = $this->db->get();
//var_dump($this->db->last_query());
//die();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getsearchedfoodtypes($keyword)
    {

        if (array_key_exists("date", $keyword)){
            if ($keyword["date"]) {
                $date = date("Y-m-d", strtotime($keyword['date']));
            }
    }
        $this->db->select('meal_type');
        $this->db->group_by('meal_type');
        $this->db->from('dining_experiences');
        $this->db->where('dining_experiences.title !=', "");
        $this->db->join('users', 'users.id = dining_experiences.user_id');
        $this->db->join('user_details', 'user_details.user_id = dining_experiences.user_id');
        if (array_key_exists("text", $keyword)) {
            if ($keyword["text"]) {
                $this->db->like('user_details.city', $keyword["text"]);
                $this->db->or_like('dining_experiences.title', $keyword["text"]);
                $this->db->or_like('dining_experiences.meal_type', $keyword["text"]);
                $this->db->or_like('dining_experiences.cuisine', $keyword["text"]);
            }
        }
        if (array_key_exists("number", $keyword)) {
            if ($keyword["number"]) {
                $this->db->where('dining_experiences.available_seats >=', $keyword["number"]);
            }
        }
//        $this->db->or_like('user_details.city', $keyword["text"]);
//        $this->db->or_like('pack.title', $keyword["text"]);
        if (array_key_exists("date", $keyword)) {
            if ($keyword["date"]) {
                $this->db->where('DATE(dining_experiences.date)', $date);
            }
        }
        $current_d = date('Y-m-d');
        $this->db->where('DATE(dining_experiences.date) >=', $current_d);

        $this->db->group_by('dining_experiences.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function getsearchedCuisine($keyword)
    {

        if (array_key_exists("date", $keyword)){
            if ($keyword["date"]) {
                $date = date("Y-m-d", strtotime($keyword['date']));
            }
        }
        $this->db->select('cuisine');
        $this->db->group_by('meal_type');
        $this->db->from('dining_experiences');
        $this->db->where('dining_experiences.title !=', "");
        $this->db->join('users', 'users.id = dining_experiences.user_id');
        $this->db->join('user_details', 'user_details.user_id = dining_experiences.user_id');
        if (array_key_exists("text", $keyword)) {
            if ($keyword["text"]) {
                $this->db->like('user_details.city', $keyword["text"]);
                $this->db->or_like('dining_experiences.title', $keyword["text"]);
                $this->db->or_like('dining_experiences.meal_type', $keyword["text"]);
                $this->db->or_like('dining_experiences.cuisine', $keyword["text"]);
            }
        }
        if (array_key_exists("number", $keyword)) {
            if ($keyword["number"]) {
                $this->db->where('dining_experiences.available_seats >=', $keyword["number"]);
            }
        }
//        $this->db->or_like('user_details.city', $keyword["text"]);
//        $this->db->or_like('pack.title', $keyword["text"]);
        if (array_key_exists("date", $keyword)) {
            if ($keyword["date"]) {
                $this->db->where('DATE(dining_experiences.date)', $date);
            }
        }

        $current_d = date('Y-m-d');
//        var_dump($current_d);
//        die();
        $this->db->where('DATE(dining_experiences.date) >=', $current_d);
        $this->db->group_by('dining_experiences.id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public function get_chat($user_ids)
    {
        $this->db->select('*');
        $this->db->from('chats');
        $this->db->where_in('chats.sender_id', $user_ids);
        $this->db->where_in('chats.receiver_id', $user_ids);
        $this->db->group_by('id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
  //get receiver user message
    public function get_receiver_user_in_contact($user_ids)
    {
        $this->db->select('*,users.id');
        $this->db->from('chats');
        $this->db->where_in('chats.sender_id', $user_ids);
        $this->db->join('users','users.id=chats.receiver_id');
        $this->db->join('user_details','user_details.user_id =users.id','left');
        $this->db->group_by('chats.receiver_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    //get sender user message
    public function get_sender_user_in_contact($user_ids)
    {
        $this->db->select('*,users.id');
        $this->db->from('chats');
        $this->db->where_in('chats.receiver_id', $user_ids);
        $this->db->join('users','users.id=chats.sender_id');
        $this->db->join('user_details','user_details.user_id =users.id','left');
        $this->db->group_by('chats.sender_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function read_message($sender_id,$receiver_id)
    {
        $this->db->select('*');
        $this->db->from('chats');
        $this->db->where('chats.receiver_id', $receiver_id);
        $this->db->where('chats.sender_id', $sender_id);
        $this->db->set('is_seen', 1);
        $query = $this->db->update();
        return true;
    }

    public function get_users_chat_at_point($sender_id,$receiver_id)
    {
        $this->db->select('chats.id,chats.at_point');
        $this->db->from('chats');
        $this->db->where('chats.receiver_id', $receiver_id);
        $this->db->where('chats.sender_id', $sender_id);
        $this->db->where('chats.at_point !=', "");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

  public function get_user_details_where_in($user_ids){
      $this->db->select('*,users.id');
      $this->db->from('users');
      $this->db->where_in('users.id', $user_ids);
      $this->db->group_by('users.id');

      $query = $this->db->get();
      if ($query->num_rows() > 0) {
          return $query->result_array();
      } else {
          return false;
      }
  }

    public function get_experiece_orders_with_user($table,$column,$data){
        $this->db->select('*,orders.user_id');
        $this->db->from($table);
        $this->db->where($column ,$data);
        $this->db->join('users','users.id=orders.user_id');
        $this->db->join('user_details','user_details.user_id=orders.user_id',"left");
        return $this->db->get()->result();
    }

    public function get_dinner_experiece_with_user_id($user_id){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where("orders.user_id" ,$user_id);
        $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
        $this->db->group_by('orders.dining_experience_id');

        //$this->db->order_by('experience_seats.experience_id', 'asc');
        return $this->db->get()->result();
    }

    public function get_dinner_orders($user_id){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where("orders.user_id" ,$user_id);
        //$this->db->order_by('experience_seats.experience_id', 'asc');
        return $this->db->get()->result();
    }

    public function get_dinner_experience_orders($user_id,$exp_id){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where("orders.user_id" ,$user_id);
        $this->db->where("orders.dining_experience_id" ,$exp_id);
        $this->db->join('users','users.id=orders.user_id');
        $this->db->join('user_details','user_details.user_id=orders.user_id',"left");
        //$this->db->order_by('experience_seats.experience_id', 'asc');
        return $this->db->get()->result();
    }


//review section
public  function get_review($exp_id,$user_id){
    $this->db->select('*');
    $this->db->from('reviews');
    $this->db->where('reviews.dine_id', $user_id);
    $this->db->where('reviews.dining_experience_id', $exp_id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
        return $query->row();
    } else {
        return false;
    }
}


    public  function get_reviews($user_id){
        $this->db->select('*');
        $this->db->from('reviews');
        $this->db->where('reviews.host_id', $user_id);
        $this->db->join('users','users.id=reviews.dine_id',"left");
        $this->db->join('user_details','user_details.user_id=reviews.dine_id',"left");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    public  function get_experience_reviews($dining_experience_id){
        $this->db->select('*');
        $this->db->from('reviews');
        $this->db->where('reviews.dining_experience_id', $dining_experience_id);
        $this->db->join('users','users.id=reviews.dine_id',"left");
        $this->db->join('user_details','user_details.user_id=reviews.dine_id',"left");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    //function by user_id
    public function get_all_dinner_order_of_specific_host($host_id,$dinner_id){
        $this->db->select('*,dining_experiences.id,orders.id as order_id');
        $this->db->from('dining_experiences');
        $this->db->where('dining_experiences.user_id', $host_id);
        $this->db->join('orders','dining_experiences.id=orders.dining_experience_id');
        $this->db->join('users','users.id=dining_experiences.user_id',"left");
        $this->db->where('orders.user_id', $dinner_id);
//       var_dump($this->db->get()->result());
//       die();
        return  $this->db->get()->result();

    }




 public  function get_earnings($user_id){
//     $query = $this->db->query('select year(date) as year, month(date) as month, sum(paid) as total_amount from amount_table group by year(date), month(date)');
     $this->db->select('year(orders.created_at) as year, month(orders.created_at) as month, sum(orders.paid_amount) as total');
     $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
     $this->db->where('dining_experiences.user_id', $user_id);
     $this->db->group_by('month(orders.created_at)');
     $query = $this->db->get("orders");
     if ($query->num_rows() > 0) {
         return $query->result();
     } else {
         return false;
     }
 }


    public  function get_total_earnings_year($user_id){
        $this->db->select('year(orders.created_at) as year,sum(orders.paid_amount) as total');
        $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
        $this->db->where('dining_experiences.user_id', $user_id);
        $this->db->where('year(orders.created_at)',  date("Y"));
        $this->db->group_by('year(orders.created_at)');
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public  function get_expected_earnings($user_id){
        $this->db->select('year(orders.created_at) as year,sum(orders.paid_amount) as total');
        $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
        $this->db->where('dining_experiences.user_id', $user_id);
        $this->db->where('orders.payout_status', 0);
        $this->db->where('year(orders.created_at)',  date("Y"));
        $this->db->group_by('year(orders.created_at)');
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
//yearly earnigns
    public  function get_payout_earnings($user_id){
        $this->db->select('year(orders.created_at) as year,sum(orders.paid_amount) as total');
        $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
        $this->db->where('dining_experiences.user_id', $user_id);
        $this->db->where('orders.payout_status', 1);
        $this->db->where('year(orders.created_at)',  date("Y"));
        $this->db->group_by('year(orders.created_at)');
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
//monthly earnings
    public  function get_payout_earnings_monthly($user_id){
        $this->db->select('month(orders.created_at) as month,sum(orders.paid_amount) as total');
//        $this->db->from('orders');
        $this->db->join('dining_experiences','dining_experiences.id=orders.dining_experience_id');
        $this->db->where('dining_experiences.user_id', $user_id);
        $this->db->where('orders.payout_status', 1);
        $this->db->where('month(orders.created_at)',  date("m"));
        $this->db->group_by('month(orders.created_at)');
        $query = $this->db->get("orders");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public  function get_user_avg_review($user_id){
        $this->db->select('AVG(rating) as avg_ratting');
        $this->db->from('reviews');
        $this->db->where('reviews.host_id', $user_id);
//        $this->db->join('users','users.id=reviews.dine_id',"left");
//        $this->db->join('user_details','user_details.user_id=reviews.dine_id',"left");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public  function get_exp_avg_review($exp_id){
        $this->db->select('AVG(rating) as avg_ratting');
        $this->db->from('reviews');
        $this->db->where('reviews.dining_experience_id', $exp_id);
//        $this->db->join('users','users.id=reviews.dine_id',"left");
//        $this->db->join('user_details','user_details.user_id=reviews.dine_id',"left");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



	public function get_payments(){
//		$this->db->where($column ,$data);
		$this->db->select('AVG(rating) as avg_ratting');
		$this->db->from('student_enrolled_courses');
		$this->db->join('users','users.id=student_enrolled_courses.student_id');
		return $this->db->get("student_enrolled_courses")->result();
	}


}
