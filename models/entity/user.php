<?php

class User
{
	private $email;
	private $id;
	private $firstname;
	private $lastname;
	private $country;
	private $state;
	private $province;
	private $streetAddress;
	private $postcode;
	private $tel;
	private $note;
	private $facebook;
	private $twitter; 
	private $google;
	
// email
	public function Get_email()
	{
		return $this->this->email;
	}
	public function Set_email($_email)
	{
		$this->email = $_email;
	}

// id
	public function Get_id()
	{
		return $this->this->id;
	}
	public function Set_id($_id)
	{
		$this->id = $_id;
	}
	
// firstname	
	public function Get_firstname()
	{
		return $this->this->firstname;
	}
	public function Set_firstname($_firstname)
	{
		$this->firstname = $_firstname;
	}
	
// lastname
	public function Get_lastname()
	{
		return $this->lastname;
	}
	public function Set_($_lastname)
	{
		$this->lastname = $_lastname;
	}
	
// country
	public function Get_country()
	{
		return $this->country;
	}
	public function Set_country($_country)
	{
		$this->country = $_country;
	}
	
// state
	public function Get_state()
	{
		return $this->state;
	}
	public function Set_state($_state)
	{
		$this->state = $_state;
	}
	
// province
	public function Get_province()
	{
		return $this->province;
	}
	public function Set_province($_province)
	{
		$this->province = $_province;
	}

// streetAddress
	public function Get_streetAddress()
	{
		return $this->streetAddress;
	}
	public function Set_streetAddress($_streetAddress)
	{
		$this->streetAddress = $_streetAddress;
	}

// postcode
	public function Get_postcode()
	{
		return $this->postcode;
	}
	public function Set_postcode($_postcode)
	{
		$this->postcode = $_postcode;
	}

// tel
	public function Get_tel()
	{
		return $this->tel;
	}
	public function Set_tel($_tel)
	{
		$this->tel = $_tel;
	}

// note
	public function Get_note()
	{
		return $this->note;
	}
	public function Set_note($_note)
	{
		$this->note = $_note;
	}
	
// facebook
	public function Get_facebook()
	{
		return $this->facebook;
	}
	public function Set_facebook($_facebook)
	{
		$this->facebook = $_facebook;
	}

// twitter
	public function Get_twitter()
	{
		return $this->twitter;
	}
	public function Set_twitter($_twitter)
	{
		$this->twitter = $_twitter;
	}

// google
	public function Get_google()
	{
		return $this->google;
	}
	public function Set_google($_google)
	{
		$this->google = $_google;
	}
}

?>