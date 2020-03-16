<? if ($arResult['PROPERTIES']['allcorp2_on']['VALUE'] == 'Да') { ?>
    <div id="part42" class="new_allcorp2 drag-block container <? if ($arResult['PROPERTIES']['fon42']['VALUE'] == 'Да') { ?>greyline<? } ?>">
        <div class="maxwidth-theme">
            <div class="col-md-12">
                <div class="row margin0 block-with-bg">
                    <div class="item-views catalog blocks">
                        <div class="title_block row">
                            <div class="col-sm-12">
                                <h2><?= $arResult['PROPERTIES']['allcorp2_h2']['VALUE'] ?></h2>
                            </div>
                        </div>
                        <div class="tabs_ajax">
                            <div class="body-block">
                                <div class="row margin0">
                                    <div class="item-block active opacity1">
                                        <div class="row margin0">
                                            <div class="catalog item-views table front catalog_table_2">
                                                <div class="flexslider unstyled row dark-nav2 " data-plugin-options='{"animation": "slide", "directionNav": true, "customDirection": ".catalog .nav-direction a", "controlNav" :true, "animationLoop": true, "slideshow": false, "itemMargin": 0, "counts": [4, 2, 2, 2] }'>

                                                    <div class="flex-viewport">
                                                        <ul class="slides" itemscope=""
                                                            itemtype="http://schema.org/ItemList">
                                                            <?$g = 0;?>
                                                            <?foreach($arResult['PROPERTIES']['allcorp2_title']['VALUE'] as $tit):?>
                                                            <li class="col-md-3 col-sm-4 col-xs-6 sliced">
                                                                <div class="item sliced" id="bx_<?=$arResult['IBLOCK_ID']?>_<?=$arResult['ID']?>" data-item="{'IBLOCK_ID':'<?=$arResult['IBLOCK_ID']?>','ID':'<?=$arResult['ID']?>','NAME':'<?=$tit?>','DETAIL_PAGE_URL':'<?= addslashes($arResult['PROPERTIES']['allcorp2_link']['VALUE'][$g]) ?>','PREVIEW_PICTURE':'','DETAIL_PICTURE':'','IBLOCK_ID':'<?=$arResult['IBLOCK_ID']?>','PROPERTY_PRICE_VALUE':'<?= $arResult['PROPERTIES']['allcorp2_cena']['VALUE'][$g] ?>','PROPERTY_PRICEOLD_VALUE':'<?= $arResult['PROPERTIES']['allcorp2_old_cena']['VALUE'][$g] ?>','PROPERTY_ARTICLE_VALUE':'<?= $arResult['PROPERTIES']['allcorp2_artikul']['VALUE'][$g] ?>','PROPERTY_STATUS_VALUE':''}" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                                                    <meta itemprop="position" content="1">
                                                                    <div class="inner-wrap">
                                                                        <div class="stickers">
                                                                            <div class="stickers-wrapper">
                                                                                <div class="sticker sticker_<?= $g ?>"><?=$arResult['PROPERTIES']['allcorp2_sticker']['VALUE'][$g]?></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="image shine">
                                                                            <a href="<?=$arResult['PROPERTIES']['allcorp2_link']['VALUE'][$g]?>" class="blink-block"><img class="img-responsive"              src="<?= $arResult['PROPERTIES']['allcorp2_image']['VALUE'][$g]; ?>" alt="<?= $arResult['PROPERTIES']['allcorp2_alt_img']['~VALUE'][$g]; ?>" title="<?= $arResult['PROPERTIES']['allcorp2_alt_img']['~VALUE'][$g]; ?>" itemprop="image"></a>
                                                                        </div>
                                                                        <div class="text">
                                                                            <div class="cont" style="height: 102px;">
                                                                                <div class="cont_inner"
                                                                                     style="height: 319px;">
                                                                                    <div class="title"
                                                                                         style="height: 40px;">
                                                                                        <a href="<?=$arResult['PROPERTIES']['allcorp2_link']['VALUE'][$g]?>" class="dark-color" itemprop="url"> <span itemprop="name"><?=$tit?></span></a></div>
                                                                                    <div class="section_name"><?=$arResult['PROPERTIES']['allcorp2_section']['VALUE'][$g]?></div>
                                                                                    <div class="arts">
                                                                                        <span class="status-icon instock"
                                                                                              itemprop="description"><?=$arResult['PROPERTIES']['allcorp2_v_nalichii']['VALUE'][$g]?></span>
                                                                                        <span class="article"
                                                                                              itemprop="description"><?=$arResult['PROPERTIES']['allcorp2_artikul']['VALUE'][$g]?></span>
                                                                                    </div>
                                                                                    <div class="props_wrapper chars">
                                                                                        <div class="props_inner scrollbar char-wrapp"><?= $arResult['PROPERTIES']['allcorp2_text']['~VALUE'][$g]['TEXT'] ?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row foot">
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price" style="height: 48px;">
                                                                                    <div class="price inline">
                                                                                        <div class="price_new">
                                                                                            <span class="price_val"><span><?= $arResult['PROPERTIES']['allcorp2_cena']['VALUE'][$g] ?> </span><span class="currency">р.</span></span>
                                                                                        </div>
                                                                                        <?if($arResult['PROPERTIES']['allcorp2_old_cena']['VALUE'][$g]): ?>
                                                                                        <div class="price_old">
                                                                                            <span class="price_val"><?= $arResult['PROPERTIES']['allcorp2_old_cena']['VALUE'][$g] ?> р.</span>
                                                                                        </div>
                                                                                        <?endif?>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                    <div class="desktop-wrapper">
                                                                                        <div class="footer-button">
                                                                                            <div class="buy_block clearfix">
                                                                                                <? if ($arResult['PROPERTIES']['allcorp2_zakazat']['VALUE'][$g]){ ?><div class="buttons" style="<? if (!$arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g]) { ?>width:100%<? } ?>"><a class="btn btn-default to_cart" href="#" data-event="jqm" data-param-id="16" data-name="order_services"><span>Заказать</span></a></div><?}?>
                                                                                                <? if ($arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g]) { ?><div class="counter"><div class="wrap">
                                                                                                        <a href="<?= $arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g]; ?>" class="btn"><?= $arResult['PROPERTIES']['allcorp2_more_text']['VALUE'][$i]; ?></a>
                                                                                                    </div></div>
                                                                                                <? } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mobile-wrapper">
                                                                                        <div class="footer-button">
                                                                                            <div class="buy_block clearfix">
                                                                                                <? if ($arResult['PROPERTIES']['allcorp2_zakazat']['VALUE'][$g]){ ?><div class="buttons" style="<? if (!$arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g]) { ?>width:100%<? } ?>"><span class="btn btn-default to_cart" href="#" data-event="jqm" data-param-id="16" data-name="order_services"><span>Заказать</span></span></div><?}?>
                                                                                                <? if ($arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g] && $arResult['PROPERTIES']['allcorp2_more_text']['VALUE'][$g]) { ?><div class="counter"><div class="wrap">
                                                                                                            <a href="<?= $arResult['PROPERTIES']['allcorp2_more_href']['VALUE'][$g]; ?>" class="btn"><?= $arResult['PROPERTIES']['allcorp2_more_text']['VALUE'][$g]; ?></a>
                                                                                                        </div></div>
                                                                                                <? } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <?$g++?>
                                                            <?endforeach?>
                                                        </ul>
                                                    </div>
                                                    <ol class="flex-control-nav flex-control-paging"
                                                        style="z-index: 2;"></ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>