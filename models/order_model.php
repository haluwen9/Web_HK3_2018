<?php
include_once("config/db.php");

class orderModel extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}

	// shipping_info
	public function getShippingInfo($OrderID)
	{
		$result = $this->runQuery("SELECT * FROM shipping_info where order_id = {$OrderID}");
		if ($result->num_rows == 0)
		{
			die("Cannot retrieve shipping info of order (id={$OrderID})!");
		}
		$row = $result->fetch_assoc();
		return new ShippingInfo(
			$row['firstname'], 
			$row['lastname'],
			$row['country'], 
			$row['county'], 
			$row['province'], 
			$row['street_address'], 
			$row['postcode'], 
			$row['tel'], 
			$row['notes']
		);
	}

	// order_content
	public function getOrderContent($OrderID)
	{
		$result = $this->runQuery("SELECT product_id, amount FROM order_content WHERE order_id = {$OrderID}");
		if ($result->num_rows == 0)
		{
			die("Cannot retrieve content of order (id={$OrderID})!");
		}
		$content = array();
		while ($row = $result->fetch_assoc())
		{
			$content[$row['product_id']] = intval($row['amount']);
		}
		return $content;
	}

	// orders
	public function getAllOrders()
	{
		$result = $this->runQuery("SELECT * FROM orders");

		if ($result->num_rows == 0)
		{
			#die('No result!');
		}

		$orderList = array();
		while ($row = $result->fetch_assoc())
		{
			$order = new Order(
				$row['id'], 
				$row['user_id'], 
				$row['diffshipaddr'], 
				$row['total_price'], 
				$this->getShippingInfo(intval($row['id'])),
				$this->getOrderContent(intval($row['id'])),
				boolval($row['success_state'])
			);
			array_push($orderList, $order);
		}

		return $orderList;
	}

	public function getOrdersByUser($UserID)
	{
		$result = $this->runQuery("SELECT * FROM orders WHERE id = '{$UserID}'");

		if ($result->num_rows == 0)
		{
			die('No result!');
		}

		$orderList = array();
		while ($row = $result->fetch_assoc())
		{
			$order = new Order(
				$row['id'], 
				$row['user_id'], 
				$row['diffshipaddr'], 
				$row['total_price'], 
				$this->getShippingInfo(intval($row['id'])),
				$this->getOrderContent(intval($row['id'])),
				boolval($row['success_state'])
			);
			array_push($this->orderList, $order);
		}

		return $orderList;
	}

	public function getOrderById($OrderID)
	{
		$result = $this->runQuery("SELECT * FROM orders WHERE id = {$OrderID}");

		if ($result->num_rows == 0)
		{
			die("Cannot retrieve order\'s info (id={$OrderID})!");
		}

		$row = $result->fetch_assoc();
		return new Order(
			$row['id'], 
			$row['user_id'], 
			$row['diffshipaddr'], 
			$row['total_price'], 
			$this->getShippingInfo(intval($row['id'])),
			$this->getOrderContent(intval($row['id'])),
			boolval($row['success_state'])
		);
	}

	public function insertOrder($order)
	{
		$this->runQuery(
			"INSERT INTO orders(user_id, diffshipaddr, total_price, success_state) 
			VALUE (
				'{$order->userId}',
				{$order->diffShipAddr},
				{$order->totalPrice},
				{$order->successState}
			)"
		);
		
		$OrderID = $this->runQuery("SELECT LAST_INSERT_ID() as id")->fetch_assoc()['id'];
		$this->runQuery(
			"INSERT INTO shipping_info
			VALUE (
				$OrderID,
				'{$order->shippingInfo->firstname}',
				'{$order->shippingInfo->lastname}',
				'{$order->shippingInfo->country}',
				'{$order->shippingInfo->county}',
				'{$order->shippingInfo->province}',
				'{$order->shippingInfo->streetAddress}',
				'{$order->shippingInfo->postcode}',
				'{$order->shippingInfo->tel}',
				'{$order->shippingInfo->notes}')"
		);
		foreach($order->content as $key => $value) {
			$this->runQuery(
				"INSERT INTO order_content VALUE($OrderID, $key, $value)"
			);
		}
	}

	public function deleteOrder($OrderID)
	{
		$order = $this->getOrderById($OrderID);
		if (!$order->successState)
		{
			$this->runQuery("DELETE FROM shipping_info WHERE order_id = {$OrderID}");
			$this->runQuery("DELETE FROM order_content WHERE order_id = {$OrderID}");
			$this->runQuery("DELETE FROM orders WHERE id = {$OrderID}");
		}
		else
		{
			#die("Cannot delete this order (id={$OrderID}) since its success state is TRUE!");
		}
	}

	public function updateOrderState($OrderID, $NewState)
	{
		$this->runQuery("UPDATE orders SET success_state = {$NewState} WHERE id = {$OrderID}");
	}
}

?>