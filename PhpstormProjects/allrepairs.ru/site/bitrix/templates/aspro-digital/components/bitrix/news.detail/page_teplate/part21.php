<?if($arResult['PROPERTIES']['dop_napravlenia_on']['VALUE']=='Да'){?>	


<div id="part21" class="maxwidth-theme">
<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['dop_napravlenia_titleh1']['VALUE'];?> </h2>
</div>

<div class="row pad_bot margin0 block-with-bg process bg3_tip">
	
	<?$i=0;?> 
	<?foreach($arResult['PROPERTIES']['dop_napravlenia_title']['VALUE'] as $title){?>		
	<?$URL = $arResult['PROPERTIES']['dop_napravlenia_img']['VALUE'][$i];?>
							
	<div class="col-md-4 col-sm-6">
		<img class="vc_single_image-img " src="<?=$URL;?>" alt="<?=$arResult['PROPERTIES']['alt_img_dopnaprav']['VALUE'][$i];?>" title="<?=$arResult['PROPERTIES']['alt_img_dopnaprav']['VALUE'][$i];?>" width="257" height="257">
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