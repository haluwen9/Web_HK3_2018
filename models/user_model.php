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
		if ($result->num_rows == 0) return 0;
		$resultPassword = $result->fetch_assoc()['pw'];
		if (md5($Password) != $resultPassword) return 1;
		return 2;
	}

	// users
	public function getAllUsers()
	{
		$result = $this->runQuery("SELECT * FROM users");

		if ($result->num_rows == 0)
		{
			#die('No result!');
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
			array_push($userList, $user);
		}

		return $userList;
	}

	public function updateUser($user)
	{
		$this->runQuery(
			"UPDATE users 
			SET 
				'pw = $user->pw',
				'email = $user->email',
				'firstname = $user->firstname',
				'lastname = $user->lastname',
				'country = $user->country',
				'county = $user->county',
				'province = $user->province',
				'street_address = $user->streetAddress',
				'postcode = $user->postcode',
				'tel = $user->tel',
				'facebook = $user->facebook',
				'twitter = $user->twitter',
				'google = $user->google'
			WHERE id = $user->id");
	}

	public function insertUser($user)
	{
		$this->runQuery(
			"INSERT INTO users(id, pw, email, firstname, lastname, country, county, province, street_address, postcode, tel, facebook, twitter, google) 
			VALUE (
				'$user->id',
				'$user->pw',
				'$user->email',
				'$user->firstname',
				'$user->lastname',
				'$user->country',
				'$user->county',
				'$user->province',
				'$user->streetAddress',
				'$user->postcode',
				'$user->tel',
				'$user->facebook',
				'$user->twitter',
				'$user->google'
			)"
		);
	}

	public function deleteUser($UserID)
	{
		$user = $this->getUserInfoById($UserID);
		if ($user->id == 'admin')
		{
			#die('Cannot delete ADMIN');
		}
		$this->runQuery("DELETE FROM users WHERE id = '$UserID'");
	}

	public function getUserInfoById($UserID)
	{
		$result = $this->runQuery("SELECT * FROM users WHERE id = '$UserID'");

		if ($result->num_rows == 0)
		{
			return FALSE;
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
	public function validateAccount($UserID, $Email)
	{
		$result = $this->runQuery("SELECT * FROM users WHERE id = '$UserID' or email = '$Email'");
		if ($result->num_rows == 0)
			return TRUE;
		return FALSE;
	}

	public function addSubscribtion($email) {
		try {
			$this->runQuery("INSERT INTO subscribes VALUES ('$email');");
			return true;
		}
		catch (Exception $e) {
			return false;
		}
	}
}

?>