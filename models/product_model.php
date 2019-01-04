<?php
include_once("config/db.php");

class productModel extends DBConnection
{
	public function __construct() {
		parent::__construct();
	}

	// product_categories
	public function getCategoryById($CategoryID)
	{
		$result = $this->runQuery("SELECT name FROM product_categories WHERE id = '{$CategoryID}' ");
		return $result->fetch_assoc()['name'];
	}

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
			SET name = '{$Category->name}'
			WHERE id = {$Category->id}"
		);
	}

	public function insertCategory($name)
	{
		$this->runQuery("INSERT INTO product_categories(NAME) VALUE ('{$name}')");
	}

	public function deleteCategory($CategoryID)
	{
		$this->runQuery("DELETE FROM product_categories WHERE id = {$CategoryID}");
	}

	// products
	public function getPromotedProducts()
	{
		$productList = $this->getAllProducts();
		$cnt = count($productList);
		$checked = array_fill(0, $cnt, 0);
		$result = array();
		for ($i = 0; $i < $cnt && $i < 5; ++$i) {
			$randid = 0;
			do {
				$randid = rand(($cnt-1)*(0.8), $cnt-1);
			} while ($checked[$randid]);
			$checked[$randid] = 1;
			array_push($result, $productList[$randid]);
		}
		return $result;
	}

	public function getRelatedProducts($CategoryID)
	{
		$productList = $this->getProductsByCategory($CategoryID);
		$cnt = count($productList);
		$checked = array_fill(0, $cnt, 0);
		$result = array();
		for ($i = 0; $i < $cnt && $i < 10; ++$i) {
			$randid = 0;
			do {
				$randid = rand(0, $cnt-1);
				// var_dump($randid);
			} while ($checked[$randid]);
			$checked[$randid] = 1;
			array_push($result, $productList[$randid]);
		}
		return $result;
	}

	public function getAllProducts()
	{
		$result = $this->runQuery("SELECT products.*, storage.amount	FROM products LEFT JOIN storage on products.id = storage.product_id");

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
		$result->free();
		// return count($productList);
		return $productList;
	}

	public function getProductsByCategory($CategoryID)
	{
		$result = $this->runQuery(
			"SELECT products.*, storage.amount
			FROM products INNER JOIN storage on products.id = storage.product_id
			WHERE category = {$CategoryID}"
		);

		if ($result->num_rows == 0)
		{
			#die("Cannot retrieve product\'s info (category={$category})!");
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
		$result->free();
		
		return $productList;
		
	}

	public function getProductById($ProductID)
	{
		$result = $this->runQuery(
			"SELECT products.*, storage.amount
			FROM products INNER JOIN storage on products.id = storage.product_id
			WHERE products.id = {$ProductID}"
		);

		if ($result->num_rows == 0)
		{
			echo ("Cannot retrieve product's info (id={$ProductID})!");
			return NULL;
		}

		$row = $result->fetch_assoc();
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
		$temp = implode(' ', $product->getTags());
		
		$this->runQuery(
			"INSERT INTO products(name, category, price, sale, image_link, tags, sell_state) 
			VALUE (
				
				'{$product->name}',
				'{$product->category}',
				'{$product->price}',
				'{$product->sale}',
				'{$product->imageLink}',
				'{$temp}',
				'{$product->sellState}'
			)"
		);

		$this->runQuery(
			"INSERT INTO storage(product_id, amount)
			VALUE (
				{$product->getId()},
				'{$product->getAmount()}'
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
			SET name = '{$product->getName()}',
				category = '{$product->getCategory()}',
				price = '{$product->getPrice()}',
				sale = '{$product->getSale()}',
				image_link = '{$product->getImageLink()}',
				tags = '{implode(' ', $product->getTags())}',
				sell_state = '{$product->getSellState()}'
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
				{$review->getUserId()}',
				'{$review->getProductId()}',
				'{$review->getContent()}',
				'{$review->getPostedTime()}',
				'{$review->getRating()}'
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