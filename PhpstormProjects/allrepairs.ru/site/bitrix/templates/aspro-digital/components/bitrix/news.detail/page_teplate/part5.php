<?if($arResult['PROPERTIES']['cena_class_on']['VALUE']=='Да'){?>

    <?if($arResult['PROPERTIES']['pricetype']['VALUE'] == "allcorp2"):  # allcorp?>

        <div id="part5" class="<?=$arResult['PROPERTIES']['pricetype']['VALUE']?> price maxwidth-theme tabs_ajax catalog item-views table catalog_table_2 <?if($arResult['PROPERTIES']['fon5']['VALUE']=='Да'){?>greyline<?}?>" data-slice="Y">
            <div class="row">
                <h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h2>
                <div  class="item-block active opacity1">
                <div class="catalog item-views table front catalog_table_2">
                    <ul class="slides" itemscope="" itemtype="http://schema.org/ItemList">
            <?$i=0;?>
            <?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>

                    <li class="col-md-3 col-sm-6 col-xs-6 sliced">
                        <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product" class="item sliced" id="bx_itemtype_<?=$arResult['ID']?>">
                            <div class="inner-wrap">
                                <meta itemprop="position" content="<?=$i+1?>">
                                    <? $r = str_replace("ʹ", "", transliterator_transliterate('Any-Latin; Latin-ASCII', $arResult['PROPERTIES']['cena_sticker']['VALUE'][$i]));?>
                                <?if($r):?>
                                    <div class="stickers">
                                            <div class="stickers-wrapper">
                                                <div class="sticker_<?=$i?>" data-hex="<?=strToHex($r)?>"><?=$arResult['PROPERTIES']['cena_sticker']['VALUE'][$i]?></div>
                                            </div>
                                        </div>
                                <?endif?>
                                <div class="image shine">
                                    <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="blink-block">
                                        <img itemprop="image" class="img-responsive" src="<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>" alt="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>" title="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>">
                                    </a>
                                </div>
                                <meta itemprop="name" content="<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>">
                                <meta itemprop="url" content="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>">
                                <div class="text" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <div class="cont" style="height: 144px;">
                                        <div class="cont_inner " style="height: 319px;">
                                            <div class="title" style="height: 40px;">
                                                <meta itemprop="url" content="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>">
                                                <h3><span itemprop="name"><?=$title?></span></h3>
                                            </div>
                                            <!--h4 class="section_name"><?=$arResult['PROPERTIES']['cena_class_h4']['VALUE'][$i];?></h4-->
                                            <div class="section_div"><?=$arResult['PROPERTIES']['cena_avtokrany']['VALUE'][$i]?></div>
                                            <?if($arResult['PROPERTIES']['v_nalichii']['VALUE'][$i]):?>
                                            <div class="arts">
                                                <link itemprop="availability" href="http://schema.org/InStock">	<span class="status-icon instock"><?=$arResult['PROPERTIES']['v_nalichii']['VALUE'][$i];?></span>
                                                </span>
                                            </div>
                                            <?endif?>
                                            <div class="props_wrapper chars ">
                                                <div class="props_inner scrollbar char-wrapp">
                                                    <table class="props_table">
                                                        <tbody>
                                                        <tr class="hover-tip char">
                                                            <p class="hover-tip-text"><?=$title;?></p>
                                                        </tr>
                                                        <tr class="plan-head char">
                                                            <div class="plan-price"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?><br><span class="after-price"></span></div>
                                                            <div class="plan-title"><span><?=$arResult['PROPERTIES']['cena_class_ed_iz']['VALUE'][$i];?><br></span></div>
                                                        </tr>
                                                        <tr class="char"><?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row foot">
                                        <div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price" style="height: 68px;">
                                            <div class="price  inline">
                                                <div class="price_new">
                                                    <span class="price_val" itemprop="price" content="<?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?>"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?></span>
                                                </div>
                                                <?if($arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]): ?>
                                                <div class="price_old">
                                                    <span class="price_val"><?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i];?></span>
                                                </div>
                                                <?endif?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 footer-button-wrap">
                                            <div class="footer-button">
                                                <div class=" clearfix">
                                                    <?if($arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){?>
                                                    <div class="counter">
                                                        <div class="wrap">
                                                            <a  href="<?=$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i];?>" class="btn"><?=$arResult['PROPERTIES']['cena_more_order']['VALUE'][$i];?></a>
                                                        </div>
                                                    </div>
                                                    <?}?>
                                                    <?if(!$arResult['PROPERTIES']['cena_zakazat']['VALUE'][$i]){?>
                                                        <div class="buttons" style="<?if(!$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){?>width:100%<?}?>">
                                                            <a class="btn btn-default to_cart" href="#" data-event="jqm" data-param-id="16" data-name="order_services"><span>Заказать</span></a>
                                                        </div>
                                                    <?}
                                                    else{?>
                                                        <?if($arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]):?>
                                                    <div class="buttons" style="<?if(!$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){?>width:100%<?}?>">
                                                        <a class="btn btn-default to_cart"  href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>"><span><?=$arResult['PROPERTIES']['cena_zakazat']['VALUE'][$i];?></span></a>
                                                    </div>
                                                            <?else:?>
                                                        <div class="buttons" style="<?if(!$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){?>width:100%<?}?>">
                                                            <a class="btn btn-default to_cart" href="#" data-event="jqm" data-param-id="16" data-name="order_services"><span><?=$arResult['PROPERTIES']['cena_zakazat']['VALUE'][$i]?></span></a>
                                                            <?endif?>
                                                    <?}?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </li>

            <?$i++;
            } // endforeach?>
                    </ul>
                </div>
                </div>
                <div class="bottom_nav">
                </div>
            </div>
        </div>
    <?elseif($arResult['PROPERTIES']['pricetype']['VALUE'] == "priority"): # priority?>
        <div id="part5" class="<?=$arResult['PROPERTIES']['pricetype']['VALUE']?> price maxwidth-theme tabs_ajax catalog item-views table catalog_table_2 <?if($arResult['PROPERTIES']['fon5']['VALUE']=='Да'){?>greyline<?}?>" data-slice="Y">
        <div class="item-views tarifs type_3 tarifs_scroll">
        <h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h2>
        <div class="unstyled row dark-nav flexslider front view-control navigation-vcenter  <?=$arResult['PROPERTIES']['pricetype']['VALUE']?> maxwidth-theme" id="bx_<?=$arResult['ID']?>_490" data-plugin-options='{"useCSS": false, "directionNav": false, "controlNav" :false, "animationLoop": true, "slideshow": false, "counts": [4, 3, 2, 1], "itemMargin": 0}'>

                <ul class="slides flexbox" itemscope="" itemtype="http://schema.org/ItemList">
        <?$i=0;?>
        <?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>
                    <li class="col-sm-3 item border shadow active-slides" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
                        <div class="image">
                            <? $r = str_replace("ʹ", "", transliterator_transliterate('Any-Latin; Latin-ASCII', $arResult['PROPERTIES']['cena_sticker']['VALUE'][$i]));?>
                            <?if($r):?>
                                <div class="stickers">
                                    <div class="stickers-wrapper">
                                        <div class="sticker_<?=$i?>"><?=$arResult['PROPERTIES']['cena_sticker']['VALUE'][$i]?></div>
                                    </div>
                                </div>
                            <?endif?>
                            <div class="wrap">
                                <img class="img-responsive" src="<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>" alt="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>" title="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>">
                            </div>
                            <div class="top_block">
                                <h4 class="section_name font_upper"><?=$arResult['PROPERTIES']['cena_class_h4']['VALUE'][$i];?></h4>
                                <h3 class="name"><?=$title?></h3>
                            </div>
                        </div>
                        <div class="wrap">
                            <div class="body-wrap">
                                <div class="body-info">
                                    <div class="bottom_block">
                                        <div class="properties mCustomScrollbar"><?if($arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT']) {
                                                echo $arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];
                                            }?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price_default">
                                    <div class="title-price"><span><span><?=$arResult['PROPERTIES']['cena_class_ed_iz']['VALUE'][$i];?></span></span></div>
                                    <div class="value" data-price="<?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?>" data-filter_price="4100"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?></div>
                                </div>
                            </div>
                            <div class="buy_block lg clearfix">
                                <div class="buttons">
                                    <?if($arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]):?>
                                    <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" style="<?if(!$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){ echo "width:100%"; }?>" class="btn btn-default"><span><span><?=$arResult['PROPERTIES']['cena_zakazat']['VALUE'][$i];?></span></span></a>
                                    <?else:?>
                                        <a href="#" data-event="jqm" data-param-id="16" data-name="order_services" style="<?if(!$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]){ echo "width:100%"; }?>" class="btn btn-default"><span><span><?=$arResult['PROPERTIES']['cena_zakazat']['VALUE'][$i];?></span></span></a>
                                    <?endif?>
                                    <?if($arResult['PROPERTIES']['cena_more_href']['VALUE'][$i]):?>
                                    <a href="<?=$arResult['PROPERTIES']['cena_more_href']['VALUE'][$i];?>" class="btn btn-default"><span><span><?=$arResult['PROPERTIES']['cena_more_order']['VALUE'][$i];?></span></span></a>
                                    <?endif?>
                                </div>
                            </div>
                        </div>
                    </li>
            <?$i++;
        }?>
                </ul>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.icon svg').hover(function(){
                $(this).parents('span').next('.tooltip').show();
            }, function(){
                $(this).parents('span').next('.tooltip').hide();
            })
        })</script>
        </div>
    <?else:?>
<div id="part5" class="<?if($arResult['PROPERTIES']['fon5']['VALUE']=='Да'){?>greyline<?}?>  row margin0 block-with-bg ">
	<div class="maxwidth-theme">
		<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h2>
		<div class="dt-pricing-table 4-column row" data-column="4">
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>
			<?/*$URL = CFile::GetPath($arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]);*/?>
			<div id="" class="price-4-col col-sm-3 ">
                <ul class="plan list-unstyled">
                    <li class="pricing-image-container">
						<img title="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>" width="71" height="81" src="<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>" class="pricing-image attachment-medium" alt="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>">
					</li>
                    <li class="hover-tip">
                        <p class="hover-tip-text"><?=$title;?></p>
                    </li>
                    <li class="plan-head">
                        <div class="plan-price"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?><br><span class="after-price"></span></div>
                        <div class="plan-title"><span><?=$arResult['PROPERTIES']['cena_class_ed_iz']['VALUE'][$i];?><br></span></div>                        
                    </li>
					<?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?>
		<li class="plan-action">
                        <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="btn btn-default btn-lg animate-load" 
                <?if($arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]==''){?>style="visibility: hidden"<?}?>>
                            Подробнее
                        </a>
                    </li>
				</ul>
			</div>
		<?$i++;?> 	
		<?}?>
		</div>
	</div>
</div>
    <?endif?>
<?}?>