<?php
/**
Title:: Home Food Api
Created:: 12-06-2017
**/
class Api extends HFood_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('apimodel');
	}
	public function registration(){
		$jsondata = file_get_contents('php://input');
		$data = json_decode($jsondata,true);
		
		$image_file = 'pic_'.strtotime(date("Y-m-d h:i:s"));
		$file_trans = file_put_contents(FCPATH.'img/profile_pic/'.$image_file.'.jpg',base64_decode($data['profile_pic']));
		if($file_trans){
			$data['profile_pic'] = $image_file.'.jpg';
		}
		$data['dob'] = date("Y-m-d",strtotime($data['dob']));
		$insert = $this->apimodel->insert_new_user($data);
		if($insert){
			$response = array(
				'inserted_id' => $insert,
				'status'      => 'Success'
			);
		}else{
			$response = array(
				'inserted_id' => '',
				'status'      => 'Fail'
			);
		}
		header("content_type: application/json", True);
        echo json_encode($response);
	}
}
?>