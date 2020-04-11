<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
    die();
}

if ( empty( $arResult['ALL_ITEMS'] ) ) {
    return;
}


CJSCore::Init();

?>
<div class="whole-name top-nav brand-menu-top">
    <div class="container top-menu-container">
        <ul id="top-menu-list" class="top-menu" style="width:<?=count($arResult["ALL_ITEMS"])*120?>px">
            <? foreach ( $arResult["ALL_ITEMS"] as $itemID => $arLink ): ?>
            <li><a href="/catalog/brands/?brand_name=<?=$arLink['NAME']?>"><?=$arLink['NAME']?></a></li>
                
            <? endforeach ?>
        </ul>
    </div>
</div>