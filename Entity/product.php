<?php

class Product
{
	private $id;
	private $name;
	private $category;
	private $price;
	private $sale;
	private $image_link;
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

// image_link
	public function Get_image_link()
	{
		return $this->image_link;
	}
	public function Set_image_link($_image_link)
	{
		$this->image_link = $_image_link;
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