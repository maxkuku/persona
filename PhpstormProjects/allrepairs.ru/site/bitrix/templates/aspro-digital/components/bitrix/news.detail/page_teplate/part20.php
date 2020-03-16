	
<?if($arResult['PROPERTIES']['dop_uslugi_on']['VALUE']=='Да'){?>		
	
<div id="part20" class="row margin0 block-with-bg">
		<div class="item-views blocks portfolio">
			<div class="wrap-portfolio-front" style="background:none;" >

		
				
				<div class="row items ">
							
						<?$i=0;?> 
						<?foreach($arResult['PROPERTIES']['dop_uslugi_title']['VALUE'] as $title){?>		
							<?$img = $arResult['PROPERTIES']['dop_uslugi_fon']['VALUE'][$i];?>
							
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="<?=$arResult['PROPERTIES']['dop_uslugi_ssilka']['VALUE'][$i];?>" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<span itemprop="name"><?=$title;?></span>
													<div class="text_more"><div class="mores">Перейти</div></div>
												</div>			
											</div>
										</div>
									</a>
									<a href="<?=$arResult['PROPERTIES']['dop_uslugi_ssilka']['VALUE'][$i];?>" class="white_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<span itemprop="name"><?=$title;?></span>
													<div class="text_more"><div class="mores">Перейти</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('<?=$img;?>');">
									</div>
								</div>
							</div>
						<?$i++;?>
						<?}?>
						
																				
																					
				</div>
					
				
			</div>
		</div>
</div>


<?}?>