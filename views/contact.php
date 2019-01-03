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
  <!--
      ----------------------------------------------------------------------------------
    -->
  <script>
  //   curl -s \
  // -X POST \
  // --user "$MJ_APIKEY_PUBLIC:$MJ_APIKEY_PRIVATE" \
  // https://api.mailjet.com/v3/send \
  // -H 'Content-Type: application/json' 

    function sendFeedback(ev) {
      ev.preventDefault();
      if ($('#contact-name').val() == "") {
        alert('Yêu cầu nhập tên');
        return;
      }
      if ($('#contact-email').val() == "") {
        alert('Yêu cầu nhập email');
        return;
      }
      $.post(
          '?u=contact&act=feedback',
          {
            name:$('#contact-name').val(),
            email:$('#contact-email').val(),
            subject:$('#contact-subject').val(),
            content:$('#contact-content').val(),
          },
          function(res) {
            alert(res);
            setTimeout(() => {
              document.location = "?";  
            }, 1000);
          }
        );
    }
  </script>
  
  <div class="maincontent-area">
    <div class="container">
      <form class="form-group" action="" method="POST">
        <div class="content-contact row">
          <div class="col-md-6">
            <h1>Góp ý</h1>
            <label for="contact-name">
              <h5>Tên của bạn (bắt buộc):</h5>
            </label>
            <input id="contact-name" class="form-text w-100 mb-3" type="text" name="name" />
            <label for="contact-email">
              <h5>Email (bắt buộc):</h5>
            </label>
            <input id="contact-email" class="form-text w-100 mb-3" type="text" name="email" />
            <label for="contact-subject">
              <h5>Tiêu đề:</h5>
            </label>
            <input id="contact-subject" class="form-text w-100 mb-3" type="text" name="subject" />
            <label for="contact-content">
              <h5>Nội dung:</h5>
            </label>
            <textarea id="contact-content" class="form-text w-100 mb-3" name="content"></textarea>
            <input class="w-100" type="submit" value="Gửi đi" onclick="sendFeedback(event)" />
          </div>
          <div class="col-md-6">
            <h1>Liên hệ</h1>
            <div class="">
              <h5>Bông Xù Store - Chuyên gấu bông cho đời sống thêm vui</h5>
              <br />
              <h5>Địa chỉ:</h5>
              <p>280 An Dương Vương, Phường 4, Quận 5, TP.HCM</p>
              <h5>ĐT:</h5>
              <p>0935587687</p>

              <h5>Email:</h5>
              <p><a href="mailto:admin@bongxustore.cf">admin@bongxustore.cf</a></p>
            </div>
            <div class="footer-social">
              <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
              <a href="https://vn.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </form>
      <!-- </div> -->
    </div>
    <div style="clear: left;"><br /></div>
    <!-- End main content area -->
    <!--
      ----------------------------------------------------------------------------------
    -->
    <div class="footer-top-area">
      <?php include("Layout/subscribe.php") ?>
    </div>
    <!-- End footer top area -->

    <div class="footer-bottom-area">
      <?php include("Layout/footer.php") ?>
    </div>
    <!-- End footer bottom area -->

    <?php
      if (!isset($_SESSION["userSession"])) include("Layout/login.php");
    ?>

    <?php include("Layout/script.php") ?>
</body>

</html>