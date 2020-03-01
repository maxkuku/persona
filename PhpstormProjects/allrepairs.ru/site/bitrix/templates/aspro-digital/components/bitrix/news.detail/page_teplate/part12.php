<? if ($arResult['PROPERTIES']['video_on']['VALUE'] == 'Да') { ?>
    <div id="part12" class="gallerys <? if ($arResult['PROPERTIES']['fon9']['VALUE'] == 'Да') { ?>greyline<? } ?> row margin0 block-with-bg pad_bot">
        <div class="maxwidth-theme">
            <h2 class="text-center cfonts"><?= $arResult['PROPERTIES']['video_zagolok']['VALUE']; ?></h2>
            <div class="head-block top controls" id="video_link_top">
                <div class="bottom_border"></div>
                <? CModule::IncludeModule('iblock'); ?>		
                <?
                $i = 0;

                $arFilter = Array('IBLOCK_ID' => 36, 'GLOBAL_ACTIVE' => 'Y');
                $db_list = CIBlockSection::GetList(Array('SORT' => 'ASC'), $arFilter, true);
                $db_list->NavStart(20);
                while ($ar_result = $db_list->GetNext()) {
                    ?>

                    <? if (in_array($ar_result['ID'], $arResult['PROPERTIES']['video_id']['VALUE'])) { ?>
                        <div class="item-link<?= ($i == 0 ? ' active' : '') ?>" data-filter="<?= $ar_result['ID']; ?>">
                            <div class="title">
                                <span class="btn-inline black mixitup-control-active" ><?= $ar_result['NAME']; ?></span>
                            </div>
                        </div>
                        <? $i++; ?>
                    <? } ?>	
                <? } ?>
            </div>
            <div>
                <? foreach ($arResult['PROPERTIES']['video_id']['VALUE'] as $i => $item) { ?>
                    <div class="wrap-slider video_all video_<?= $item ?>" >
                        <div class="flexslider front navigation-vcenter hover inside" data-plugin-options='{"animation":"slide", "directionNav": true, "animationLoop": true, "slideshow": false, "counts": [3, 2, 2, 1] }'>
                            <ul class="slides">
                                <?
                                CModule::IncludeModule('iblock');
                                $arSelect = Array("ID", "IBLOCK_ID", "NAME", 'PREVIEW_TEXT', 'SECTION_ID', 'PREVIEW_PICTURE', "*");
                                $arFilter = Array("IBLOCK_ID" => 36, "IBLOCK_SECTION_ID" => $item, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
                                while ($ob = $res->GetNextElement()) {
                                    $arProps = $ob->GetProperties();
                                    $arFields = $ob->GetFields();
                                    $video_id = get_string_between($arFields['~PREVIEW_TEXT'], 'embed/', '" frame');


                                    $src = (yt_exists($video_id))?$arFields['~PREVIEW_TEXT']:"";
                                    preg_match('/src="([^"]+)"/', $src, $match);
                                    $url = $match[1]; # all src match
                                    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=embed/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
                                    if($src != ""):
                                    ?>
                                    <li><?#yt_exists in bitrix/php_interface/init.php?>
                                        <div class="play youtube-video-place embed-responsive embed-responsive-16by9" data-yt-url="<?=$url?>" style="background-image: url(https://img.youtube.com/vi/<?=$matches[0]?>/hqdefault.jpg); background-position: center -45px;"><a class="fancybox" target="_blank" href="<?=$url?>"></a>
                                        </div>
                                    </li>
                                <? endif;
                                }//wile ?>

                            </ul>
                        </div>
                    </div>
                <? }//foreach   ?>
            </div>

        </div>	

    </div>

<? } ?>	
