<?if($arResult['PROPERTIES']['shema_on']['VALUE']=='Да'){?>
<div id="part14" class="<?if($arResult['PROPERTIES']['fon10']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center"><?=$arResult['PROPERTIES']['shema_zagolok']['VALUE'];?> </h3>	
	<div class="row wpb_row vc_inner vc_row-fluid vc_custom_1430893773165">
	<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arOrder= Array("by1"=>"sort");
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','DETAIL_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>38, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>			
		<div class="wpb_column vc_column_container col-md-3 col-sm-4 col-xs-12">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
				<div id="module_dt_iconboxes_17" class="module_dt_iconboxes">
				<div class="dt-iconboxes layout-6" style="display: block; height: 462px;">
					<div class="iconn_div">
						<i class="<?=$arProps['img']['VALUE'];?>"></i>
					</div>
					<h4><?=$arFields['NAME'];?>:</h4>
						<div class="dt-iconboxes-text">
							<h6><?=$arFields['PREVIEW_TEXT'];?></h6>
							<p><?=$arFields['DETAIL_TEXT'];?></p>
						</div>
					</div>
				</div>
				</div>
			</div>
			<?if($i!=0){?>
				<div class='strelka hidden-xs'>
					<Img src="/bitrix/templates/aspro-digital/images/strelka.png" />
				</div>
			<?}?>
		</div>
	<?$i++;?>
	<?
	}
	?>	
</div>
</div>		
</div>
<?}?>