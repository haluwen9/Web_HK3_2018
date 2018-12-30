<?php
	
class reviews
{
	private $userId;
	private $productId;
	private $content;
	private $postedTime;
	
	
// userId
	public function Get_userId()
	{
		return $this->userId;
	}
	public function Set_userId($_userId)
	{
		$this->userId = $_userId;
	}

// productId
	public function Get_productId()
	{
		return $this->productId;
	}
	public function Set_productId($_productId)
	{
		$this->productId = $_productId;
	}

// content
	public function Get_content()
	{
		return $this->content;
	}
	public function Set_content($_content)
	{
		$this->content = $_content;
	}

// postedTime
	public function Get_postedTime()
	{
		return $this->postedTime;
	}
	public function Set_postedTime($_postedTime)
	{
		$this->postedTime = $_postedTime;
	}

}

?>