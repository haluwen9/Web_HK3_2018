<?php

class Orders
{
	private $id;
	private $user_id;
	private $diffshipaddr;
	private $total_price;

// id
	public function Get_id()
	{
		return $this->id;
	}
	public function Set_id($_id)
	{
		$this->id = $_id;
	}

// user_id
	public function Get_user_id()
	{
		return $this->user_id;
	}
	public function Set_user_id($_user_id)
	{
		$this->user_id = $_user_id;
	}

// diffshipaddr
	public function Get_diffshipaddr()
	{
		return $this->diffshipaddr;
	}
	public function Set_diffshipaddr($_diffshipaddr)
	{
		$this->diffshipaddr = $_diffshipaddr;
	}

// total_price
	public function Get_total_price()
	{
		return $this->total_price;
	}
	public function Set_total_price($_total_price)
	{
		$this->total_price = $_total_price;
	}

}

?>