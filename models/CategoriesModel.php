<?php
/**
 * Модель работает только с категориями товаров. (планшеты, телефоны)
 */

/**
 * Получить дочернии категории для категория $catID
 *
 * @param $catId ID категории
 * @return mixed массив дочерних категорий
 */

function getChildrenForCat($catId)
{
    $sql = "Select * FROM categories  WHERE parent_id = '{$catId}'";

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Получить главные категории с приявзками дочерних
 * @return array массив категорий
 */
function getAllMainCatsWithChildren()
{

    $sql = 'Select * FROM categories WHERE parent_id = 0';

    $rs = mysql_query($sql);
    $smartyRs = array();

    while ($row = mysql_fetch_assoc($rs)) {

        $rsChildren = getChildrenForCat($row['id']);

        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;

    }

    return $smartyRs;
}

/**
 * Получить категорию по ID
 * @param $catId
 * @return array
 */
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";

    $rs = mysql_query($sql);

    return mysql_fetch_assoc($rs);
}