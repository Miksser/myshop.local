<?php
/**
 * Контроллер страницы товара (/product/1)
 */

//Подключаем модели

include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

function indexAction($smarty)
{
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$itemId) exit();

//получаем данные продукта
    $rsProduct = getProductById($itemId);

    $rsCategories = getAllMainCatsWithChildren();

    //создаем флаг. С помощью него проверяем, есть ли товар в корзине или нет
    $smarty->assign('itemInCart', 0);
    if(in_array($itemId, $_SESSION['cart']) ) {
        $smarty->assign('itemInCart', 1);
    };

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}