<link type="text/css" rel="stylesheet" href="assets/css/dialog.css" />
<div action="#" class="modal fade" role="dialog" id="login-dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #5a88ca url('assets/img/crossword.png') repeat;">
        <button class="close" data-dismiss="modal">x</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 text-center social-connect my-auto">
            <h4 class="modal-title">Kết nối với</h4>
            <ul>
              <li class="fb-login">
                <a href="https://facebook.com" class="btn">
                  <span class="fa fa-2x fa-facebook-square"></span> facebook
                </a>
              </li>
              <li class="gg-login">
                <a href="https://google.com" class="btn">
                  <span class="fa fa-2x fa-google-plus-square"></span>
                  Google
                </a>
              </li>
              <li class="twit-login">
                <a href="https://twitter.com" class="btn">
                  <span class="fa fa-2x fa-twitter-square"></span> Twitter
                </a>
              </li>
            </ul>
          </div>
          <form action="" method="post" class="col-md-6 ml-auto text-center" id="login-form">
            <h4 class="modal-title">Đăng nhập</h4>
            <label for="loginID">Tên đăng nhập</label>
            <input type="text" name="loginID" placeholder="Tên đăng nhập..." />
            <label for="loginPW">Mật khẩu</label>
            <input type="password" name="loginPW" placeholder="Mật khẩu..." />
            <label>
              Chưa có tài khoản? <a href="#" class="openReg" onclick="switchForm('register')">Đăng ký</a>
            </label>
            <label>
              Quên mật khẩu? <a href="#" class="openForgetPW">Tìm mật khẩu</a>
            </label>
            <button type="submit" class="btn" onclick="signin(event)">Đăng nhập</button>
            <label id="login-result" style="text-align: center;"></label>
          </form>
          <form action="" method="post" class="col-md-6 ml-auto text-center" id="register-form" style="display: none;">
            <h5 class="modal-title">Đăng ký</h5>
            <label for="regID">Tên đăng nhập</label>
            <input type="text" name="regID" placeholder="Tên đăng nhập..." />
            <label for="regPW">Mật khẩu</label>
            <input type="password" name="regPW" placeholder="Mật khẩu..." />
            <label for="regMail">Địa chỉ Email</label>
            <input type="email" name="regMail" placeholder="abc@xyz.com" />
            <label>Đã có tài khoản? <a href="#" onclick="switchForm('login')">Đăng nhập</a></label>
            <button type="submit" class="btn" onclick="signup(event)">Đăng ký</button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <span style="margin: 0 auto;font-size: 13px; color: #8f8686;">Bông Xù Store &copy; 2018</span>
      </div>
    </div>
  </div>
</div>
<script>
function signin(ev) {  
  ev.preventDefault();
  var resBox = $('#login-result');

  $('#login-form input').css('border-color','#ddd');

  $.post(
    '?u=login',
    {
      loginID: $('#login-form input[name=loginID]').val(),
      loginPW: $('#login-form input[name=loginPW').val()
    },
    function(res) {
      // console.log(res);
      if (res == 0) {
        resBox.html('Tài khoản không tồn tại!');
        resBox.css('color','red');
        $('#login-form input[name=loginID]').css('border-color','#ff0000');
      }
      else if (res == 1) {
        resBox.html('Sai mật khẩu!');
        resBox.css('color','red');
        $('#login-form input[name=loginPW]').css('border-color','#ff0000');
      }
      else if (res == 2) {
          resBox.text('Đăng nhập thành công');
          resBox.css('color','green');
          $('#login-form input').css('border-color','#00ff00');
        setTimeout(() => {
        document.location = document.location;
        }, 1000);
      }
    } 
  );
}
function signup(ev) {
  ev.preventDefault();
}
</script>