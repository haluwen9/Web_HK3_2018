<?php
include_once("entities/order.php");
include_once("../config/db.php")

class orderModel extends DBConnection
{
	private $order;
	private $orderList;
	private $sl;

	public function __construct() {
		parent::__construct();
	}

	// list
	public function getList()
	{
		$sql = 'SELECT * FROM orders';
		$result = runQuery($sql);

		if ($result->num_rows == 0)
		{
			die('Không có dữ liệu!' . mysql_error());
		}

		$this->sl = 0;
		while ($row = $result->fetch_assoc())
		{
			$this->orderList[$this->sl] = $row;
			$this->sl++;
		}

		return $this->orderList;
	}

	// update order 
	public function updateOrder($id)
	{
		$or = getOrderById($id);
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

		$this->order = mysql_fetch_object($retval);
		return $this->order;
	}

	// get by id
	public function getOrderById($id)
	{
		$sql = 'SELECT * FROM orders WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$this->order = mysql_fetch_object($retval);
		return $this->order;
	}

}





mysqli_close($conn);
?>