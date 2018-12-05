
$(window).scroll(function() {
    var cart = $('.shopping-item');

    if (window.pageYOffset >= 82 && $(document).width() >= 559) cart.addClass('shopping-cart');
    else cart.removeClass('shopping-cart');
});

var listCart = [];

$(document).ready(function() {
    var amount = 0;
    if (typeof(Storage) !== 'undefined') {
        if (localStorage.cart) {
            listCart = JSON.parse(localStorage.cart).list;
            listCart.forEach(item => amount += item.price);
        }
    }
    $('.product-count').text(listCart.length);
    $('.cart-amunt').text('$' + amount);
});