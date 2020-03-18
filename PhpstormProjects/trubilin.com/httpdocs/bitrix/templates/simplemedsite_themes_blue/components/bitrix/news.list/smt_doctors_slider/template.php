<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="smt-doctor-list smt-doctor-list_slider">
	<div class="owl-carousel owl-theme owl-theme_doctor">
		<? $count = 0; ?>
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="smt-doctor" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a class="smt-doctor__image-content" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?if($arItem["PREVIEW_PICTURE"]):?><img class="smt-doctor__image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" /><?endif;?>
				<div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div>
			</a>
			<div class="smt-doctor__content">
				<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
				<div class="smt-doctor__text">
					<?if($arItem["PREVIEW_TEXT"]):?>
						<?=$arItem["PREVIEW_TEXT"]?>
					<?endif?>
				</div>
			</div>
		</div>
		<? $count += 1; ?>
		<?endforeach;?>
	</div>
</div>
