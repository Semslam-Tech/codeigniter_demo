<?php

/**
 * Created by IntelliJ IDEA.
 * User: Ibrahim Olanrewaju Abdulsemiu
 * Date: 13/10/2017
 * Time: 07:29
 */
class LoginControl extends CI_Controller{

	public function __construct(){
		parent::__construct();
		//load the model
		$this->load->model('Users');
	}


	public function login(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');

		if($this->form_validation->run() == FALSE){
			$data = array('errors'=> validation_errors());

			$this->session->set_flashdata($data);

			redirect('login');
		}else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->Users->login_user($username,$password);

			if($result != FALSE){
				$user_data = array(
					'user_id'=> $result[0]->id,
					'name'=> $result[0]->title.' '.$result[0]->first_name.' '.$result[0]->last_name,
					'username'=> $result[0]->username,
					'role'=> $result[0]->role,
					'logged_id'=> TRUE,
				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('success','You are now logged in');
				redirect('admin/dashboard');
			}
			$this->session->set_flashdata('errors','Incorrect login details');
			redirect('login');
		}

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
