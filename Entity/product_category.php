<?php

class product_category
{
	private $id;
	private $name;

// id
	public function Get_id()
	{
		return $this->id;
	}
	public function Set_id($_id)
	{
		$this->id = $_id;
	}

// name
	public function Get_name()
	{
		return $this->name;
	}
	public function Set_name($_name)
	{
		$this->name = $_name;
	}
	
}

?>