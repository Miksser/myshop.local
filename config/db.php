<?php

/**
 * Подключение к базе данных
 *
 */


$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpassword = "";

$db = mysql_connect($dblocation, $dbuser, $dbpassword)
    or die ("Ошибка подключения к Mysql");

//устанавливаем кодировку
mysql_set_charset('utf8');

if (! mysql_select_db($dbname, $db)) {
    echo "Ощибка доступа к {$dbname}";
    exit();
}

