<? if ($arResult['PROPERTIES']['text6_on']['VALUE'] == 'Да') { ?>

    <div id="part28" class="<? if ($arResult['PROPERTIES']['fon20']['VALUE'] == 'Да') { ?>greyline<? } ?> row margin0 block-with-bg pad_bot" >
        <div class="maxwidth-theme">
            <h2 class="text-center cfonts"><?= $arResult['PROPERTIES']['text6_title']['VALUE']; ?> </h2>


            <div class="item-views list list-type-block image_left blog">
                <div class="items row">

                    <? $i = 0; ?> 
                    <? foreach ($arResult['PROPERTIES']['text6_nazvanie']['VALUE'] as $title) { ?>		

                        <div class="col-md-12">
                            <div class="item shadow  wdate clearfix">

                                <div class="body-info">
                                    <div class="title">								
                                        <?= $title; ?>												
                                    </div>
                                    <div class="previewtext">
                                        <? echo $arResult['PROPERTIES']['text6_text_small']['~VALUE'][$i]["TEXT"]; ?>
                                        <div class="previewtext_hide text1_<?= $i; ?>" style="display:none;">
                                            <?= $arResult['PROPERTIES']['text6_text_full']['~VALUE'][$i]["TEXT"]; ?>
                                        </div>
                                    </div>
                                    <? if ($arResult['PROPERTIES']['text6_text_full']['~VALUE'][$i]["TEXT"]) { ?>
                                    <div class="link-block-more">
                                        <a href="#" class="btn-inline sm rounded black read_next2" title=".text1_<?= $i; ?>" > <span class="span1">Читать далее</span> <span class="span2" style="display:none;">Скрыть</span> <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <? } ?>
                                    <div class=" row">
                                        <div class="col-md-6">
                                            <? if ($arResult['PROPERTIES']['text6_text_foto1']) { ?>
                                                <div class="image shine">
                                                    <img title="<?= $arResult['PROPERTIES']['alt_img_textblock6_foto1']['~VALUE'][$i]; ?>" alt="<?= $arResult['PROPERTIES']['alt_img_textblock6_foto1']['~VALUE'][$i]; ?>" src="<?= $arResult['PROPERTIES']['text6_text_foto1']['~VALUE'][$i]; ?>" class="img-responsive">
                                                </div>
                                            <? } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <? if ($arResult['PROPERTIES']['text6_text_foto2']) { ?>
                                                <div class="image shine">
                                                    <img title="<?= $arResult['PROPERTIES']['alt_img_textblock6_foto2']['~VALUE'][$i]; ?>" alt="<?= $arResult['PROPERTIES']['alt_img_textblock6_foto2']['~VALUE'][$i]; ?>" src="<?= $arResult['PROPERTIES']['text6_text_foto2']['~VALUE'][$i]; ?>" class="img-responsive">
                                                </div>
                                            <? } ?>
                                        </div>
                                    </div>
                                    <div class="previewtext">
                                        <? echo $arResult['PROPERTIES']['text6_text_foot_small']['~VALUE'][$i]["TEXT"]; ?>
                                        <div class="previewtext_hide text2_<?= $i; ?>" style="display:none;">
                                            <?= $arResult['PROPERTIES']['text6_text_foot_full']['~VALUE'][$i]["TEXT"]; ?>
                                        </div>
                                    </div>
                                    <? if ($arResult['PROPERTIES']['text6_text_foot_full']['~VALUE'][$i]["TEXT"]) { ?>
                                    <div class="link-block-more">
                                        <a href="#" class="btn-inline sm rounded black read_next2" title=".text2_<?= $i; ?>" > <span class="span1">Читать далее</span> <span class="span2" style="display:none;">Скрыть</span> <i class="fa fa-angle-right"></i></a>
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


<?
}?>