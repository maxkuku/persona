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
<div class="smt-widget smt-widget_no-margin">
	<div class="smt-widget__content">
		<div class="smt-doctor-list smt-doctor-list_full">
            <div class="container-fluid container-fluid_no-padding smt-doctor-list__wrapper">
                <div class="row">
                <? $count = 0; ?>
                <? $lineCount = $arParams["LINE_ELEMENT_COUNT"]; ?>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="smt-doctor-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="smt-doctor"><a class="smt-doctor__image-content" href="/doctors/<?=$arItem['CODE']?>/<?#=$arItem["DETAIL_PAGE_URL"]?>"><?if($arItem["PREVIEW_PICTURE"]):?><img class="smt-doctor__image" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/><?endif?>
                                    <div class="smt-doctor__over"><span class="smt-doctor__icon glyphicon glyphicon-zoom-in"></span></div></a>
                                <div class="smt-doctor__content">
									<div class="smt-doctor__link-content"><a class="smt-doctor__link" href="/doctors/<?=$arItem['CODE']?>/<?#=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
                                    <div class="smt-doctor__text">
                                        <?if($arItem["PREVIEW_TEXT"]):?>
                                            <?=$arItem["PREVIEW_TEXT"]?>
                                        <?endif?><br>
                                        <?if($arItem["DISPLAY_PROPERTIES"]["EXP"]["DISPLAY_VALUE"]):?>
                                        <?=$arItem["DISPLAY_PROPERTIES"]["EXP"]["NAME"]?>
                                        <?=$arItem["DISPLAY_PROPERTIES"]["EXP"]["DISPLAY_VALUE"]?>
                                        <?endif?>
                                        <?if($arItem["DISPLAY_PROPERTIES"]["DEGREE"]["DISPLAY_VALUE"]):?>
                                            / <?=$arItem["DISPLAY_PROPERTIES"]["DEGREE"]["DISPLAY_VALUE"]?>
                                        <?endif?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? $count += 1; ?>
                <?if($count%$lineCount == 0):?>
                    <div class="clearfix visible-md-block visible-lg-block"></div>
                <?endif?>
                <?if($count%2 == 0):?>
                    <div class="clearfix visible-sm-block"></div>
                <?endif?>
                <?endforeach;?>
                </div>
            </div>
        </div>
	</div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"] && $arResult["NAV_STRING"]):?>
    <div class="smt-widget__pagination smt-widget__pagination_center smt-widget__pagination_border">
        <?=$arResult["NAV_STRING"]?>
    </div>
    <?endif;?>
</div>
<?if($arResult["DESCRIPTION"]):?>
    <div class="smt-widget">
    <div class="smt-widget__content">
    <?if($arResult["DESCRIPTION_TYPE"] == 'text'):?>
        <p><?=$arResult["DESCRIPTION"]?></p>
    <?else:?>
        <?=$arResult["DESCRIPTION"]?>
    <?endif?>
    </div></div>
<?endif?>