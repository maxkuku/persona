<?if(1 || $arResult['PROPERTIES']['text2_on']['VALUE']=='Да'){ ?>

<div id="part24" class="<?if($arResult['PROPERTIES']['fon15']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot part24" >
<div class="maxwidth-theme">
<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['text2_title']['~VALUE'];?> </h2>

<div class=" row">		
<div class="col-md-9 col-sm-12 col-xs-12 content-md">		

	<div class="item-views list list-type-block image_left blog">
		<div class="items row">
			
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['text2_nazvanie']['~VALUE'] as $title){?>		
		<?$URL = $arResult['PROPERTIES']['text2_text_foto']['VALUE'][$i];
			$ALT = $arResult['PROPERTIES']['alt_img_textblock2']['VALUE'][$i];?>	
			
			
			<div class="col-md-12">
				<div class="item shadow  wdate clearfix" id="bx_3218110189_1084">
					<?if($URL){?>
					<div class="image shine">
						<img src="<?=$URL;?>" alt="<?=$ALT;?>" title="<?=$ALT;?>" class="img-responsive">
					</div>
					<?}?>
					<div class="body-info">
						<div class="title">
																
								<?=$title;?>						
														
						</div>
						<div class="previewtext">
							<?=$arResult['PROPERTIES']['text2_text_small']['~VALUE'][$i]["TEXT"];?>		
							<div class="previewtext_hide text1_<?=$i;?>" style="display:none;">
								<?=$arResult['PROPERTIES']['text2_text_full']['~VALUE'][$i]["TEXT"];?>
							</div>	
						</div>
						<?if($arResult['PROPERTIES']['text2_text_full']['~VALUE'][$i]["TEXT"]){?>
						<div class="link-block-more">
							<a href="#" class="btn-inline sm rounded black read_next2" attr_id=".text1_<?=$i;?>" > <span class="span1">Читать далее</span> <span class="span2" style="display:none;">Скрыть</span> <i class="fa fa-angle-right"></i></a>
						</div>
						<?}?>
					</div>
				</div>
			</div>
			
			
		<?$i++;?>
		<?}?>							
											
				
		</div>
	</div>	

</div>

<div class="col-md-3 col-sm-3 hidden-xs hidden-sm right-menu-md">
	<div class="sidearea">
																		
		<div class="projects item-views table with-comments side-block">
			<div align="center" class="title-block-big"><?=$arResult['PROPERTIES']['text2_title2']['~VALUE'];?></div>
				<div class="">
					<ul class="slides items">
						
					<?$i=0;?> 
					<?foreach($arResult['PROPERTIES']['text2_nazvanie2']['~VALUE'] as $title){?>		
					<?$URL = CFile::GetPath($arResult['PROPERTIES']['text2_text_foto2']['~VALUE'][$i]);?>	
						
						<li class="">
							<div class="item" id="bx_3218110189_1085" style="height: 340px;">
								<a href="<?=$arResult['PROPERTIES']['text2_link2']['~VALUE'][$i];?>">
									<?if($URL){?>
									<div class="image shine w-picture" style="width:50%; margin: 0 auto 0 !important;">
										<img src="<?=$URL;?>" class="img-responsive">
									</div>
									<?}?>
									<div class="info">
										<div class="title dark-color">
											<span><?=$title;?></span>
										</div>
										
									</div>
								</a>
							</div>
						</li>
						
					<?$i++;?>
					<?}?>	
						
						
					</ul>
		</div>
		</div>		
	</div>
</div>



	
</div>	
	
</div>
</div>	
<?}?>