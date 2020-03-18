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
<? $count = 0; ?>
<? $lineCount = 2; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<?if($count%$lineCount == 0):?>
<div class="row" data-templ="smt_action">
<?endif;?>
    <div class="col-md-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>"><a class="smt-banner" href="<?if($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]):?><?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]?><?else:?><?=$arItem["DETAIL_PAGE_URL"]?><?endif?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
            <div class="smt-banner__content">
                <div class="smt-banner__link"><?if($arItem["PREVIEW_TEXT"]):?><?=$arItem["PREVIEW_TEXT"]?><?else:?><?=$arItem["NAME"]?><?endif?></div>
            </div></a>
    </div>
<? $count +=1; ?>
<?if($count%$lineCount == 0):?>
</div>
<div class="clearfix visible-sm-block"></div>
<?endif;?>
<?endforeach;?>
<?if($count%$lineCount != 0):?>
</div>
<?endif;?>

