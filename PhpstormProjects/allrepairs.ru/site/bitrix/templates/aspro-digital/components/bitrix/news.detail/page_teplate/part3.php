
<?if($arResult['PROPERTIES']['tabs_on']['VALUE']=='Да'){?>




<div id="part3" class=" <?if($arResult['PROPERTIES']['fon3']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg">
<div class="maxwidth-theme">
<h3 class="text-center"><?=$arResult['PROPERTIES']['tabs_zagolok']['VALUE'];?></h3>
	<div class="col-md-3 col-sm-3 hidden-xs hidden-sm left-menu-md">
	<aside class="sidebar ">
		<ul class="nav nav-list side-menu js_blockk">

<?CModule::IncludeModule('iblock'); ?>		

	<?$i=0;?>
	<?				 		 
	$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT', "PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>41, "SECTION_ID"=>$arResult['PROPERTIES']['tabs_razdel']['VALUE'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement()){ 
		$arProps = $ob->GetProperties();
		$arFields = $ob->GetFields();  
	?>	
  
	<li class="<?if($i==0){?>active<?}?> child">
		<a href="#" class="menu_cattt" ><?=$arFields['NAME'];?></a>
		<div class="submenu-wrapper <?if($i==0){?>active<?}?>">
			<ul class="submenu">
				<?$ii=0;?> 
				<?foreach($arProps['tabs_title']['VALUE'] as $title){?>

					<li class="<?if($i==0 and $ii==0){?>active<?}?> menu_cattt_li" attr_id="<?=$arFields['ID'];?>_<?=$ii;?>">
						<a href="#"><?=$title;?></a>
					</li>
				 
				<?$ii++;?>  
				<?
				}
				?> 
			</ul>
		</div>
	</li> 
  
  
<?$i++;?>  
<?  }
?>

		</ul>
	</aside>
	</div>
	<div class="col-md-9 col-sm-12 col-xs-12 content-md js_blockk">
		
		

	<?$i=0;?>
	<?				 		 
	$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT', "PROPERTY_*");
	$arFilter = Array("IBLOCK_ID"=>41, "SECTION_ID"=>$arResult['PROPERTIES']['tabs_razdel']['VALUE'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement()){ 
		$arProps = $ob->GetProperties();
		$arFields = $ob->GetFields();  
	?>		
		
		<?$ii=0;?> 
		<?foreach($arProps['tabs_title']['VALUE'] as $title){?>	
		
		<div class="detail services d_s_<?=$arFields['ID'];?>_<?=$ii;?> <?if($i==0 and $ii==0){?>active<?}?>">
			<div class="content">
				<p class="introtext">
					<?=$title;?>
				</p>
				
				<div class="hidden_text_big">
					<?=$arProps['tabs_text']['~VALUE'][$ii]['TEXT'];?>
				</div>
				
				<a href="#" style="display:block" class="read_next">Читать далее <i class="fa fa-angle-down"></i></a>
					
				
			
				
			</div>
		</div>
			
		<?$ii++;?>  
		<?
		}
		?>	
			

	<?$i++;?>  
	<?  }
	?>	
		
		
		

																																																																		</div>														
													
</div>
</div>


<?}?>