<?if($arResult['PROPERTIES']['cena_class_on']['VALUE']=='Да'){?>

    <?if($arResult['PROPERTIES']['pricetype']['VALUE'] == "allcorp2"):?>
        <?#print_r($arResult)?>
        <div id="part5" class="<?=$arResult['PROPERTIES']['pricetype']['VALUE']?> price catalog item-views table catalog_table_2 <?if($arResult['PROPERTIES']['fon5']['VALUE']=='Да'){?>greyline<?}?>" data-slice="Y">
            <h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h2>
            <div itemscope="" itemtype="http://schema.org/ItemList" class="row items flexbox maxwidth-theme">

                <?$i=0;?>
                <?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>

                    <div class="col-md-3 col-sm-6 col-xs-6 sliced">
                        <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product" class="item sliced" id="bx_itemtype_<?=$arResult['ID']?>" data-item="{&quot;IBLOCK_ID&quot;:&quot;<?=$arResult['IBLOCK_ID']?>&quot;,&quot;ID&quot;:&quot;<?=$arResult['ID']?>&quot;,&quot;NAME&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>&quot;,&quot;DETAIL_PAGE_URL&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]?>&quot;,&quot;PREVIEW_PICTURE&quot;:&quot;<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>&quot;,&quot;DETAIL_PICTURE&quot;:&quot;<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>&quot;,&quot;PROPERTY_FILTER_PRICE_VALUE&quot;:&quot;8000&quot;,&quot;PROPERTY_PRICE_VALUE&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?>&quot;,&quot;PROPERTY_PRICEOLD_VALUE&quot;:&quot;<?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]; #TODO: параметр акции не прописан?>&quot;}" style="height: 396px;">
                            <div class="inner-wrap">
                                <meta itemprop="position" content="1">
                                <?if($arResult['PROPERTIES']['action']['VALUE']){ #TODO: параметр акции не прописан?>
                                    <div class="stickers">
                                        <div class="stickers-wrapper">
                                            <div class="sticker_sale">Акция</div>
                                        </div>
                                    </div>
                                <?}?>
                                <div class="image">
                                    <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>">
                                        <img itemprop="image" class="img-responsive" src="<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>" alt="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>" title="<?= $arResult['PROPERTIES']['alt_img_cenaklas']['~VALUE'][$i]; ?>">
                                    </a>
                                </div>
                                <meta itemprop="name" content="<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>">
                                <meta itemprop="url" content="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>">
                                <div class="text" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                    <div class="cont" style="height: 76px;">
                                        <div class="cont_inner " style="height: 293px;">
                                            <div class="title" style="height: 40px;">
                                                <meta itemprop="url" content="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>">
                                                <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="dark-color"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></a>
                                            </div>
                                            <div class="arts">
                                                <link itemprop="availability" href="http://schema.org/InStock">	<span class="status-icon instock">В наличии</span>
                                                <!--span class="article">Арт.&nbsp;<span>123123123</span--></span>
                                            </div>
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
                                                        <tr class="char">
                                                            <?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row foot">
                                        <div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price" style="height: 48px;">
                                            <div class="price  inline">
                                                <div class="price_new">
                                                    <span class="price_val" itemprop="price" content="<?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?>"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?><!--span class="currency" itemprop="priceCurrency" content="RUB">р.</span>/м<sup>2</sup--></span>
                                                </div>
                                                <?if($arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]): # TODO: нет параметра старой цены?>
                                                    <div class="price_old">
                                                        <span class="price_val"><?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i];?></span>
                                                    </div>
                                                <?endif?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 footer-button-wrap">
                                            <div class="footer-button">
                                                <div class="buy_block clearfix">
                                                    <div class="counter">
                                                        <div class="wrap">
                                                            <!--span class="minus ctrl bgtransition"></span>
                                                            <div class="input">
                                                                <input type="text" value="1" class="count" maxlength="20">
                                                            </div>
                                                            <span class="plus ctrl bgtransition"></span-->
                                                            <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="btn">Подробнее</a>
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <span class="btn btn-default to_cart animate-load" onclick="location.href='/contacts/side/'" data-quantity="1"><span>Заказать</span></span>
                                                        <!--a href="/contacts/side/" class="btn btn-default in_cart"><span>Заказать</span></a-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?$i++;
                } // endforeach?>

            </div>
            <div class="bottom_nav">
            </div>
        </div>

    <?elseif($arResult['PROPERTIES']['pricetype']['VALUE'] == "priority"):?>

        <div class="section <?=$arResult['PROPERTIES']['pricetype']['VALUE']?> maxwidth-theme" id="bx_<?=$arResult['ID']?>_490">
            <h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h2>
            <div class="catalog item-views table">
                <div class="items flexbox clearfix " itemscope="" itemtype="http://schema.org/ItemList">
                    <?$i=0;?>
                    <?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>
                        <div class="item-wrap col-md-3 col-sm-3 col-xs-6" style="height: 522px;">
                            <div class="item" id="bx_<?=$arResult['ID']?>_1764" data-item="{&quot;IBLOCK_ID&quot;:&quot;<?=$arResult['IBLOCK_ID']?>&quot;,&quot;ID&quot;:&quot;<?=$arResult['ID']?>&quot;,&quot;NAME&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>&quot;,&quot;DETAIL_PAGE_URL&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]?>&quot;,&quot;PREVIEW_PICTURE&quot;:&quot;<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>&quot;,&quot;DETAIL_PICTURE&quot;:&quot;<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>&quot;,&quot;PROPERTY_FILTER_PRICE_VALUE&quot;:&quot;8000&quot;,&quot;PROPERTY_PRICE_VALUE&quot;:&quot;<?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?>&quot;,&quot;PROPERTY_PRICEOLD_VALUE&quot;:&quot;<?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]; #TODO: параметр акции не прописан?>&quot;}" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/Product">
                                <div class="inner-wrap">
                                    <div class="image">
                                        <div class="wrap" style="height: 264px; line-height: 261px;">
                                            <?if($arResult['PROPERTIES']['action']['VALUE']){ #TODO: параметр акции не прописан?>
                                                <div class="stickers">
                                                    <div class="stickers-wrapper">
                                                        <div class="sticker_recommend">Мы советуем</div>
                                                    </div>
                                                </div>
                                            <?}?>
                                            <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" itemprop="url">
                                                <img class="img-responsive" src="<?= $arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]; ?>" alt="<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>" title="<?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?>" itemprop="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <div class="cont">
                                            <div class="title" style="height: 46px;">
                                                <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="dark-color" itemprop="url">	<span itemprop="name"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></span>
                                                </a>
                                            </div>
                                            <span class="status-icon order" itemprop="description">Под заказ</span>
                                            <!--span class="article" itemprop="description">Арт.&nbsp;<span>PKD-551914</span></span-->
                                            <div class="delivery pull-right">
<span class="icon"><svg width="16" height="16" viewBox="0 0 16 16">
<path d="M666,200a8,8,0,1,1,8-8A8,8,0,0,1,666,200Zm0-14a6,6,0,1,0,6,6A6,6,0,0,0,666,186Zm0,10a1,1,0,0,1-1-1v-3a1,1,0,0,1,2,0v3A1,1,0,0,1,666,196Zm0-6a1,1,0,1,1,1-1A1,1,0,0,1,666,190Z" transform="translate(-658 -184)"></path>
</svg></span>
                                                <div class="tooltip" data-toggle="tooltip" title="<?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?>"><span><?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?></span></div>
                                            </div>
                                        </div>
                                        <div class="row foot">
                                            <div class="col-md-12 col-sm-12 col-xs-12 clearfix slice_price" style="height: 24px;">
                                                <div class="price  inline" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                    <div class="price_new">
                                                        <span class="price_val"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?></span>
                                                    </div>
                                                    <?if($arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]):?>
                                                        <div class="price_old">
                                                            <span class="price_val"><?=$arResult['PROPERTIES']['OLD_PRICE']['VALUE'][$i]?></span>
                                                        </div>
                                                    <?endif?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="footer-button">
                                                    <div class="buy_block clearfix">

                                                        <div class="buttons pull-right">
                                                            <span class="btn btn-default to_cart animate-load" onclick="location.href='/contacts/side/'" data-quantity="1"><span>Заказать</span></span>
                                                            <!--a href="/cart/" class="btn btn-default in_cart"><span>В корзине</span></a-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?$i++;
                    }?>
                </div>
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