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




class productModel
{
	private $product;
	private $productList;
	private $sl;

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

		$this->sl = 0;
		while ($row = mysql_fetch_array($retval))
		{
			$this->productList[$this->sl] = $row;
			$this->sl++;
		}

		return $this->productList;
	}

	// update pro 
	public function updateProduct($id)
	{
		$pro = getProductById($id);
		$set_set = '
			SET NAME = $pro.getName(),
				CATEGORY = $pro.getCategory(),
				PRICE = $pro.getPrice(),
				SALE = $pro.getSale(),
				IMAGE_LINK = $pro.getImageLink(),
				TAGS = $pro.getTags(),
				RATING = $pro.getRating() ';
		$sql = 'UPDATE products'. $set_set . 'WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// insert pro 
	public function addProduct($pro)
	{
		$set_set = '(ID, NAME, CATEGORY, PRICE, SALE, IMAGE_LINK, TAGS, RATING) ' .
				'VALUE ($pro.getId(), $pro.getName(), $pro.getCategory(), $pro.getPrice(), $pro.getSale(), $pro.getImageLink(), $pro.getTags(), $pro.getRating() )';
		$sql = 'INSERT INTO products'. $set_set;
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// delete pro
	public function deleteProduct($id)
	{
		$sql = "DELETE products " . "WHERE ID = $id" ;
        mysql_select_db('test_db');
        $retval = mysql_query( $sql, $conn );
	}

	// get by category 
	public function getProductByCategory($category)
	{
		$sql = 'SELECT * FROM products WHERE CATEGORY = $category';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$this->product = mysql_fetch_object($retval);
		return $this->product;
	}

	// get by id
	public function getProductById($id)
	{
		$sql = 'SELECT * FROM products WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$this->product = mysql_fetch_object($retval);
		return $this->product;
	}

	// get category
	public function getCategory(){}

}






mysqli_close($conn);
?>