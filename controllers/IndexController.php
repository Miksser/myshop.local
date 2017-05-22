<?php
/**
 * формирование главной страницы
 * @param $smarty Шаблонизатор
 */

function indexAction($smarty){
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}