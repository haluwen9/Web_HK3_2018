<?php
include_once("entities/product.php");
include_once("entities/product_category.php");
include_once("../config/db.php");

class productModel extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}

	// product_categories
	public function getCategories()
	{
		$result = $this->runQuery("SELECT * FROM product_categories");

		$categoriesList = array();
		while ($row = $result->fetch_assoc())
		{
			$category = new ProductCategory(
				$row['id'],
				$row['name']
			);
			array_push($categoriesList, $category);
		}

		return $categoriesList;
	}

	public function updateCategory($Category)
	{
		$this->runQuery(
			"UPDATE product_categories
			SET name = {$Category->name}
			WHERE id = {$Category->id})"
		);
	}

	public function insertCategory($Category)
	{
		$this->runQuery("INSERT INTO product_categories(ID, NAME) VALUE ({$Category->id}, '{$Category->name}')");
	}

	public function deleteCategory($CategoryID)
	{
		$this->runQuery("DELETE FROM product_categories WHERE id = {$CategoryID}");
	}

	// products
	public function getAllProducts()
	{
		$result = $this->runQuery(
			"SELECT products.* storate.amount
			FROM products INNER JOIN storage on products.id = storage.product_id"
		);

		$productList = array();
		while ($row = $result->fetch_assoc())
		{
			$result2 = $this->runQuery("SELECT amount FROM storage WHERE product_id = {$row[id]}");
			$row2 = $result2->fetch_assoc();
			$product = new Product(
				$row['id'], 
				$row['name'], 
				$row['category'], 
				$row['price'], 
				$row['sale'],
				$row['image_link'],
				$row2['amount'],
				explode(' ', $row['tags']),
				$row['sell_state']
			);
			array_push($productList, $product);
		}
		
		return $productList;
	}

	public function getProductsByCategory($CategoryID)
	{
		$result = $this->runQuery(
			"SELECT products.* storate.amount
			FROM products INNER JOIN storage on products.id = storage.product_id
			WHERE category = {$CategoryID}"
		);

		if ($result->num_rows == 0)
		{
			die("Cannot retrieve product\'s info (category={$category})!");
		}

		$productList = array();
		while ($row = $result->fetch_assoc())
		{
			$product = new Product(
				$row['id'], 
				$row['name'], 
				$row['category'], 
				$row['price'], 
				$row['sale'],
				$row['image_link'],
				$row['amount'],
				explode(' ', $row['tags']),
				$row['sell_state']
			);
			array_push($productList, $product);
		}
		
		return $productList;
		
	}

	public function getProductById($ProductID)
	{
		$result = $this->runQuery(
			"SELECT products.* storate.amount
			FROM products INNER JOIN storage on products.id = storage.product_id
			WHERE products.id = {$ProductID}"
		);

		if ($result->num_rows == 0)
		{
			die("Cannot retrieve product\'s info (id={$id})!");
		}

		$row = $result1->fetch_assoc();
		return new Product(
			$row['id'], 
			$row['name'], 
			$row['category'], 
			$row['price'], 
			$row['sale'],
			$row['image_link'],
			$row['amount'],
			explode(' ', $row['tags']),
			$row['sell_state']
		);
	}

	public function insertProduct($product)
	{
		$this->runQuery(
			"INSERT INTO products(id, name, category, price, sale, image_link, tags, sell_state) 
			VALUE (
				{$product->getId()},
				{$product->getName()},
				{$product->getCategory()},
				{$product->getPrice()},
				{$product->getSale()},
				{$product->getImageLink()},
				{implode(' ', $product->getTags())},
				{$product->getSellState()}
			)"
		);

		$this->runQuery(
			"INSERT INTO storage(product_id, amount)
			VALUE (
				{$product->getId()},
				{$product->getAmount()}
			)"
		);
	}

	public function deleteProduct($ProductID)
	{
		$this->runQuery("DELETE FROM storage WHERE product_id = {$ProductID}");
		$this->runQuery("DELETE FROM products WHERE id = {$ProductID}");
	}

	public function updateProduct($product)
	{
		$this->runQuery(
			"UPDATE products 
			SET name = {$product->getName()},
				category = {$product->getCategory()},
				price = {$product->getPrice()},
				sale = {$product->getSale()},
				image_link = {$product->getImageLink()},
				tags = {implode(' ', $product->getTags())},
				sell_state = {$product->getSellState()}
			WHERE id = {$product->id}"
		);
	}

	public function updateProductAmount($ProductID, $amount)
	{
		$this->runQuery("UPDATE storage SET amount = {$amount} WHERE product_id = {$ProductID}");
	}

	// Review

	public function getAllReviews()
	{
		$result = $this->runQuery("SELECT * FROM reviews");

		$reviewList = array();
		while ($row = $result->fetch_assoc())
		{
			$review = new Review(
				$row['user_id'], 
				$row['product_id'], 
				$row['content'], 
				$row['posted_time'], 
				$row['rating']
			);
			array_push($reviewList, $review);
		}
		
		return $reviewList;
	}

	public function insertReview($review)
	{
		$this->runQuery(
			"INSERT INTO reviews(user_id, product_id, content, posted_time, rating) 
			VALUE (
				{$review->getUserId()},
				{$review->getProductId()},
				{$review->getContent()},
				{$review->getPostedTime()},
				{$review->getRating()}
			)"
		);	
	}

	public function deleteReviewsByUser($UserID)
	{
		$this->runQuery("DELETE FROM reviews WHERE user_id = {$UserID}");
	}

	public function deleteReviewsByProduct($ProductID)
	{
		$this->runQuery("DELETE FROM reviews WHERE product_id = {$ProductID}");
	}

	public function deleteReviewByUserAndProduct($UserID, $ProductID)
	{
		$this->runQuery("DELETE FROM reviews WHERE user_id = {$UserID} AND product_id = {$ProductID}");
	}
}

?>