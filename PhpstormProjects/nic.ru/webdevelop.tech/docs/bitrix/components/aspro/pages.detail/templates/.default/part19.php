<?if($arResult['PROPERTIES']['sert_on']['VALUE']=='Да'){?>	
	
<div id="part19" class="row margin0 company-block block-with-bg"  data-type="parallax-bg">

<div class="maxwidth-theme">
	<h3 class="text-center" style="color:#fff;">ВЫСТАВКИ И СЕРТИФИКАТЫ</h3>	
	<div class=" row">
		
	<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arOrder= Array("by1"=>"sort");
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>39, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
			<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>
		<div class="col-sm-4" >		
			<a href="<?=$URL;?>" class="blink-block fancybox" data-fancybox-group="gallery2" itemprop="url">
				<img width="350" height="319" src="<?=$URL;?>" class="vc_single_image-img attachment-full" alt="">
			</a>
		</div>
	<?
	}
	?>	
	</div>
</div>
</div>	
	
	
<?}?>	