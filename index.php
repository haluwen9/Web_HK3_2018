<?php 
include_once("models/entities/order.php");
include_once("models/entities/product.php");
include_once("models/entities/product_category.php");
include_once("models/entities/review.php");
include_once("models/entities/shipping_info.php");
include_once("models/entities/user.php");

session_start();

$homeUrl = $_SERVER['REQUEST_URI'];

if (isset($_GET['u'])) {
  switch ($_GET['u'])
  {
    case 'login':
      include_once("controllers/utilities.php");
      echo Login($_POST['loginID'], $_POST['loginPW']);
      // header("Location: index.php");
      break;
    case 'logout':
      include_once("controllers/utilities.php");
      Logout();
      header("Location: index.php");
      break;
    case 'register':
      include_once("controllers/utilities.php");
      echo Signup($_POST['regID'], $_POST['regPW'], $_POST['regMail']);
      // header("Location: index.php");
      break;
    case 'product':
      if (isset($_GET['id'])) {
        include_once("models/product_model.php");
        echo json_encode((new productModel)->getProductById($_GET['id']));
      }
      break;
    case 'category':
      include_once("models/product_model.php");
      echo json_encode((new productModel)->getCategories());
      break;
  }
}
else if (isset($_GET['page'])) {
  switch ($_GET['page'])
  {
    case 'shop':
      include_once("controllers/shop.php");
      $shopController = new shopController;
      $shopController->invoke();
      break;
    case 'product':
      if (!isset($_GET['id'])) {
        header("Location: index.php?page=shop");
      }
      else {
        include_once("controllers/single-product.php");
        $productController = new productController;
        if (!$productController->invoke($_GET['id']))
          header("Location: index.php?page=shop");
      }
      break;
    case 'cart':
      include_once("controllers/cart.php");
      $cartController = new cartController;
      $cartController->invoke();
      break;
    case 'checkout':
      include_once("controllers/checkout.php");
      $checkoutController = new checkoutController;
      $checkoutController->invoke();
      break;
    default:
      include_once("controllers/home.php");
  }
}
else {
  include_once("controllers/home.php");
  $homeController = new homeController();
  $homeController->invoke();
}
  

  // if (isset($_GET["c"]) && $_GET["c"]=="shop") {
  //   include_once("controllers/shop.php");
  //   $s = new shopController();
  //   echo json_encode($s->getAllProducts());
  // }
  // else {
  //   include_once("controllers/home.php");
  // }
?>