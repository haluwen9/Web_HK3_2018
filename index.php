<?php 
session_start();


$homeUrl = $_SERVER['REQUEST_URI'];
$asset_folder = $homeUrl."assets";
$files_folder = $homeUrl."/files";

if (isset($_GET['ctrl'])) {
  switch ($_GET['ctrl'] == 'login')
  {
    case 'login':
      include_once("controllers/utilities.php");
      Login($_POST['loginID'], $_POST['loginPW']);
      header("Location: index.php");
      break;
  }
}
else {
  include_once("controllers/home.php");
}
  

?>