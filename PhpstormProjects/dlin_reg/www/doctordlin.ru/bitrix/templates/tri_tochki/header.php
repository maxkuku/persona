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
<meta property="og:url" content="<?=(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"?><?=$_SERVER['HTTP_HOST']?>">
<meta property="og:title" content="<? $APPLICATION->ShowTitle()?>">
<meta property="og:description" content="В нашем арсенале 25 современных методик безоперационного лечения позвоночника и суставов.">
<meta property="og:type" content="website">
<meta property="og:image" content="/siteimage.png">
<title><? $APPLICATION->ShowTitle()?></title>
<? if($_SERVER['REQUEST_URI'] == '/'){?>
<? }
?>
<link rel="canonical" href="<?=$APPLICATION->GetCurDir()?>"/>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.min.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.docs.min.css"/>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/responsiveslides.min.js"></script>
<?$APPLICATION->ShowHead();?>
<!--[if lte IE 6]>
<![endif]-->

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-custom.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/uikit.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inputmask.js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
<!--script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.js"></script-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modal.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js?g=<?=rand(1,999)?>"></script>

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?162",t.onload=function(){VK.Retargeting.Init("VK-RTRG-415448-fzTNj"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-415448-fzTNj" style="position:fixed; left:-999px;" alt=""/></noscript>


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
  fbq('init', '1813626908774184');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1813626908774184&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Facebook Pixel Code 
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '752632768553668');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=752632768553668&ev=PageView&noscript=1"
/></noscript>
 End Facebook Pixel Code -->



<!-- Facebook Pixel Code -->
<!--
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2541228639440159');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2541228639440159&ev=PageView&noscript=1"
/></noscript> -->
<!-- End Facebook Pixel Code -->



<!-- Facebook Pixel Code -->
<!--
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
/></noscript> -->
<!-- End Facebook Pixel Code -->


<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3126952", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="https://top-fwz1.mail.ru/counter?id=3126952;js=na" style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->

<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({
    type: 'itemView',
    productid: 'VALUE',
    pagetype: 'VALUE',
    list: 'VALUE',
    totalvalue: 'VALUE'
});
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(47424421, "init", {
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


    <div id="addresses-list">
        <ul>
            <li><div id="addr-1"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                    <a href="/contacts/" target="_blank" class="to-map">Клиника на Новых Черемушках</a></div>
            </li>
            <li><div id="addr-2"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                    <a href="/contacts/mir/" target="_blank" class="to-map">Клиника на Проспекте Мира</a></div>
            </li>
            <li><div id="addr-3"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                    <a href="/contacts/pushkino/" target="_blank" class="to-map">Клиника в Пушкино</a></div>
            </li>
        </ul>
    </div>
    <div id="phones">
        <ul>
            <li>  <a href="tel:+74951016035" onclick="yaCounter47424421.reachGoal
										('phoneclick'); ga('send','event','phone','click');">+7(495) 101‑60-35</a></li>
<!--            <li>Пушкино: <a href="tel:+74951011241" onclick="yaCounter47424421.reachGoal
										('phoneclick1'); ga('send','event','phone','click');">+7(495) 101‑12-41</a></li> -->
        </ul>
    </div>


		<div id="header">
			<div class="wrap">

            	<div id="logo" itemscope itemtype="http://schema.org/Physician">
                    <a itemprop="url" href="//<?=$_SERVER['HTTP_HOST']?>">
                    <img itemprop="logo" src="<?=SITE_TEMPLATE_PATH?>/images/logo-p.webp" alt="Dr.Dlin логотип" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/logo-p.png'">
                    <meta itemprop="name" content="Dr.Dlin"/>
                    </a>
                </div>
                <div class="annotate">
                    Клиника лечения<br>позвоночника<br>Доктора Длина
                </div>
                <div id="top-contacts">
                    <div id="top-part-top">

                        <div>

                            <span class="click formpop" uk-toggle="target: #modal-form">Заказать звонок</span>
                            
                        <a href="tel:+74951016035" onclick="yaCounter47424421.reachGoal
										('phoneclick'); ga('send','event','phone','click');">+7(495) 101‑60-35</a></div>

 <!--                       <div><span>Пушкино:</span>
                            <a href="tel:+74951011241" onclick="yaCounter47424421.reachGoal
										('phoneclick1'); ga('send','event','phone','click');">+7(495) 101‑12-41</a></div> -->
                    </div>
                    <div id="bottom-part-top">
                        <div id="addr-1"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                        <a href="/contacts/" target="_blank" class="to-map">Клиника на Новых Черемушках</a></div>
                        <div id="addr-2"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                        <a href="/contacts/mir/" target="_blank" class="to-map">Клиника на Проспекте Мира</a></div>
                        <div id="addr-3"><img width="22" src="<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.webp" alt="Адрес" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/map-marker-2-xxl.png'">
                        <a href="/contacts/pushkino/" target="_blank" class="to-map">Клиника в Пушкино</a></div>

                    </div>
                </div>
                <div class="phone-conts">
                    <div><img id="adr" src="<?=SITE_TEMPLATE_PATH?>/images/adres-blue.png"/></div>
                    <div><img id="pho" src="<?=SITE_TEMPLATE_PATH?>/images/phone-blue.png"/></div>
                </div>
                <button class="main-nav__toggle uk-visible-small"><span></span></button>
            </div>

        </div>
        <div id="desktop-menu">
            <div class="wrap">
                <div id="top_buttons" class="top-buttons <?=str_replace("/","",$APPLICATION->GetCurDir())?>">
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
                <div class="open-form" id="search-li"><!--a uk-toggle="target: #modal-search"-->
                    <form action="/search/" method="post">
                    <input id="inp_search" type="text" name="q" placeholder="Искать" value="">
                    </form>
                <i class="fa fa-search"></i><!--/a--></div>
                </div>
			</div>
		</div>

        <div id="top-menu">

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


        

        
<div id="main" class="<?=($APPLICATION->GetCurPage()=="/")?"main-page":""?>">
<? if($APPLICATION->GetCurPage()!="/"):?>
<? $APPLICATION->IncludeComponent("tri_tochki:actions", "form", array(
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

<? endif;?>