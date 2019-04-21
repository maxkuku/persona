<? if ($arResult['PROPERTIES']['accordion01_on']['VALUE'] == 'Да') { ?>	
    <div id="part33" class="row margin0 block-with-bg pad_bot" >
        <div class="maxwidth-theme">
            
            <div class="col-md-12">
                <h2><? echo $arResult['PROPERTIES']['accordion01_title']['VALUE']; ?></h2>
                <div class="accordion-type-2">
                    <? foreach ($arResult['PROPERTIES']['accordion01_captions']['VALUE'] as $key => $title){?>
                    <div class="item-accordion-wrapper">
                        <div class="accordion-head accordion-close collapsed" data-toggle="collapse" data-parent="#accordion1<?=$key?>" href="#accordion1<?=$key?>">
                            <span><?=$title?><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="accordion1<?=$key?>" class="panel-collapse collapse" style="height: 0px;">
                            <div class="accordion-body">
                                <?=$arResult['PROPERTIES']['accordion01_items']['~VALUE'][$key]['TEXT']?>
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