<?if($arResult['PROPERTIES']['nasi_preim_on']['VALUE']=='Да'){ ?>

<div id="part22" class="row margin0 block-with-bg pad_bot" id="preimushestva" >
<div class="maxwidth-theme">
<h3 class="text-center"><?=$arResult['PROPERTIES']['nasi_preim_title']['VALUE'];?> </h3>
		
		<div class="item-views blocks portfolio">
			<div class="wrap-portfolio-front" style="background:none;" >

		
				
				<div class="row items ">
							
			<?$i=0;?> 
			<?foreach($arResult['PROPERTIES']['nasi_preim_text']['VALUE'] as $title){?>		
			<?$URL = CFile::GetPath($arResult['PROPERTIES']['nasi_preim_fon']['VALUE'][$i]);?>	
							
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<?$link=$arResult['PROPERTIES']['nasi_preim_ssilka']['VALUE'][$i]; $link = ($link == '#' ? 'javascript:void(0);' : $link);?>
                                                                        <a href="<?=$link?>" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="<?=$arResult['PROPERTIES']['nasi_preim_icon']['VALUE'][$i];?>" style="font-size:40px;margin-bottom:7px;font-style:normal;" ></i>
													<span itemprop="name"><?=$title;?></span>
													
												</div>			
											</div>
										</div>
									</a>
                                                                        <a href="<?=$link?>" class="white_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="<?=$arResult['PROPERTIES']['nasi_preim_icon']['VALUE'][$i];?>" style="font-size:40px;margin-bottom:7px;font-style:normal;" ></i>
													<span itemprop="name"><?=$title;?></span>
													
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