jQuery(document).ready(function ($) {
    // jQuery sticky Menu
    $('.mainmenu-area').sticky({
        topSpacing: 0
    });


    $('.product-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        nav: true,
        margin: 20,
        mouseDrag: false,
        touchDrag: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });

    $('.related-products-carousel').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        nav: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 5
            }
        }
    });

    $('.brand-list').owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        nav: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    // Bootstrap Mobile Menu fix
    // $(".navbar-nav li a").click(function () {
    //     $(".navbar-collapse").removeClass('in');
    // });

    // jQuery Scroll effect
    // $('.navbar-nav li a, .scroll-to-up').bind('click', function (event) {
    //     var $anchor = $(this);
    //     var headerH = $('.header-area').outerHeight();
    //     $('html, body').stop().animate({
    //         scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
    //     }, 1200, 'easeInOutExpo');

    //     event.preventDefault();
    // });

    // // Bootstrap ScrollPSY
    // $('body').scrollspy({
    //     target: '.navbar-collapse',
    //     offset: 95
    // })
});



// Bông Xù Store

function switchForm(frm) {
    var lginfrm = $('#login-form');
    var regfrm = $('#register-form');

    if (frm === "login") {
        lginfrm.css('display', '');
        regfrm.css('display', 'none');
    }
    else if (frm === 'register') {
        lginfrm.css('display', 'none');
        regfrm.css('display', '');
    }
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

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
        console.log(res);
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
              document.location = "index.php";
            }, 1000);
        }
      } 
    );
  }
  
function signup(ev) {
    ev.preventDefault();
    var resBox = $('#register-result');
  
    $('#register-form input').css('border-color','#ddd');
    
    $.post(
      '?u=register',
      {
        regID: $('#register-form input[name=regID]').val(),
        regPW: $('#register-form input[name=regPW').val(),
        regMail: $('#register-form input[name=regMail]').val()
      },
      function(res) {
        console.log(res);
        if (res == 0) {
          resBox.html('Tài khoản hoặc email đã tồn tại !');
          resBox.css('color','red');
          $('#register-form input[name=regID]').css('border-color','#ff0000');
        }
        else if (res == 1) {
          resBox.text('Đăng ký tài khoản thành công!');
          resBox.css('color','green');
          $('#register-form input').css('border-color','#00ff00');
            setTimeout(() => {
            document.location = "index.php";
          }, 1000);
        }
      });
  }



function submitCheckout(ev) {
    ev.preventDefault();

    var billfields = $('input[id^="billing_"]').filter(function() {return this.value == ''});
    var shipfields = null;
    // console.log($('#ship-to-different-address-checkbox').is(':checked'));
    if ($('#ship-to-different-address-checkbox').is(':checked'))
        shipfields = ($('input[id^="shipping_"]').filter(function() {return this.value == ''}));
    // console.log(billfields.length + (shipfields != null ? shipfields.length : 0));
    if (billfields.length + (shipfields != null ? shipfields.length : 0)) {
        alert("Vui lòng điền đầy đủ thông tin để thanh toán!");
    }
    else if (listCart.length > 0) {
        var formData = $("#checkout-form").serializeArray();
        formData.push({name: "cart", value: JSON.stringify(listCart)});
        formData.push({name: "total_price", value: calcPrice()});

        $.post("?u=checkout", formData, function(res) {
            if (res == 1)
                alert("Đơn hàng đã được gửi đi thành công!");
            else
                console.log(res);
            // setTimeout(() => {document.location = "index.php";}, 1000);
        });
    }
    else {
        alert("Giỏ hàng đang rỗng!");
    }
}

// END
