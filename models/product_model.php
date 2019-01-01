<?php
include_once("entities/product.php");
include_once("entities/product_category.php");
include_once("../config/db.php");

class orderModel extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}

	// get categorys
	public function getCategories()
	{
		$result = $this->runQuery('SELECT * FROM product_categories');

		$categoriesList = array();
		while ($row = $result->fetch_assoc())
		{
			$category = new ProductCategory(
				intval($row['id']),
				$row['name']
			);
			array_push($categoriesList, $category);
		}

		return $categoriesList;
	}

	// all products
	public function getAllProducts()
	{
		$result = $this->runQuery('SELECT * FROM products');

		$productList = array();
		while ($row = $result->fetch_assoc())
		{
			$id = $row['id'];
			$result2 = $this->runQuery('SELECT * FROM storage WHERE product_id = {$id}');
			$row2 = $result2->fetch_assoc();
			$product = new Product(
				intval($row['id']), 
				$row['name'], 
				$row['category'], 
				$row['price'], 
				$row['sale'],
				$row['image_link'],
				$row2['amount'],
				$row['tags'],
				$row['sell_state']
				)
			);
			array_push($productList, $product);
		}
		
		return $productList;
	}

	// get category
	public function getProductByCategory($category)
	{
		$result1 = $this->runQuery('SELECT * FROM products WHERE category = {$category}');

		if ($result->num_rows == 0)
		{
			die('Cannot retrieve product\'s info (category={$category})!');
		}

		$productList = array();
		while ($row = $result1->fetch_assoc())
		{
			$id = $row['id'];
			$result2 = $this->runQuery('SELECT * FROM storage WHERE product_id = {$id}');
			$row2 = $result2->fetch_assoc();
			$product = new Product(
				intval($row['id']), 
				$row['name'], 
				$row['category'], 
				$row['price'], 
				$row['sale'],
				$row['image_link'],
				$row2['amount'],
				$row['tags'],
				$row['sell_state']
				)
			);
			array_push($productList, $product);
		}
		
		return $productList;
		
	}

	// get id
	public function getProductById($id)
	{
		$result1 = $this->runQuery('SELECT * FROM products WHERE id = {$id}');
		$result2 = $this->runQuery('SELECT * FROM storage WHERE product_id = {$id}');

		if ($result->num_rows == 0)
		{
			die('Cannot retrieve product\'s info (id={$id})!');
		}

		$row = $result1->fetch_assoc();
		$row2 = $result2->fetch_assoc();
		return new Product(
			intval($row['id']), 
			$row['name'], 
			$row['category'], 
			$row['price'], 
			$row['sale'],
			$row['image_link'],
			$row2['amount'],
			$row['tags'],
			$row['sell_state']
			)
		);
	}

	// insert
	public function insertProduct($product)
	{
		$this->runQuery(
			'INSERT INTO products(id, name, category, price, sale, image_link, tags, sell_state) 
			VALUE (
				{$product->getId()},
				{$product->getName()},
				{$product->getCategory()},
				{$product->getPrice()},
				{$product->getSale()},
				{$product->getImageLink()},
				{$product->getTags()},
				{$product->getSellState()}
			)'
		);

		$this->runQuery(
			'INSERT INTO storage(product_id, amount)
			VALUE (
				{$product->getId()},
				{$product->getAmount()}
			)'
		);
	}

	// delete
	public function deleteProduct($id)
	{
		$this->runQuery('DELETE FROM storage WHERE product_id = {$id}');
		$this->runQuery('DELETE FROM products WHERE id = {$id}');
	}

	// update info product
	public function updateProduct($id, $product)
	{
		$this->runQuery(
			'UPDATE products 
			SET name = {$product->getName()},
				category = {$product->getCategory()},
				price = {$product->getPrice()},
				sale = {$product->getSale()},
				image_link = {$product->getImageLink()},
				tags = {$product->getTags()},
				sell_state = {$product->getSellState()}
			WHERE id = {$id}');	
	}

	// update amount product
	public function updateProductAmount($id, $amount)
	{
		$this->runQuery('UPDATE storage SET amount = {$amount} WHERE product_id = {$id}');
	}




	// review

	public function getReview()
	{
		$result = $this->runQuery('SELECT * FROM reviews');

		$reviewList = array();
		while ($row = $result->fetch_assoc())
		{
			$review = new Review(
				intval($row['user_id']), 
				$row['product_id'], 
				$row['content'], 
				$row['posted_time'], 
				$row['rating']
				)
			);
			array_push($reviewList, $review);
		}
		
		return $reviewList;
	}

	public function insertReview($review)
	{
		$this->runQuery(
			'INSERT INTO reviews(user_id, product_id, content, posted_time, rating) 
			VALUE (
				{$review->getUserId()},
				{$review->getProductId()},
				{$review->getContent()},
				{$review->getPostedTime()},
				{$review->getRating()}
			)'
		);	
	}

	public function deleteReviewByUser($id)
	{
		$this->runQuery('DELETE FROM reviews WHERE user_id = {$id}');
	}

	public function deleteReviewByProduct($id)
	{
		$this->runQuery('DELETE FROM reviews WHERE product_id = {$id}');
	}

	public function deleteReviewByUserAndProduct($user, $product)
	{
		$this->runQuery('DELETE FROM reviews WHERE user_id = {$user} AND product_id = {$product}');
	}
}

?>