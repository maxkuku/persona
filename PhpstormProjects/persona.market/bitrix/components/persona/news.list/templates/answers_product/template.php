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

foreach($arResult["ITEMS"] as $arItem):?>
	<?#pr($arItem)?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><span class="badge">1</span> <a data-toggle="collapse" data-parent="#collapse-group<?=$arItem['ID']?>" href="#answer-<?=$arItem['ID']?>"><?=$arItem['NAME']?></a></h4>
        </div>
        <div id="answer-<?=$arItem['ID']?>" class="panel-collapse collapse">
            <div class="panel-body"><p><?=$arItem['PREVIEW_TEXT']?><br></p></div>
        </div>
    </div>
<?endforeach;