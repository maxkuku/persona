<? if ($arResult['PROPERTIES']['priority2_on']['VALUE'] == 'Да') { ?>
<div id="part43" class="priority2 drag-block container" data-class="TOP_TARIFS_INDEX_drag" data-order="<?=$arResult['PROPERTIES']['poradok43']['VALUE']?>">
    <div class="ajax_reload">
        <div class="item-views front tarifs type_3 tarifs_scroll">
            <div class="maxwidth-theme">
                <h2><?= $arResult['PROPERTIES']['priority2_h2']['VALUE'] ?></h2>
                <div class="flexslider unstyled row front dark-nav view-control navigation-vcenter" data-plugin-options='{"useCSS": false, "directionNav": true, "controlNav" :false, "animationLoop": true, "slideshow": false, "counts": [4, 3, 2, 1], "itemMargin": 0}'>

                        <ul class="slides flexbox"><?

    $g = 0;?>
    <?foreach($arResult['PROPERTIES']['priority2_title']['VALUE'] as $tit):

    ?>
        <li class="item border shadow" id="bx_<?=$arResult['IBLOCK_ID']?>_<?=$arResult['ID']?>" data-item='{"IBLOCK_ID":"<?=$arResult['IBLOCK_ID']?>","ID":"<?=$arResult['ID']?>","NAME":"<?=$tit?>","DETAIL_PAGE_URL":"","PREVIEW_PICTURE":"<?=addslashes($arResult['PROPERTIES']['priority2_image']['VALUE'][$g])?>","DETAIL_PICTURE":null,"PROPERTY_FILTER_PRICE_VALUE":null, "PROPERTY_PRICE_VALUE":"<?=$arResult['PROPERTIES']['priority2_price']['VALUE'][$g]?>","PROPERTY_PRICEOLD_VALUE":null, "PROPERTY_SECTION_VALUE":"<?=$arResult['PROPERTIES']['priority2_section']['VALUE'][$g]?>", "PROPERTY_STATUS_VALUE":null}'>
                                <div class="image">
                                    <?if(strlen(trim($arResult['PROPERTIES']['priority2_sticker']['VALUE'][$g])) > 1 && $arResult['PROPERTIES']['priority2_sticker']['VALUE'][$g] != "&nbsp;"):?>
                                    <div class="stickers">
                                        <div class="stickers-wrapper">
                                            <div class="sticker sticker_<?=$g?>"><?=$arResult['PROPERTIES']['priority2_sticker']['VALUE'][$g]?></div>
                                        </div>
                                    </div>
                                    <?endif?>
                                    <div class="wrap" style="height: 193px;">
                                        <img class="img-responsive" src="<?=$arResult['PROPERTIES']['priority2_image']['VALUE'][$g]?>" alt="<?=$arResult['PROPERTIES']['priority2_alt_img']['VALUE'][$g]?>" title="<?=$arResult['PROPERTIES']['priority2_alt_img']['VALUE'][$g]?>">
                                    </div>
                                    <div class="top_block">
                                        <div class="section_name font_upper"><?=$arResult['PROPERTIES']['priority2_section']['VALUE'][$g]?></div>
                                        <div class="name"><?=$tit?></div>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="body-wrap scrollbar" style="height: 184px;">
                                        <div class="body-info">
                                            <div class="bottom_block">
                                                <div class="previewtext font_xs" style="height: 0px;">
                                                </div>
                                                <div class="properties">
                                                    <?=$arResult['PROPERTIES']['priority2_text']['~VALUE'][$g]['TEXT']?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="prices">
                                        <div class="price_default wdropdown">
                                            <div class="title-price"><span><span><?=$arResult['PROPERTIES']['priority2_spisok'.$g]['VALUE'][0]?></span></span></div>
                                            <div class="value"><?=$arResult['PROPERTIES']['priority2_spisok'.$g]['DESCRIPTION'][0]?></div>
                                        </div>
                                        <ul class="all_price dropdown">
                                            <?foreach($arResult['PROPERTIES']['priority2_spisok'.$g]['DESCRIPTION'] as $f=>$r){?>
                                            <li class="price font_xs active-slides" data-sum="<?=$r?>"><?=$arResult['PROPERTIES']['priority2_spisok'.$g]['VALUE'][$f]?></li>
                                            <?}?>
                                        </ul>
                                    </div>


                                    <!--div class="prices">
                                        <div class="price_default wdropdown">
                                            <div class="title-price"><span><span><?=$arResult['PROPERTIES']['priority2_za_god']['VALUE'][$g]?></span></span></div>
                                            <div class="value" data-price="<?=$arResult['PROPERTIES']['priority2_price']['VALUE'][$g]?> р." data-filter_price="<?=$arResult['PROPERTIES']['priority2_price']['VALUE'][$g]?>"><?=$arResult['PROPERTIES']['priority2_price']['VALUE'][$g]?> р.</div>
                                        </div>

                                    </div-->
                                    <div class="buy_block lg clearfix">
                                        <div class="buttons">
                                            <?if($arResult['PROPERTIES']['priority2_zakazat']['VALUE'][$g]):?>
                                            <span class="btn btn-default to_cart animate-load" data-event="jqm" data-param-id="16" data-name="order_services" data-quantity="1"><span><?=$arResult['PROPERTIES']['priority2_zakazat']['VALUE'][$g]?></span></span>
        <?endif?>
                                        </div>
                                    </div>
                                </div>
                            </li>
        <?
        $g++;
    endforeach?>
                        </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?}?>