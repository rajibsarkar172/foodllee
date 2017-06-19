<?php
class Ajaxmodel extends HFood_Model
{
	function __construct() {
        parent::__construct();
    }
	public function get_thana_list($district_id=null){
		$this->db->select('id,title');
		$this->db->from('thanas');
		$this->db->where('district_id',$district_id);
		$this->db->order_by('title','ASC');
		return $this->get_assoc();
	}
	
}
?>