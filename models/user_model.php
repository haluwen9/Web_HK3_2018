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




class userModel
{
	private $user;
	private $userList;
	private $sl;

	// list
	public function getList()
	{
		$sql = 'SELECT * FROM users';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		if (! $retval)
		{
			die('Khong co du lieu' . mysql_error());
		}

		$this->sl = 0;
		while ($row = mysql_fetch_array($retval))
		{
			$this->userList[$this->sl] = $row;
			$this->sl++;
		}

		return $this->userList;
	}

	// update pro 
	public function updateUser($id)
	{
		$user = getUserInfo($id);
		$set_set = '
			SET ID = $user.getId(), PW = $user.getPw(), EMAIL = $user.getEmail(), FIRSTNAME = $user.getFirstname(), LASTNAME = $user.getLastname(), COUNTRY = $user.getCountry(), COUNTY = $user.getCounty(), PROVINCE = $user.getProvince(), STREET_ADDRESS = $user.getStreetAddress(), POSTCODE = $user.getPostcode(), TEL = $user.getTel(), FACEBOOK = $user.getFacebook(), TWITTER = $user.getTwitter(), GOOGLE = $user.getGoogle() ';
		$sql = 'UPDATE users'. $set_set . 'WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// insert user
	public function addUser($user)
	{
		$set_set = '(ID, PW, EMAIL, FIRSTNAME, LASTNAME, COUNTRY, COUNTY, PROVINCE, STREET_ADDRESS, POSTCODE, TEL, FACEBOOK, TWITTER, GOOGLE) ' .
				'VALUE ($user.getId(), $user.getPw(), $user.getEmail(), $user.getFirstname(), $user.getLastname(), $user.getCountry(), $user.getCounty(), $user.getProvince(), $user.getStreetAddress(), $user.getPostcode(), $user.getTel(), $user.getFacebook(), $user.getTwitter(), $user.getGoogle() )';
		$sql = 'INSERT INTO users'. $set_set;
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);
	}

	// delete user
	public function deleteUser($id)
	{
		$sql = "DELETE users " . "WHERE ID = $id" ;
        mysql_select_db('test_db');
        $retval = mysql_query( $sql, $conn );
	}

	// get info
	public function getUserInfo($id)
	{
		$sql = 'SELECT * FROM users WHERE ID = $id';
		mysql_select_db('db_bongxustore');
		$retval = mysql_query($sql, $conn);

		$this->user = mysql_fetch_object($retval);
		return $this->user;
	}
	
}






mysqli_close($conn);
?>