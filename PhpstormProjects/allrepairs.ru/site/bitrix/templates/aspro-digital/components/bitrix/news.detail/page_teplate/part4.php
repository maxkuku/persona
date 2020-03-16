<?if($arResult['PROPERTIES']['preimushestva2_on']['VALUE']=='Да'){?>

<div id="part4" class="<?if($arResult['PROPERTIES']['fon4']['VALUE']=='Да'){?>greyline<?}?> row margin0 block-with-bg main_pagee">
	<div class="maxwidth-theme">
		<h2 class="text-center cfonts"><?=$arResult['PROPERTIES']['preimushestva_zagolok2']['VALUE'];?> </h2>
		
		<div class="banners-small front">
					<div class="items row">
						<div class="   col-sm-1 ">	
						</div>	
				<?	$i=0;			 
				CModule::IncludeModule('iblock');				 
				$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
				$arFilter = Array("IBLOCK_ID"=>30, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
				while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
				<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>	
						<div class="item_block   col-sm-2 ">
							<div class="item">
								<div class="image">
									<a href="#">
										<img src="<?=$URL;?>" width="60px;">
									</a>	
								</div>
								<div class="title">
									<a href="#">											
										<?=$arFields['NAME'];?>							
									</a>									
								</div>
								
							</div>
						</div>
			
							
						
						
				<?$i++;?>

				<?
				}
				?> 		

					</div>
				</div>
		
		
	</div>
</div>



<?}?>