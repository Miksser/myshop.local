<?php
/**
 * Контроллер для работы с корзиной
 *
 *
 */

// Подключаем модели

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


function addtocartAction()
{
    $itemId = isset($_GET['id'] ? intval($_GET['id']) : null);
    if (!$itemId) return false;

    $resData = [];
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart'] === fasle)) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
        } else {
        $resData['success'] = 0;
    };

    echo json_encode($resData);
}