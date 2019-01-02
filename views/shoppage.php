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

  <div class="product-big-title-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-bit-title text-center">
            <h2>Cửa Hàng</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="single-product-area">
    <div class="zigzag-bottom"></div>

    <div id="shop-filter" class="row justify-content-center">
      <div class="row container mb-3">
        <p class="d-inline-block p-2 m-0 font-weight-bold col-lg-2">Loại mặt hàng:</p>
        <select id="categoryFilter" class="form-control form-control-sm col-lg-3" onChange="shopFilter(this.value);">
          <option value="" selected>Tất cả</option>
          <option value="1">Thú bông nhỏ</option>
          <option value="2">Thú bông lớn</option>
          <option value="3">Thú bông POKEMON</option>
        </select>
        <div class="col-lg-5"></div>
        <div class="col-lg-2 p-2">
          <p class="d-inline-block m-0 font-weight-bold">Sắp xếp:</p>
          <a href="javascript:shopSort(0)">Tăng</a>
          &nbsp;
          <a href="javascript:shopSort(1)">Giảm</a>
        </div>
      </div>
    </div>
    <div class="product-show container">
      <div class="row justify-content-center">
        <!-- Product show here -->

        <script>
          var data = [];
          var filtedData = [];
          const maxLoad = 12;
          function loadProduct(page, array) {
            var container = $('.single-product-area .product-show > .row');
            var content = "";
            for (var i = (page - 1) * 12; i < Math.min(page * 12, array.length); i++) {
              var it = array[i];
              content += `
                    <div class="col-lg-3 col-md-4 col-sm-6" style="max-width: 300px; padding: 0">
                      <div class="single-shop-product" ondragstart="itemDrag(event)" draggable="true" data-itemid="${it.id}">
                        <div class="product-upper">
                          <a href="single-product.html?id=${it.id}" draggable="false">
                            <img src="${it.imageLink}" alt="" style="display: block; margin: 0 auto; width: 250px; height: 280px;" draggable="false">
                            <h2>${it.name}</h2>
                          </a>
                        </div>
                        <div class="product-carousel-price">
                          <ins>${it.sale*it.price}<sup>đ</sup></ins> <del>${it.price}<sup>đ</sup></del>
                        </div>

                        <div class="product-option-shop">
                          <a href="#" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" onclick="addToCart('${it.id}'); return false;" draggable="false">Thêm vào giỏ hàng</a>
                        </div>
                      </div>
                    </div>`
            }
            container.html(content);
          }

          function shopFilter(filterStr, searchStr = "") {
            searchStr = searchStr.toLocaleLowerCase();
            filtedData = data.filter(exp => ((filterStr == "" || filterStr == 'undefined') ? true : (exp.category == filterStr))
              && (exp.category.toLocaleLowerCase().includes(searchStr) || exp.NameSP.toLocaleLowerCase().includes(searchStr)));
            loadProduct(1, filtedData);
            generatePage();
          }
          function shopSort(desc) {
            filtedData.sort((a, b) => desc ? a.SaleSP < b.SaleSP : a.SaleSP > b.SaleSP);
            loadProduct(1, filtedData);
          }
          $(document).ready(function () {
            $.ajax({url: '?c=shop', async: false, type: "GET", success: function(res) {
              data = JSON.parse(res);
              // console.log(data);
              
            }});

            var param = new URLSearchParams(window.location.search);
            var filterStr = param.get('category') || "";
            var searchStr = param.get('q') || "";
            // console.log($('#categoryFilter').text());
            $('#categoryFilter').val(filterStr);
            shopFilter(filterStr, searchStr);
          });
        </script>


      </div>
    </div>

    <div id="shop-pagination" class="row">
      <div class="col-md-12">
        <div class="product-pagination text-center">
          <nav>
            <ul class="pagination justify-content-center">

              <script>
                function generatePage() {
                  var pageNumber = Math.ceil(filtedData.length / maxLoad);
                  var content = `<li class="page-item"><a href="javascript:loadProduct(${1}, filtedData)" class="page-link" href="" aria-label="Trước"><span aria-hidden="true">&laquo;</span></a></li>`;
                  for (var i = 1; i <= pageNumber; i++) {
                    content += `<li class="page-item"><a href="javascript:loadProduct(${i}, filtedData)" class="page-link">${i}</a></li>`;
                  }
                  content += `<li class="page-item"><a href="javascript:loadProduct(${pageNumber}, filtedData)" class="page-link" href="" aria-label="Sau"><span aria-hidden="true">&raquo;</span></a></li>`;
                  $('#shop-pagination .product-pagination .pagination').html(content);
                }
              </script>
              <!--                              
                <li class="page-item"><a href="javascript:void(0)" class="page-link" href="" aria-label="Trước"><span aria-hidden="true">&laquo;</span></a></li>
                <li class="page-item"><a href="javascript:loadProduct(1, filtedData)" class="page-link">1</a></li>
                <li class="page-item"><a href="javascript:loadProduct(2, filtedData)" class="page-link">2</a></li>
                <li class="page-item"><a href="javascript:loadProduct(3, filtedData)" class="page-link">3</a></li>
                <li class="page-item"><a href="javascript:loadProduct(4, filtedData)" class="page-link">4</a></li>
                <li class="page-item"><a href="javascript:loadProduct(5, filtedData)" class="page-link">5</a></li>
                <li class="page-item"><a href="javascript:void(0)" class="page-link" href="" aria-label="Sau"><span aria-hidden="true">&raquo;</span></a></li> -->

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>



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

  <!-- Script import -->
  <?php include("Layout/script.php"); ?>
  <!-- -------------------------------------- -->
</body>

</html>