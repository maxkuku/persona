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

<div class="specs-wrap <?=$arParams['VARIANT']?> wrap">
    <? foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <?

        if(in_array($arItem['ID'], $arParams['ELEMENT_ID'])):

            $det = $arItem['PROPERTIES']['detail']['VALUE'];
            $c = $arItem['CODE'];
            $d = strlen($det);
            
            ?>
            <?if($arParams['COLOR']):?>
            <div class="spec" style="background-color: #<?=$arParams['COLOR']?>">
                <?else:?>
                <div class="spec">
                <?endif?>
                <div class="spec-im-wrap">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>"/>
                </div>
                <div class="name-spec"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></div>
                <div class="doc-bold"><?=trim($arItem['PREVIEW_TEXT'])?></div>
                <div class="doc-resume"><?=$arItem['PROPERTIES']['opyt']['VALUE']?></div>
                <?if($arParams['SHORT'] != "Y"):?>
                <div class="doc-descr"><?=trim($arItem['DETAIL_TEXT'])?></div>
                <?endif?>
            </div>

        <? 
        endif;
    endforeach;?>

                <a href="/specs/" class="btn btn-green">Все специалисты</a>

</div>