<?php
/**
 * Контроллер страниц категорий
 *
 */

// Подключаем модели

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категорий товаров
 * @param $smarty
 */
function indexAction ($smarty)
{
 $catId = isset($_GET['id']) ? $_GET['id'] : null;
 if(! $catId) exit();

 $rsCategory = getCatById($catId);

 d($rsCategory);
}