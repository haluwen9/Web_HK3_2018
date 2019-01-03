<?php
  include_once("models/product_model.php");

class homeController
{
    private $productModel;
    private $categoryList;
    private $productList;

    public function __construct()
    {
        $this->productModel = new productModel();

        $this->categoryList = $this->productModel->getCategories();
        $this->productList = $this->productModel->getAllProducts();
    }

    public function invoke()
    {
        include_once("views/homepage.php");
    }

    public function getAllProducts() {
        return $this->productModel->getAllProducts();
    }
}
?>