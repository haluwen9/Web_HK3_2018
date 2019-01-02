<?php

include_once("models/product_model.php");

class shopController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new productModel();
    }

    public function invoke()
    {
        $productList = NULL;
        $categoryList = $this->productModel->getCategories();

        if (isset($_GET['category']))
        {
            $productList = $this->productModel->getProductsByCategory($_GET['category']);
        }
        else
        {
            $productList = $this->productModel->getAllProducts();
        }

        include_once("views/shop.html");
    }
}

?>