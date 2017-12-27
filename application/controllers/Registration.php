<?php

/**
 * Created by IntelliJ IDEA.
 * User: Ibrahim Olanrewaju Abdulsemiu
 * Date: 09/10/2017
 * Time: 11:13
 */
class Registration extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//load the model
		$this->load->model('Enquiry');

	}

	public function index(){
		$date['form_view'] = "home_view";
		$date['title'] = "Student Enquiry Form!!";
		$date['nav'] = "nav-active";
		$this->load->view('layouts/main',$date);
	}

	public function enquiry(){

		$date['title'] = "Student Enquiry Form!!";
		//$date['result'] = $this->Enquiry->getStudentEnquiry($id);
		$this->load->view('enquiry_form',$date);
	}

	public function enquiry_insert(){

		$this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|min_length[5]');
		$this->form_validation->set_rules('phone','Phone','trim|required|min_length[6]');
		$this->form_validation->set_rules('state','State','trim|required|min_length[3]');
		$this->form_validation->set_rules('address','Address','trim|required|min_length[3]');
		$this->form_validation->set_rules('nationality','Nationality','trim|required|min_length[3]');
		$this->form_validation->set_rules('course','Course','trim|required|min_length[1]');
		$this->form_validation->set_rules('reg[date_of_birth]','Date Of Birth','regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');

		if($this->form_validation->run() == FALSE) {

			$data = array('errors' => validation_errors());
			$this->session->set_flashdata($data);
			echo '<h1>No Record found</h1>';
		}else{
			$status = "Pending";
			$option = ['cost'=> 12];
			$encripted_pass = password_hash($this->input->post('phone'),PASSWORD_BCRYPT,$option);
			$data = array(
				'title' => $this->input->post('title'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'state' => $this->input->post('state'),
				'course' => $this->input->post('course'),
				'nationality' => $this->input->post('nationality'),
				'status' => $status,
				'password' => $encripted_pass,
				'date_of_birth' => $this->input->post('date_of_birth'),
				'address' => $this->input->post('address'),
			);
			$id = $this->Enquiry->insert_enquiry($data);
			$edu_data = array();
			for($i = 0; $i < count($this->input->post('school_name'));$i++){
				$edu_data[$i] = array(
					'enquiry_id' =>  $id,
					'school_name' =>  $this->input->post('school_name')[$i],
					'programme' =>  $this->input->post('programme')[$i],
					'start_date' =>  $this->input->post('start_date')[$i],
					'end_date' =>  $this->input->post('end_date')[$i],
				);
			}

			echo '<pre>';
			print_r($data);
			echo '</pre>';
			echo '<br>';
			echo '<pre>';
			print_r($edu_data);
			echo '</pre>';
			foreach ($edu_data as $edu){
				$this->Enquiry->insert_edu_background($edu);
			}

			//$this->session->set_flashdata('success','User as been register');
			//redirect('staff/list');
		}
	}


	public function login_form(){
		$data['title'] = "LAA Login Form";
		$data['nav'] = "nav-active";
		$this->load->view('authorize_pages/users/login',$data);
	}

	public function insert(){

		echo $this->input->post('email');

		$this->form_validation->set_rules('email','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[5]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data = array('errors'=> validation_errors());
			echo $data;
			//$this->session->set_flashdata($data);

		}

		/*redirect('enquiry/table');*/
	}

}
