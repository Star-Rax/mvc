<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {
	public function page($type)
	{
		if($type=='about'){
			$arr=array('title'=>'About','data'=>'About Data');
		}elseif($type=='contact'){
			$arr=array('title'=>'Contact','data'=>'Contact Data');
		}else{
			$arr=array('title'=>'Home','data'=>'Home Data');
		}
		return $arr;
	}

	public function test1()
	{
	
		$query = $this->db->query("Select * from rax1");

		foreach ($query->result() as $dataa);
		{
			echo $dataa->ID;
			echo $dataa->Name;
			echo $dataa->City;

		}

	}

	public function test2()
	{
	$query = $this->db->query("YOUR QUERY");
	
	foreach ($query->result() as $row)
	{
			echo $row->title;
			echo $row->name;
			echo $row->body;
	}
	}
	
}


