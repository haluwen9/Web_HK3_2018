<?php

include_once("models/product_model.php");

class productController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new productModel;
    }

    public function invoke($ProductID)
    {
        $product = $this->productModel->getProductById($ProductID);
        if ($product != NULL)
        {
            $category = $this->productModel->getCategoryById($product->category);
            include_once("views/single-product.php");
            return TRUE;
        }

        return FALSE;
    }
}

?>