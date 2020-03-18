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

<div class="specs-wrap <?=$arParams['VARIANT']?>">
<? foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $det = $arItem['PROPERTIES']['detail']['VALUE'];
    $c = $arItem['CODE'];
    $d = strlen($det);
	?>
    <div class="spec">
        <div class="spec-im-wrap"><?=($d>0)?'<a href="/specs/'.$c.'/">':''?>
            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"/><?=($d>0)?'</a>':''?>
        </div>
        <div class="name-spec"><a href="/specs/<?=$arItem['CODE']?>/"><?=$arItem['NAME']?></a></div>
        <div class="doc-bold"><?=trim($arItem['PREVIEW_TEXT'])?></div>
        <div class="doc-resume"><?=$arItem['PROPERTIES']['opyt']['VALUE']?></div>
        <div class="doc-descr"><?=trim($arItem['DETAIL_TEXT'])?></div>
    </div>
<? endforeach;?>
</div>