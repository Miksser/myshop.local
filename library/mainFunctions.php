<?php


function loadPage ($controlleName, $actionName = 'index') {
    include_once PathPrefix . $controlleName . PathPostfix;

    $function = $actionName . 'Action';
    $function();
}