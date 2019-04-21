<? if ($arResult['PROPERTIES']['uslugi_on']['VALUE'] == 'Да') { ?>
    <div id="part1" class="<? if ($arResult['PROPERTIES']['fon1']['VALUE'] == 'Да') { ?>greyline<? } ?> row margin0 block-with-bg">


        <div class="row margin0">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="item-views catalog1 teasers front icons sections blocks">
                        <h3 class="text-center"><?= $arResult['PROPERTIES']['uslugi_title']['VALUE']; ?></h3>
                        <div class="items row margin0 ">



                            <? $i = 0; ?>	
                            <? foreach ($arResult['PROPERTIES']['uslugi_main']['VALUE'] as $iteam) { ?>	
                                <? $URL = CFile::GetPath($arResult['PROPERTIES']['uslugi_main_img']['VALUE'][$i]); ?>

                                <div class="col-md-6 col-sm-12">
                                    <div class="item  slice-item slice-item_uslugi" style="min-height: 254px;">
                                        <div class="image">
                                            <a href="<?= $arResult['PROPERTIES']['uslugi_main_url']['VALUE'][$i]; ?>">
                                                <img src="<?= $URL; ?>" class="img-responsive">
                                            </a>
                                        </div>

                                        <div class="info">
                                            <div class="title" style="height: 20px;">
                                                <a href="<?= $arResult['PROPERTIES']['uslugi_main_url']['VALUE'][$i]; ?>" class="dark-color">
                                                    <?= $iteam; ?>												
                                                </a>
                                            </div>

                                            <div class="text childs ">
                                                <ul>
                                                    <? $ii = 0; ?>	
                                                    <? foreach ($arResult['PROPERTIES']['uslugi_podusluga' . $i]['VALUE'] as $iteam_child) { ?>	
                                                        <li <? if ($ii > 5) { ?>style="display:none;"<? } ?> class="<? if ($ii > 5) { ?>childs_iteam<?= $i; ?><? } ?>  " ><a href="<?= $arResult['PROPERTIES']['uslugi_podusluga_href' . $i]['VALUE'][$ii]; ?>"><?= $iteam_child; ?></a></li>
                                                        <? $ii++; ?>	
                                                    <? } ?>
                                                </ul>
                                            </div>
                                            <? if ($ii > 5) { ?>			
                                                <div class="link-block-more">
                                                    <a href="#" class="btn-inline sm rounded black show_all_uslugi" attr_id="<?= $i; ?>" >
                                                        <span class="span1" >Еще<i class="fa fa-angle-right"></i></span>
                                                        <span class="span2" style="display:none;" >Свернуть<i class="fa fa-angle-right"></i></span>
                                                    </a>
                                                </div>	
                                            <? } ?>
                                        </div>
                                    </div>
                                </div>
                                <? $i++; ?>	
                            <? } ?>										


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?
}?>