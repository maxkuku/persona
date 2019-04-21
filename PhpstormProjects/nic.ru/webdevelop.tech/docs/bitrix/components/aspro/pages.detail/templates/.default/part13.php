<?if($arResult['PROPERTIES']['paralax2_on']['VALUE']=='Да'){?>
<div id="part13" class=" row margin0 block-with-bg pad_bot">

	

			<?$URL = CFile::GetPath($arResult['PROPERTIES']['paralax2_foto']['VALUE']);?>
			
			<div class="row margin0 company-block block-with-bg" style="" data-type="parallax-bg">
				<img src="<?=$URL;?>" width="100%" />
			</div>



	
</div>	

<?}?>