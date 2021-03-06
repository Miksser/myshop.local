<?php
/**
 * Контроллер для работы с корзиной
 *
 *
 */


include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Добавляем товар в корзину
 * @return bool
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;

    if (!$itemId) return false;

    $resData = array();

    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

;

/**
 * Удаляем товар из корзины
 * Проверяем есть ли товар в сессии, если есть, то удаляем, ставим 1 и измеряем кол-во товаров
 */
function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) exit();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}

;
/**
 * Формирование страницы корзины
 * @param $smarty
 */
function indexAction($smarty)
{
    // проверяем есть ли массив с товарами
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    $rsCategories = getAllMainCatsWithChildren();

    $rsProducts = getProductsFromArray($itemsIds);

    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');

}
