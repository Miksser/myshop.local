<?php
//константы для контроллеров
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');


// имя шаблона
$template = 'default';

//путь к файлам шабловонв (.tpl)

define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространстве

define('TemplateWebPath', "/templates/{$template}/");

//подключение Smarty

require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);