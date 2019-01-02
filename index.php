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

if (isset($_GET['ctrl'])) {
  switch ($_GET['ctrl'])
  {
    case 'login':
      include_once("controllers/utilities.php");
      Login($_POST['loginID'], $_POST['loginPW']);
      header("Location: index.php");
      break;
    case 'logout':
      include_once("controllers/utilities.php");
      Logout();
      header("Location: index.php");
      break;
  }
}
else {
  include_once("controllers/home.php");
}
  

?>