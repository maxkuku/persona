<?if($arResult['PROPERTIES']['dop_napravlenia_on']['VALUE']=='Да'){?>	


<div id="part21" class="maxwidth-theme">
<h3 class="text-center"><?=$arResult['PROPERTIES']['dop_napravlenia_titleh1']['VALUE'];?> </h3>
</div>

<div class="row pad_bot margin0 block-with-bg process bg3_tip">
	
	<?$i=0;?> 
	<?foreach($arResult['PROPERTIES']['dop_napravlenia_title']['VALUE'] as $title){?>		
	<?$URL = CFile::GetPath($arResult['PROPERTIES']['dop_napravlenia_img']['VALUE'][$i]);?>
							
	<div class="col-md-4 col-sm-6">
		<img class="vc_single_image-img " src="<?=$URL;?>" width="257" height="257" alt="mex_styajka" title="mex_styajka">
		<div class="title">							
			<?=$title;?>								
		</div>
		<div class="previewtext">
			<?=$arResult['PROPERTIES']['dop_napravlenia_text']['VALUE'][$i]['TEXT'];?>			
		</div>
	</div>
	
	<?$i++;?>
	<?}?>

</div>	


<?}?>