<?php
/**
 *
 * Модель для таблицы продукции (выввод товаров)
 *
 */

/** получаем установленное количество товаров
 * @param null $limit количество товаров
 * @return array|bool массив товаров
 */
function getLastProducts($limit = null)
{
    $sql = "SELECT * FROM products ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}