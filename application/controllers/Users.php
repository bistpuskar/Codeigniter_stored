<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		 $data['users'] = $this->users_model->get_user();
		 $this->load->view('user_list.php', $data);
		// if ($this->input->post('submit')) {
  //           $this->form_validation->set_rules('first_name', 'firstname', 'trim|required');
  //           $this->form_validation->set_rules('last_name', 'lastname', 'trim|required');
  //           if ($this->form_validation->run() !== FALSE) {
  //               $result = $this->usermodel->add_user($this->input->post('first_name'), $this->input->post('last_name'));
  //               $data['success'] = $result;
  //               $this->load->view('user_list', $data);
  //           } else {
  //               $this->load->view('user_list');
  //           }
  //       } else {
  //           $this->load->view('user_list');
  //       }

	}

	 public function addnew(){
	 	$this->load->view('addform.php');
	 }

	public function add_user(){
	 	$user['first_name'] = $this->input->post('first_name');
		$user['last_name'] = $this->input->post('last_name');
	 	$query = $this->users_model->add_user($user);

	 	if($query){
 		header('location:'.base_url().$this->index());
	 	}

	 }

	public function edit($users_id){
		$data['user'] = $this->users_model->getuser($users_id);
		$this->load->view('editform', $data);
	}

	public function update($users_id){
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');

		$query = $this->users_model->update_user($users_id,$first_name,$last_name);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($users_id){
		$query = $this->users_model->delete_user($users_id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>