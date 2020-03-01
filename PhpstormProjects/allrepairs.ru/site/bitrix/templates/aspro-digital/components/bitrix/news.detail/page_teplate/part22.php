<?if($arResult['PROPERTIES']['nasi_preim_on']['VALUE']=='Да'){ ?>

<div id="part22" class="row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme" style="max-width: 1200px">
<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['nasi_preim_title']['VALUE'];?> </h2>
<p class="text-center"><?=$arResult['PROPERTIES']['nasi_preim_subtitle']['VALUE'];?> </p>		

		<div class="item-views blocks portfolio">
			<div class="wrap-portfolio-front" style="background:none;" >

		
				
				<div class="row items ">
							
			<?$i=0;?> 
			<?foreach($arResult['PROPERTIES']['nasi_preim_text']['VALUE'] as $title){?>		
			<?$URL = $arResult['PROPERTIES']['nasi_preim_fon']['VALUE'][$i];?>	
							
							<div class="col-md-4 col-sm-6 custw <?if($i==0):?>indent_1<?elseif($i==1):?>indent_2
								<?elseif($i==2):?>indent_3<?elseif($i==3):?>indent_4<?elseif($i==4):?>indent_5<?elseif($i==5):?>indent_6<?endif;?>">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn">
									<?$link=$arResult['PROPERTIES']['nasi_preim_ssilka']['VALUE'][$i]; $link = ($link == '#' ? 'javascript:void(0);' : $link);?>
                                    <a href="<?=$link?>" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="<?=$arResult['PROPERTIES']['nasi_preim_icon']['VALUE'][$i];?>" style="font-size:40px;margin-bottom:7px;font-style:normal;" ></i>
													<span><?=$title;?></span>
													
												</div>			
											</div>
										</div>
									</a>
                                    <a href="<?=$link?>" class="white_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="<?=$arResult['PROPERTIES']['nasi_preim_icon']['VALUE'][$i];?>" style="font-size:40px;margin-bottom:7px;font-style:normal;" ></i>
													<span><?=$title;?></span>
													
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('<?=$URL;?>');">
									</div>
								</div>
							</div>
							
			<?$i++;?>
			<?}?>
			
						
							<div class="col-md-4 col-sm-6">
						
									
																		
																					
				</div>
					
				
			</div>
		</div>
</div>
</div>	
</div>	
	
	
<?}?>