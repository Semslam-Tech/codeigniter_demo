<?php

/**
 * Created by IntelliJ IDEA.
 * User: Ibrahim Olanrewaju Abdulsemiu
 * Date: 10/10/2017
 * Time: 13:20
 */
class UsersControl extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//load the model
		$this->load->model('Users');

		if(!$this->session->userdata('logged_id')){
			$this->session->set_flashdata('errors','You are not logged in');
			redirect('login');
		}

	}
	public function dashboard(){
		$data['title'] = "Admin Home Page";
		$data['nav'] = "active";
		$data['point'] = "dash";
		$this->load->view('authorize_pages/dashboard',$data);
	}

// personality test // we have to build trust in your code worker // you don't have to asserity
// you are to be flexibile // you have to be personal // listen to others //

	public function registration(){
		$data['title'] = "Staff Registration Form";
		$data['nav'] = "active";
		$data['point'] = "reg";
		$this->load->view('authorize_pages/users/registration',$data);
	}

	public function insert(){

		//uniqid(rand());

		// The term of the month, positive inflence, if we want succed is by what we see what we hear and what feel
		//
		$config =[
			"upload_path" => "./uploads/staffs",
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
		$this->form_validation->set_rules('role','Role','trim|required|min_length[5]');
		$this->form_validation->set_rules('gender','Gender','trim|required|min_length[3]');
		$this->form_validation->set_rules('reg[date_of_birth]','Date Of Birth','regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
		$this->form_validation->set_rules('marital_status','Marital Status','trim|required|min_length[4]');

		$this->form_validation->set_error_delimiters();

		if($this->form_validation->run() == FALSE){

			$data = array('errors'=> validation_errors());
			$this->session->set_flashdata($data);
			redirect('staff/registration');
		}else{
			$image_path = '';
			if($this->upload->do_upload('image')){
				$data = $this->input->post();
				$info = $this->upload->data();
				$image_path = base_url("uploads/staffs/".$info['raw_name'].$info['file_ext']);
				unset($data['submit']);
				/*echo '<pre>';
				print_r($info);
				echo '</pre>';
				echo $image_path;
				exit();*/
			}
			if($this->Users->create_user($image_path)){

				$this->session->set_flashdata('success','User as been register');
				redirect('staff/list');
			}else{

			}

		}


	}

	public function edit_user(){

		$this->form_validation->set_rules('title','Title','trim|required|min_length[3]');
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('username','Email','trim|required|min_length[5]');
		$this->form_validation->set_rules('phone','Phone','trim|required|min_length[6]');
		$this->form_validation->set_rules('role','Role','trim|required|min_length[5]');
		$this->form_validation->set_rules('gender','Gender','trim|required|min_length[3]');
		$this->form_validation->set_rules('status','Status','trim|required|min_length[3]');
		$this->form_validation->set_rules('reg[date_of_birth]','Date Of Birth','regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');
		$this->form_validation->set_rules('marital_status','Marital Status','trim|required|min_length[4]');

		if($this->form_validation->run() == FALSE){

			$data = array('errors'=> validation_errors());

			$this->session->set_flashdata($data);
			redirect('staff/edit/'.$this->input->post('id'));
		}
		if($this->Users->update_user($this->input->post('id'))){
			$this->session->set_flashdata('success','User as been register');
			redirect('staff/list');
		}else{

		}

	}

	public function temporary_delete($id){

		$query = array(
			'delete_at' => 1,
			'delete_date' => date("Y/m/d"),
		);

		if($this->Users->temporary_del($id,$query)){
			$this->session->set_flashdata('success','Staff record as been delete temporarily');
			redirect('staff/list');
		}
		$this->session->set_flashdata('errors','Staff record can not be delete');
		redirect('staff/list');

	}

	public function delete_user($id){
		// deleting image from the folder

		/*if(file_exists('uploads/staffs')){
			unlike('uploads/staffs');
		}*/
		$this->Users->permanent_del($id);
		$this->session->set_flashdata('errors','Staff record as been delete temporarily');
		redirect('staff/list');
	}

	public function user_list(){
		$users_data['title'] = "Staff Table";
		$users_data['point'] = "users_list";
		$users_data['users'] = $this->Users->get_users();
		$this->load->view('authorize_pages/users/user_list',$users_data);
	}

	public function edit_user_form($id){
		$edit_u['title'] = "Staff Update";
		$edit_u['point'] = "users_edit";
		$edit_u['edit_user'] = $this->Users->get_user_info($id);
		$this->load->view('authorize_pages/users/user_edit',$edit_u);

	}

	public function  user_profile($id){
		$edit_user['title'] = "Staff Profile";
		$edit_user['point'] = "users_profile";
		$edit_user['edit_user'] = $this->Users->get_user_info($id);
		$this->load->view('authorize_pages/users/user_profile',$edit_user);
	}

	//http://preview.themeforest.net/item/citytours-hotel-tour-booking-wordpress-theme/full_screen_preview/13181652

}
