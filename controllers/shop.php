<?php

include_once("../models/product_model.php")

class shopController
{
    private $productModel

    public function __construct()
    {
        $this->productModel = new productModel();
    }

    public function invoke()
    {
        $productList = NULL;
        $categoryList = $productModel->getCategories();

        if (isset($_GET['category']))
        {
            $productList = $productModel->getProductsByCategory($_GET['category']);
        }
        else
        {
            $productList = $productModel->getAllProducts();
        }

        include_once("../views/shop.html");
    }
}

?>