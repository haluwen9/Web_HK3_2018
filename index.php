<?php 
include_once("models/entities/order.php");
include_once("models/entities/product.php");
include_once("models/entities/product_category.php");
include_once("models/entities/review.php");
include_once("models/entities/shipping_info.php");
include_once("models/entities/user.php");

session_start();


$homeUrl = $_SERVER['REQUEST_URI'];
$asset_folder = $homeUrl."assets";
$files_folder = $homeUrl."/files";

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
      header("Location: ?");
      break;
    case 'register':

    beak;
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
  }
}
else {
  include_once("controllers/home.php");
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