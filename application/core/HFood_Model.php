<?php
/**
Core Model class is created by Salman Quader @ 12-06-2017
**/
class HFood_Model extends CI_Model
{
	public $table;
	function __construct(){
		parent::__construct();
	}
	function get_assoc($table='')
	{
		$data=array();
		$table=empty($table)?$this->table:$table;
		$query=$this->db->get($table);
		$rows=$query->result_array();
		if(is_array($rows))
		{
			foreach($rows as $row)
 			{
				$temp=each($row);
				$num=count($row);
				if($num==1)
				{
					$data[$temp['value']]=$temp['value'];
				}
				elseif($num==2)
				{
					$data[$temp['value']]=array_pop($row);
				}
				else
				{
					$data[$temp['value']]=$row;
				}
 			}
 			return $data;

		}
	}
}
?>