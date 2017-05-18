<?php
//Расположены константы
include_once '../config/config.php';

//Расположены базовые общие функции
include_once '../library/mainFunctions.php';

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($smarty, $controllerName, $actionName);