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
            <a class="caption button-radius" href="single-product.html?id=10"><span class="icon"></span>Mua ngay</a>
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
            <a class="caption button-radius" href="single-product.html?id=17" class="html">
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
            <a class="caption button-radius" href="single-product.html?id=22"><span class="icon"></span>Mua ngay</a>
          </div>
        </li>
        <li>
          <img src="files/img/pokemon/img62.jpg" alt="Slide" style="width: 500px; height: 400px; margin-left: 50px" />
          <div class="caption-group" style="right: 0; position: absolute;">
            <h2 class="caption title">
              Thú bông POKEMON <span class="primary">Thế hệ <strong>MỚI</strong></span>
            </h2>
            <h4 class="caption subtitle">Bộ Eevee tiến hóa.</h4>
            <a class="caption button-radius" href="single-product.html?id=55"><span class="icon"></span>Mua ngay</a>
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
              include_once("../models/product_model.php");

              $model = new productModel();
              $list = array(); 
              $list = $model->getAllProducts();

              for ($i = 0; $i < 15; $i++){
                echo "
                <div class="single-product" ondragstart="itemDrag(event)" draggable="true" data-itemid="2">
                  <div class="product-f-image">
                    <img src="{$list[$i]->getImageLink()}" alt="" style="width: 205px; height: 257px;" />
                    <div class="product-hover">
                      <a href="javascript:addToCart({$list[$i]->getId()})" class="add-to-cart-link" draggable="false">
                        <i class="fa fa-shopping-cart"></i> Mua hàng
                      </a>
                      <a href="single-product.html?id={$list[$i]->getId()}" class="view-details-link" draggable="false">
                        <i class="fa fa-link"></i> Xem chi tiết
                      </a>
                    </div>
                  </div>

                  <h2>
                    {$list[$i]->getName()}
                  </h2>

                  <div class="product-carousel-price">
                    <ins>{$list[$i]->getSale()}<sup>đ</sup></ins> <del>{$list[$i]->getPrice()}<sup>đ</sup></del>
                  </div>
                </div> "
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
            <a href="shop.html" class="wid-view-more">Xem tất cả</a>

            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="10">
              <a href="single-product.html?id=10" draggable="false">
                <img src="files/img/small/img10.jpg" alt="" class="product-thumb" />
                <h2>Gấu bông cặp VIOLET-PINK</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>300000<sup>đ</sup></ins> <del>600000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="17">
              <a href="single-product.html?id=17" draggable="false">
                <img src="files/img/large/img17.jpg" alt="" class="product-thumb" />
                <h2>Gấu bông to loại 1</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>280000<sup>đ</sup></ins> <del>400000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="22">
              <a href="single-product.html?id=22" draggable="false">
                <img src="files/img/large/img22.jpg" alt="" class="product-thumb" />
                <h2>Bộ Husky Nga</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>600000<sup>đ</sup></ins> <del>800000<sup>đ</sup></del>
              </div>
            </div>


          </div>
        </div>

        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title">Được xem nhiều</h2>
            <a href="shop.html" class="wid-view-more">Xem tất cả</a>

            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="6">
              <a href="single-product.html?id=6" draggable="false">
                <img src="files/img/small/img6.jpg" alt="" class="product-thumb">
                <h2>Gấu bông nhỏ loại 1</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>200000<sup>đ</sup></ins> <del>230000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="20">
              <a href="single-product.html?id=20" draggable="false">
                <img src="files/img/large/img20.jpg" alt="" class="product-thumb" />
                <h2>Gấu bông to VIOLET</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>400000<sup>đ</sup></ins> <del>450000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="15">
              <a href="single-product.html?id=15" draggable="false">
                <img src="files/img/large/img15.jpg" alt="" class="product-thumb" />
                <h2>Bộ Totoro</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>650000<sup>đ</sup></ins> <del>700000<sup>đ</sup></del>
              </div>
            </div>


          </div>
        </div>

        <div class="col-md-4">
          <div class="single-product-widget">
            <h2 class="product-wid-title">Mới nhất</h2>
            <a href="shop.html" class="wid-view-more">Xem tất cả</a>

            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="55">
              <a href="single-product.html?id=55" draggable="false">
                <img src="files/img/pokemon/img62.jpg" alt="" class="product-thumb" a>
                <h2>Bộ Eevee tiến hóa</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>5000000<sup>đ</sup></ins> <del>5200000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="54">
              <a href="single-product.html?id=54" draggable="false">
                <img src="files/img/pokemon/img61.jpg" alt="" class="product-thumb">
                <h2>POKEMON tân binh</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>1000000<sup>đ</sup></ins> <del>1100000<sup>đ</sup></del>
              </div>
            </div>


            <div class="single-wid-product" draggable="true" ondragstart="itemDrag(event)" data-itemid="23">
              <a href="single-product.html?id=23" draggable="false">
                <img src="files/img/pokemon/img31.jpg" alt="" class="product-thumb" a>
                <h2>Pikachu</h2>
              </a>
              <div class="product-wid-rating">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <div class="product-wid-price">
                <ins>69000<sup>đ</sup></ins> <del>79000<sup>đ</sup></del>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End product widget area -->