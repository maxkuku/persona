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
<div class="news-detail specs-news-detail">



		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"
			width="<?=$arResult["PREVIEW_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["PREVIEW_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>"
			title="<?=$arResult["PREVIEW_PICTURE"]["TITLE"]?>"
			/>



	<?=html_entity_decode($arResult["DISPLAY_PROPERTIES"]["detail"]["VALUE"]["TEXT"])?>
</div>