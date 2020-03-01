<? if ($arResult['PROPERTIES']['videore_on']['VALUE'] == 'Да') { ?>

    <div id="part38" class="maxwidth-theme block-with-bg ">
        <h2 class="text-center cfonts"><?= $arResult['PROPERTIES']['videore_title']['VALUE']; ?></h2>
        <div class="text-center">
            <div id="slider_sec">
                <div class="wrap-slider video_all video_<?= $item ?>" >
                    <div class="flexslider front navigation-vcenter hover inside" data-plugin-options='{"animation":"slide", "directionNav": true, "animationLoop": true, "slideshow": false, "counts": [3, 2, 2, 1] }'>
                        <ul class="slides">
                        <? foreach ($arResult['PROPERTIES']['videore']['VALUE'] as $i => $item) { ?>
                            <?#print_r($item)?>
                            <li><?$src = array_reverse(explode("/", $item))[0];
                            if($src != ""):?>
                                <div class="play youtube-video-place embed-responsive embed-responsive-16by9" data-yt-url="<?=$item?>" style="background-image: url(https://img.youtube.com/vi/<?=$src?>/hqdefault.jpg); background-position: center -45px;"><a class="fancybox" target="_blank" href="<?=$item?>"></a>
                                </div>
                            </li>
                            <?endif?>
                        <? }//foreach   ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>
