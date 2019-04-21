<?if($arResult['PROPERTIES']['text3_on']['VALUE']=='Да'){?>

<div id="part25" class="<?if($arResult['PROPERTIES']['fon17']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot" >
<div class="maxwidth-theme">
<h3 class="text-center"><?=$arResult['PROPERTIES']['text3_title']['~VALUE'];?> </h3>
		

	<div class="item-views list list-type-block image_left blog">
		<div class="items row">
			
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['text3_nazvanie']['~VALUE'] as $title){?>		
		
			
			<div class="col-md-12">
				<div class="item shadow  wdate clearfix" id="bx_3218110189_1084">
					
					<div class="body-info">
						<div class="title">							
							<?=$title;?>												
						</div>
						<div class="previewtext">
							<?=$arResult['PROPERTIES']['text3_text_small']['~VALUE'][$i]["TEXT"];?>		
							<div class="previewtext_hide text1_<?=$i;?>" style="display:none;">
								<?=$arResult['PROPERTIES']['text3_text_full']['~VALUE'][$i]["TEXT"];?>
							</div>	
						</div>
						<?if($arResult['PROPERTIES']['text3_text_full']['~VALUE'][$i]["TEXT"]){?>
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
</div>	
	
	
<?}?>