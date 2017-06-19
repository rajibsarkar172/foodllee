<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
Core class is created by Salman Quader @ 12-06-2017
**/
class HFood_Controller extends CI_Controller
{
	var $data=array();
 	var $name;
 	var $method;

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->library('template','','tpl');
 		$this->load->helper(array('text','date'));
 		$this->name=$this->router->class;
 		$this->method=$this->router->method;
 		$this->_temp_init(); 		
 	}
	
 	function _temp_init()
 	{
 		$this->_assign_template_var();
		if($this->input->is_ajax_request())
		{
			$this->tpl->set_layout('ajax_layout');
		}
 	}

 	function _assign_template_var()
 	{
		$this->tpl->set_page_title('Admin panel');
		$this->tpl->assign('active_controller',$this->name);
		$this->tpl->assign('active_method',$this->method);	
 	}
	
	function assign($key,$val='')
 	{
 		$this->tpl->assign($key,$val);
 	}

 	function set_layout($file)
 	{
 		$this->tpl->set_layout($file);
 	}
	function statis_array($arrtype=null){
		if($arrtype=="gender"){
			$data = array(
				NULL => "---- Select ----",
				"Male"   => "Male",
				"Female" => "Female",
				"Other"  => "Other"
			);
		}
		return $data;
	}
	
	
	
} 
?>