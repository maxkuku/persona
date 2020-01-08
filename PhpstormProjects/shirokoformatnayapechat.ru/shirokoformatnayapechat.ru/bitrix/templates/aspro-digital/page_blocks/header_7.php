<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
$fixedMenuClass = ($arTheme['TOP_MENU_FIXED']['VALUE'] == 'Y' ? ' canfixed' : '');
$basketViewClass = strtolower($arTheme["ORDER_BASKET_VIEW"]["VALUE"]);
?>
<header class="header-v7<?=$fixedMenuClass?><?=$basketViewClass?>">
	<div class="logo_and_menu-row">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="logo-block col-md-2 col-sm-3">
					<div class="logo<?=$logoClass?>">
						<?=CDigital::ShowLogo();?>
					</div>
				</div>
                <script type="application/ld+json">
                    {
                      "@context": "http://schema.org",
                      "@type": "Organization",
                      "url": "http://<?=$_SERVER['HTTP_HOST']?>",
                      "logo": "http://<?=$_SERVER['HTTP_HOST']?>/logo.png"
                    }
                </script>
				<div class="col-md-2 hidden-sm hidden-xs" style="padding-left: 0px !important;">
					<div class="top-description" style="white-space:nowrap;">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/header/header-text.php", array(), array("MODE" => "html","NAME" => "Text in title","TEMPLATE" => "include_area",));?>
					</div>
				</div>
				<div class="col-md-2" style="padding:0 !important;"><? /* old is col-md-4 class=+search_wrap */ ?>
					<div class="search-block inner-table-block" style="text-align:right;">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/header/address.php","EDIT_TEMPLATE" => "include_area.php"));?>
					</div>
				</div>
				<div class="col-md-2" style="padding:0 !important;"><? /*  old is removed . */ ?>
					<div class="search-block inner-table-block" style="text-align:right;">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/header/search.title.php","EDIT_TEMPLATE" => "include_area.php"));?>
					</div>
				</div>
				<div class="col-md-4 pull-right"><? /*  class "right-icons"  . */ ?>
					<div class="phone-block with_btn" style="width:100%;text-align:right;">
						<?if($bPhone):?>
							<div class="inner-table-block">
								<?CDigital::ShowHeaderPhones();?>
								<div class="schedule">
									<?$APPLICATION->IncludeFile(SITE_DIR."include/header-schedule.php", array(), array("MODE" => "html","NAME" => GetMessage('HEADER_SCHEDULE'),));?>
								</div>
							</div>
						<?endif?>
						<div class="inner-table-block">
							<span class="callback-block animate-load twosmallfont colored  white btn-default btn" data-event="jqm" data-param-id="<?=CCache::$arIBlocks[SITE_ID]["aspro_digital_form"]["aspro_digital_callback"][0]?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
						</div>
					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="menu-row bgcolored sliced">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="right-icons pull-right">
					<?if($bOrder):?>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CDigital::showBasketLink('', 'white','');?>
							</div>
						</div>
					<?endif;?>

                    <div class="inner-table-block small-block nopadding inline-search-show" data-type_search="fixed">
                        <div class="search-block top-btn"><i class="fa fa-search lg"></i></div>
                    </div>

					<?if($bCabinet):?>
						<!--div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?#=CDigital::showCabinetLink(true, false, 'white');?>
							</div>
						</div-->
					<?endif;?>
				</div>
				<div class="menu-only">
					<nav class="mega-menu sliced">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",array("COMPONENT_TEMPLATE" => ".default","PATH" => SITE_DIR."include/header/menu.php","AREA_FILE_SHOW" => "file","AREA_FILE_SUFFIX" => "","AREA_FILE_RECURSIVE" => "Y","EDIT_TEMPLATE" => "include_area.php"),false, array("HIDE_ICONS" => "Y"));?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="line-row visible-xs"></div>
</header>