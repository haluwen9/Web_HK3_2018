<?php

class Storage
{
	private $product_id;
	private $amount;
	
// product_id
	public function Get_product_id()
	{
		return $this->product_id;
	}
	public function Set_product_id($_product_id)
	{
		$this->product_id = $_product_id;
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

