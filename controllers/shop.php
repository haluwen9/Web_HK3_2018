<?php

include_once("models/product_model.php");

class shopController
{
    private $productModel;
    private $categoryList;
    private $productList;

    public function __construct()
    {
        $this->productModel = new productModel();
    }

    public function invoke()
    {
        $productList = NULL;
        $categoryList = $this->productModel->getCategories();
        $productList = $this->productModel->getAllProducts();

        include_once("views/shoppage.php");
    }

    public function getAllProducts() {
        return $this->productModel->getAllProducts();
    }
}

?>