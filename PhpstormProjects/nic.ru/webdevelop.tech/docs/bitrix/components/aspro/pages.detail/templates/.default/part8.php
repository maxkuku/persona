<?if($arResult['PROPERTIES']['price_on']['VALUE']=='Да'){?>	
<div id="part8" class="<?if($arResult['PROPERTIES']['fon7']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center"><?=$arResult['PROPERTIES']['price_zagolok']['VALUE'];?> </h3>	
		
		
		<div class="wpb_wrapper">
		
			<div class="vc_tta-container" data-vc-action="collapse">
				<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left"><div class="vc_tta-panels-container">
				
		
		<?$i=0;?> 
		<?foreach($arResult['PROPERTIES']['price_title']['VALUE'] as $title){?>			
		
		<div class="vc_tta-panels">
		
		<div class="vc_tta-panel <?if($i==0){?>active<?}?>" id="panel_<?=$i;?>" >
		
		<div class="vc_tta-panel-heading">
			<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
				<a href="#" attr_id="<?=$i;?>" class="panel_switch">
					<span class="vc_tta-title-text"><i <?if($i==0){?> class="fa fa-angle-up" <?}else{?>  class="fa fa-angle-down" <?}?>  ></i><?=$title;?></span>
					<i class="vc_tta-controls-icon vc_tta-controls-icon-plus"><?if($i==0){?>-<?}else{?>+<?}?></i>
				</a>
			</h4>
		</div>
		<div class="vc_tta-panel-body" style="display:none;">
		<div class="wpb_text_column wpb_content_element">
			<div class="wpb_wrapper">
				<?=$arResult['PROPERTIES']['price_text']['~VALUE'][$i]['TEXT'];?>
			</div> 
		</div> 
		
		</div>
		</div>
	
	
	

	
	
	</div>
	<?$i++;?>
	<?
	}
	?>		
	
	
	</div></div></div>
			</div>
		
		
		
	</div>
</div>

<?}?>