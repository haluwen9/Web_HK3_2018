<?php

class Product
{
	private $id;
	private $name;
	private $category;
	private $price;
	private $sale;
	private $imageLink;
	
	private $amount;

	private $tags; // array of tags

	private $sellState;

	public function __construct($Id, $Name, $Category, $Price, $Sale, $ImageLink, $Amount, $Tags = array(), $SellState = TRUE)
	{
		$this->id = $Id;
		$this->name = $Name;
		$this->category = $Category;
		$this->price = $Price;
		$this->sale = $Sale;
		$this->imageLink = $ImageLink;
		$this->amount = $Amount;
		$this->tags = $Tags;
		$this->sellState = $SellState;
	}
	
// id
	public function getId()
	{
		return $this->id;
	}
	public function setId($_id)
	{
		$this->id = $_id;
	}

// name
	public function getName()
	{
		return $this->name;
	}
	public function setName($Name)
	{
		$this->name = $Name;
	}

// category
	public function getCategory()
	{
		return $this->category;
	}
	public function setCategory($Category)
	{
		$this->category = $Category;
	}

// price
	public function getPrice()
	{
		return $this->price;
	}
	public function setPrice($Price)
	{
		$this->price = $Price;
	}

// sale
	public function getSale()
	{
		return $this->sale;
	}
	public function setSale($Sale)
	{
		$this->sale = $Sale;
	}

// imageLink
	public function getImageLink()
	{
		return $this->imageLink;
	}
	public function setImageLink($ImageLink)
	{
		$this->imageLink = $ImageLink;
	}

// tags
	public function getTags()
	{
		return $this->tags;
	}
	public function addTag($Tag)
	{
		array_push($this->tags, $Tag);
		return true;
	}
	public function removeTag($Tag)
	{
		$index = array_search($Tag, $this->tags);
		if ($index != false) {
			array_splice($this->tags, $index, 1);
			return true;
		}
		return false;
	}
	public function modifyTag($OldTag, $NewTag)
	{
		$index = array_search($OldTag, $this->tags);
		if ($index != false) {
			$this->tags[$index] = $NewTag;
			return true;
		}
		return false;
	}
	
// rating
	public function getSellState()
	{
		return $this->sellState;
	}
	public function setRating($sellState)
	{
		$this->sellState = $sellState;
	}
	
// amount
	public function getAmount()
	{
		return $this->amount;
	}
	public function setAmount($amount)
	{
		$this->amount = $amount;
	}
}

?>