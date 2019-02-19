<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_user(){
			$query = $this->db->get('users');
			return $query->result(); 
		}

		 public function add_user($user) 
		 {
	        $add_user_stored_proc = "CALL add_user(?, ?)";
	        $result = $this->db->query($add_user_stored_proc, $user);
	        if ($result !== NULL) {
	            return TRUE;
	        }
	        return FALSE;
   			 }


		public function getuser($users_id){
			$get_user_stored_proc = "CALL get_user(?, ?)";
			$query = $this->db->get_where('$get_user_stored_proc',array('users_id'=>$users_id));
			return $query->row_array();
		}

		public function update_user($user, $users_id){
			$update_user_stored_proc = "CALL update_user(?, ?)";
			$this->db->where('$update_user_stored_proc', $users_id);
			return $this->db->update('users', $user);
		}

		public function delete_user($users_id){
			$delete_user_stored_proc = "CALL delete_user(?)";
			$result=$this->db->query('$delete_user_stored_proc', array('users_id'=>$users_id));
		
		}	

	}
?>