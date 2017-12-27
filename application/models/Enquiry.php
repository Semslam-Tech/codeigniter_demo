<?php

/**
 * Created by IntelliJ IDEA.
 * User: Ibrahim Olanrewaju Abdulsemiu
 * Date: 09/10/2017
 * Time: 12:21
 */
class Enquiry extends CI_Model
{
	public function getStudentEnquiry($id){
		$query = $this->db->where('id',$id);
		$query = $this->db->get('enquiry');
		//$query = $this->db->query("SELECT * FROM enquiry");
		return $query->result();
	}

	public function insert_enquiry($data){
		$this->db->insert('enquiry',$data);
		return $insert_data =  $this->db->insert_id();// return last insert id
	}

	public function insert_edu_background($data){
		$this->db->insert('edu_background',$data);
	}

}
