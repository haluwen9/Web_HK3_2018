<?php

include_once("models/product_model.php");

class cartController
{
    public function __construct(){}

    public function invoke()
    {
        include_once("views/cart.php");
    }

}

?>