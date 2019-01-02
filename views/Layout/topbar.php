<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="user-menu">
        <ul>
          <li style="display: none;">
            <a href="#"><i class="fa fa-user"></i> My Account</a>
          </li>
          <li style="display: none;">
            <a href="#"><i class="fa fa-heart"></i> Wishlist</a>
          </li>
          <li>
            <a href="cart.html"><i class="fa fa-user"></i> Giỏ hàng của tôi</a>
          </li>
          <?php
            if (isset($_SESSION['userSession'])) {
              $str = $_SESSION['userSession']->getFirstname();
              echo "
              <li>
                <a href=\"#\"><i class=\"fa fa-user\"></i>Xin chào, $str</a>
              </li>
              <li>
                <a href=\"?ctrl=logout\">
                  <i class=\"fa fa-user\"></i> Đăng xuất</a>
              </li>";
            }
            else {
              echo "
              <li>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-dialog\" onclick=\"switchForm('login')\">
                  <i class=\"fa fa-user\"></i> Đăng nhập</a>
              </li>
              <li>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-dialog\" onclick=\"switchForm('register')\">
                  <i class=\"fa fa-user\"></i> Đăng ký</a>
              </li>";
            }
          ?>
        </ul>
      </div>
    </div>

    <!-- <div class="col-md-5">
      <div class="header-right">
        <ul class="list-unstyled list-inline">
          <li class="dropdown  list-inline-item">
            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Tiền
                tệ : </span><span class="value">VNĐ <span class="flag-icon flag-icon-vn"></span></span><b class="caret"></b></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="dropdown-item">
                <a href="#"><span class="flag-icon flag-icon-us"></span> USD</a>
              </li>
              <li class="dropdown-item">
                <a href="#"><span class="flag-icon flag-icon-vn"></span> VNĐ</a>
              </li>
            </ul>
          </li>
          
          <li class="dropdown list-inline-item">
            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn
                ngữ : </span><span class="value">Tiếng Việt </span><span class="flag-icon flag-icon-vn"></span><b
                class="caret"></b></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="dropdown-item">
                <a href="#"><span class="flag-icon flag-icon-us"></span> English</a>
              </li>
              <li class="dropdown-item">
                <a href="#"><span class="flag-icon flag-icon-vn"></span>
                  Tiếng Việt</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div> -->
  </div>
</div>