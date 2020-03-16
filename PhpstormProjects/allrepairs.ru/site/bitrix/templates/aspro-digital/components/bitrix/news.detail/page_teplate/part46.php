<?php if($arResult['PROPERTIES']['PART_46_ON']['VALUE']=='Да') :?>
    <div class="drag-block container COMPANY_INDEX " data-class="COMPANY_INDEX_drag" data-order="10">
        <div class="row">
            <div class="maxwidth-theme" style="max-width: 1392px;">
                <div class="title_block col-md-12">
                    <h3 class="option-bold-700"><?=$arResult['PROPERTIES']['PART_46_H3']['~VALUE']?></h3>
                    <a href="<?=$arResult['PROPERTIES']['PART_46_LEFT_URL']['~VALUE']?>" class="right_link_block"><?=$arResult['PROPERTIES']['PART_46_LEFT_URL_TEXT']['~VALUE']?></a>
                </div>
            </div>
            <div class="maxwidth-theme company-front flexbox" style="max-width: 1392px;">
                <div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <h4 class="option-bold"><?=$arResult['PROPERTIES']['PART_46_H4']['~VALUE']?></h4>
                        <div class="company"><?=$arResult['PROPERTIES']['PART_46_TEXT']['~VALUE']['TEXT']?></div>
                        <div class="company_buttons">
                            <a href="<?=$arResult['PROPERTIES']['PART_46_BLUE_URL']['~VALUE']?>" class="btn btn-default">
                                <?=$arResult['PROPERTIES']['PART_46_BLUE_URL_TEXT']['~VALUE']?></a>
                            <a href="<?=$arResult['PROPERTIES']['PART_46_WHITE_URL']['~VALUE']?>" class="btn btn-default white">
                                <?=$arResult['PROPERTIES']['PART_46_WHITE_URL_TEXT']['~VALUE']?></a>
                        </div>
                    </div>
                    <div class="col-md-6 hidden-xs col-sm-12">
                        <div class="flexslider front navigation-vcenter hover inside" data-plugin-options="{animation:slide, animationLoop: true, maxItems: 1}">
                            <ul class="slides">
                                <?php foreach ($arResult['PROPERTIES']['PART_46_IMAGES']['VALUE'] as $key => $image):?>
                                    <li>
                                        <div class="img-responsive min-height-400 bg-pos-c bg-no-rep bg-size-cover" style="background:url(<?=CFile::GetPath($image);?>) no-repeat center center;  background-size: cover; width: 640px; height:400px; margin: auto;"></div>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif;?>