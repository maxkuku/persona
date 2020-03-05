<?if($arResult['PROPERTIES']['paralaks_on']['VALUE']=='Да'){?>
<?/*$URL = CFile::GetPath($arResult['PROPERTIES']['paralaks_foto']['VALUE']);*/?>
	<div id="part7" class="row margin0 company-block block-with-bg paralax_block" data-type="parallax-bg" style="background: url('<?=$arResult['PROPERTIES']['paralaks_foto']['VALUE'];?>') 50% 0 no-repeat fixed;" >
        <div class="maxwidth-theme">
            <div class="col-md-12" >
                <div  class="paralax_block_but" style=" text-align:center;">
                <a class="btn btn-default btn-lg animate-load"  href="<?=$arResult['PROPERTIES']['paralaks_ssilka']['VALUE'];?>"><span><?=$arResult['PROPERTIES']['paralaks_text']['VALUE'];?></span></a>
                </div>
            </div>
        </div>
	</div>
<?}?>