<?php

class Product
{
	public $id;
	public $name;
	public $category;
	public $price;
	public $sale;
	public $imageLink;
	
	public $amount;

	public $tags; // array of tags

	public $sellState;

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
}

?>