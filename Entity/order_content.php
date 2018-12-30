<?php

class order_content
{
	private $order_id;
	private $product_id;
	private $amount;

// order_id
	public function Get_order_id()
	{
		return $this->order_id;
	}
	public function Set_order_id($_order_id)
	{
		$this->order_id = $_order_id;
	}

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
	public function Set_($_amount)
	{
		$this->amount = $_amount;
	}

}


?>