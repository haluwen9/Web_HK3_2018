$(window).scroll(function () {
    var cart = $('.shopping-item');

    if (window.pageYOffset >= 82 && $(document).width() >= 559) cart.addClass('shopping-cart');
    else cart.removeClass('shopping-cart');
});

var listCart = [];

$(document).ready(function () {
    if (typeof (Storage) !== 'undefined') {
        if (localStorage.cart) {
            listCart = JSON.parse(localStorage.cart);
        }
    }
    fillCart();
    displayCart();
    displayCheckout();
});

function fillCart() {
    var price = calcPrice() + '<sup>đ</sup>';
    $('.product-count').html(listCart.length);
    $('.cart-amunt').html(formatNumber(price));
}

function calcPrice() {
    var totalPrice = 0;
    if (listCart.length > 0) {
        listCart.forEach(item => totalPrice += item.price * item.amount);
    }
    return totalPrice;
}

function allowDrop(ev) {
    ev.preventDefault();
}

function itemDrag(ev) {
    // console.log(ev.target.dataset.itemid);
    ev.dataTransfer.setData("id", ev.target.dataset.itemid);
    ev.dataTransfer.setData("price", ev.target.dataset.itemprice);
    // console.log(ev.target);
}

function addToCart(item, amunt = 1) {
    var has = false;
    for (var i = 0; i < listCart.length; i++) {
        if (listCart[i].id == item.id) {
            listCart[i].amount += parseInt(amunt);
            has = true;
            break;
        }
    }
    if (!has) {
        listCart.push({
            id: item.id,
            price: item.price,
            amount: parseInt(amunt)
        });
    }
    if (typeof (Storage) !== 'undefined') {
        localStorage.setItem('cart', JSON.stringify(listCart));
    }
    fillCart();
}

function dropCart(ev) {
    ev.preventDefault();
    var item_id = ev.dataTransfer.getData("id");
    var item_price = ev.dataTransfer.getData("price");
    // console.log(id);
    addToCart({
        id: item_id,
        price: item_price
    });
}

function displayCart() {
    var txt = "";
    if (listCart.length > 0) {
        for (var i = 0; i < listCart.length; ++i) {
            var product = [];
            $.ajax({
                async: false,
                url: '?u=product&id=' + listCart[i].id,
                success: function (res) {
                    // console.log(JSON.parse(res));
                    product = JSON.parse(res);
                }
            });
            // console.log(product);
            txt += '<tr class="cart_item"><td class="product-remove"><a title="Remove this item" class="remove" href="javascript:removeItem(' + i + ')">×</a></td>\
            <td class="product-thumbnail"><a href="single-product.html?id=' + listCart[i].id + '"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="' + product.imageLink + '"></a></td>\
            <td class="product-name"><a href="?page=product&id=' + listCart[i].id + '">' + product.name + '</a></td>\
            <td class="product-price"><span class="amount">' + formatNumber(listCart[i].price) + '<sup>đ</sup></span></td>\
            <td class="product-quantity">\
                <div class="quantity buttons_added">\
                    <input type="button" class="minus" value="-" onclick="decQty(' + i + ')">\
                    <input type="text" size="1" class="input-text qty text" title="Qty" value="' + listCart[i].amount + '" onkeypress="validateNumber(event)" onchange="modifyQty( ' + i + ', event)"  style="padding: 5px" >\
                    <input type="button" class="plus" value="+" onclick="incQty(' + i + ')">\
                </div>\
            </td>\
            <td class="product-subtotal"><span class="amount">' + formatNumber(listCart[i].price * listCart[i].amount) + '<sup>đ</sup> </span></td>\
            </tr>';
        }
        txt += '<tr><td class="actions" colspan="6"><input type="submit" value="Thanh toán" name="proceed" class="checkout-button button alt wc-forward" onclick="event.preventDefault(); location.href=\'index.php?page=checkout\'"> <input type="submit" value="Xóa đơn hàng" name="proceed" class="checkout-button button alt wc-forward" onclick="event.preventDefault(); cancelOrder();"></td></tr>';
    } else {
        txt = '\
        <tr class="cart_item">\
            <td colspan="6">Đơn hàng trống. <a href="index.php?page=shop">Mua hàng ngay <i class="fa fa-shopping-cart"></i></a></td>\
        </tr>\
        '
    }
    // $("#cart_items tbody").html(txt + '<tr><td class="actions" colspan="6"><input type="submit" value="Thanh toán" name="proceed" class="checkout-button button alt wc-forward" onclick="event.preventDefault(); location.href=\'index.php?page=checkout\'"> <input type="submit" value="Xóa đơn hàng" name="proceed" class="checkout-button button alt wc-forward" onclick="event.preventDefault(); cancelOrder();"></td></tr>');
    $("#cart_items tbody").html(txt);
    $("#cart_subtotal").html(formatNumber(calcPrice()) + '<sup>đ</sup>');
    $("#order_total").html(formatNumber(calcPrice()) + '<sup>đ</sup>');
}

function cancelOrder() {
    localStorage.removeItem('cart');
    listCart = [];
    fillCart();
    displayCart();
}

function removeItem(id) {
    listCart.splice(id, 1);
    localStorage.setItem('cart', JSON.stringify(listCart));
    fillCart();
    displayCart();
}

function incQty(id) {
    listCart[id].amount += 1;
    localStorage.setItem('cart', JSON.stringify(listCart));
    fillCart();
    displayCart();
}

function decQty(id) {
    if (listCart[id].amount > 1) {
        listCart[id].amount -= 1;
    }
    localStorage.setItem('cart', JSON.stringify(listCart));
    fillCart();
    displayCart();
}

function modifyQty(id, e) {
    if (e.target.value == "" || e.target.value == 0) {
        e.target.value = listCart[id].amount;
    } else {
        listCart[id].amount = parseInt(e.target.value);
        localStorage.setItem('cart', JSON.stringify(listCart));
        fillCart();
        displayCart();
    }
}

function validateNumber(e) {
    // if (e.key >= '0' && e.key <= '9') {
    //     e.target.value += e.key;
    // }
    // console.log(e.key);
    if (/^[^0-9]{1}$/.test(e.key)) {
        // console.log("prevented!");
        e.preventDefault();
    }
}

function displayCheckout() {
    // alert("LOAD");
    var txt = "";
    if (listCart.length > 0) {
        for (var i = 0; i < listCart.length; ++i) {
            var product = [];
            $.ajax({
                async: false,
                url: '?u=product&id=' + listCart[i].id,
                success: function (res) {
                    // console.log(JSON.parse(res));
                    product = JSON.parse(res);
                }
            });
            // console.log(product);

            txt += '<tr class="cart_item">\
                    <td class="product-name"> ' + product.name + ' <strong class="product-quantity">× ' + listCart[i].amount + '</strong> </td>\
                    <td class="product-total"><span class="amount">' + formatNumber(listCart[i].price * listCart[i].amount) + '<sup>đ</sup> </span> </td>\
                </tr>'
        }
    } else {
        txt = '\
        <tr class="cart_item">\
            <td colspan="2">Đơn hàng trống<a href="?page=shop">Mua hàng ngay <i class="fa fa-shopping-cart"></i></a></td>\
        </tr>\
        '
    }
    $("#checkout_items tbody").html(txt);
    $("#cart_checkout_total").html(formatNumber(calcPrice()) + '<sup>đ</sup>');
    $("#order_checkout_total").html(formatNumber(calcPrice()) + '<sup>đ</sup>');
}