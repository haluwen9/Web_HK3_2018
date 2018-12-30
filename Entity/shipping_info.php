<?php

class Shipping_info
{
	private $order_id;
	private $firstname;
	private $lastname;
	private $country;
	private $state;
	private $province;
	private $street_address;
	private $postcode;
	private $tel;
	private $notes;
	
// order_id
	public function Get_order_id()
	{
		return $this->order_id;
	}
	public function Set_order_id($_order_id)
	{
		$this->order_id = $_order_id;
	}

// firstname
	public function Get_firstname()
	{
		return $this->firstname;
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
	public function Set_lastname($_lastname)
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

// street_address
	public function Get_street_address()
	{
		return $this->street_address;
	}
	public function Set_street_address($_street_address)
	{
		$this->street_address = $_street_address;
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

// notes
	public function Get_notes()
	{
		return $this->notes;
	}
	public function Set_notes($_notes)
	{
		$this->notes = $_notes;
	}

?>