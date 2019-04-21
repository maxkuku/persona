
<?if($arResult['PROPERTIES']['preimushestva_on']['VALUE']=='Да'){?>

<div id="part2" class="<?if($arResult['PROPERTIES']['fon2']['VALUE']=='Да'){?>greyline<?}?>  row margin0 block-with-bg">
	
	<div class="row margin0 block-with-bg">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="banners-small front">
				<h3 class="text-center"><?=$arResult['PROPERTIES']['preimushestva_zagolok']['VALUE'];?></h3>
					<div class="items row">
						
						
						<div class="col-md-3 col-sm-12 custom-md">
							
					
							
						<?$i=0;?>	
						<?$ii=0;?>	
						<?foreach($arResult['PROPERTIES']['preimushestva_text']['VALUE'] as $iteam){?>	
							<?$URL = CFile::GetPath($arResult['PROPERTIES']['preimushestva_foto']['VALUE'][$i]);?>
							<div class="item  ptrem_hidden_block  <?if($ii==2){?>wide-block<?}else{?> normal-block<?}?>" <?if($i>4){?>style="display:none;"<?}?>>
								<div class="inner-item">
									<div class="image shine">
										<a href="<?=$arResult['PROPERTIES']['preimushestva_link']['VALUE'][$i];?>">
											<img src="<?=$URL;?>" >
										</a>											
									</div>
									<div class="title">
										<a href="/services/povyshaem-effektivnost/vnedrenie-crm/">												
											<?=$iteam;?>									
										</a>
										<div class="date-block" ><?=$arResult['PROPERTIES']['preimushestva_text2']['VALUE'][$i]['TEXT'];?></div>
										
									</div>
									
								</div>
							</div>
							
							<?if($ii==1){?>
								</div>
								<div class="col-md-6 col-sm-12 custom-md">
							<?}?>
							<?if($ii==2){?>
								</div>
								<div class="col-md-3 col-sm-12 custom-md">
							<?}?>
							
							<?if($ii==4){?>
							</div>
							<div class="col-md-3 col-sm-12 custom-md">
							<?$ii=0;?>
							<?}?>
							
						<?$i++;?>
						<?$ii++;?>
						<?}?>
																																																																	
						</div>
												
						
																											
					</div>
					
					<?if($i>4){?>
					<div class="bottom_nav">
						<div class="ajax_load_btn1">
							<span class="more_text_ajax" id="more_text_ajax_but" >
								Загрузить еще				<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><path class="cls-spin" d="M902,1459h-4a1,1,0,0,1,0-2h1.7a5.441,5.441,0,0,0-4.2-2,5.5,5.5,0,1,0,4.611,8.54l0.011,0.01A0.991,0.991,0,0,1,902,1464a1.023,1.023,0,0,1-.13.47h0c-0.038.06-.086,0.12-0.127,0.18-0.017.02-.026,0.04-0.044,0.06a7.522,7.522,0,1,1-.7-9.27V1454a1,1,0,0,1,2,0v4A1,1,0,0,1,902,1459Z" transform="translate(-888 -1453)"></path></svg>
							</span>
						</div>
					</div>
					<?}?>	
					
					
				</div>
			</div>
		</div>
	</div>
	</div>

<?}?>