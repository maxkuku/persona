<?if($arResult['PROPERTIES']['iframe_on']['VALUE']=='Да'){?>
<?if(!empty($arResult['PROPERTIES']['iframe_h2']['VALUE'])):?>
    <div class="row margin0 block-with-bg" style="position: relative; z-index: 2;">
        <h2 class="submenu-h2"><?=$arResult['PROPERTIES']['iframe_h2']['VALUE'];?></h2>
    </div>
<?endif;?>
<?if ($arResult['PROPERTIES']['iframe_text']['VALUE']['TEXT'] && $arResult['PROPERTIES']['iframe_src']['VALUE']) {?>
    <div id="part40" class="container nonpadding" style="padding-bottom: 0; position: relative; z-index: 2;">
        <div class="row">
            <div class="maxwidth-theme aside-wrap" style="background-color: white;">
                <div class="aside <?if($arResult['PROPERTIES']['iframe_src']['VALUE']):?>col-md-6<?else:?>col-md-12<?endif?> col-sm-12 col-xs-12 left-menu-md">
                    <div class="iframe_text"><?=html_entity_decode($arResult['PROPERTIES']['iframe_text']['VALUE']['TEXT'])?></div>
                </div>
                <div class="aside <?if($arResult['PROPERTIES']['iframe_text']['VALUE']['TEXT']):?>col-md-6<?else:?>col-md-12<?endif?> col-sm-12 col-xs-12 content-md iframe-wrap">
                    <div class="image" style="background:url(<?=CFile::GetPath($arResult['PROPERTIES']['iframe_preview']['VALUE'])?>) top center / cover no-repeat">
                        <div class="play">
                            <a class="fancybox" target="_blank" href="<?=$arResult['PROPERTIES']['iframe_src']['VALUE']?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>
<?}?>