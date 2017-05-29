<?php
/**
 * Контроллер страницы товара (/product/1)
 */

//Подключаем модели

include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) exit();

//получаем данные продукта
    $rsProduct = getProductById($catId);

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsProduct', $rsProduct);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}