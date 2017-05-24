<?php

//Подключаем модель категории
include_once '../models/CategoriesModel.php';


/**
 * формирование главной страницы
 * @param $smarty Шаблонизатор
 */

function indexAction($smarty){

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}