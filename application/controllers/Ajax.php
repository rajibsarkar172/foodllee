<?php
class Ajax extends HFood_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(array('ajaxmodel'));
	}
	public function get_thana_list(){
		$district_id = $this->input->post('district_id');
		$thana_list = $this->ajaxmodel->get_thana_list($district_id);
		$html = '<option value="">----Select Thana----</option>';
		if(!empty($thana_list)){			
			foreach($thana_list as $key=>$val){
				$html = $html.'<option value='.$key.'>'.$val.'</option>';
			}
		}
		echo $html;
	}
}
?>