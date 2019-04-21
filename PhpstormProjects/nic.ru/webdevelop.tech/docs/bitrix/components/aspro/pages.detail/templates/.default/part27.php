<?if($arResult['PROPERTIES']['text5_on']['VALUE']=='Да'){?>

<div id="part27" class="<?if($arResult['PROPERTIES']['fon19']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot" >
<div class="maxwidth-theme">
<h3 class="text-center"><?=$arResult['PROPERTIES']['text5_title']['VALUE'];?> </h3>
		
		
		<ul class="list icons list-unstyled">
		
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['text5_text']['VALUE'] as $title){?>		
		
			<li><i class="<?=$arResult['PROPERTIES']['text5_icon']['VALUE'][$i];?>"></i> <?=$title;?></li>

		<?$i++;?>
		<?}?>	
		
		</ul>
	
				
</div>
</div>	
	
	
<?}?>