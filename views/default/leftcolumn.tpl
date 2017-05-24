<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCamption">Меню:
        </div>
    {foreach $rsCategories as $item}
        <a href="#">{$item['name']}</br></a>
    {/foreach}
    </div>

</div>