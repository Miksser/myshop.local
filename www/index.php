<?php


$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo $controllerName;

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

echo $actionName;

include_once '../controllers/' . $controllerName . 'Controller.php';