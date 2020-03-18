<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PK8NPPW');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#2e3f75">
	<meta name="yandex-verification" content="5e7c7bdecb5270dd" />
<meta name="google-site-verification" content="3JZIq6Z_rRyINPdtlj58kec6sOWtZhHmf4tT1Ug_zMY" />
    <meta itemprop="name" content="Центр нейрореабилитации BRT">
    <meta itemprop="description"
          content="Клиника восстановительного лечения. Работаем с 1996 года. г. Москва, ул. Циолковского, дом 7">
    <meta itemprop="image" content="/favicon.ico">
    <meta property="og:title" content="Центр нейрореабилитации BRT">
    <meta property="og:description"
          content="Клиника восстановительного лечения. Работаем с 1996 года. г. Москва, ул. Циолковского, дом 7">
    <meta property="og:url" content="https://<?= $_SERVER["HTTP_HOST"] ?>/">
    <meta property="og:image" content="https://<?= $_SERVER["HTTP_HOST"] ?><?= SITE_TEMPLATE_PATH ?>/images/logo-g.png">
    <meta name="title" content="Центр реабилитации Николая Блюма">
    <meta name="description"
          content="Клиника восстановительного лечения. Работаем с 1996 года. г. Москва, ул. Циолковского, дом 7">




<!-- VK Pixel Code -->
<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-359016-a0Mhs"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-359016-a0Mhs" style="position:fixed; left:-999px;" alt=""/></noscript> 
<!-- End VK Pixel Code -->

    
    <?#$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/bootstrap-4.1.css")?>
    <?#$APPLICATION->SetAdditionalCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css")?>
    <?#$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Roboto:300,400,900&amp;subset=cyrillic")?>
    <?#$APPLICATION->SetAdditionalCSS("/bitrix/templates/brt/css/uikit.min.css")?>
    <?#$APPLICATION->SetAdditionalCSS("/bitrix/templates/brt/css/uikit.docs.min.css")?>
    <?#$APPLICATION->SetAdditionalCSS("/bitrix/templates/brt/slick.css")?>
    <?#$APPLICATION->SetAdditionalCSS("/bitrix/templates/brt/slick-theme.css")?>
	<?#$APPLICATION->SetAdditionalCSS("https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css")?>
    <?$APPLICATION->ShowHead()?>
    <?#$APPLICATION->SetAdditionalCSS("/bitrix/templates/brt/mobile.css")?>




</head>
<?$adr = array_splice(explode("/", $_SERVER["REQUEST_URI"]),-2,1);?>
<body id="main" class="<?=$adr[0]?>">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK8NPPW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130598452-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130598452-1');
</script>





<?$APPLICATION->ShowPanel();?>

<div id="one">
    <div class="wrap">
        <div id="logo-wrap" class="navbar-light">

            <div>
            <div id="logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/log-brt.jpg" align="absmiddle"></a></div>
            <div id="near_logo_name">
                <?$APPLICATION->IncludeFile(
                    $APPLICATION->GetTemplatePath("include_areas/company_name.php"),
                    Array(),
                    Array("MODE"=>"html")
                );?>
            </div>
            </div>



            <div class="only-mobile"><span class="call_phone_5"><a href="tel:+74993950021">+7(499) 395-00-21</a></span></div>


            <button class="only-mobile-vis navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="to-open navbar-toggler-icon"></span>
                <span class="to-close" uk-icon="close" style="background-image: url(/bitrix/templates/brt/images/xlines.svg); width:30px; height:30px"></span>
            </button>

        </div>
        <!--div id="header_phone">8 (800) 500‑77-02</div>
        <div id="send_epikriz"><div id="send_icon"></div><div id="send_text"><i class="fa fa-envelope-o"></i><span>Отправить эпикриз</span></div></div>
        <div id="header_callback_button"><a class="btn btn-primary" data-toggle="modal" data-target="#modal-callback">Заказать звонок</a></div-->







        <div class="phone-conts c800">
            <div><span class="call_phone_5"><a href="tel:88005007702">8(800) 500‑77-02</a></span><span class="top-work-time">Бесплатный звонок по России</span></div>
        </div>
        <div class="phone-conts mos">
            <div><span class="call_phone_4"><a href="tel:+74993950021" onclick="yaCounter51498530.reachGoal
										('phoneclick'); ga('send','event','phone','click');">+7(499) 395-00-21</a></span><span class="top-work-time">Ежедневно с 9:00 до 21:00</span></div>
        </div>

    </div><!--one wrap-->
</div>
<div id="two">
    <div class="wrap">
        <nav id="menu" class="top-menu nav navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="to-open navbar-toggler-icon"></span>
                <span class="to-close" uk-icon="close"><svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg" data-svg="close"> <path fill="none" stroke="#000" stroke-width="1.06" d="M28,28 L4,4"></path> <path fill="none" stroke="#000" stroke-width="1.06" d="M28,4 L4,28"></path></svg></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarToggler">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "2",
		"USE_EXT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
            </div>
        </nav>
    </div>
</div>


<div id="navigation"><?/*$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        ".default",
        Array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => ""
        )
    );*/?></div>

<?/*if($APPLICATION->GetCurPage() != '/'):?>
<div class="wrap">
    <?endif*/?>

            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "sect", 
					"AREA_FILE_SUFFIX" => "inc", 
					"AREA_FILE_RECURSIVE" => "N", 
					"EDIT_MODE" => "html", 
					"EDIT_TEMPLATE" => "sect_inc.php" 
				)
			);?>
            <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "page", 
					"AREA_FILE_SUFFIX" => "inc", 
					"AREA_FILE_RECURSIVE" => "N", 
					"EDIT_MODE" => "html", 
					"EDIT_TEMPLATE" => "page_inc.php" 
					)
			);?>



