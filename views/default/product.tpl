{*Страница продукта*}
<h3>{$rsProduct['name']}</h3>

<img width="575" src="/images/products/{$rsProduct['image']}">
Стомость: {$rsProduct['price']}

<a href="#" id="removeCart_{$rsProduct['id']}" {if !$itemInCart} class="hideme" {/if} onclick="removeFromCart({$rsProduct['id']}); return false;">Удалить из корзины</a>
<a href="#" id="addCart_{$rsProduct['id']}" {if $itemInCart} class="hideme" {/if} onclick="addToCart({$rsProduct['id']}); return false;">Добавить в корзину</a>
<p>Описание <br>
{$rsProduct['description']}
</p>