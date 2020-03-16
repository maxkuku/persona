<?php if($arResult['PROPERTIES']['PART_47_ON']['VALUE']=='Да') :?>
    <div class="drag-block container FLOAT_BANNERS_INDEX  item-views catalog" data-class="FLOAT_BANNERS_INDEX_drag" data-order="3">
        <div class="row margin0">
            <div class="maxwidth-theme" style="max-width: 1392px;">
                <div class="col-md-12">
                    <div class="float_banners_v1 item-views blocks">
                        <div class="title_block">
                            <a href="<?=$arResult['PROPERTIES']['PART_47_HREF']['VALUE']?>" class="right_link_block"><?=$arResult['PROPERTIES']['PART_47_HREF_TEXT']['VALUE']?></a>
                            <h3 class=" option-bold-700 fs-30" style="padding-top: 0px;"><?=$arResult['PROPERTIES']['PART_47_H3']['VALUE']?></h3>
                        </div>
                        <div class="row items flexbox nmac">
                            <?php for($i = 0; $i <= 3; $i++):?>
                            <div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12">
                                <div id="bx_1373509569_2095" class="item shadow-light-hover pointer border b-r-small bg-grey1-hover" style="height: 288px;">
                                    <a href="<?=$arResult['PROPERTIES']['PART_47_HREF_BLOCK']['VALUE'][$i]?>" class="all_prnt_block"></a>
                                    <div class="title fs-17 color-333 lh-145 option-bold-us" style="height: 48px;">
                                        <span><?=$arResult['PROPERTIES']['PART_47_HREF_BLOCK_TEXT']['VALUE'][$i]?></span>
                                    </div>
                                    <div class="preview_text fs-14 lh-150 color-666" style="height: 64px;">
                                        <?=$arResult['PROPERTIES']['PART_47_BLOCK_DESCR']['VALUE'][$i]?></div>
                                    <a href="<?=$arResult['PROPERTIES']['PART_47_HREF_BLOCK']['VALUE'][$i]?>" class="all_prnt_block"><div class="arrow b-r-small bg-no-rep border" ></div></a>
                                </div>
                            </div>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif;?>