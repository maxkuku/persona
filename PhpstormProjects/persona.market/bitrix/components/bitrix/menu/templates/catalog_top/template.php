<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
}

if ( empty( $arResult["ALL_ITEMS"] ) ) {
	return;
}




if ( file_exists( $_SERVER["DOCUMENT_ROOT"] . $this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css' ) ) {
	$APPLICATION->SetAdditionalCSS( $this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css' );
}

CJSCore::Init();

$menuBlockId = "catalog_menu_" . $this->randString();
?><div class="top-nav bitrix-menu-catalog-top">
<div class="container top-menu-container">
<ul id="top-menu-list" class="top-menu">
	<? foreach ( $arResult["ALL_ITEMS"] as $itemID => $arLink ): ?>
		<? if ( $arLink["DEPTH_LEVEL"] == 1 ) { ?>
	<? if ( $prevIndex > $arLink["DEPTH_LEVEL"] ) { ?>
        </div>
        </div>
        </div>
        </li>
	<? } ?>
		<li class="top_menu_onelevel <? if ( $arLink["SELECTED"] ): ?>current<? endif ?><? if ( $arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"] ): ?> dropdown<? endif ?>">
			<a class="<? if ( $arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"] ) { ?>with-child<? } ?>" href="<?= $arLink["LINK"] ?>"><?= $arLink["TEXT"] ?></a>
			<?if($arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"]) { ?>
            <div class="sub_menu_new lvlnew1">
            <div class="triviewmenunew"></div>
                <?}?>
                <?if($arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"]) { ?>
                    <div class="sub_menu_item first-sub">
                    <!--span>По категориям</span-->
                    <div class="list_href_menu">
                <? } ?>
                    <? }
                    elseif ($arLink['DEPTH_LEVEL'] > 1) { ?>
                        <a href="<?= $arLink["LINK"] ?>"><?= $arLink["TEXT"] ?></a>
                    <? } ?>

        <?$prevIndex = $arLink["DEPTH_LEVEL"];?>
	<? endforeach; ?>
</ul>
</div></div>