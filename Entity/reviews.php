<?php
	
class reviews
{
	private $user_id;
	private $product_id;
	private $content;
	private $posted_time;
	
	
// user_id
	public function Get_user_id()
	{
		return $this->user_id;
	}
	public function Set_user_id($_user_id)
	{
		$this->user_id = $_user_id;
	}

// product_id
	public function Get_product_id()
	{
		return $this->product_id;
	}
	public function Set_product_id($_product_id)
	{
		$this->product_id = $_product_id;
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

// posted_time
	public function Get_posted_time()
	{
		return $this->posted_time;
	}
	public function Set_posted_time($_posted_time)
	{
		$this->posted_time = $_posted_time;
	}

}

?>