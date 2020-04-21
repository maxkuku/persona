 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<?$APPLICATION->ShowHead();?>
	<link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/uikit/css/uikit.min.css" />
	<link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/uikit/css/components/dotnav.min.css" />
	<link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/uikit/css/components/slider.min.css" />
	<link rel="stylesheet" href="//<?=$_SERVER['SERVER_NAME']?>/uikit/css/components/slideshow.min.css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/max640.css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/max1030.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/3.2.2/mediaelementplayer.css" />
	<script src="//<?=$_SERVER['SERVER_NAME']?>/js/jquery-1.12.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/3.2.2/mediaelement-and-player.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mediaelement/3.2.2/lang/ru.js"></script>
	<script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/uikit.min.js"></script>
    <script src="//<?=$_SERVER['SERVER_NAME']?>/js/components/modal.js"></script>
    <script src="//<?=$_SERVER['SERVER_NAME']?>/js/components/lightbox.js"></script>
	<script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/components/slider.min.js"></script>
	<script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/components/slideset.min.js"></script>
	<script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/components/slideshow.min.js"></script>
	<script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/core/nav.min.js"></script>
	<!--script src="//<?=$_SERVER['SERVER_NAME']?>/uikit/js/core/uikit-icons.min.js"></script-->
	<script src="//<?=$_SERVER['SERVER_NAME']?>/js/jquery.inputmask.js"></script>
	<title><?$APPLICATION->ShowTitle()?></title>
	<script src="//maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
	<script type="text/javascript">
		var map;

		DG.then(function () {
			map = DG.map('map', {
				center: [55.796257, 37.495841],
				zoom: 15
			});

			myIcon = DG.icon({
						iconUrl: '/bitrix/templates/famdental/imager/marker.png',
						iconSize: [30, 50]
					});

			DG.marker([55.798272, 37.494521], {icon: myIcon}).addTo(map)
		});
	</script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2524494487662052');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2524494487662052&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
<?$APPLICATION->ShowPanel()?>
<div class="wrap">
	<div class="container" id="first-container">
		<div class="top-grid">
			<div class="logo">
				<a href="/" alt="На главную"><img
						src="<?=SITE_TEMPLATE_PATH?>/imager/logo-top.png"/></a>
			</div>
			<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://<?=$_SERVER['HTTP_HOST']?>",
  "logo": "https://famdental.ru/bitrix/templates/famdental/imager/logo-top.png"
}
			</script>
<div class="menu-mobile" style="display:none">
	<?$APPLICATION->IncludeComponent(
	"famdental:menu", 
	"mob-line", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "0",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "mob-line"
	),
	false
);?>
            </div>


<?$APPLICATION->IncludeComponent(
	"famdental:menu", 
	"horizontal_multilevel1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "top",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "0",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1"
	),
	false
);?>
		</div>


<?if(htmlspecialchars($_REQUEST['sphrase_id'])==""):?>
<?if($APPLICATION->GetCurPage(true) == SITE_DIR."index.php") {
	$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/page_templates/main.php",Array(),Array("MODE" => "php"));
}?>
<?endif?>