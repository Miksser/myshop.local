<?php

/**
 * @param $controlleName
 * @param string $actionName
 *
 */

function loadPage ($smarty, $controlleName, $actionName = 'index') {
    include_once PathPrefix . $controlleName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * @param $smarty
 * @param $templateName
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}
