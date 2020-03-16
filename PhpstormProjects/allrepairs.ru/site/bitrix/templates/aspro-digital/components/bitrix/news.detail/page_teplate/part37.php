<? if ($arResult['PROPERTIES']['videoyt_on']['VALUE'] == 'Да') { ?>
                                                <? if ($arResult['PROPERTIES']['videoyt']['VALUE']) { ?>
    <div id="part37" class="maxwidth-theme block-with-bg ">
	<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['videoyt_title']['VALUE'];?></h2>
        <div class="text-center">
	 <iframe width="700" height="395" src="<?=$arResult['PROPERTIES']['videoyt']['VALUE'];?>"></iframe>
        </div>	
    </div>

                                                <? } ?>
<? } ?>