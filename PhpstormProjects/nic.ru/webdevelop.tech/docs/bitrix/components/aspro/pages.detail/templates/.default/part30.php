<? if($arResult['PROPERTIES']['banner01_on']['VALUE']=='Да'){ ?>	
<div id="part30" class="row margin0 block-with-bg pad_bot part30" >
    <div class="maxwidth-theme">
        <div class="styled-block">
            <?if($arResult['PROPERTIES']['banner01_title']['VALUE']) echo "<h3>".$arResult['PROPERTIES']['banner01_title']['VALUE']."</h3>";?>
            <?if($arResult['PROPERTIES']['banner01_subtitle']['VALUE']) echo "<h4>".$arResult['PROPERTIES']['banner01_subtitle']['VALUE']."</h4>";?>
             <? echo $arResult['PROPERTIES']['banner01_text']['~VALUE']["TEXT"]; ?>
        </div>
    </div>
</div>
<?}