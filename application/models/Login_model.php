<?php
	class Login_model extends CI_Model{
		public function proseslogin($user,$pass){
			$this->db->where('user_user',$user);
			$this->db->where('user_pass',$pass);
			return $this->db->get('user')->row();
		}
	}
?>