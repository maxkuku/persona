<?//Заголовок блока iframe?>
<?if(!empty($arResult['PROPERTIES']['iframe_h2']['VALUE'])):?>
    <div class="row margin0 block-with-bg" style="position: relative; z-index: 2;">
        <h2 class="submenu-h2"><?=$arResult['PROPERTIES']['iframe_h2']['VALUE'];?></h2>
    </div>
<?endif;?>
<?if ($arResult['PROPERTIES']['iframe_text']['VALUE'] && $arResult['PROPERTIES']['iframe_src']['VALUE']) {?>
    <div id="part40" class="container " style="padding-bottom: 0; position: relative; z-index: 2;">
        <div class="row">
            <div class="maxwidth-theme" style="background-color: white;">
                <div class="aside <?if($arResult['PROPERTIES']['iframe_src']['VALUE']):?>col-md-6<?else:?>col-md-12<?endif?> col-sm-12 col-xs-12 left-menu-md">
                    <div class="iframe_text"><?=$arResult['PROPERTIES']['iframe_text']['VALUE']?></div>
                </div>
                <div class="aside <?if($arResult['PROPERTIES']['iframe_text']['VALUE']):?>col-md-6<?else:?>col-md-12<?endif?> col-sm-12 col-xs-12 content-md iframe-wrap">
                    <img id="iframe_preview" src="<?=$arResult['PROPERTIES']['iframe_preview']['VALUE']?>"/>
                    <iframe id="iframe_element" src="<?=$arResult['PROPERTIES']['iframe_src']['VALUE']?>"></iframe>
                </div>
            </div>
        </div>
    </div>
<?}?>