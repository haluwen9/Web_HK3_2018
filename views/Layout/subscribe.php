<script>
  function subscribe(ev) {
    ev.preventDefault();
    $.post(
      '?u=contact&act=subscribe',
      {
        email: $('#subscribe-email').val()
      },
      function(res) {
        if (res == "true" || res == true) {
          alert("Đăng ký nhận thông báo thành công");
        }
      }
    )
  }
</script>

<div class="zigzag-bottom"></div>
<div class="container">
  <div class="row">

    <div class="col-md-3 col-sm-6">
      <div class="footer-about-us">
        <h2><span>Bông Xù Store</span></h2>
        <p>
          Cửa hàng chúng tôi bán tất cả các loại thú bông có trên Thế Giới. Chúng tôi liên kết với tất cả các công
          ty và doanh nghiệp nổi tiếng trên toàn Thế Giới, vì vậy chất lượng thú bông của chúng tôi rất tuyệt vời
          và đáng giá mà các bạn bỏ ra. Các bạn có thể đặt làm thú nhồi bông riêng theo mẫu hình, khuôn mà các bạn
          có, giá cả rất hợp lý, nhận, làm và giao hàng rất nhanh.
        </p>
        <div class="footer-social">
          <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
          <a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="footer-menu">
        <h2 class="footer-wid-title">Điều Hướng</h2>
        <ul>
          <li><a href="?">Trang chủ</a></li>
          <li><a href="?page=shop">Cửa hàng</a></li>
          <li><a href="?page=cart">Giỏ hàng</a></li>
          <li><a href="?page=checkout">Thanh toán</a></li>
          <li><a href="?page=contact">Liên hệ</a></li>
        </ul>
      </div>
    </div>

    <!-- <div class="col-md-3 col-sm-6">
      <div class="footer-menu">
        <h2 class="footer-wid-title">Danh Mục</h2>
        <ul>
          <li><a href=shop.html?category=Thú bông nhỏ" class="dropdown-item">Thú bông nhỏ</a></li>
          <li><a href="shop.html?category=Thú bông lớn" class="dropdown-item">Thú bông lớn</a></li>
          <li><a href="shop.html?category=Thú bông POKEMON" class="dropdown-item">Thú bông POKEMON</a></li>
        </ul>
      </div>
    </div> -->

    <div class="col-md-4 col-sm-6">
      <div class="footer-newsletter">
        <h2 class="footer-wid-title">Nhận thông báo</h2>
        <p>
          Nếu bạn muốn nhận thông tin mới nhất của chúng tôi thường xuyên, hãy đăng ký Email ở đây nhé!
        </p>
        <div class="newsletter-form">
          <form action="#">
            <input id="subscribe-email" name="email" type="email" placeholder="Nhập Email" />
            <input type="submit" value="Nhận thông báo" onclick="subscribe(event)"/>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>