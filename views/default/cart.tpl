{*шаблоны корзины*}

<h1>Корзина</h1>

{if !$rsProducts}
    В корзине пусто
{else}
    <h2>Данные заказа</h2>
    <table>
        <tr>
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за единицу</td>
            <td>Цена</td>
            <td>Действие</td>
        </tr>

        {foreach $rsProducts as $item name = products}
            <tr>
                <td>{$smarty.foreach.products.iteration}</td>
                <td><a href="/product/{$item['id']}/">{$item['name']}</a><br></td>
                <td><input type="text" id="itemCnt_{$item['id']}" value="1"
                           onchange="conversionPrice({$item['id']});"></td>
                <td>
                    <span id="itemPrice_{$item['id']}" value="{$item['price']}">
                        {$item['price']}
                    </span>
                </td>
                <td>
                    <span id="itemRealPrice_{$item['id']}">
                        {$item['price']}
                    </span>
                </td>
                <td>
                    <a href="#" id="removeCart_{$item['id']}" onclick="removeFromCart({$item['id']}); return false;">Удалить</a>
                    <a href="#" id="addCart_{$item['id']}" class="hideme" onclick="addToCart({$item['id']}); return false;">Восстановить</a>
                </td>
            </tr>
        {/foreach}

    </table>
{/if}