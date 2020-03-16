<? if($arResult['PROPERTIES']['banner02_on']['VALUE']=='Да'){ ?>	
<div id="part31" class="row margin0 block-with-bg pad_bot part31" >
    <div class="maxwidth-theme">
        <div class="styled-block">
            <?if($arResult['PROPERTIES']['banner02_title']['VALUE']) echo "<h2 class='cfonts'>".$arResult['PROPERTIES']['banner02_title']['VALUE']."</h2>";?>
            <?if($arResult['PROPERTIES']['banner02_subtitle']['VALUE']) echo "<h3 class='cfonts3'>".$arResult['PROPERTIES']['banner02_subtitle']['VALUE']."</h3>";?>
             <? echo $arResult['PROPERTIES']['banner02_text']['~VALUE']["TEXT"]; ?>
        </div>
    </div>
</div>
<?}