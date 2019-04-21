<? if ($arResult['PROPERTIES']['accordion03_on']['VALUE'] == 'Да') { ?>	
    <div id="part35" class="row margin0 block-with-bg pad_bot" >
        <div class="maxwidth-theme">
            
            <div class="col-md-12">
                <h2><? echo $arResult['PROPERTIES']['accordion03_title']['VALUE']; ?></h2>
                <div class="accordion-type-2">
                    <? foreach ($arResult['PROPERTIES']['accordion03_captions']['VALUE'] as $key => $title){?>
                    <div class="item-accordion-wrapper">
                        <div class="accordion-head accordion-close collapsed" data-toggle="collapse" data-parent="#accordion3<?=$key?>" href="#accordion3<?=$key?>">
                            <span><?=$title?><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="accordion3<?=$key?>" class="panel-collapse collapse" style="height: 0px;">
                            <div class="accordion-body">
                                <?=$arResult['PROPERTIES']['accordion03_items']['~VALUE'][$key]['TEXT']?>
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