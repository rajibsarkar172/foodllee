<?php
class View_test_apimodel extends HFood_Model
{
	function __construct() {
        parent::__construct();
    }
	
	function get_district_list(){
		$this->db->select('id,title');
		$this->db->from('districts');
		$this->db->order_by('title','ASC');
		return $this->get_assoc();
	}
	public function get_thana_list($district_id){
		$this->db->select('id,title');
		$this->db->from('thanas');
		$this->db->where('district_id',$district_id);
		$this->db->order_by('title','ASC');
		return $this->get_assoc();
	}
	public function get_user_list(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id','DESC');
		$rs = $this->db->get();
		return $rs->result_array();
	}
	public function get_user_details($id=null){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$id);
		$rs=$this->db->get();
		return $rs->row_array();
	}
}
?>