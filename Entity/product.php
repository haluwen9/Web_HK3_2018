<?php

class Product
{
	private $id;
	private $name;
	private $category;
	private $price;
	private $sale;
	private $imageLink;
	private $tags;

// id
	public function Get_id()
	{
		return $this->id;
	}
	public function Set_id($_id)
	{
		$this->id = $_id;
	}

// name
	public function Get_name()
	{
		return $this->name;
	}
	public function Set_name($_name)
	{
		$this->name = $_name;
	}

// category
	public function Get_category()
	{
		return $this->category;
	}
	public function Set_category($_category)
	{
		$this->category = $_category;
	}

// price
	public function Get_price()
	{
		return $this->price;
	}
	public function Set_price($_price)
	{
		$this->price = $_price;
	}

// sale
	public function Get_sale()
	{
		return $this->sale;
	}
	public function Set_sale($_sale)
	{
		$this->sale = $_sale;
	}

// imageLink
	public function Get_imageLink()
	{
		return $this->imageLink;
	}
	public function Set_imageLink($_imageLink)
	{
		$this->imageLink = $_imageLink;
	}

// tags
	public function Get_tags()
	{
		return $this->tags;
	}
	public function Set_tags($_tags)
	{
		$this->tags = $_tags;
	}

	
}

?>