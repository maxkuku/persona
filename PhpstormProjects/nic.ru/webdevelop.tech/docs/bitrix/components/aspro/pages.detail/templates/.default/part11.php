<? if ($arResult['PROPERTIES']['foto_on']['VALUE'] == 'Да') { ?>

    <div id="part11" class="gallerys <? if ($arResult['PROPERTIES']['fon8']['VALUE'] == 'Да') { ?>greyline<? } ?> row margin0 block-with-bg pad_bot" id="video_blockk">
        <div class="maxwidth-theme">
            <h3 class="text-center"><?= $arResult['PROPERTIES']['foto_zagolok']['VALUE']; ?></h3>	

            <div class="head-block top controls" id="video_link_top" style="text-align: center;" >
                <div class="bottom_border"></div>

                <? CModule::IncludeModule('iblock'); ?>		
                <?
                $i = 0;

                $arFilter = Array('IBLOCK_ID' => 35, 'GLOBAL_ACTIVE' => 'Y');
                $db_list = CIBlockSection::GetList(Array('ID' => 'ASC'), $arFilter, true);
                $db_list->NavStart(20);
                while ($ar_result = $db_list->GetNext()) {
                    ?>

                    <? if (in_array($ar_result['ID'], $arResult['PROPERTIES']['foto_id']['VALUE'])) { ?>
                        <div class="item-link<?= ($i == 0 ? ' active' : '') ?>" data-filter="<?= $ar_result['ID']; ?>">
                            <div class="title">
                                <span class="btn-inline black mixitup-control-active" ><?= $ar_result['NAME']; ?></span>
                            </div>
                        </div>
                        <? $i++; ?>
                    <? } ?>
                <? }//while ?>
            </div>



            <div style="height: 330px;">
                <? foreach ($arResult['PROPERTIES']['foto_id']['VALUE'] as $i => $item) { ?>
                    <div class="wrap-slider video_all video_<?= $item ?>" >
                        <div class="flexslider front navigation-vcenter hover inside" data-plugin-options='{"animation":"slide", "directionNav": true, "animationLoop": true, "counts": [3, 2, 2, 1] }'>
                            <ul class="slides">

                                <?
                                $arSelect = Array("ID", "IBLOCK_ID", "NAME", 'PREVIEW_TEXT', 'SECTION_ID', 'PREVIEW_PICTURE', "*");
                                $arFilter = Array("IBLOCK_ID" => 35, "IBLOCK_SECTION_ID" => $item, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
                                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize" => 50), $arSelect);
                                while ($ob = $res->GetNextElement()) {
                                    $arProps = $ob->GetProperties();
                                    $arFields = $ob->GetFields();
                                    ?>	
                                    <? $URL = CFile::GetPath($arFields['PREVIEW_PICTURE']); ?>

                                    <li>
                                        <div>
                                            <a href="<?= $URL; ?>" class="blink-block fancybox" data-fancybox-group="gallery<?= $arFields['IBLOCK_SECTION_ID'] ?>" itemprop="url">
                                                <img class="img-responsive" src="<?= $URL; ?>" alt="фото1" title="фото1" itemprop="image">
                                            </a>
                                        </div>
                                    </li>

                                <? }//while ?>

                            </ul><!--/.slides-->
                        </div><!--/.flexslider-->
                    </div><!--/.wrap-slider-->
                <? }//foeach ?>
            </div>
        </div>	

    </div>




<? } ?>	