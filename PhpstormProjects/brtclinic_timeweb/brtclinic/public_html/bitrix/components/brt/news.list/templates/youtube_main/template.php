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

<div class="otz">
    <div class="wrap">
        <h2>Видеоотзывы пациентов</h2>
        <div id="video_feed_block" class="flexed num<?=$arParams['NEWS_COUNT']?>">
<? foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

            <div>
                <div class="youtube" id="<?=$arItem['NAME']?>" style="background-image: url(//i.ytimg.com/vi/<?=$arItem['NAME']?>/0.jpg);">
                    <div class="play" data-src="<?=$arItem['NAME']?>"></div>
                </div>
                <p><?=$arItem['PREVIEW_TEXT']?></p>
            </div>

<? endforeach;?>


		</div>

        <?if(htmlspecialchars($_REQUEST['num_otz'],3) < 5):?>
        <button id="all_otz" type="button" class="uk-button uk-button-info">Посмотреть все отзывы</button>
        <?endif?>

    </div>
</div>