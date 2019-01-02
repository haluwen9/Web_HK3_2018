<?php 
  session_start();


  $homeUrl = $_SERVER['REQUEST_URI'];
  $asset_folder = $homeUrl."assets";
  $files_folder = $homeUrl."/files";


  include_once("controllers/home.php");