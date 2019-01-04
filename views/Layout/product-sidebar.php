<div class="col-lg-4">
    <div class="single-sidebar">
    <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
    <form action="?page=shop.html" method="GET">
        <input name="q" type="text" placeholder="Tìm kiếm sản phẩm...">
        <input type="submit" value="Tìm kiếm">
    </form>
    </div>

    <div class="single-sidebar">
    <h2 class="sidebar-title">Các sản phẩm mới</h2>
    <div id="NewProducts">
        <script>
            // San pham moi
            var data = [];
            $.ajax({
                async: false,
                url: '?u=product&id=promoted',
                success: function (res) {
                    // console.log(JSON.parse(res));
                    data = JSON.parse(res);
                }
            });
            // console.log(data);
            var txt = "";
            for (var i = 0; i < data.length && i < 4; ++i) {
                txt += `<div class="thubmnail-recent">
                        <img src="${data[i].imageLink}" class="recent-thumb" alt="">
                        <h2><a href="single-product.html?id=${data[i].id}">${data[i].name}</a></h2>
                        <div class="product-sidebar-price">
                            <ins>${data[i].price*(1-data[i].sale)}<sup>đ</sup></ins>
                            <del>${data[i].price}<sup>đ</sup></del>
                        </div>
                        </div>`;
            }
            $('#NewProducts').html(txt);
        </script>
    </div>
    </div>

    <div class="single-sidebar">
    <h2 class="sidebar-title">Sản phẩm bán chạy</h2>
    <ul id="TopSell">
    <script>
            // San pham moi
            var data = [];
            $.ajax({
                async: false,
                url: '?u=product&id=promoted',
                success: function (res) {
                    // console.log(JSON.parse(res));
                    data = JSON.parse(res);
                }
            });
            // console.log(data);
            var txt = "";
            for (var i = 0; i < data.length && i < 2; ++i) {
                txt += `<div class="thubmnail-recent">
                        <img src="${data[i].imageLink}" class="recent-thumb" alt="">
                        <h2><a href="single-product.html?id=${data[i].id}">${data[i].name}</a></h2>
                        <div class="product-sidebar-price">
                            <ins>${data[i].price*(1-data[i].sale)}<sup>đ</sup></ins>
                            <del>${data[i].price}<sup>đ</sup></del>
                        </div>
                        </div>`;
            }
            $('#TopSell').html(txt);
        </script>
    </ul>
    </div>
</div>