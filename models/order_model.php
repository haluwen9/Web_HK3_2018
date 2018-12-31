<?php
include "entities/order.php";

$servername = "localhost";
$database = "db_bongxustore";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

class orderModel
{
	private $order;
	private $orderList;
	private $sl = 0;

	// list
	public function getList()
	{
		$sql = 'SELECT * FROM orders';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		if (! $retval)
		{
			die('Khong co du lieu' . mysql_error());
		}

		while ($row = mysql_fetch_array($retval))
		{
			$orderList[$sl] = $row;
			$sl++;
		}

		return $orderList;
	}

	// update order 
	public function updateOrder($id, $or)
	{
		$set_set = '
			SET USER_ID = $or.getUserId(),
				DIFFSHIPADDR = $or.getdiffShipAddr(),
				TOTAL_PRICE = $or.getTotalPrice() ';
		$sql = 'UPDATE orders'. $set_set . 'WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// insert order 
	public function addOrder($or)
	{
		$set_set = '(ID, USER_ID, DIFFSHIPADDR, TOTAL_PRICE) ' .
				'VALUE ($or.getID(),
				$or.getUserId(), 
				$or.getdiffShipAddr(), 
				$or.getTotalPrice()) ';
		$sql = 'INSERT INTO orders'. $set_set;
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// delete order
	public function deleteOrder($id)
	{
		$sql = "DELETE orders " . "WHERE ID = $id" ;
        mysql_select_db('test_db');
        $retval = mysql_query( $sql, $conn );
	}

	// get by user 
	public function getOrderByUser($user)
	{
		$sql = 'SELECT * FROM orders WHERE USER_ID = $user';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$order = mysql_fetch_object($retval);
		return $order;
	}

	// get by id
	public function getOrderById($id)
	{
		$sql = 'SELECT * FROM orders WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$order = mysql_fetch_object($retval);
		return $order;
	}

}





mysqli_close($conn);
?>