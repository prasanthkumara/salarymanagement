<?php
class User extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


	public function get_users(){
		$query=$this->db->get("users");
		var_dump($query->result_array());
	}
}
?>