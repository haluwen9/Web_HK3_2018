<?php

include_once("models/order_model.php");

class checkoutController
{
    private $orderModel;
    public function __construct() {
        $this->orderModel = new orderModel;
    }

    public function invoke() {
        include_once("views/checkout.php");
    }

    public function checkout() {
        $tcart = json_decode($_POST['cart']);
        $cart = array();
        for ($i = 0; $i < count($tcart); ++$i) {
            $cart[$tcart[$i]->id] = $tcart[$i]->amount;
        }
        $si = NULL;
        if (!isset($_POST['ship_to_different_address']))
            $si = new ShippingInfo(
                $_POST['billing_first_name'],
                $_POST['billing_last_name'],
                $_POST['billing_country'],
                $_POST['billing_state'],
                $_POST['billing_city'],
                $_POST['billing_address_1'],
                $_POST['billing_postcode'],
                $_POST['billing_phone'],
                $_POST['order_comments']
            );
        else {
            $si = new ShippingInfo(
                $_POST['shipping_first_name'],
                $_POST['shipping_last_name'],
                $_POST['shipping_country'],
                $_POST['shipping_state'],
                $_POST['shipping_city'],
                $_POST['shipping_address_1'],
                $_POST['shipping_postcode'],
                $_POST['billing_phone'],
                $_POST['order_comments']
            );
        }
        $order = new Order(
            0,
            isset($_SESSION['userSession']) ? $_SESSION['userSession']->id : "__Custormer__",
            isset($_POST['ship_to_different_address']),
            intval($_POST['total_price']),
            $si,
            $cart,
            0
        );
        $this->orderModel->insertOrder($order);
        
        return 1;
    }
}

?>