<? if ($arResult['PROPERTIES']['text4_on']['VALUE'] == 'Да') { ?>

    <div id="part26" class="<? if ($arResult['PROPERTIES']['fon18']['VALUE'] == 'Да') { ?>greyline<? } ?> row margin0 block-with-bg pad_bot part26" >
        <div class="maxwidth-theme">
            <h2 class="text-center cfonts"><?= $arResult['PROPERTIES']['text4_title']['VALUE']; ?> </h2>



            <div class="row">
                
                <? foreach ($arResult['PROPERTIES']['text4_text_small']['~VALUE'] as $i => $text_small) { ?>

                    <div class="previewtext col-md-6">
                        
                        <p class="drop-caps"><?= $text_small['TEXT']; ?></p>
                        
                        <div class="previewtext_hide text1_<?= $i; ?>" style="display:none;">
                            <?= $arResult['PROPERTIES']['text4_text_full']['~VALUE'][$i]["TEXT"]; ?>
                        </div><!--/.previewtext_hide-->
                    
                    <? if ($arResult['PROPERTIES']['text4_text_full']['~VALUE'][$i]["TEXT"] && $arResult['PROPERTIES']['text4_text_full']['~VALUE'][$i]["TEXT"]!='&nbsp;') { ?>
                        <div class="link-block-more">
                            <a href="#" class="btn-inline sm rounded black read_next2" attr_id=".text1_<?= $i; ?>" > <span class="span1">Читать далее</span> <span class="span2" style="display:none;">Скрыть</span> <i class="fa fa-angle-right"></i></a>
                        </div><!--/.link-block-more-->
                    <? } ?>
                        
                    </div><!--/.previewtext.col-md-6-->
                        
                <?if($i%2 == 1){?>
            </div><!--/.row-->
            <div class="row"><?}?>
                
                <? } ?>							

            </div><!--/.row-->


        </div>	
    </div>	


<?
}?>