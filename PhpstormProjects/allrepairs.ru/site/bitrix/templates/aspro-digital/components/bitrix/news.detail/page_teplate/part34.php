<? if ($arResult['PROPERTIES']['accordion02_on']['VALUE'] == 'Да') { ?>	
    <div id="part34" class="row margin0 block-with-bg pad_bot" >
        <div class="maxwidth-theme">
            
            <div class="col-md-12">
                <h2 class='cfonts'><? echo $arResult['PROPERTIES']['accordion02_title']['VALUE']; ?></h2>
                <div class="accordion-type-2">
                    <? foreach ($arResult['PROPERTIES']['accordion02_captions']['VALUE'] as $key => $title){?>
                    <div class="item-accordion-wrapper">
                        <div class="accordion-head accordion-close collapsed" data-toggle="collapse" data-parent="#accordion2<?=$key?>" href="#accordion2<?=$key?>">
                            <span><?=$title?><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="accordion2<?=$key?>" class="panel-collapse collapse" style="height: 0px;">
                            <div class="accordion-body">
                                <?=$arResult['PROPERTIES']['accordion02_items']['~VALUE'][$key]['TEXT']?>
                            </div>
                        </div>
                    </div>
                    <?}//for?>
                </div>
            </div>
        </div>
    </div>
<?
}?>