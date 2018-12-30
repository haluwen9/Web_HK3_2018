<?php

class Orders
{
	private $id;
	private $userId;
	private $diffshipaddr;
	private $totalPrice;

// id
	public function Get_id()
	{
		return $this->id;
	}
	public function Set_id($_id)
	{
		$this->id = $_id;
	}

// userId
	public function Get_userId()
	{
		return $this->userId;
	}
	public function Set_userId($_userId)
	{
		$this->userId = $_userId;
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

// totalPrice
	public function Get_totalPrice()
	{
		return $this->totalPrice;
	}
	public function Set_totalPrice($_totalPrice)
	{
		$this->totalPrice = $_totalPrice;
	}

}

?>