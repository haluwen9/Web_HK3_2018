<?php
	
class Review
{
	public $userId;
	public $productId;
	public $content;
	public $postedTime;
	public $rating;
	
	public function __construct($UserId, $ProductId, $Content, $PostedTime, $Rating)
	{
		$this->userId = $UserId;
		$this->productId = $ProductId;
		$this->content = $Content;
		$this->postedTime = $PostedTime;
		$this->rating = $Rating;
	}
	
// userId
	public function getUserId()
	{
		return $this->userId;
	}
	public function setUserId($_userId)
	{
		$this->userId = $_userId;
	}

// productId
	public function getProductId()
	{
		return $this->productId;
	}
	public function setProductId($_productId)
	{
		$this->productId = $_productId;
	}

// content
	public function getContent()
	{
		return $this->content;
	}
	public function setContent($_content)
	{
		$this->content = $_content;
	}

// postedTime
	public function getPostedTime()
	{
		return $this->postedTime;
	}
	public function setPostedTime($_postedTime)
	{
		$this->postedTime = $_postedTime;
	}

// rating
	public function getRating()
	{
		return $this->rating;
	}
	public function setRating($Rating)
	{
		$this->rating = $Rating;
	}
}

?>