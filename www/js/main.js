/**
 * Добавление товаров в корзину с помощью ajax
 *
 */


function addToCart(itemId) {
    console.log('js - addToCart()');
    $.ajax({
        type: 'POST',
        url: "/cart/addtocart/" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['ctnItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    })
}