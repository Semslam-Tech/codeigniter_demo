<?php

/**
 * Created by IntelliJ IDEA.
 * User:  Ibrahim Olanrewaju Abdulsemiu
 * Date: 18/10/2017
 * Time: 09:31
 */
class StudentControl extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Users');
		$this->load->model('Enquiry');

		if(!$this->session->userdata('logged_id')){
			$this->session->set_flashdata('errors','You are not logged in');
			redirect('login');
		}

	}

	public function index(){
		$date['point'] = "std_form";
		$date['title'] = "New Student Admission Form!!";
		$date['nav'] = "nav-active";
		$this->load->view('authorize_pages/students/create',$date);
	}

	public function std_form(){

	}

	public function std_add(){

		$config =[
			"upload_path" => "./uploads/students",
			"allowed_types" => "gif|png|jpg|jppeg",
			"allowed_types" => "gif|png|jpg|jppeg",
			"encrypt_name" => TRUE,
		];

		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters();

		$this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('username','Email','trim|required|min_length[5]');
		$this->form_validation->set_rules('phone','Phone','trim|required|min_length[6]');
		$this->form_validation->set_rules('course','Course','trim|required|min_length[1]');
		$this->form_validation->set_rules('role','Role','trim|required|min_length[5]');
		$this->form_validation->set_rules('gender','Gender','trim|required|min_length[3]');
		$this->form_validation->set_rules('reg[date_of_birth]','Date Of Birth','regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
		$this->form_validation->set_rules('marital_status','Marital Status','trim|required|min_length[4]');

		$this->form_validation->set_error_delimiters();

		if($this->form_validation->run() == FALSE){

			$data = array('errors'=> validation_errors());
			$this->session->set_flashdata($data);
			//redirect('student');
		}else{
			$image_path = '';
			if($this->upload->do_upload('image')){
				$data = $this->input->post();
				$info = $this->upload->data();
				$image_path = base_url("uploads/students/".$info['raw_name'].$info['file_ext']);
				//unset($data['submit']);
				echo '<pre>';
				print_r($info);
				echo '</pre>';
				echo $image_path;
				//exit();
			}

				$id = $this->Users->create_user($image_path);
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
				//$this->session->set_flashdata('success','Student admission registration as been saved!!');
				//redirect('student');

		}
	}

	public function std_list(){
		$std_data['title'] = "Students List";
		$std_data['point'] = "std_list";
		$std_data['users'] = $this->Users->get_students();
		$this->load->view('authorize_pages/students/list',$std_data);
	}

	public function std_edit(){}

	public function std_view(){}

	public function std_delete(){}
}
