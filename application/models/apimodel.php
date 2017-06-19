<?php
class Apimodel extends HFood_Model
{
	function __construct(){
		parent::__construct();
	}
	function insert_new_user($data){
		$this->db->insert("users",$data);
		return $this->db->insert_id();
	}
}
?>