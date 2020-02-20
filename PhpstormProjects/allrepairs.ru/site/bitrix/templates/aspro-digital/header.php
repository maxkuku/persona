<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<!DOCTYPE html>
<?if(CModule::IncludeModule("aspro.digital"))
	$arThemeValues = CDigital::GetFrontParametrsValues(SITE_ID);
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>" class="<?=($_SESSION['SESS_INCLUDE_AREAS'] ? 'bx_editmode ' : '')?><?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie7' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0' ) ? 'ie ie8' : ''?> <?=strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0' ) ? 'ie ie9' : ''?>">
	<head>
		<meta name="robots" content="index, follow">
		<?global $APPLICATION;?>
		<?IncludeTemplateLangFile(__FILE__);?>
        <title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowHead();?>
		<?$APPLICATION->ShowMeta("viewport");?>
		<?$APPLICATION->ShowMeta("HandheldFriendly");?>
		<?$APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes");?>
		<?$APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style");?>
		<?$APPLICATION->ShowMeta("SKYPE_TOOLBAR");?>
		<?$APPLICATION->AddHeadString('<script>BX.message('.CUtil::PhpToJSObject($MESS, false).')</script>', true);?>
		<?$APPLICATION->AddHeadString('<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>', true);?>
		<?if(CModule::IncludeModule("aspro.digital")) {CDigital::Start(SITE_ID);}?>
		<!--link rel="preload" href="/bitrix/templates/aspro-digital/css/flaticon.css" as="style"-->
		<link rel="stylesheet"  href="/bitrix/templates/aspro-digital/css/flaticon.css" type="text/css" media="all">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97466577-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-97466577-1');
</script>
	</head>
	<body class="mheader-v<?=$arThemeValues["HEADER_MOBILE"];?> header-v<?=$arThemeValues["HEADER_TYPE"];?> title-v<?=$arThemeValues["PAGE_TITLE"];?><?=($arThemeValues['ORDER_VIEW'] == 'Y' && $arThemeValues['ORDER_BASKET_VIEW']=='HEADER'? ' with_order' : '')?><?=($arThemeValues['CABINET'] == 'Y' ? ' with_cabinet' : '')?><?=(intval($arThemeValues['HEADER_PHONES']) > 0 ? ' with_phones' : '')?>">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?if(!CModule::IncludeModule("aspro.digital")):?>
			<?$APPLICATION->SetTitle(GetMessage("ERROR_INCLUDE_MODULE_DIGITAL_TITLE"));?>
			<?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?>
			<?die();?>
		<?endif;?>
		<?CDigital::SetJSOptions();?>
		<?global $arSite, $isMenu, $isIndex, $is404, $bTopServicesIndex, $bPortfolioIndex, $bPartnersIndex, $bTeasersIndex, $bInstagrammIndex, $bReviewsIndex, $bConsultIndex, $bCompanyIndex, $bTeamIndex, $bNewsIndex;?>
		<?$is404 = defined("ERROR_404") && ERROR_404 === "Y"?>
		<?$arSite = CSite::GetByID(SITE_ID)->Fetch();?>
		<?$isMenu = ($APPLICATION->GetProperty('MENU') !== "N" ? true : false);?>
		<?global $arTheme;?>
		<?$arTheme = $APPLICATION->IncludeComponent("aspro:theme.digital", "", array(), false);?>
		<?$isForm = CSite::inDir(SITE_DIR.'form/');?>
		<?$isBlog = CSite::inDir(SITE_DIR.'articles/');?>
		<?$isCabinet = CSite::inDir(SITE_DIR.'cabinet/');?>
		<?$isIndex = CSite::inDir(SITE_DIR."index.php");?>
		<?if($isIndex = CSite::inDir(SITE_DIR."index.php")):?>
			<?$indexType = $arTheme["INDEX_TYPE"]["VALUE"];?>
			<?$bTopServicesIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["TOP_SERVICES_INDEX"]["VALUE"] == 'Y';?>
			<?$bPartnersIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["PARTNERS_INDEX"]["VALUE"] == 'Y';?>
			<?$bTeasersIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["TEASERS_INDEX"]["VALUE"] == 'Y';?>
			<?$bPortfolioIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["PORTFOLIO_INDEX"]["VALUE"] == 'Y';?>
			<?if(isset($arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["INSTAGRAMM_INDEX"]))
				$bInstagrammIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["INSTAGRAMM_INDEX"]["VALUE"] == 'Y';
			else
				$bInstagrammIndex = true;?>
			<?$bReviewsIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["REVIEWS_INDEX"]["VALUE"] == 'Y';?>
			<?$bConsultIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["CONSULT_INDEX"]["VALUE"] == 'Y';?>
			<?$bCompanyIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["COMPANY_INDEX"]["VALUE"] == 'Y';?>
			<?$bTeamIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["TEAM_INDEX"]["VALUE"] == 'Y';?>
			<?$bNewsIndex = $arTheme["INDEX_TYPE"]["SUB_PARAMS"][$indexType]["NEWS_INDEX"]["VALUE"] == 'Y';?>
		<?endif;?>
		<?CDigital::get_banners_position('TOP_HEADER');?>
		<div class="visible-lg visible-md title-v<?=$arTheme["PAGE_TITLE"]["VALUE"];?><?=($isIndex ? ' index' : '')?>">
			<?CDigital::ShowPageType('header');?>
		</div>
		<?CDigital::get_banners_position('TOP_UNDERHEADER');?>
		<?if($arTheme["TOP_MENU_FIXED"]["VALUE"] == 'Y'):?>
			<div id="headerfixed">
				<?CDigital::ShowPageType('header_fixed');?>
			</div>
		<?endif;?>
		<div id="mobileheader" class="visible-xs visible-sm">
			<?CDigital::ShowPageType('header_mobile');?>
			<div id="mobilemenu" class="<?=($arTheme["HEADER_MOBILE_MENU_OPEN"]["VALUE"] == '1' ? 'leftside':'dropdown')?>">
				<?CDigital::ShowPageType('header_mobile_menu');?>
			</div>
		</div>
		<div class="body <?=($isIndex ? 'index' : '')?> hover_<?=$arTheme["HOVER_TYPE_IMG"]["VALUE"];?>">
			<div class="body_media"></div>
			<div role="main" class="main banner-<?=$arTheme["BANNER_WIDTH"]["VALUE"];?>">
					<?CDigital::checkRestartBuffer();?>