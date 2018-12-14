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
IncludeTemplateLangFile(__FILE__);
?>
<?foreach($arResult["ITEMS"] as $i=>$arItem):?>
<span id="related-product-<?=$i?>" itemprop="isRelatedTo" itemscope="" itemtype="http://schema.org/Product">
<meta itemprop="name" content="<?=$arItem['NAME']?>">
<meta itemprop="description" content="<?=strip_tags($arItem['PREVIEW_TEXT'])?>">
<link itemprop="url" href="<?=$arItem['DETAIL_PAGE_URL']?>">
<link itemprop="image" href="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
<span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
<meta itemprop="priceCurrency" content="RUB">
<meta itemprop="price" content="<?=$arItem['PROPERTIES']['price']['VALUE']?>">
</span>
</span>
<?endforeach;