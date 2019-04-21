<? if($arResult['PROPERTIES']['banner03_on']['VALUE']=='Да'){ ?>	
<div id="part32" class="row margin0 block-with-bg pad_bot part32" >
    <div class="maxwidth-theme">
        <div class="styled-block">
            <?if($arResult['PROPERTIES']['banner03_title']['VALUE']) echo "<h3>".$arResult['PROPERTIES']['banner03_title']['VALUE']."</h3>";?>
            <?if($arResult['PROPERTIES']['banner03_subtitle']['VALUE']) echo "<h4>".$arResult['PROPERTIES']['banner03_subtitle']['VALUE']."</h4>";?>
             <? echo $arResult['PROPERTIES']['banner03_text']['~VALUE']["TEXT"]; ?>
        </div>
    </div>
</div>
<?}