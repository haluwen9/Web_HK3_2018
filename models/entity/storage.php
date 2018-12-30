<?php

class Storage
{
	private $productId;
	private $amount;
	
// productId
	public function Get_productId()
	{
		return $this->productId;
	}
	public function Set_productId($_productId)
	{
		$this->productId = $_productId;
	}
	
// amount
	public function Get_amount()
	{
		return $this->amount;
	}
	public function Set_amount($_amount)
	{
		$this->amount = $_amount;
	}

	
}

?>

