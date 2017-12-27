<?php

/**
 * Created by IntelliJ IDEA.
 * User: TRAVELDEN DEV
 * Date: 10/10/2017
 * Time: 14:30
 */
class Users extends CI_Model{

	public function login_user($username,$password){

		$this->db->where('username', $username);
		$result = $this->db->get('users');
		$db_password = $result->row(2)->password;
		echo $db_password;
		if(password_verify($password,$db_password)){
			return $result->result();
		}else{
			return false;
		}
	}

	public function create_user($image_path){

		$status = "Pending";
		$option = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('phone'),PASSWORD_BCRYPT,$option);

		$data = array(
			'title' => $this->input->post('title'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'username' => $this->input->post('username'),
			'image' => $image_path,
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'course' => $this->input->post('course'),
			'status' => $status,
			'password' => $encripted_pass,
			'role' => $this->input->post('role'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'marital_status' => $this->input->post('marital_status'),
		);
		$this->db->insert('users',$data);
		//return $insert_data;
		return $insert_data =  $this->db->insert_id();
	}


	public function get_users(){
		$where = "delete_at= 0 AND role='Supper_Admin' OR role='Admin'";
		$this->db->where($where);
		$query = $this->db->get('users');
		if($query->num_rows()>0){
			return $query->result();
		}

	}

	public function get_students(){
		$where = "delete_at= 0 AND role='Student'";
		$this->db->where($where);
		$query = $this->db->get('users');
		if($query->num_rows()>0){
			return $query->result();
		}

	}

	public function temporary_del($id,$query){
		$this->db->where('id',$id);
		$this->db->update('users',$query);
		return TRUE;
	}

	public function permanent_del($id){
		$this->db->where('id',$id);
		$this->db->delete('users');
		return TRUE;
	}

	public function get_user_info($id){
		$this->db->where('id',$id);
		$get_data = $this->db->get('users');
		return $get_data->row();
	}

	public function update_user($id){


		$data = array(
			'title' => $this->input->post('title'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'username' => $this->input->post('username'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender'),
			'status' => $this->input->post('status'),
			'role' => $this->input->post('role'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'marital_status' => $this->input->post('marital_status'),
		);

		$this->db->where('id',$id);
		$this->db->update('users',$data);
		return TRUE;
		//0032071448
	}
}
