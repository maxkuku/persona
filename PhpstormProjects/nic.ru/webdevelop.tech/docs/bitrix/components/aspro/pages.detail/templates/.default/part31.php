<? if($arResult['PROPERTIES']['banner02_on']['VALUE']=='Да'){ ?>	
<div id="part31" class="row margin0 block-with-bg pad_bot part31" >
    <div class="maxwidth-theme">
        <div class="styled-block">
            <?if($arResult['PROPERTIES']['banner02_title']['VALUE']) echo "<h3>".$arResult['PROPERTIES']['banner02_title']['VALUE']."</h3>";?>
            <?if($arResult['PROPERTIES']['banner02_subtitle']['VALUE']) echo "<h4>".$arResult['PROPERTIES']['banner02_subtitle']['VALUE']."</h4>";?>
             <? echo $arResult['PROPERTIES']['banner02_text']['~VALUE']["TEXT"]; ?>
        </div>
    </div>
</div>
<?}