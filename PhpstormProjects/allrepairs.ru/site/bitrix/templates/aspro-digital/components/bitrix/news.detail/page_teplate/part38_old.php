<? if ($arResult['PROPERTIES']['videore_on']['VALUE'] == 'Да') { ?>

    <div id="part38" class="maxwidth-theme block-with-bg ">
        <h2 class="text-center cfonts"><?= $arResult['PROPERTIES']['videore_title']['VALUE']; ?></h2>
        <div class="text-center">
            <div id="slider_first" style="height: 550px;">
                <div class="wrap-slider video_all video_<?= $item ?>" >
                    <div class="flexslider front navigation-vcenter hover inside" data-plugin-options='{"animation":"slide", "directionNav": true, "animationLoop": true, "counts": [3, 2, 2, 1] }'>
                        <ul class="slides">
                            <? foreach ($arResult['PROPERTIES']['videore']['VALUE'] as $i => $item) { ?>
                                <li>
                                    <div><iframe width="400" height="250" src="<?= $item ?>" frameborder="0" allowfullscreen=""></iframe></div>
                                </li>
                                <? //}//wile ?>
                            <? }//foeach   ?>
                        </ul>
                    </div><!--/.flexslider-->
                </div><!--/.wrap-slider-->
            </div>
            <!--div id="owl-demo" class="carousel owl-carousel">
                <? /*if ($arResult["PROPERTIES"]["videore"]["VALUE"]["0"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult['PROPERTIES']['videore']['VALUE']["0"]; ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["1"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult['PROPERTIES']['videore']['VALUE']["1"]; ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["2"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["2"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["3"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["3"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["4"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["4"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["5"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["5"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["6"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["6"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["7"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["7"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["8"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["8"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["9"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["9"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["10"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["10"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["11"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["11"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["12"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["12"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["13"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["13"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["14"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["14"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; ?>
                <? if ($arResult["PROPERTIES"]["videore"]["VALUE"]["15"]): ?>
                    <div class="item">
                        <iframe class="video_yout" src="<?= $arResult["PROPERTIES"]["videore"]["VALUE"]["15"] ?>"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <? endif; */?>
            </div-->
        </div>
    </div>
    <script src="/js/owl.carousel.min.js"></script>
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                //autoPlay: 3000, //Set AutoPlay to 3 seconds
                autoplay:true,
                autoplayTimeout:3000,
                items: 3,
                loop:true,
                lazyLoad: true,
                //navigation: true,
                nav: true,
                autoplayHoverPause:true
            });
            $('#owl-demo iframe').on('click',function(){
                $("#owl-demo").trigger('stop.owl.autoplay')
            })
        });
    </script>
<? } ?>
