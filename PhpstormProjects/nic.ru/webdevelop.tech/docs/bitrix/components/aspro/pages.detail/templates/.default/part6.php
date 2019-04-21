<?if($arResult['PROPERTIES']['process_on']['VALUE']=='Да'){?>

<div id="part6" class="<?if($arResult['PROPERTIES']['fon6']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center"><?=$arResult['PROPERTIES']['process_zagolok']['VALUE'];?> </h3>
	
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['process_title']['VALUE'] as $title){?>		
		<?$URL = CFile::GetPath($arResult['PROPERTIES']['process_foto']['VALUE'][$i]);
                $link = $arResult['PROPERTIES']['process_ssilka']['VALUE'][$i];
                $link = $link == '#' ? 'javascript:void(0);' : $link;
                ?>		

			
		<div class="items row process">
			
			<?if($i % 2 == 0) {?>
				<div class="col-md-6 hidden-xs hidden-sm">	
				<div class="image shine">
					<a href="<?=$link?>">
						<img src="<?=$URL;?>" class="img-responsive">
					</a>
				</div>
				</div>
			<?}?>
			
			<div class="col-md-6">
				<div class="item noborder wdate clearfix" >
					
					<div class="image shine visible-xs visible-sm">
                                            <a href="<?=$link?>">
							<img src="<?=$URL;?>" class="img-responsive">
						</a>
					</div>
				
					<div class="body-info">
						<div class="title">							
							<?=$title;?>												
						</div>
									
						<div class="previewtext">
							<?=$arResult['PROPERTIES']['process_text']['~VALUE'][$i]['TEXT'];?>
						</div>

						<div class="btns">
							<a class="btn btn-default btn-lg animate-load"  href="<?=$link?>">
                                                            <span>Перейти</span>
                                                        </a>
						</div>
						
					</div>
				</div>						
			</div>
					
			<?if(1 && $i % 2 != 0) {?>
				<div class="col-md-6 hidden-xs">	
				<div class="image shine">
					<a href="<?=$link?>">
						<img src="<?=$URL;?>" class="img-responsive">
					</a>
				</div>
				</div>
			<?}?>

					
		</div>
		
		<?$i++;?>
		<?
		}
		?> 
		


	</div>
</div>

<?}?>