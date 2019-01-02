<div class="single-product-area">
<div class="zigzag-bottom"></div>
<div class="container">
    <div class="row">
    <div class="col-md-4">
        <div class="single-sidebar">
        <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
        <form action="shop.html" method="GET">
            <input name="q" type="text" placeholder="Tìm kiếm...">
            <input type="submit" value="Tìm">
        </form>
        </div>

        <div class="single-sidebar">
        <h2 class="sidebar-title">Các sản phẩm mới</h2>
        <div id="SPNew">
            <script>
            // San pham moi
            var txt = "";
            var n = data.length - 1;
            for (var i = n; i >= n - 3 && i >= 0; i--)
                txt += `<div class="thubmnail-recent">
                        <img src="${data[i].LinkImageSP}" class="recent-thumb" alt="">
                        <h2><a href="single-product.html?id=${data[i].Id}">${data[i].NameSP}</a></h2>
                        <div class="product-sidebar-price">
                            <ins>${data[i].SaleSP}<sup>đ</sup></ins>
                            <del>${data[i].money}<sup>đ</sup></del>
                        </div>
                        </div>`;
            document.getElementById("SPNew").innerHTML = txt;
            </script>
        </div>
        </div>

        <div class="single-sidebar">
        <h2 class="sidebar-title">Sản phẩm bán chạy</h2>
        <ul id="SPBanChay">
            <script>
            // San pham ban chay
            txt = "";
            var n = data.length - 1;
            for (var i = n; i >= n - 4 && i >= 0; i--)
                txt += `<li><a href="single-product.html?id=${data[i].Id}">${data[i].NameSP}</a></li>`;

            document.getElementById("SPBanChay").innerHTML = txt;
            </script>
        </ul>
        </div>
    </div>
    <div class="col-md-8">
        <div class="product-content-right">
        <div class="product-breadcroumb">
            <a href="index.html">Trang chủ</a>
            <a href="javascript:document.location.href = `index.php?page=shop&category=<?php echo $product->category?>`">
            <?php echo $category; ?>
            </a>
            <a href="#">
            <?php echo $product->name; ?>
            </a>
        </div>

        <div class="row">
            <div class="col-sm-6">
            <div class="product-images">
                <div class="product-main-img">
                    <?php echo "<img src=\"$product->imageLink\">";?>
                </div>
            </div>
            </div>

            <div class="col-sm-6">
            <div class="product-inner">
                <h2 class="product-name">
                    <?php echo $product->name; ?>
                </h2>
                <div class="product-inner-price">
                <b>Giá bán:</b>
                <ins>
                    <?php echo $product->price-$product->price*$product->sale; ?>
                    <sup>đ</sup>
                </ins>
                <b>Giá cũ:</b>
                <del>
                <?php echo $product->price; ?>
                    <sup>đ</sup>
                </del>
                </div>

                <form action="" class="cart">
                <div class="quantity">
                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity"
                    min="1" step="1" onkeypress="validateNumber(event)">
                </div>
                <a href="javascript: addToCart(<?php echo $product->id ?>,$('.input-text.qty').val());" class="add_to_cart_button w-auto"
                    data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" draggable="false">Thêm
                    vào giỏ hàng</a>
                </form>

                <div class="product-inner-category">
                <p>Category:
                    <a href="">
                    <?php echo $category; ?></a> <br>
                    Tags: <a href=""><?php echo implode(', ', $product->tags) ?></a>.
                </p>
                </div>



            </div>
            </div>
        </div>


        <div class="row">
            <div role="tabpanel" class="col-12">
            <ul class="product-tab nav nav-tabs" role="tablist">
                <li role="presentation" class="nav-item">
                <a href="#description" aria-controls="description" role="tab" data-toggle="tab" class="nav-link active">
                    Mô tả
                </a>
                </li>

                <li role="presentation" class="nav-item">
                <a href="#comment" aria-controls="comment" role="tab" data-toggle="tab" class="nav-link">
                    Nhận xét
                </a>
                </li>
            </ul>
            <div class="tab-content mt-2">
                <div role="tabpanel" class="tab-pane fade active show" id="description">
                <h2>Mô tả sản phẩm</h2>
                <p>Một đoạn mô tả sản phẩm ngắn gọn về xuất sứ, chất liệu, kích cỡ...</p>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="comment">
                <h2>Nhận xét của khách hàng</h2>
                <ul type="none">
                    <li>
                    <b>Lương Công Tâm: </b>
                    <div class="customer-rating-wrap-post d-inline">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Sản phẩm có chất lượng rất tốt, tôi rất thích sản phẩm của shop.</p>
                    </li>
                    <li>
                    <b>Vương Lê Minh Nguyên: </b>
                    <div class="customer-rating-wrap-post d-inline">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Sản phẩm tốt.</p>
                    </li>
                    <li><b>Nguyễn Thiên Ân: </b>
                    <div class="customer-rating-wrap-post d-inline">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Shop chăm sóc khách hàng rất tốt, sản phẩm cũng rất chất lượng. 5 <i class="fa fa-star"></i>
                        cho Shop.</p>
                    </li>
                    <li><b>Hồ Khả Việt Huấn: </b>
                    <div class="customer-rating-wrap-post d-inline">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Sản phẩm vượt xa sự mong đợi của khách hàng. <i class="fa fa-thumbs-up"></i></p>
                    </li>
                </ul>
                <h2>Thêm nhận xét</h2>
                <div class="submit-review">
                    <p><label for="name">Tên</label> <input name="name" type="text"></p>
                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                    <div class="rating-chooser">
                    <p>Bình chọn</p>

                    <div class="rating-wrap-post">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    </div>
                    <p><label for="review">Nhận xét của bạn</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                    <p><input type="submit" value="Submit"></p>
                </div>
                </div>
            </div>
            </div>
        </div>


        </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="related-products-wrapper">
        <h2 class="related-products-title">Sản phẩm liên quan</h2>
        <div class="related-products-carousel" id="mathang">
            <script>
            // San pham lien quan
            txt = "";
            var n = data.length - 1;
            for (var i = n; i >= n - 9 && i >= 0; i--)
                txt += `<div class="single-product">
                        <div class="product-f-image">
                            <img style=" height: 297px;" src="${data[i].LinkImageSP}"alt="">
                            <div class="product-hover">
                            <a href="javascript:addToCart(${data[i].Id})" class="add-to-cart-link">
                                <i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                            <a class="view-details-link" href="single-product.html?id=${data[i].Id}">
                            <i class="fa fa-link"></i>Thông tin</a>
                            </div>
                        </div>
                        <h2><a href="single-product.html?id=${data[i].Id}">${data[i].NameSP}</a></h2>
                        <div class="product-carousel-price">
                            <ins>$${data[i].SaleSP}</ins>
                            <del>$${data[i].money}</del>
                        </div>
                        </div>`;
            document.getElementById("mathang").innerHTML = txt;

            </script>
        </div>

        </div>
    </div>
    </div>

</div>
</div>