<?php

class order_content
{
	private $orderId;
	private $productId;
	private $amount;

// orderId
	public function Get_orderId()
	{
		return $this->orderId;
	}
	public function Set_orderId($_orderId)
	{
		$this->orderId = $_orderId;
	}

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
	public function Set_($_amount)
	{
		$this->amount = $_amount;
	}

}


?>