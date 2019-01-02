<!DOCTYPE html>
<!--
  ustora by freshdesignweb.com
  Twitter: https://twitter.com/freshdesignweb
  URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<?php include("Layout/header.php") ?>
<body>
  <div class="header-area">
    <?php include("Layout/topbar.php") ?>
  </div>
  <!-- End header area -->

  <div class="site-branding-area">
    <?php include("Layout/brand.php") ?>
  </div>
  <!-- End site branding area -->

  <div class="mainmenu-area">
    <?php include("Layout/navbar.php") ?>
  </div>
  <!-- End mainmenu area -->

  <!-- Main Content Area -->
  <?php include("Layout/home.php") ?>
  <!-- End Main Content Area -->

  <div class="footer-top-area">
    <?php include("Layout/subscribe.php") ?>
  </div>
  <!-- End footer top area -->

  <div class="footer-bottom-area">
    <?php include("Layout/footer.php") ?>
  </div>
  <!-- End footer bottom area -->

  <!-- Login box area -->
  <?php
    if (!isset($_SESSION["userSession"])) include("Layout/login.php");
  ?>
  <!-- End Login box area -->

  <?php include("Layout/script.php") ?>
</body>

</html>