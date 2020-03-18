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

<div id="slick" class="<?=$arParams['VARIANT']?>">
<? foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
            <div class="slide_wrap">
			<!--div><img src="//i.ytimg.com/vi/<?=$arItem['NAME']?>/sddefault.jpg"/></div-->
			<div class="slide_image_wrap"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_TEXT']?>"/></div>
			<div class="slide_text"><b><?=$arItem['PREVIEW_TEXT']?></b><br>
                <p><?=$arItem['DETAIL_TEXT']?></p><button class="play_button" data-src="<?=$arItem['NAME']?>">СМОТРЕТЬ ВИДЕООТЗЫВ</button></div>
            </div>
<? endforeach;?>
</div>