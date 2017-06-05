<?php

//Подключаем модель категории
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * формирование главной страницы
 * @param $smarty Шаблонизатор
 */

function indexAction($smarty)
{

    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}