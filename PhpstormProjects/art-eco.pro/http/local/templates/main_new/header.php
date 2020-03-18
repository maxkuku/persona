<!DOCTYPE html>
<html lang="ru">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PJQ44GP');</script>
<!-- End Google Tag Manager -->
<?$APPLICATION->ShowHead()?>
<!--[if IE]>    <html class="ie"> <![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="/js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="/js/jquery.formstyler.min.js"></script>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="/favicon.png" type="image/jpg">
	<title><?$APPLICATION->ShowTitle()?> - АРТ-ЭКО официальный дистрибьютор медицинских расходных материалов и оборудования</title>
	<script src="/js/jquery.fancybox-1.3.4.pack.js"></script>		
	<link  href="/js/jquery.fancybox-1.3.4.css" rel="stylesheet">
	<link  href="/js/jquery.fancybox.css" rel="stylesheet">
	<link  href="/js/jquery.formstyler.css" rel="stylesheet">
	<link  href="/js/jquery.formstyler.theme.css" rel="stylesheet">
<script type="text/javascript"> 
        $(document).ready(function() { 
            $("a.modalbox").fancybox( 
            {                                  
                "width" : 680,    
                "height" : 400, 
                "hideOnContentClick" :false,
				"overlayOpacity" : 0.3,
            }); 
        }); 
</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJQ44GP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div id="shadow"></div>
	<div class="site_wrapper row">
	
		<div class="top row">
			<div class="main_width">
				<div class="search">
					<?$APPLICATION->IncludeComponent(
						"bitrix:search.form",
						"",
						Array(
							"PAGE" => "#SITE_DIR#search/index.php",
							"USE_SUGGEST" => "N"
						)
					);?>
				</div>
				<div class="phones list-st">
				<?$APPLICATION->IncludeFile(SITE_DIR."include/phones.php",Array(),Array("MODE"=>"php"));?>				
				</div>
				
				<?/*<div class="lang">
					<a href="" class="ru disabled"></a>
					<a href="" class="en"></a>
				</div>*/?>
			</div>
		</div>
			<header class="row">
				<div class="main_width">
					<a class="nav_mobile_ico" id="show_nav"></a>
					<a href="/index.php" class="logo">
						<img src="/images/logo_bl.png" /></a>
					<div class="address"><?$APPLICATION->IncludeFile(SITE_DIR."include/address.php",Array(),Array("MODE"=>"php"));?></div>
					<!--<div class="phones row"></div>-->
				
					
				
					<a class="btn recall_link">Заказать обратный звонок</a>
					<div class="basket_line" style="margin:15px;">
					<?$APPLICATION->IncludeComponent(
						"bitrix:sale.basket.basket.line", 
						".default", 
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
							"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
							"SHOW_NUM_PRODUCTS" => "Y",
							"SHOW_TOTAL_PRICE" => "Y",
							"SHOW_EMPTY_VALUES" => "Y",
							"SHOW_PERSONAL_LINK" => "N",
							"PATH_TO_PERSONAL" => SITE_DIR."personal/",
							"SHOW_AUTHOR" => "N",
							"PATH_TO_REGISTER" => SITE_DIR."login/",
							"PATH_TO_AUTHORIZE" => "",
							"PATH_TO_PROFILE" => SITE_DIR."personal/",
							"SHOW_PRODUCTS" => "N",
							"POSITION_FIXED" => "N",
							"HIDE_ON_BASKET_PAGES" => "N"
						),
						false
					);?>
					</div>
				</div>
			</header>
			<div class="nav_wrapper">
				<div class="main_width">
					<nav>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "N"
							)
							);?>
					</nav>
				</div>
			</div>
			<div class="nav_mobile">
				<div class="nav_mobile_content" id="nav_mobile" >
					<div class="mobile_nav_header">
						<a class="logo"><img src="/images/logo_bl.png" /></a>
						<a class="nav_mobile_ico" id="hide_nav"></a>
					</div>
					<nav>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "left",
								"DELAY" => "N",
								"MAX_LEVEL" => "1",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "N"
							)
							);?>
					</nav>
					<ul>
						<li><a href="/personal/cart/">Корзина</a></li>
					</ul>
					<div class="mobile_info">
						<div class="addresses">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/address.php",Array(),Array("MODE"=>"php"));?>
						</div>
						<div class="phones">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/phones.php",Array(),Array("MODE"=>"php"));?>
						</div>
					</div>
				</div>	
			</div>
			<div class="mobile_search">
				<?$APPLICATION->IncludeComponent(
					"bitrix:search.form",
					"",
					Array(
						"PAGE" => "#SITE_DIR#search/index.php",
						"USE_SUGGEST" => "N"
					)
				);?>
			</div>
			<?if(($APPLICATION->GetCurPage(true) != "/index.php") && !CSite::InDir("/catalog/") && !CSite::InDir("/catalog2/") && !CSite::InDir("/shop/") && !CSite::InDir("/shop2/") && !CSite::InDir("/test/") && ($APPLICATION->GetCurPage(true) != "/test.php") ):?>
				<div class="page row">
					<div class="main_width">
						<div class="breadcrumbs">
							<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
								"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
									"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
									"COMPONENT_TEMPLATE" => ".default"
								),
								false
							);?>
						</div>
						
							<section class="white">
							<h1><?$APPLICATION->ShowTitle()?></h1>
			<?endif?>