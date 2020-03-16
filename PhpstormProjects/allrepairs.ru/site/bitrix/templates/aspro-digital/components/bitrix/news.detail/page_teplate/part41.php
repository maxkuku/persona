
<?php if($arResult['PROPERTIES']['PART_41_ON']['VALUE']=='Да') :?>

    <div class="drag-block container SLIDER_INDEX  over-hide" id="part41" data-class="SLIDER_INDEX_drag" data-order="2">
        <div class="row margin0 greyline">
            <div class="maxwidth-theme">
                <div class="slider_mainpage_1 swipeignore">
                    <div class="news_block item-views table-elements">
                        <div class="owl-carousel" style="display: block" data-plugin_options="{items: 2, margin: 32, loop: true,  dots: false, autoplay: 3000, autoplayTimeout: 3000, autoplayHoverPause: true, smartSpeed:1000, responsive:{0:{items:1},880:{items:2}}}">
                            <?php foreach ($arResult['PROPERTIES']['PART_41_IMAGES']['VALUE'] as $key => $image):?>


                            <div id="bx_<?=$image?>" class="shadow-dark-hover dark_hover_block bottom-dark-shadow m-y-0 bg-no-rep bg-size-cover" style="background-image:url(<?=CFile::GetPath($image);?>); background-repeat: no-repeat;">
                                <div class="item sliced  m-y-0 " style=" background-repeat: no-repeat; background-position: center!important;background-size: cover!important;">
                                    <a href="<?=$arResult['PROPERTIES']['PART_41_URLS']['VALUE'][$key]?>" class="z-3 wdt-100 hght-100"></a>
                                    <div class="dark_hover_5"></div>
                                    <div class="info z-3 b-0">
                                        <a class="name dark_link option-bold color-white-fix fs-17 lh-125" href="<?=$arResult['PROPERTIES']['PART_41_URLS']['VALUE'][$key]?>"><?=$arResult['PROPERTIES']['PART_41_NAME']['VALUE'][$key]?></a>
                                        <div class="text m-b-0 fs-15 lh-125 color-ddd-fix"><?=$arResult['PROPERTIES']['PART_41_DESCR']['VALUE'][$key]?></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <div class="nav_wrapper">
                            <div class="bottom_nav index_block" data-class=".news_block.blocks.portfolio" data-item=">.items">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $(".owl-carousel").owlCarousel(
                {
                    "items": 2,
                    "margin": 32,
                    "loop": true,
                    "dots": false,
                    "autoplay": 3000,
                    "autoplayTimeout": 3000,
                    "autoplayHoverPause": true,
                    "smartSpeed":1000,
                    "responsive":
                        {
                            "0": {"items":1},
                            "880":{"items":2}
                        }
                }
            );

        });
    </script>


<?php endif;?>