<?php if($arResult['PROPERTIES']['slider2_on']['VALUE']=='Да') :?>
    <style>
        .slider_toppp_video {
            height: initial;
            z-index: 0;
            overflow: hidden;
            width: 100%;
        }
        .mixed_banners.clearfix {
            overflow: hidden;
        }
    </style>
<div id="triple" class="drag-block container" data-class="BIG_BANNER_INDEX_drag" data-order="1">
<div class="row margin0">
<div class="mixed_banners clearfix">
<div class="big_banners_block">
    <div class="banners-big wmix_banner front view_2">
        <div class="maxwidth-banner">
            <?if($arResult['PROPERTIES']['sl2_all_bg']['VALUE']){?>
            <div class="slider_toppp_video">
                <video id="player_<?=$arResult['PROPERTIES']['sl2_all_bg']['ID']?>" class="video cover" preload="auto" autoplay="" muted="" loop="" style="width:100%;">
                    <source src="<?=$arResult['PROPERTIES']['sl2_all_bg']['VALUE']?>" type="video/mp4">
                </video>
            </div>
            <?}?>
            <div class="flexslider unstyled dark-nav flexslider-control-nav flexslider-direction-nav" data-plugin-options='{"directionNav": true, "customDirection": ".nav-carousel a", "controlNav": true, "nav" : "normal", "slideshow": true, "animation": "slide", "direction": "horizontal", "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": true}'>
                <ul class="slides items">
                    <?
                    foreach ($arResult['PROPERTIES']['sl2_video']['VALUE'] as $j => $vid) {
                        $v = 0;
                        $im_pr = "";
                        $im_det = "";

                        if(strpos($vid, '.mp4') > 0){
                            $v = 1;
                        }
                        else{
                            $im_pr = CFile::ResizeImageGet($vid, array('width' => 570), BX_RESIZE_IMAGE_EXACT, true);
                            $im_det = CFile::ResizeImageGet($vid, array('width' => 1427, 'height' => 628), BX_RESIZE_IMAGE_EXACT, true);
                        }


                        ?>
                        <li class="44 box item <?= ($v) ? "wvideo" : "" ?>" id="bx_321_<?= $arResult['PROPERTIES']['sl2_video']['ID'] ?>" style="background: url(<?=$im_det['src']?>) center center / cover no-repeat !important;" data-slide_index="0" data-video_source="PROPERTY" data-video_player="HTML5" data-video_src="<?= $vid ?>" data-video_autoplay="1" data-video_disable_sound="1" data-video_loop="1" data-video_cover="1" aria-hidden="true">
                            <? if ($v): ?>
                                <div class="wrapper_video">
                                    <video autobuffer="" playsinline="" webkit-playsinline="" id="player_<?= $arResult['PROPERTIES']['SL2_VIDEO']['ID'] ?>" class="video cover" loop="" muted="" autoplay>
                                        <source src="<?= $vid ?>" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
                                    </video>
                                </div>
                            <?endif ?>
                            <div class="maxwidth-theme">
                                <div class="row light ">
                                    <div class="col-md-6 text">
                                        <div class="inner" style="padding-top: 183px;">
                                            <div class="section"><?= $arResult['PROPERTIES']['sl2_rubrik']['VALUE'][$j] ?></div>
                                            <div class="title"><?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?></div>
                                            <div class="text-block"><?= $arResult['PROPERTIES']['sl2_text']['VALUE'][$j]['TEXT'] ?></div>
                                            <div class="buttons">
                                                <a href="<?= $arResult['PROPERTIES']['sl2_more']['VALUE'][$j] ?>"
                                                   class="btn btn-default"><?= $arResult['PROPERTIES']['sl2_more_text']['VALUE'][$j] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img">
                                        <div class="inner">
                                            <?if($im_pr['src']):?>
                                                <img class="plaxy" src="<?=$im_pr['src']?>" alt="<?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?>" title="<?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?>">
                                            <?endif?>
                                        </div>
                                    </div>
                                    <div class="loading_video">
                                        <hr>
                                        <hr>
                                        <hr>
                                        <hr>
                                    </div>
                                    <div class="wrap">
                                        <div class="inner">
                                            <div class="tablet_img"
                                                 style="background:url(<?=$im_det['src']?>) center center / cover no-repeat"><?if($im_pr['src']):?><img class="plaxy" src="<?=$im_pr['src']?>" alt="<?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?>" title="<?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?>"><?endif?>
                                            </div>
                                            <div class="tablet_text">
                                                <div class="title"><?= $arResult['PROPERTIES']['sl2_zagolovok']['VALUE'][$j] ?></div>
                                                <div class="text-block"><?= $arResult['PROPERTIES']['sl2_text']['VALUE'][$j]['TEXT'] ?></div>
                                                <div class="banner_buttons">
                                                    <a href="<?= $arResult['PROPERTIES']['sl2_more']['VALUE'][$j] ?>"
                                                       class="btn btn-default btn-transparent-bg"><?= $arResult['PROPERTIES']['sl2_more_text']['VALUE'][$j] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay dark"></div>
                        </li>
                    <?}?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="small_banners_block">
        <div class="mix_banners <?=(mob_detect())?"bottom":""?> clearfix">
            <div class="item light" id="bx_321_<?= $arResult['PROPERTIES']['sl2_top_pic']['ID'] ?>" style="background:url('<?=$arResult['PROPERTIES']['sl2_top_pic']['VALUE']?>') center center / cover no-repeat">
                <div class="text">
                    <div class="section"><?=$arResult['PROPERTIES']['sl2_top_rubrik']['VALUE']?></div>
                    <div class="title"><?=$arResult['PROPERTIES']['sl2_top_zagolovok']['VALUE']?></div>
                </div>
                <a href="<?=$arResult['PROPERTIES']['sl2_top_href']['VALUE']?>"></a>
            </div>
            <div class="item light" id="bx_321_<?= $arResult['PROPERTIES']['sl2_bot_pic']['ID'] ?>" style="background:url('<?=$arResult['PROPERTIES']['sl2_bot_pic']['VALUE']?>') center center / cover no-repeat">
                <div class="text">
                    <div class="section"><?=$arResult['PROPERTIES']['sl2_bot_rubrik']['VALUE']?></div>
                    <div class="title"><?=$arResult['PROPERTIES']['sl2_bot_zagolovok']['VALUE']?></div>
                </div>
                <a href="<?=$arResult['PROPERTIES']['sl2_bot_href']['VALUE']?>"></a>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<?endif;?>