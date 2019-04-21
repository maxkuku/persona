<?if($arResult['PROPERTIES']['cena_class_on']['VALUE']=='Да'){?>

<div id="part5" class="<?if($arResult['PROPERTIES']['fon5']['VALUE']=='Да'){?>greyline<?}?>  row margin0 block-with-bg ">
	<div class="maxwidth-theme">
		<h3 class="text-center"><?=$arResult['PROPERTIES']['cena_class_zagolok']['VALUE'];?></h3>

		
		
		<div class="dt-pricing-table 4-column row" data-column="4">
		
		
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['cena_class_title']['VALUE'] as $title){?>
			<?$URL = CFile::GetPath($arResult['PROPERTIES']['cena_class_foto']['VALUE'][$i]);?>
			<div id="" class="price-4-col col-sm-3 ">
                <ul class="plan list-unstyled">
                    <li class="pricing-image-container">
						<img width="71" height="81" src="<?=$URL;?>" class="pricing-image attachment-medium" alt="">
					</li>
                  
                    <li class="hover-tip">
                        <p class="hover-tip-text"><?=$title;?></p>
                    </li>
                    <li class="plan-head">
                        <div class="plan-price"><?=$arResult['PROPERTIES']['cena_class_cena']['VALUE'][$i];?><br><span class="after-price"></span></div>
                        <div class="plan-title"><span><?=$arResult['PROPERTIES']['cena_class_ed_iz']['VALUE'][$i];?><br></span></div>                        
                    </li>
					<?=$arResult['PROPERTIES']['cena_class_text']['~VALUE'][$i]['TEXT'];?>
					
		<li class="plan-action">
                        <a href="<?=$arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i];?>" class="btn btn-default btn-lg animate-load" 
                <?if($arResult['PROPERTIES']['cena_class_ssilka']['VALUE'][$i]==''){?>style="visibility: hidden"<?}?>>
                            Подробнее
                        </a>
                    </li>
				</ul>
			</div>
		
		<?$i++;?> 	
		<?}?>	
			
		 

		</div>
		
		
	</div>
</div>

<?}?>