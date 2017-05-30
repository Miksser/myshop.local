<?php

session_start(); // стартуем сессию

//если нет массива в сессии, то создаем его

if (! isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

include_once '../config/config.php'; //Расположены константы
include_once '../config/db.php'; //подключение к бд
include_once '../library/mainFunctions.php'; //Расположены базовые общие функции

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($smarty, $controllerName, $actionName);