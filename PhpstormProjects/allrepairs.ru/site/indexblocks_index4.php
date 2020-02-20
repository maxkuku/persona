<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="greyline row margin0 block-with-bg">
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"front-banners-big",
		array(
			"IBLOCK_TYPE" => "aspro_digital_content",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_advtbig"][0],
			"NEWS_COUNT" => "30",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "PREVIEW_PICTURE",
				3 => "DETAIL_PICTURE",
				4 => ""
			),
			"PROPERTY_CODE" => array(
				0 => "BANNERTYPE",
				1 => "TEXTCOLOR",
				2 => "LINKIMG",
				3 => "BUTTON1TEXT",
				4 => "BUTTON1LINK",
				4 => "BUTTON1CLASS",
				5 => "BUTTON2TEXT",
				6 => "BUTTON2LINK",
				7 => "BUTTON2CLASS",
				7 => ""
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>
</div>


<?global $bTopServicesIndex;?>
<?if($bTopServicesIndex):?>
	<div class="greyline row margin0 block-with-bg">
	
		<?if((isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") || (strtolower($_REQUEST['ajax']) == 'y')):?>
			<?$APPLICATION->RestartBuffer();?>
		<?endif;?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"front-banners-more", 
			array(
				"IBLOCK_TYPE" => "aspro_digital_content",
				"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_tizers"][0],
				"NEWS_COUNT" => "5",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_PICTURE",
					2 => "PREVIEW_TEXT",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "LINK",
					2 => "TYPE",
					3 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600000",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "j F Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"PAGER_TEMPLATE" => "main",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"PAGER_TITLE" => "",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"COMPONENT_TEMPLATE" => "front-banners-small"
			),
			false
		);?>
		<?CDigital::checkRestartBuffer();?>
	</div>
<?endif;?>






<div class=" row margin0 block-with-bg">
<div class="maxwidth-theme">
<h3 class="text-center">Комплекс ремонтных работ </h3>
	<div class="col-md-3 col-sm-3 hidden-xs hidden-sm left-menu-md">
	<aside class="sidebar ">
		<ul class="nav nav-list side-menu js_blockk">

<?CModule::IncludeModule('iblock'); ?>		
<?$i=0;

  $arFilter = Array('IBLOCK_ID'=>29, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
  $db_list->NavStart(20);
  while($ar_result = $db_list->GetNext())
  {
  ?>
  
	<li class="<?if($i==0){?>active<?}?> child">
		<a href="#" class="menu_cattt" ><?=$ar_result['NAME'];?></a>
		<div class="submenu-wrapper <?if($i==0){?>active<?}?>">
			<ul class="submenu">
				<?$ii=0;?> 
				<?
				$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","PREVIEW_TEXT","PROPERTY_*");
				$arFilter = Array("IBLOCK_ID"=>29, "SECTION_ID"=>$ar_result['ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
				while($ob = $res->GetNextElement())
				{
				 $arFields = $ob->GetFields();
				 $arProps = $ob->GetProperties();
				 ?>
					<li class="<?if($i==0 and $ii==0){?>active<?}?> menu_cattt_li" attr_id="<?=$arFields['ID'];?>">
						<a href="#"><?=$arFields['NAME'];?></a>
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
		
		
		<?$i=0;

  $arFilter = Array('IBLOCK_ID'=>29, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
  $db_list->NavStart(20);
  while($ar_result = $db_list->GetNext())
  {
  ?>

  
<?$ii=0;?> 
 <?				 
CModule::IncludeModule('iblock');				 
$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT', "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>29, "SECTION_ID"=>$ar_result['ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){ 
	$arProps = $ob->GetProperties();
	$arFields = $ob->GetFields();  
?>	
		<div class="detail services d_s_<?=$arFields['ID'];?> <?if($i==0 and $ii==0){?>active<?}?>">
			<div class="content">
				<p class="introtext">
					<?=$arFields['NAME'];?>
				</p>
				
				<div class="hidden_text_big">
				<?=$arFields['~PREVIEW_TEXT'];?>
				</div>
				
				<a href="#" style="display:block" class="read_next">Читать далее <i class="fa fa-angle-down"></i></a>
					
				<?if($arProps['SSILKA']['VALUE']){?>
					<div class="btns">
						<a class="btn btn-default btn-lg animate-load" style="float:right;margin-top:20px;" href="<?=$arProps['SSILKA']['VALUE'];?>" ><span>Заказать услугу</span></a>
					</div>
				<?}?>
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




<div class="greyline row margin0 block-with-bg main_pagee">
	<div class="maxwidth-theme">
		<h3 class="text-center">Преимущества </h3>
		
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
								<?if($i!=0){?>
								<div class='strelka hidden-xs'>
									<Img src="/bitrix/templates/aspro-digital/images/strelka.png" />
								</div>
								<?}?>
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








<div class=" row margin0 block-with-bg ">
	<div class="maxwidth-theme">
		<h3 class="text-center">Цена и класс ремонта  </h3>

		
		
		<div class="dt-pricing-table 4-column row" data-column="4">
		
		
		<?				 
			CModule::IncludeModule('iblock');	
			$arOrder= Array("by1"=>"sort");	
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>31, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
				<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>	

			
			<div id="" class="price-4-col col-sm-3 ">
                <ul class="plan list-unstyled">
                    <li class="pricing-image-container">
						<img width="71" height="81" src="<?=$URL;?>" class="pricing-image attachment-medium" alt="">
					</li>
                  
                    <li class="hover-tip">
                        <p class="hover-tip-text"><?=$arFields['NAME'];?></p>
                    </li>
                    <li class="plan-head">
                        <div class="plan-price"><?=$arProps['cena']['VALUE'];?><br><span class="after-price"></span></div>
                        <div class="plan-title"><span><?=$arProps['metr']['VALUE'];?><br></span></div>                        
                    </li>
					<?=$arFields['~PREVIEW_TEXT'];?>
					
					<li class="plan-action">
                        <a href="<?=$arProps['ssilka']['VALUE'];?>" class="btn btn-default btn-lg animate-load">Подробнее</a>
                    </li>
				</ul>
			</div>
			
			
			
			<?
			}
			?> 

		</div>
		
		
		
		
		
		
		
		
	</div>
</div>





<div class="greyline row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center">Как организован процесс работ  </h3>



		
		<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>32, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
				<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>	
				
		<div class="items row process">
			
			<?if($i % 2 == 0) {?>
				<div class="col-md-6">	
				<div class="image shine">
					<a href="/news/2017/my-snova-luchshie-itogi-2016-goda-na-bitrixconf/">
						<img src="<?=$URL;?>" class="img-responsive">
					</a>
				</div>
				</div>
			<?}?>
			
			<div class="col-md-6">
				<div class="item noborder wdate clearfix" >
					
					<div class="body-info">
						<div class="title">							
							<?=$arFields['NAME'];?>												
						</div>
									
						<div class="previewtext">
							<?=$arFields['~PREVIEW_TEXT'];?>
						</div>

						<div class="btns">
							<a class="btn btn-default btn-lg animate-load"  href="<?=$arProps['ssilka']['VALUE'];?>"><span>Перейти</span></a>
						</div>
						
					</div>
				</div>						
			</div>
					
			<?if($i % 2 != 0) {?>
				<div class="col-md-6">	
				<div class="image shine">
					<a href="/news/2017/my-snova-luchshie-itogi-2016-goda-na-bitrixconf/">
						<img src="<?=$URL;?>" class="img-responsive">
					</a>
				</div>
				</div>
			<?}?>

					
		</div>
		
		<?$i++;?>
		<?
		}
		?> 
		


	</div>
</div>




		<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>33, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
			<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>
			
			<div class="row margin0 company-block block-with-bg" style="background: url('<?=$URL;?>') top center no-repeat; background-size:100% auto;" data-type="parallax-bg">
				<div class="maxwidth-theme">
					<div class="col-md-12" style="height:240px;">
						<div style=" text-align:center;margin-top:300px;">
						<a class="btn btn-default btn-lg animate-load"  href="<?=$arProps['ssilka']['VALUE'];?>"><span>Дизайн проектирование</span></a>
						</div>
					</div>
				</div>
			</div>

		<?
		}
		?>	


		
		
		
<div class="greyline row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center">Прайс ремонтных работ </h3>	
		
		
		<div class="wpb_wrapper">
		
			<div class="vc_tta-container" data-vc-action="collapse">
				<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left"><div class="vc_tta-panels-container">
				
		
<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>34, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>			
		
		<div class="vc_tta-panels">
		
		<div class="vc_tta-panel <?if($i==0){?>active<?}?>" id="panel_<?=$arFields['ID'];?>" >
		
		<div class="vc_tta-panel-heading">
			<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
				<a href="#" attr_id="<?=$arFields['ID'];?>" class="panel_switch">
					<span class="vc_tta-title-text"><i <?if($i==0){?> class="fa fa-angle-up" <?}else{?>  class="fa fa-angle-down" <?}?>  ></i><?=$arFields['NAME'];?></span>
					<i class="vc_tta-controls-icon vc_tta-controls-icon-plus"><?if($i==0){?>-<?}else{?>+<?}?></i>
				</a>
			</h4>
		</div>
		<div class="vc_tta-panel-body" style="display:none;">
		<div class="wpb_text_column wpb_content_element">
			<div class="wpb_wrapper">
					<?=$arFields['~PREVIEW_TEXT'];?>
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
		



		

		

		
		
		
<?$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"front-company",
		Array(
			"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
			"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
			"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
			"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
			"IBLOCK_TYPE" => "aspro_digital_content",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_static"][0],
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "PREVIEW_PICTURE",
				3 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "PROPS",
			),
			"DETAIL_URL"	=>	"",
			"SECTION_URL"	=>	"",
			"META_KEYWORDS" => "",
			"META_DESCRIPTION" => "",
			"BROWSER_TITLE" => "",
			"DISPLAY_PANEL" => "N",
			"SET_CANONICAL_URL" => "N",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"ADD_ELEMENT_CHAIN" => "N",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "N",
			"USE_PERMISSIONS" => "N",
			"GROUP_PERMISSIONS" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => "",
			"PAGER_SHOW_ALL" => "N",
			"CHECK_DATES" => "N",
			"ELEMENT_ID" => "135",
			"ELEMENT_CODE" => "",
			"IBLOCK_URL" => "",
		),
		false
	);?>		
		
		
		
		


<?global $bTeasersIndex?>
<?if($bTeasersIndex):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list", 
		"front-sections", 
		array(
			"IBLOCK_TYPE" => "aspro_digital_content",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_services"][0],
			"NEWS_COUNT" => "6",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ID",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "PREVIEW_PICTURE",
				3 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "ICON",
				2 => "LINK",
				3 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600000",
			"CACHE_FILTER" => "Y",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"SHOW_DETAIL_LINK" => "Y",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"COMPONENT_TEMPLATE" => "front-teasers-icons",
			"SET_LAST_MODIFIED" => "N",
			"TITLE" => "Услуги",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => ""
		),
		false
	);?>
<?endif;?>






<?global $bPortfolioIndex;?>
<?if($bPortfolioIndex):?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"front-portfolio", 
	array(
		"IBLOCK_TYPE" => "aspro_digital_content",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_projects"][0],
		"NEWS_COUNT" => "6",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arFrontItemsFilter",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINK",
			2 => "ICON",
			3 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SHOW_DETAIL_LINK" => "Y",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"COMPONENT_TEMPLATE" => "front-portfolio",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"TITLE_BLOCK" => "Недавние работы",
		"LINK_BLOCK_TEXT" => "ВСЕ РАБОТЫ",
		"ALL_URL" => "projects/",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
<?endif;?>











	<?$APPLICATION->IncludeComponent(
	"aspro:tabs.digital", 
	"main", 
	array(
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"FILTER_NAME" => "arFilterCatalog",
		"HIT_PROP" => "HIT",
		"IBLOCK_ID" => "35",
		"IBLOCK_TYPE" => "aspro_digital_content",
		"NEWS_COUNT" => "20",
		"PARENT_SECTION" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "SHOW_ON_INDEX_PAGE",
			2 => "STATUS",
			3 => "PRICE",
			4 => "PRICEOLD",
			5 => "ARTICLE",
			6 => "FORM_ORDER",
			7 => "HIT",
			8 => "",
		),
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"TITLE" => "Наши продукты",
		"COMPONENT_TEMPLATE" => "main",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"S_ORDER_PRODUCT" => "Заказать",
		"S_MORE_PRODUCT" => "Подробнее"
	),
	false
);?>
	
	


	
	

	
	
	<div class="greyline row margin0 block-with-bg pad_bot" id="video_blockk">
	<div class="maxwidth-theme">
		<h3 class="text-center">Видео ремонт офисов  </h3>	
	
	
	<div class="head-block top controls" id="video_link_top" >
			<div class="bottom_border"></div>
			
			
			<div class="item-link active" data-filter="all">
				<div class="title">
					<span class="btn-inline black mixitup-control-active" >Все проекты</span>
				</div>
			</div>
			
		<?CModule::IncludeModule('iblock'); ?>		
		<?$i=0;

		  $arFilter = Array('IBLOCK_ID'=>36, 'GLOBAL_ACTIVE'=>'Y');
		  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
		  $db_list->NavStart(20);
		  while($ar_result = $db_list->GetNext())
		  {
		  ?>
  
			<div class="item-link" data-filter="<?=$ar_result['ID'];?>">
				<div class="title">
					<span class="btn-inline black mixitup-control-active" ><?=$ar_result['NAME'];?></span>
				</div>
			</div>
			
			
			
			
		<?}?>

	</div>

	
	
	<div class="flexslider front navigation-vcenter hover inside" data-plugin-options='{"animation":"slide", "directionNav": true, "animationLoop": true, "counts": [3, 2, 2, 1] }'>
			<ul class="slides">
				
				
				<? 	$i=0;				 
				CModule::IncludeModule('iblock');				 
				$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','SECTION_ID','PREVIEW_PICTURE', "*");
				$arFilter = Array("IBLOCK_ID"=>36, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
				while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	

					<li class="video_all video_<?=$arFields['IBLOCK_SECTION_ID']?>">
						<div><?=$arFields['~PREVIEW_TEXT']?></div>
					</li>

				<?}?>
				
			</ul>
		</div>

	
	
	
	
	
	
	
	
</div>	
	
	</div>	
	
	
	
	
			
<div class=" row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">

	
			<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>37, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
			<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>
			
			<div class="row margin0 company-block block-with-bg" style="background: url('<?=$URL;?>') top center no-repeat; background-size:100% auto;" data-type="parallax-bg">
				<div class="maxwidth-theme">
					<div class="col-md-12" style="height:500px;">
						
					</div>
				</div>
			</div>

		<?
		}
		?>	

</div>	
	
	</div>	
	
		
		

	
	
	
<div class=" row margin0 block-with-bg pad_bot">
	<div class="maxwidth-theme">
		<h3 class="text-center">Схема работ с нашей компанией   </h3>	
	
	
	
	<div class="row wpb_row vc_inner vc_row-fluid vc_custom_1430893773165">
	
	
	<? 	$i=0;				 
			CModule::IncludeModule('iblock');				 
			$arOrder= Array("by1"=>"sort");
			$arSelect = Array("ID", "IBLOCK_ID", "NAME",'PREVIEW_TEXT','PREVIEW_PICTURE', "PROPERTY_*");
			$arFilter = Array("IBLOCK_ID"=>38, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList($arOrder, $arFilter, false, Array("nPageSize"=>50), $arSelect);
			while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();
					$arFields = $ob->GetFields();  
				?>	
			<?$URL = CFile::GetPath($arFields['PREVIEW_PICTURE']);?>
			
		
		<div class="wpb_column vc_column_container col-md-3 col-sm-4 col-xs-12">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
				<div id="module_dt_iconboxes_17" class="module_dt_iconboxes">
				<div class="dt-iconboxes layout-6" style="display: block; height: 362px;">
					<i class="icon-ios7filled-2410"><img src="<?=$URL;?>" style="height:75px;"  /></i>
								<h4><?=$arFields['NAME'];?>:</h4><div class="dt-iconboxes-text">
								<h6><?=$arFields['PREVIEW_TEXT'];?></h6>
		<p><?=$arFields['DETAIL_TEXT'];?></p>
		</div></div></div></div></div>
		</div>

	<?
	}
	?>	
		
		


</div>

</div>	
	
</div>		
	
	
	
	
	
<div class=" row margin0 block-with-bg pad_bot">
	<div >
		
	
	
	
	<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1430893773165">
	
	
	<div class="box-container row wpb_row vc_row-fluid vc_custom_1488414448912" data-speed="2" data-type="background" style="background-position: 50% -194.984px;">
	<div>
	<div class="inner-flex">
	
	<div class="wpb_column vc_column_container col-sm-3">
		<div class="vc_column-inner vc_custom_1488414350989">
			<div class="wpb_wrapper">
				
	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<p><iframe width="255" height="145" src="https://www.youtube.com/embed/zKYtSBSGVlo?controls=0" frameborder="0" allowfullscreen></iframe></p>
		</div> 
	</div> 
			</div>
		</div>
	</div>
	
	<div class="wpb_column vc_column_container col-sm-1">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				
			</div>
		</div>
	</div>
	
	<div class="wpb_column vc_column_container col-sm-6">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				
				

	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<h3 class="text-center" style="color:#fff;">Выезд замерщика бесплатно  </h3>	
			<p style="text-align: center;">
			<span style="color: #ebebeb;">Хотите получить консультацию? Необходимо рассчитать стоимость работ? Желаете получить индивидуальное предложение? Звоните или пишите нам прямо сейчас!</span>
			</p>

		</div> 
	</div> 
			</div>
		</div>
	</div>
	
	<div class="wpb_column vc_column_container col-sm-2  ">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
				<div class="">
					<span class="callback-block animate-load twosmallfont colored  btn btn-default2 btn-lg  animate-load" data-event="jqm" data-param-id="19" data-name="callback">ЗАДАТЬ ВОПРОС</span>
				</div>

			</div>
		</div>
	</div>
	
	<div style="clear:both;"></div>
	
	</div></div>
	
	</div>
		
		


</div>
</div>	
</div>	
	
	
	
	
	
	
<div class=" row margin0 block-with-bg pad_bot">
<div class="maxwidth-theme">
		<h3 class="text-center">Калькулятор примерной стоимости ремонта</h3>	
	
	<div class="b-calc">

    <div class="b-calc-room-type">
        <div class="calc-remont-type__header">1. Тип помещения для ремонта:</div>
        <div class="calc-room-type__items">
                            <div class="calc-room-type__item js-select-item calc-room-type__item--on">
                    <label for="calc-id-3">
                                                <div class="calc-room-type__pic">
                            <img src="https://www.remontprofi.ru/files/402/calc-room-1.jpg">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-3" checked="checked" name="roomType" value="1" item="3">
                            Квартира 
                        </div>
                    </label>
                </div>
                            <div class="calc-room-type__item js-select-item">
                    <label for="calc-id-4">
                                                <div class="calc-room-type__pic">
                            <img src="https://www.remontprofi.ru/files/402/calc-room-2.jpg">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-4" name="roomType" value="0.7" item="4">
                            Офис
                        </div>
                    </label>
                </div>
                            <div class="calc-room-type__item js-select-item">
                    <label for="calc-id-5">
                                                <div class="calc-room-type__pic">
                            <img src="https://www.remontprofi.ru/files/402/calc-room-3.jpg">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-5" name="roomType" value="1" item="5">
                            Коттедж
                        </div>
                    </label>
                </div>
                            <div class="calc-room-type__item js-select-item">
                    <label for="calc-id-6">
                                                <div class="calc-room-type__pic">
                            <img src="https://www.remontprofi.ru/files/402/calc-room-4.jpg">
                            <div class="calc-room-type__btn">
                                <span>Рассчитать</span>
                            </div>
                        </div>
                                                <div class="calc-room-type__title">
                            <input type="radio" id="calc-id-6" name="roomType" value="0" item="6">
                            Ванна и туалет
                        </div>
                    </label>
                </div>
                    </div>
    </div>

    <div class="b-calc-content-hidden" id="b-calc-content-hidden"></div>

    <div class="b-calc-content">

        <div class="b-calc-remont-type">
            <div class="calc-remont-type__header">2. Тип ремонта:</div>
            <div class="calc-remont-type__content">
                                    <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-1">
                            <input type="radio" name="remontType" value="2400" id="calc-remont-type-id-1">
                            Косметический
                        </label>
                                                    <div class="calc-remont-type__detail">
                                <a target="_blank" href="/kosmeticheskij-remont-kvartir/">Подробнее</a>
                            </div>
                                            </div>
                                    <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-2">
                            <input type="radio" name="remontType" value="6900" id="calc-remont-type-id-2">
                            Стандартный
                        </label>
                                                    <div class="calc-remont-type__detail">
                                <a target="_blank" href="/remont-kvartir-pod-klyuch/standartnyj-remont/">Подробнее</a>
                            </div>
                                            </div>
                                    <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-3">
                            <input type="radio" name="remontType" value="9000" id="calc-remont-type-id-3">
                            Бизнес-класса
                        </label>
                                                    <div class="calc-remont-type__detail">
                                <a target="_blank" href="/remont-kvartir-pod-klyuch/remont-biznes-klassa/">Подробнее</a>
                            </div>
                                            </div>
                                    <div class="calc-remont-type__item">
                        <label for="calc-remont-type-id-4">
                            <input type="radio" name="remontType" value="16000" id="calc-remont-type-id-4">
                            Эксклюзивный
                        </label>
                                                    <div class="calc-remont-type__detail">
                                <a target="_blank" href="/remont-kvartir-pod-klyuch/eksklyuzivnyj-remont/">Подробнее</a>
                            </div>
                                            </div>
                            </div>
        </div>

        <div class="b-calc-house-type">
            <div class="calc-house-type__header">3. тип дома</div>
            <div class="calc-house-type__content">
                            <div class="calc-house-type__item">
                    <label for="calc-house-type-id-1">
                        <input type="radio" name="houseType" value="0.9" id="calc-house-type-id-1">
                        Новое жилье (монолит, кирпич, панельные)
                    </label>
                </div>
                            <div class="calc-house-type__item">
                    <label for="calc-house-type-id-2">
                        <input type="radio" name="houseType" value="1.1" id="calc-house-type-id-2">
                        Вторичное жилье (монолит, кирпич, панельные)
                    </label>
                </div>
                        </div>
        </div>

        <div class="b-calc-area-type">
            <div class="calc-area-type__header">4. Метраж помещения, м2</div>
            <div class="calc-area-type__content">
                <input type="text" id="calc_metric">
            </div>
        </div>

        <div class="calc__result calc-result" style="display: none;">
            <div class="calc__result-item">
                <span class="calc__result-title">Стоимость работ</span>
                <div class="calc__result-price"><span id="calc-result"></span> руб.</div>
            </div>
            <div class="calc__result-item">
                <span class="calc__result-title">Стоимость отделочных материалов</span>
                <div class="calc__result-price"><span id="calc-result-mat"></span> руб.</div>
            </div>
            <div class="calc__result-item">
                <span class="calc__result-title">Ориентировочная стоимость ремонта</span>
                <div class="calc__result-price"><span id="calc-result-full"></span> руб.</div>
            </div>
        </div>
    </div>

</div>
	
	
</div>		
</div>		
	
	
	
	
	
	
	
	
	
	
<?global $bConsultIndex;?>
<?if($bConsultIndex):?>
<div class=" row margin0">
	<?$APPLICATION->IncludeComponent(
		"aspro:form.digital", 
		"front-block", 
		array(
			"IBLOCK_TYPE" => "aspro_digital_form",
			"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_form"]["aspro_digital_consultation"][0],
			"USE_CAPTCHA" => "N",
			"IS_PLACEHOLDER" => "N",
			"SHOW_LICENCE" => $arTheme["SHOW_LICENCE"]["VALUE"],
			"SUCCESS_MESSAGE" => "<p>Спасибо! Ваше сообщение отправлено!</p>",
			"SEND_BUTTON_NAME" => "Задать вопрос",
			"SEND_BUTTON_CLASS" => "btn btn-default",
			"DISPLAY_CLOSE_BUTTON" => "Y",
			"CLOSE_BUTTON_NAME" => "Обновить страницу",
			"CLOSE_BUTTON_CLASS" => "btn btn-default refresh-page",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_JUMP" => "Y",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "100000",
			"AJAX_OPTION_ADDITIONAL" => ""
		),
		false
	);?>
</div>
<?endif;?>
	
	
	
	
	
	
	
	
	
	
<?global $bPartnersIndex;?>
<?if($bPartnersIndex):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"front-partners", 
	array(
		"IBLOCK_TYPE" => "aspro_digital_content",
		"IBLOCK_ID" => CCache::$arIBlocks[SITE_ID]["aspro_digital_content"]["aspro_digital_partners"][0],
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"ITEM_IN_BLOCK" => "6",
		"SHOW_DETAIL_LINK" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"COMPONENT_TEMPLATE" => "front-partners",
		"SET_LAST_MODIFIED" => "N",
		"TITLE" => "Наши технологии",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
<?endif;?>






<div class="row margin0 company-block block-with-bg" style="background: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/05/fon_certifikat.jpg') center -194px / 100% no-repeat; margin-bottom:40px;" data-type="parallax-bg">

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




<div class="row margin0 block-with-bg">
		<div class="item-views blocks portfolio">
			<div class="wrap-portfolio-front" style="background:none;" >

		
				
				<div class="row items ">
							
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<span itemprop="name">ДИЗАЙН ПРОЕКТИРОВАНИЕ</span>
													<div class="text_more"><div class="mores">Перейти</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/06/projoct_.jpg');">
									</div>
								</div>
							</div>
									
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<span itemprop="name">ОТДЕЛКА И РЕМОНТ</span>
													<div class="text_more"><div class="mores">Перейти</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/06/otelka_.jpg');">
									</div>
								</div>
							</div>
									
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<span itemprop="name">СТРОИТЕЛЬСТВО РЕКОНСТРУКЦИЯ</span>
													<div class="text_more"><div class="mores">Перейти</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/06/construction_.jpg');">
									</div>
								</div>
							</div>														
																					
				</div>
					
				
			</div>
		</div>
</div>



<div class="row margin0 company-block block-with-bg vc_custom_1488413401772" style="background: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/05/dop.jpg') center -194px / 100% no-repeat; " data-type="parallax-bg">
	<div class="">
		<p style="text-align: center;"><span style="font-family: impact, sans-serif; font-size: 2em; color: #ebebeb;">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ И НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ</span></p>
	</div>
	
</div>





<div class="row margin0 block-with-bg process bg3_tip">
	<div class="col-md-4 col-sm-6">
		<img class="vc_single_image-img " src="http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/05/mex_styajka.jpg" width="257" height="257" alt="mex_styajka" title="mex_styajka">
		<div class="title">							
			МЕХАНИЗИРОВАННАЯ СТЯЖКА									
		</div>
		<div class="previewtext">
			Заливка стяжки без подготовки поверхности. Высокая степень сцепления. От 300 м² и более ровного покрытия за день.			
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<img class="vc_single_image-img " src="http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/05/mex_styajka.jpg" width="257" height="257" alt="mex_styajka" title="mex_styajka">
		<div class="title">							
			МЕХАНИЗИРОВАННАЯ СТЯЖКА									
		</div>
		<div class="previewtext">
			Заливка стяжки без подготовки поверхности. Высокая степень сцепления. От 300 м² и более ровного покрытия за день.			
		</div>
	</div>
	<div class="col-md-4 col-sm-6">
		<img class="vc_single_image-img " src="http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2015/05/mex_styajka.jpg" width="257" height="257" alt="mex_styajka" title="mex_styajka">
		<div class="title">							
			МЕХАНИЗИРОВАННАЯ СТЯЖКА									
		</div>
		<div class="previewtext">
			Заливка стяжки без подготовки поверхности. Высокая степень сцепления. От 300 м² и более ровного покрытия за день.			
		</div>
	</div>
</div>	









<div class="row margin0 block-with-bg margin_bot ">
<div class="maxwidth-theme">
<h3 class="text-center">НАШИ ПРЕИМУЩЕСТВА </h3>
		
		<div class="item-views blocks portfolio">
			<div class="wrap-portfolio-front" style="background:none;" >

		
				
				<div class="row items ">
							
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="item animated-block animated delay01 duration06" data-animation="zoomIn" id="bx_3485106786_75" >
									<a href="" class="dark_block_animate">
										<div class="text">
											<div class="cont">
												<div class="title">
													<i class="fa fa-file-text-o" style="font-size:40px;margin-bottom:7px;" ></i>
													<span itemprop="name">ГАРАНТИЯ ДО 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ</span>
													<div class="text_more"><div class="mores">Подробнее</div></div>
												</div>			
											</div>
										</div>
									</a>
									<div class="img_block scale_block_animate" style="background-image: url('http://xn--e1aodbcibho.xn--80adxhks/wp-content/uploads/2017/01/img3-1.jpg');">
									</div>
								</div>
							</div>
									
																		
																					
				</div>
					
				
			</div>
		</div>
</div>
</div>





