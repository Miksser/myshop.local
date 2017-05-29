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

/**
 * Получаем товары на категорию
 * @param $itemId id категории
 * @return array|bool
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}