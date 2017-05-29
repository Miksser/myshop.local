<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCamption">Меню:
        </div>
    {foreach $rsCategories as $item}
        <a href="/category/{$item['id']}/">{$item['name']}</br></a>
        {if isset($item['children'])}
            {foreach $item['children'] as $itemChild}
                --<a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a><br/>
            {/foreach}
        {/if}
    {/foreach}
    </div>

</div>