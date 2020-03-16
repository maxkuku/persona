
<?php if($arResult['PROPERTIES']['PART_44_ON']['VALUE']=='Да') :?>

    <div class="drag-block container" data-class="TOP_SERVICES_INDEX_drag" data-order="3">
        <div class="item-views services-items type_2 front services_scroll">
            <div class="maxwidth-theme" style="padding-left: 0px!important; padding-right: 0px!important;">
                <div class="row">
                    <div class="left_wrap col-md-4">
                        <div class="left_block">
                            <div class="title font_upper"><a class="dark-color" href="<?=$arResult['PROPERTIES']['PART_44_UP_URL']['VALUE']?>"><?=$arResult['PROPERTIES']['PART_44_UP_URL_TEXT']['VALUE']?></a></div>
                            <div class="text_before_items" style="font-family: Montserrat ,Arial,sans-serif; font-weight: normal;">
                                <h2 class="prior-h2" style=""><?=$arResult['PROPERTIES']['PART_44_H2']['VALUE']?></h2>
                                <?=$arResult['PROPERTIES']['PART_44_DESCRIPTION']['~VALUE']['TEXT']?>
                            </div>
                            <div class="button"><a class="btn btn-default btn-transparent" style="background-color: #2b7de0; color: #ffffff; position: initial;" href="<?=$arResult['PROPERTIES']['PART_44_DOWN_URL']['VALUE']?>"><?=$arResult['PROPERTIES']['PART_44_DOWN_URL_TEXT']['VALUE']?></a></div>
                        </div>
                    </div>
                    <div class="right_wrap col-md-8">
                        <div class="items row flexbox">

                            <?php foreach ($arResult['PROPERTIES']['PART_44_IMAGES']['VALUE'] as $key => $image):?>

                            <div class="item col-md-4 col-sm-4 col-xs-6  " style="padding: 16px; box-shadow: none;" data-id="475" id="bx_1373509569_475">
                                <div class="wrap shadow" style="height: 262px;">
                                    <div class="image">
                                        <div class="wrap"><img src="<?=CFile::GetPath($image);?>" class="img-responsive"></div>
                                    </div>
                                    <div class="body-info">
                                        <div class="wrap">
                                            <div class="title"><a class="dark-color" href="<?=$arResult['PROPERTIES']['PART_44_URL']['VALUE'][$key]?>"><?=$arResult['PROPERTIES']['PART_44_URL_TEXT']['VALUE'][$key]?></a></div>
                                            <div class="bottom-block">
                                                <div class="previewtext font_xs"><p><?=$arResult['PROPERTIES']['PART_44_URL_DESCR']['VALUE'][$key]?></p></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?=$arResult['PROPERTIES']['PART_44_URL']['VALUE'][$key]?>"></a>
                                </div>
                            </div>

                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.items.row.flexbox .item').hover(
            function () {
                $(this).find('.body-info').css('margin-top', '-80px');
                $(this).find('.bottom-block').show()
            },
            function () {
                $(this).find('.body-info').css('margin-top', '0px');
                $(this).find('.bottom-block').hide()
            }
        );
    </script>

<?php endif;?>