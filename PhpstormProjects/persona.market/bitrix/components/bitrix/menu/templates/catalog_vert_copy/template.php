<? if ( ! defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
	die();
}

if ( empty( $arResult["ALL_ITEMS"] ) ) {
	return;
}

?>
<div style="display:none">
	<?pr($arResult["ALL_ITEMS"]);?>
</div>
<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"] . $this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css' ) ) {
	$APPLICATION->SetAdditionalCSS( $this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css' );
}

CJSCore::Init();

$menuBlockId = "catalog_menu_" . $this->randString();
?>
<ul id="menu-list" class="dropdown-menu">
	<? foreach ( $arResult["ALL_ITEMS"] as $itemID => $arLink ): ?>
		<? if ( $arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"] || $arLink["PARAMS"]["DEPTH_LEVEL"] == 1 ): ?>
			<? $existPictureDescColomn = ( $arLink["PARAMS"]["picture_src"] || $arLink["PARAMS"]["description"] ) ? true : false; ?>
			<li class="catmenu_onelevel <? if ( $arLink["SELECTED"] ): ?>current<? endif ?><? if ( $arLink['IS_PARENT'] || $arLink["PARAMS"]["IS_PARENT"] ): ?> dropdown<? endif ?>">
			<span class="toggle-child">
			<i class="fa fa-plus plus"></i>
			<i class="fa fa-minus minus"></i>
		    </span>
			<a class="with-child">
				<i class="fa fa-angle-right arrow"></i>
				<img class="icon peace-icon" src="<?= $arLink["PARAMS"]["picture_src"] ?>"
					 alt="<?= $arLink["TEXT"] ?>"><?= $arLink["TEXT"] ?>
				<span class="mobilink hidden-lg hidden-md" onclick="location.href='<?= $arLink["LINK"] ?>'"></span>
			</a>
			<div class="child-box box-col-1">
			<div class="row">
		<? else: ?>
			<div class="col-md-12">
				<div class="child-box-cell">
					<div class="h5">
						<a href="<?= $arLink["LINK"] ?>" class="child-box-link">
							<span class="livel-down hidden-md hidden-lg">↳</span><?= $arLink["TEXT"] ?>
						</a>
					</div>
				</div>
			</div>
		<? endif ?>
		<? if ( ( $arLink["IS_PARENT"] || $arLink['PARAMS']["IS_PARENT"] )
			&& $arLink['ITEM_INDEX'] > 0
			&& ( $arLink["DEPTH_LEVEL"] < 1 || $arLink["PARAMS"]["DEPTH_LEVEL"] )
		): ?>
			</div>
			<div class="see-all-categories hidden-xs hidden-sm">
				<a href="<?= $arLink['LINK'] ?>">Показать все&nbsp;<?= $arLink['TEXT'] ?></a>
			</div>
			</div>
			<a href="<?= $arLink["LINK"] ?>">
				<img class="icon peace-icon" src="<?= $arLink["PARAMS"]["picture_src"] ?>" alt="<?= $arLink["TEXT"] ?>"><?= $arLink["TEXT"] ?>
			</a></li>
		<? endif ?>
	<? endforeach; ?>
</ul>