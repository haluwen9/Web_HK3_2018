<?php
include_once("config/db.php");

class userModel extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}

	// Authentication
	public function loginAuthenticate($UserID, $Password)
	{
		$result = $this->runQuery("SELECT pw FROM users WHERE id = '$UserID'");
		$resultPassword = $result->fetch_assoc()['pw'];
		return $Password == $resultPassword;
	}

	// users
	public function getAllUsers()
	{
		$result = $this->runQuery("SELECT * FROM users");

		if ($result->num_rows == 0)
		{
			die('No result!');
		}

		$userList = array();
		while ($row = $result->fetch_assoc())
		{
			$user = new User(
				$row['id'], 
				$row['pw'], 
				$row['email'], 
				$row['firstname'], 
				$row['lastname'],
				$row['country'],
				$row['county'],
				$row['province'],
				$row['street_address'],
				$row['postcode'],
				$row['tel'],
				$row['facebook'],
				$row['twitter'],
				$row['google']
			);
			array_push($this->userList, $user);
		}

		return $userList;
	}

	public function updateUser($user)
	{
		$this->runQuery(
			"UPDATE users 
			SET 
				'pw = {$user->getPw()}',
				'email = {$user->getEmail()}',
				'firstname = {$user->getFirstname()}',
				'lastname = {$user->getLastname()}',
				'country = {$user->getCountry()}',
				'county = {$user->getCounty()}',
				'province = {$user->getProvince()}',
				'street_address = {$user->getStreetAddress()}',
				'postcode = {$user->getPostcode()}',
				'tel = {$user->getTel()}',
				'facebook = {$user->getFacebook()}',
				'twitter = {$user->getTwitter()}',
				'google = {$user->getGoogle()}'
			WHERE id = {$user->id}");
	}

	public function insertUser($user)
	{
		$this->runQuery(
			"INSERT INTO users(id, pw, email, firstname, lastname, country, county, province, street_address, postcode, tel, facebook, twitter, google) 
			VALUE (
				'{$user->getId()}',
				'{$user->getPw()}',
				'{$user->getEmail()}',
				'{$user->getFirstname()}',
				'{$user->getLastname()}',
				'{$user->getCountry()}',
				'{$user->getCounty()}',
				'{$user->getProvince()}',
				'{$user->getStreetAddress()}',
				'{$user->getPostcode()}',
				'{$user->getTel()}',
				'{$user->getFacebook()}',
				'{$user->getTwitter()}',
				'{$user->getGoogle()}'
			)"
		);
	}

	public function deleteUser($UserID)
	{
		$user = $this->getUserInfoById($UserID);
		if ($user->getId() == 'ADMIN')
		{
			die('Cannot delete ADMIN');
		}
		$this->runQuery("DELETE FROM users WHERE id = '{$UserID}'");
	}

	public function getUserInfoById($UserID)
	{
		$result = $this->runQuery("SELECT * FROM users WHERE id = '{$UserID}'");

		if ($result->num_rows == 0)
		{
			die("Cannot retrieve user\'s info (id= '{$UserID}')!");
		}

		$row = $result->fetch_assoc();
		// foreach($row as $key => $value) {
		// 	echo $key, $value, "\n";
		// }
		return new User(
			$row['id'], 
			$row['pw'], 
			$row['email'], 
			$row['firstname'], 
			$row['lastname'],
			$row['country'],
			$row['county'],
			$row['province'],
			$row['street_address'],
			$row['postcode'],
			$row['tel'],
			$row['facebook'],
			$row['twitter'],
			$row['google']
		);
	}
	
}

?>