
$(window).scroll(function() {
    var cart = $('.shopping-item');

    if (window.pageYOffset >= 82 && $(document).width() >= 559) cart.addClass('shopping-cart');
    else cart.removeClass('shopping-cart');
});

var listCart = [];

$(document).ready(function() {
    if (typeof(Storage) !== 'undefined') {
        if (localStorage.cart) {
            listCart = JSON.parse(localStorage.cart);
        }
    }
    fillCart();
});

function fillCart() {
    var price = '$' + calcPrice();
    $('.product-count').text(listCart.length);
    $('.cart-amunt').text(price);
}

function calcPrice() {
    var totalPrice = 0;
    if (listCart.length > 0) {
        listCart.forEach(item => totalPrice += item.SaleSP);
    }
    return totalPrice;
}

function allowDrop(ev) {
    ev.preventDefault();
}

function itemDrag(ev) {
    console.log(ev.target.dataset.itemid);
    ev.dataTransfer.setData("item", ev.target.dataset.itemid);
    // console.log(ev.target);
}

function addToCart(id) {
    var item = getItemById(id);
    item.id = id;
    item.amount = 1;
    listCart.push(item);
    if (typeof(Storage) !== 'undefined') {
        localStorage.setItem('cart', JSON.stringify(listCart));
    }
    fillCart();
}

function dropCart(ev) {
    ev.preventDefault();
    var item_id = ev.dataTransfer.getData("item");
    console.log(item_id);
    addToCart(item_id);
}
