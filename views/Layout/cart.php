<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="single-sidebar">
            <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
            <form action="shop.html" method="GET">
              <input name="q" type="text" placeholder="Tìm kiếm sản phẩm...">
              <input type="submit" value="Tìm kiếm">
            </form>
          </div>

          <div class="single-sidebar">
            <h2 class="sidebar-title">Các sản phẩm mới</h2>
            <div id="SPNew">

            </div>
          </div>

          <div class="single-sidebar">
            <h2 class="sidebar-title">Sản phẩm bán chạy</h2>
            <ul id="SPBanChay">

            </ul>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="product-content-right">
            <div class="woocommerce">
              <form method="post" action="#">
                <table cellspacing="0" class="shop_table cart" id="cart_items">
                  <thead>
                    <tr>
                      <th class="product-remove">&nbsp;</th>
                      <th class="product-thumbnail">Sản phẩm</th>
                      <th class="product-name">Tên sản phẩm</th>
                      <th class="product-price">Giá</th>
                      <th class="product-quantity">Số lượng</th>
                      <th class="product-subtotal">Tổng cộng</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </form>

              <div class="cart-collaterals">
                <div class="cart_totals ">
                  <h2>Tổng cộng</h2>

                  <table cellspacing="0">
                    <tbody>
                      <tr class="cart-subtotal">
                        <th>Tổng tiền giỏ hàng</th>
                        <td><span class="amount" id="cart_subtotal"></span></td>
                      </tr>

                      <tr class="shipping">
                        <th>Chi phí giao hàng</th>
                        <td>Miễn phí</td>
                      </tr>

                      <tr class="order-total">
                        <th>Tổng tiền đơn hàng</th>
                        <td><strong><span class="amount" id="order_total"></span></strong> </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>