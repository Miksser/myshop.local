<?php

/**
 * @param $controlleName
 * @param string $actionName
 *
 */

function loadPage ($controlleName, $actionName = 'index') {
    include_once PathPrefix . $controlleName . PathPostfix;

    $function = $actionName . 'Action';
    $function();
}