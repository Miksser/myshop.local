<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCamption">Меню:
        </div>
    {foreach $rsCategories as $item}
        <a href="/?controller=category&id={$item['id']}">{$item['name']}</br></a>
        {if isset($item['children'])}
            {foreach $item['children'] as $itemChild}
                --<a href="/?controller=category&id={$item['id']}">{$itemChild['name']}</a><br/>
            {/foreach}
        {/if}
    {/foreach}
    </div>

</div>