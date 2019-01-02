<?php

include_once('shipping_info.php');

class Order
{
	public $id;
	public $userId;
	public $diffShipAddr;
	public $totalPrice;
	public $shippingInfo;
	public $content; // array of (product => amount)
	public $successState;

	public function __construct($Id, $UserId, $DiffShipAddr, $TotalPrice,  $ShippingInfo, $Content = array(), $SuccessState = FALSE)
	{
		$this->id = $Id;
		$this->userId = $UserId;
		$this->diffShipAddr = $DiffShipAddr;
		$this->totalPrice = $TotalPrice;
		$this->shippingInfo = $ShippingInfo;
		$this->content = $content;
		$this->successState = $SuccessState;
	}

// id
	public function getId()
	{
		return $this->id;
	}
	public function setId($_id)
	{
		$this->id = $_id;
	}

// userId
	public function getUserId()
	{
		return $this->userId;
	}
	public function setUserId($_userId)
	{
		$this->userId = $_userId;
	}

// diffShipAddr
	public function getDiffShipAddr()
	{
		return $this->diffShipAddr;
	}
	public function setDiffShipAddr($_diffShipAddr)
	{
		$this->diffShipAddr = $_diffShipAddr;
	}

// totalPrice
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}
	public function setTotalPrice($_totalPrice)
	{
		$this->totalPrice = $_totalPrice;
	}

// content
	public function getContent()
	{
		return $this->$content;
	}
	public function modifyAmount($ProductName, $UpdatedValue)
	{
		if (array_key_exists($ProductName, $this->content)) {
			$this->content[$ProductName] = $UpdatedValue;
			return true;
		}
		return false;
	}
	public function addProduct($ProductName, $Amount)
	{
		if (!array_key_exists($ProductName, $this->content)) {
			$this->content[$ProductName] = $Amount;
			return true;
		}
		return false;
	}
	public function removeProduct($ProductName)
	{
		if (array_key_exists($ProductName)) {
			unset($this->content[$ProductName]);
			return true;
		}
		return false;
	}

// shippingInfo
	public function getShippingInfo()
	{
		return $this->shippingInfo;
	}
	public function setShippingInfo($ShippingInfo)
	{
		$this->shippingInfo = $ShippingInfo;
	}

// successState
	public function getSuccessState()
	{
		return $this->successState;
	}
	public function setSuccessState($successState)
	{
		$this->successState = $successState;
}
}
?>