/**
 * Добавление товаров в корзину с помощью ajax
 *
 */

/**
 * Добавление товраа в корзину
 * получаем id, Отправляем на php. Если возвращает json, то проверяем true/false пришло. Если тру, то мепняем ссылки
 * @param itemId
 */
function addToCart(itemId) {
    console.log('js - addToCart()');
    $.ajax({
        type: 'POST',
        url: "/cart/addtocart/" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_' + itemId).show();
            }
        }
    })
};


function removeFromCart(itemId) {
    $.ajax({
        type: 'POST',
        url: "/cart/removefromcart/" + itemId + "/",
        dataType: 'json',
        success: function (data) {
            if (data['success']) {
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    })
};


function conversionPrice(itemId) {
    var newCnt = $('#itemCnt_' + itemId).val();
    var itemPrice = $('#itemPrice_' + itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    $('#itemRealPrice_' + itemId).html(itemRealPrice);
}