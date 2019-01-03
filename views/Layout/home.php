<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
      <ul class="" id="bxslider-home4">
        <li>
          <img src="files/img/small/img10.jpg" alt="Slide" style="width: 400px; height: 400px; margin-left: 50px" />
          <div class="caption-group">
            <h2 class="caption title">
              Gấu bông cặp <span class="primary">GIẢM GIÁ <strong> 50%</strong></span>
            </h2>
            <h4 class="caption subtitle">Siêu đẹp, siêu mềm.</h4>
            <a class="caption button-radius" href="?page=shop"><span class="icon"></span>Mua ngay</a>
          </div>
        </li>
        <li>
          <img src="files/img/large/img17.jpg" alt="Slide" style="width: 400px; height: 400px; margin-left: 50px" />
          <div class="caption-group">
            <h2 class="caption title">
              Gấu bông lớn
              <span class="primary">GIẢM GIÁ <strong> 30%</strong></span>
            </h2>
            <h4 class="caption subtitle">Mua gấu tặng kèm người.</h4>
            <a class="caption button-radius" href="?page=shop" class="html">
              <span class="icon"></span>Mua ngay</a>
          </div>
        </li>
        <li>
          <img src="files/img/large/img22.jpg" alt="Slide" style="width: 700px; height: 400px; margin-left: 50px" />
          <div class="caption-group" style="right: 0; position: absolute;">
            <h2 class="caption title">
              Bộ chó Husky <span class="primary">GIẢM GIÁ <strong> 25%</strong></span>
            </h2>
            <h4 class="caption subtitle">Đa kích cỡ, tha hồ lựa chọn.</h4>
            <a class="caption button-radius" href="?page=shop"><span class="icon"></span>Mua ngay</a>
          </div>
        </li>
        <li>
          <img src="files/img/pokemon/img62.jpg" alt="Slide" style="width: 500px; height: 400px; margin-left: 50px" />
          <div class="caption-group" style="right: 0; position: absolute;">
            <h2 class="caption title">
              Thú bông POKEMON <span class="primary">Thế hệ <strong>MỚI</strong></span>
            </h2>
            <h4 class="caption subtitle">Bộ Eevee tiến hóa.</h4>
            <a class="caption button-radius" href="?page=shop"><span class="icon"></span>Mua ngay</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- ./Slider -->
  </div>
  <!-- End slider area -->

  <div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo1">
            <i class="fa fa-refresh"></i>
            <p>Đổi trả trong 30 ngày</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo2">
            <i class="fa fa-truck"></i>
            <p>Miễn phí giao hàng</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo3">
            <i class="fa fa-lock"></i>
            <p>Thanh toán an toàn</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-promo promo4">
            <i class="fa fa-gift"></i>
            <p>Hàng mới nhất</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End promo area -->

  <div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="latest-product">
            <h2 class="section-title">Hàng mới nhất</h2>
            <div class="product-carousel">

              <?php
              
              for ($i = 30; $i < 45; $i++){
                // echo json_encode($this->this->productList);
                $discount = $this->productList[$i]->price-$this->productList[$i]->price*$this->productList[$i]->sale;
                echo "
                <div class=\"single-product\" ondragstart=\"itemDrag(event)\" draggable=\"true\" data-itemid=\"{$this->productList[$i]->id}\" data-itemprice=\"{$discount}\">
                  <div class=\"product-f-image\">
                    <img src='{$this->productList[$i]->imageLink}' alt=\"\" style=\"width: 205px; height: 257px;\" />
                    <div class=\"product-hover\">
                      <a href=\"javascript:addToCart({$this->productList[$i]->id})\" class=\"add-to-cart-link\" draggable=\"false\">
                        <i class=\"fa fa-shopping-cart\"></i> Mua hàng
                      </a>
                      <a href=\"?page=product&id={$this->productList[$i]->id}\" class=\"view-details-link\" draggable=\"false\">
                        <i class=\"fa fa-link\"></i> Xem chi tiết
                      </a>
                    </div>
                  </div>

                  <h2>
                    {$this->productList[$i]->name}
                  </h2>

                  <div class=\"product-carousel-price\">
                    <ins>".number_format($discount)."<sup>đ</sup></ins> <del>".number_format($this->productList[$i]->price)."<sup>đ</sup></del>
                  </div>
                </div>";
              }

              ?>
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End main content area -->

  <div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="brand-wrapper">
            <div class="brand-list">
              <img src="assets/img/logo1.png" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo2.png" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo3.jpg" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo4.jpg" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo5.png" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo6.png" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo7.png" alt="" style="width: 270px; height: 170px;" />
              <img src="assets/img/logo8.png" alt="" style="width: 270px; height: 170px;" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End brands area -->

  <div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title">Đang Giảm Giá</h2>
            <a href="?page=shop" class="wid-view-more">Xem tất cả</a>

            <?php
              
              for ($i = 30; $i <= 32; $i++){
                // echo json_encode($this->this->productList);
                $discount = $this->productList[$i]->price-$this->productList[$i]->price*$this->productList[$i]->sale;
                echo "
                <div class=\"single-wid-product\" draggable=\"true\" ondragstart=\"itemDrag(event)\" data-itemid=\"{$this->productList[$i]->id}\" data-itemprice=\"$discount\">
              <a href=\"?page=product&id={$this->productList[$i]->id}\" draggable=\"false\">
                <img src=\"{$this->productList[$i]->imageLink}\" alt=\"\" class=\"product-thumb\" />
                <h2>{$this->productList[$i]->name}</h2>
              </a>
              <div class=\"product-wid-rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
              </div>
              <div class=\"product-wid-price\">
                <ins>".number_format($discount)."<sup>đ</sup></ins> <del>".number_format($this->productList[$i]->price)."<sup>đ</sup></del>
              </div>
            </div>";
              }

              ?>
            

          </div>
        </div>

        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title">Được xem nhiều</h2>
            <a href="?page=shop" class="wid-view-more">Xem tất cả</a>

            <?php
              
              for ($i = 40; $i <= 42; $i++){
                // echo json_encode($this->this->productList);
                $discount = $this->productList[$i]->price-$this->productList[$i]->price*$this->productList[$i]->sale;
                echo "
                <div class=\"single-wid-product\" draggable=\"true\" ondragstart=\"itemDrag(event)\" data-itemid=\"{$this->productList[$i]->id}\" data-itemprice=\"$discount\">
              <a href=\"?page=product&id={$this->productList[$i]->id}\" draggable=\"false\">
                <img src=\"{$this->productList[$i]->imageLink}\" alt=\"\" class=\"product-thumb\" />
                <h2>{$this->productList[$i]->name}</h2>
              </a>
              <div class=\"product-wid-rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
              </div>
              <div class=\"product-wid-price\">
                <ins>".number_format($discount)."<sup>đ</sup></ins> <del>".number_format($this->productList[$i]->price)."<sup>đ</sup></del>
              </div>
            </div>";
              }

              ?>


          </div>
        </div>

        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title">Mới nhất</h2>
            <a href="?page=shop" class="wid-view-more">Xem tất cả</a>

            <?php
              
              for ($i = 50; $i <= 52; $i++){
                // echo json_encode($this->this->productList);
                $discount = $this->productList[$i]->price-$this->productList[$i]->price*$this->productList[$i]->sale;
                echo "
                <div class=\"single-wid-product\" draggable=\"true\" ondragstart=\"itemDrag(event)\" data-itemid=\"{$this->productList[$i]->id}\" data-itemprice=\"$discount\">
              <a href=\"?page=product&id={$this->productList[$i]->id}\" draggable=\"false\">
                <img src=\"{$this->productList[$i]->imageLink}\" alt=\"\" class=\"product-thumb\" />
                <h2>{$this->productList[$i]->name}</h2>
              </a>
              <div class=\"product-wid-rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
              </div>
              <div class=\"product-wid-price\">
                <ins>".number_format($discount)."<sup>đ</sup></ins> <del>".number_format($this->productList[$i]->price)."<sup>đ</sup></del>
              </div>
            </div>";
              }

              ?>


          </div>
        </div>
      </div>
    </div>
  </div>