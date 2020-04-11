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








    <?$APPLICATION->ShowHead()?>


</head>
<?$adr = array_splice(explode("/", $_SERVER["REQUEST_URI"]),-2,1);?>
<body id="main" class="<?=$adr[0]?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PK8NPPW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->






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


            <button id="mob-toggler" class="only-mobile-vis navbar-toggler" type="button">
                <span id="to-open" class="to-open navbar-toggler-icon"></span>
                <span id="to-close" class="to-close navbar-toggler-icon" style="display: none; background-image: url(/bitrix/templates/brt/images/xlines.svg); width:31px; height:31px"></span>
            </button>

        </div>








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
        <nav id="menu" class="top-menu nav">
            <button id="mob-menu-before" aria-expanded="false">
            </button>
            <div class="navbar" id="navbarToggler">
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


<div id="navigation"></div>

<?$n = strtotime("now");
if($n < strtotime("5/01/2020") && $APPLICATION->GetCurPage() != "/kontakty/"){
    ?>
    <style>
        .banner.wrapr .row {
            background-color: #e34444;
            width: 100%;
            color: white;
            padding: 2px 0;
            text-align: center;
        }
        .banner.wrapr p.in-banner {
            font-weight: 700;
        }
        .banner.wrapr p a {
            color:yellow;
            text-decoration:underline;
            cursor:pointer;
        }
    </style><div class="banner wrapr">
        <div class="row">
            <p class="in-banner">КЛИНИКА НЕ РАБОТАЕТ ДО 30 АПРЕЛЯ</p>
        <p class="in-under">ОСТАВЬТЕ <a class="btn" onclick="set_modal_header_consult()" data-uk-modal="{target:'#modal-form'}" data-target="#modal-form">ЗАЯВКУ НА САЙТЕ</a>, МЫ ВАМ ОБЯЗАТЕЛЬНО ПЕРЕЗВОНИМ</p>
        </div>
    </div><?
}
?><?$APPLICATION->IncludeComponent(
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



