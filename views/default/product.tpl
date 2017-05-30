{*Страница продукта*}
<h3>{$rsProduct['name']}</h3>

<img width="575" src="/images/products/{$rsProduct['image']}">
Стомость: {$rsProduct['price']}

<a href="#" id="addCart_{$rsProduct['id']}" onclick="addToCart({$rsProduct['id']}); return false">Добавить в корзину</a>
<p>Описание <br>
{$rsProduct['description']}
</p>