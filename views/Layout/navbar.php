<div class="container">
  <div class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <!-- <div class="navbar-header"> -->
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar-collapse">
      <!--
          <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
        -->
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="navbar-brand"><a href="?">Bông Xù Store</a></span>
    <!-- </div> -->
    <div class="navbar-collapse collapse" id="main-navbar-collapse">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="?">
            <span class="nav-hidden"><span class="fa fa-2x fa-home"></span><br /></span>Trang chủ
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=shop">
            <span class="nav-hidden"><span class="fa fa-2x fa-shopping-cart"></span><br /></span>Cửa hàng
          </a>
        </li>
        <!--
            <li class="nav-item"><a class="nav-link" href="single-product.html">Single product</a></li>
          -->
        <!--
            <li class="nav-item"><a class="nav-link" href="cart.html">Cart</a></li>
          -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="category-dropdown" data-toggle="dropdown" data-hover="dropdown"
            aria-expanded="false" href="#">
            <span class="nav-hidden"><span class="fa fa-2x fa-list-ul"></span><br /></span>
            Danh mục
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="category-dropdown">
            <!-- <a href="?page=shop&category=1" class="dropdown-item">Thú bông nhỏ</a>
            <a href="?page=shop&category=2" class="dropdown-item">Thú bông lớn</a>
            <a href="?page=shop&category=3" class="dropdown-item">Thú bông POKEMON</a> -->
            <script>
              $.ajax({
                url: '?u=category',
                async: true,
                success: function (res) {
                  var cate = JSON.parse(res);
                  var html = "";
                  cate.forEach(item => {
                    console.log(item);
                    html += `<a href="?page=shop&category=${item.id}" class="dropdown-item">${item.name}</a>`;
                  });
                  $('#category-dropdown ~ div').html(html);
                }
              });
            </script>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=cart">
            <span class="nav-hidden"><span class="fa fa-2x fa-gift"></span><br /></span>
            Giỏ hàng
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=checkout">
            <span class="nav-hidden">
              <span class="fa fa-2x far fa-credit-card"></span><br>
            </span>
            Thanh toán
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contact">
            <span class="nav-hidden"><span class="fa fa-2x fa-phone"></span><br /></span>
            Liên hệ
          </a>
        </li>
        <li class="dropdown nav-item searchbox">
          <a href="#" id="searchbox-dropdown" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <span class="nav-hidden"><span class="fa fa-2x fa-search"></span><br /></span>
            Tìm kiếm
          </a>
          <div class="dropdown-menu dropdown-menu-right bg-light p-2 border-0" aria-labelledby="searchbox-dropdown">
            <form action="?page=shop" class="form-inline dropdown-item" method="GET">
              <input name="page" type="hidden" value="shop" />
              <input name="q" class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm..." aria-label="Search" />
              <button type="submit" class="btn-success" style="line-height: 0">
                <span class=" fa fa-search"></span>
              </button>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>