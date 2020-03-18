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
<?if(!empty($arResult["ITEMS"])):?>

<div class="smt-slider <?=($arResult['mob'])?"mob":"nomob"?> <?=(webps())?"webp":"no-webp"?>" data-templ="templates_smt_slider">
<div class="owl-carousel owl-theme_slider">

<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    if(!is_array($arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])) {
        $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"] = array();
    }
    ?>
    <div id="slide_<?=$arItem['ID']?>" class="smt-slider__item" <?=(webps() && is_file($_SERVER['DOCUMENT_ROOT'] . str_replace('.jpg', '.webp', $arItem["DETAIL_PICTURE"]["SRC"])))?'style="background-image: url('.str_replace('.jpg', '.webp', $arItem["DETAIL_PICTURE"]["SRC"]).')':'style="background-image: url('.$arItem["DETAIL_PICTURE"]["SRC"].')'?>">
        <div class="container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12<?if(in_array("RIGHT", $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])):?> col-md-offset-6<?endif?>">
                    <div class="smt-slider__slide smt-slide<?if(in_array("BG", $arItem["DISPLAY_PROPERTIES"]["STYLE"]["VALUE_XML_ID"])):?> smt-slide_bg<?endif?>">
                        <div class="smt-slide__content">
                            <div class="smt-slide__header"><?=$arItem["PREVIEW_TEXT"]?></div>
                            <div class="smt-slide__text">
                                <?if($arItem["DETAIL_TEXT_TYPE"] == 'text'):?>
                                    <p><?=$arItem["DETAIL_TEXT"]?></p>
                                <?else:?>
                                    <?=$arItem["DETAIL_TEXT"]?>
                                <?endif?>
                            </div>
                            <?if($arItem["PROPERTIES"]["LINK"]["VALUE"]):?>
                            <div class="smt-slide__button">
                                <?if($arItem["DISPLAY_PROPERTIES"]["BUTTON"]["DISPLAY_VALUE"]):?>
                                <a class="btn smt-btn smt-btn-lg text-uppercase" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["BUTTON"]["DISPLAY_VALUE"]?></a>
                                <?else:?>
                                <a class="btn smt-btn smt-btn-lg text-uppercase" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=GetMessage('CT_BNL_GOTO_DETAIL')?></a>
                                <?endif?>
                            </div>
                            <?endif?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>
</div>
</div>
<?endif?>    