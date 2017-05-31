/**
 * Добавление товаров в корзину с помощью ajax
 *
 */


function addToCart(itemId) {
    console.log('js- addToCart()');
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCtnItems').html(data['ctnItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    })
}