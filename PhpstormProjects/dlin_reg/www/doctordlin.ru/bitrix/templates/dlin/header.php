<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K7P7NV9');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="yandex-verification" content="fa0e81d9f4d8230f" />
    <meta name="yandex-verification" content="69f1518490e8856c" />
<meta name="google-site-verification" content="IwCZK4CF6tpsGqO11p-Qt_y8INFpx0qEZ95SPw1rJFo" />
	<title><? $APPLICATION->ShowTitle()?></title>
    <? if($_SERVER['REQUEST_URI'] == '/'){?>
	<? }
	?>
	<link rel="canonical" href="<?=$APPLICATION->GetCurDir()?>"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/responsiveslides.css"/>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.docs.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/ipad.css"/>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/responsiveslides.min.js"></script>
	<?$APPLICATION->ShowHead();?>
	<!--[if lte IE 6]>
	<![endif]-->

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-custom.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/uikit.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inputmask.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modal.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
    <?#if($APPLICATION->GetCurPage() == "/"):?>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
    <?#endif?>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>




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
  fbq('init', '344380562809226');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=344380562809226&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(47424421, "init", {
        id:47424421,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424421" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</head>
<body class="<?=array_splice(explode('/', htmlspecialchars($_SERVER['PHP_SELF'])),-2,1)[0]?>">
<div id="panel"><? $APPLICATION->ShowPanel();?></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7P7NV9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

		<div id="header">
			<div class="wrap">
            	<div id="logo" itemscope itemtype="http://schema.org/Physician">
                    <a itemprop="url" href="//<?=$_SERVER['HTTP_HOST']?>">
                    <img itemprop="logo" src="<?=SITE_TEMPLATE_PATH?>/images/logo-p.webp" alt="Dr.Dlin логотип" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/logo-p.png'">
                    <meta itemprop="name" content="Dr.Dlin"/>
                    </a>
                </div>
                <div class="annotate">
                    Клиника лечения<br>позвоночника и суставов
                </div>
                <div class="addr-conts">
                    <img itemprop="logo" src="<?=SITE_TEMPLATE_PATH?>/images/marker.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/marker.jpg'">
                    <div>
                        <span>м.</span> <b>Новые Черёмушки</b><br>
                        <div>г. Москва, ул. Гарибальди 36</div>
                    </div>
                </div>
                <div class="phone-conts">
                    <img itemprop="logo" src="<?=SITE_TEMPLATE_PATH?>/images/phone.webp" alt="Режим работы" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/phone.jpg'">
                    <div><a href="tel:+74991122517" onclick="yaCounter47424421.reachGoal
										('phoneclick'); ga('send','event','phone','click');">+7(495) 101‑60-35</a><br><span class="top-work-time">Пн-Сб: 9:00–21:00</span></div>
                </div>
                <button class="main-nav__toggle uk-visible-small" ><span></span></button>
                <!--a href="#top-menu" class="in-header uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a-->
            </div>

        </div>
        <div id="desktop-menu">
            <div class="wrap">
                <div id="top-buttons" class="<?=str_replace("/","",$APPLICATION->GetCurDir())?>">
                <?$APPLICATION->IncludeComponent(
	"dlin:menu", 
	"another_desktop", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MAX_LEVEL" => "3",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"COMPONENT_TEMPLATE" => "another_desktop",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
                <div class="open-form" id="search-li"><!--a data-uk-modal="{target:'#modal-search'}"-->
                    <form action="/search/" method="post">
                    <input id="inp_search" type="text" name="q" placeholder="Искать" value="">
                    </form>
                <i class="fa fa-search"></i><!--/a--></div>
                </div>
			</div>
		</div>
		<!--div class="uk-visible-small top-menu-wrapper"-->

        <div id="top-menu" class="uk-navbar uk-offcanvas uk-navbar-attached" mode="push">

            <? $APPLICATION->IncludeComponent("dlin:menu", "mobile", array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "Y",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
                ),
                false,
                array(
                "ACTIVE_COMPONENT" => "Y"
                )
            );?>
        </div>


        <!--a href="#top-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a-->
        <!--/div-->
        

        
<div id="main">
<? if($APPLICATION->GetCurPage()!="/"):?>
<? $APPLICATION->IncludeComponent("dlin:actions", "picture", array(
	"IBLOCK_ID" => "10",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "N",
	"CHECK_DATES" => "Y",
	"USE_TITLE_RANK" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SORT_BY1" => "SORT",
	"SORT_ORDER1" => "ACS",
	"SET_TITLE" => "N",
	"arrFILTER" => array(
		0 => "no",
	),
	"PROPERTY_CODE" => array("to_page",""),
	"SHOW_WHERE" => "N",
	),
	false
);?>
<!--div id="modal-search" uk-modal>
<div class="uk-modal-dialog uk-modal-body">
<form role="search" method="get" class="search-form" action="/search/">
	<label for="search-form-5a2e0eb3977f8">
		<span class="screen-reader-text">Искать:</span>
	</label>
	<input type="search" id="search-form-5a2e0eb3977f8" class="search-field" placeholder="Поиск по сайту" value=" " name="q"/>
	<button type="submit" class="search-submit">►</button>
</form>
</div>
</div-->
<? endif;?>