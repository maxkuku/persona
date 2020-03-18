<?

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

CJSCore::Init(array("jquery2"));

$curPage = $APPLICATION->GetCurPage(true);
$assetInstance = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    set_include_path($_SERVER["DOCUMENT_ROOT"]);
    $newPatn = get_include_path();
    if (file_exists($newPatn . '/aweb_seo/_meta.php')) include_once($newPatn . '/aweb_seo/_meta.php');
    ?>
    <title><? if (isset($metaTitle) && !empty($metaTitle)) {
            echo $metaTitle;
        } else {
            $APPLICATION->ShowTitle();
        } ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= LANG_CHARSET; ?>"/>
    
    <? $APPLICATION->ShowHeadStrings(); ?>

    <? if (empty($D) || !isset($D)) {
        $APPLICATION->ShowMeta("description");
    } else {
        echo $metaDesc;
    }
    if (empty($K) || !isset($K)) {
        $APPLICATION->ShowMeta("keywords");
    } else {
        echo $metaKey;
    } ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="6ca3ea18d50aa174"/>
    <meta name="yandex-verification" content="0cd9c844084bade7"/>

    <? $APPLICATION->ShowHeadScripts(); ?>
    <? $APPLICATION->ShowCSS(); ?>


    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/bootstrap/dist/css/bootstrap.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/animate.css/animate.min.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/webfont-medical-icons/packages/webfont-medical-icons/wfmi-style.min.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/magnific-popup/dist/magnific-popup.min.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/vendors/owl.carousel/dist/assets/owl.carousel.min.css')?>
    <? if ($USER->IsAuthorized()): ?>
        <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/admin.css')?>
    <? endif ?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/base.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/colors.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/css/bitrix.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/pe-icon-social/css/pe-icon-social.css')?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . '/assets/pe-icon-social/css/social-style.css')?>
    <? if ($APPLICATION->GetCurPage() != "/") { ?>
        <? $assetInstance->addCss(SITE_TEMPLATE_PATH . "/vendors/fontawesome/font-awesome.min.css")?>
    <? } ?>
    <? $assetInstance->addCss(SITE_TEMPLATE_PATH . "/vendors/fontawesome/font-awesome.min.css")?>
    <? $assetInstance->addCss("/bxslider/dist/jquery.bxslider.css")?>


    <script src="<?=SITE_TEMPLATE_PATH?>/vendors/jquery/dist/jquery.min.js" data-skip-moving="true"></script>
    
    <? $assetInstance->addString('<!--[if lt IE 9]>
    <link href="' . SITE_TEMPLATE_PATH . '/assets/css/ie8.css" type="text/css" rel="stylesheet">
    <script src="' . SITE_TEMPLATE_PATH . '/assets/js/ie8.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/jquery/dist/jquery.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/jquery-migrate/jquery-migrate.min.js" data-skip-moving="true"></script>
    <script type="text/javascript">
        $.noConflict();
    </script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/respond/dest/respond.matchmedia.addListener.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/respond/dest/respond.min.js" data-skip-moving="true"></script>
    <script src="' . SITE_TEMPLATE_PATH . '/vendors/html5shiv/dist/html5shiv.min.js" data-skip-moving="true"></script>
    <![endif]-->'); ?>

    <? # $assetInstance->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,100italic,100,500,500italic,400italic,700italic,700,900,900italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">');?>
    <? # $assetInstance->addString('<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet">'); ?>



    <? $assetInstance->addJs("/bitrix/js/main/jquery/jquery-2.1.3.min.min.js") ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/modernizr-custom.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/bootstrap/dist/js/bootstrap.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery-countTo/jquery.countTo.js') ?>
    <? if (!defined('BX_UTF') || BX_UTF !== true): ?>
        <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/min/moment.min.js') ?>
        <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/locale/ru.js') ?>
    <? else: ?>
        <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/moment/min/moment-with-locales.js') ?>
    <? endif ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/jquery-countTo/jquery.countTo.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/magnific-popup/dist/jquery.magnific-popup.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/owl.carousel/dist/owl.carousel.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/vendors/HideSeek/jquery.hideseek.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/bitrix.js') ?>
    <? $assetInstance->addJs(SITE_TEMPLATE_PATH . '/assets/js/custom.js') ?>

    <meta name="yandex-verification" content="27c2cb3b96e816c9"/>


    <link rel="stylesheet" href="/bitrix/panel/main/style_new.css" media="none" onload="if(media!='all')media='all'">
    <noscript>
        <link rel="stylesheet" href="/bitrix/panel/main/style_new.css">
    </noscript>

    <? if ($APPLICATION->GetCurPage() != '/') { ?>
        <link rel="stylesheet" href="/ihover/ihover.css" media="all"/>
    <? } ?>
    <link rel="shortcut icon" href="<?= SITE_DIR ?>favicon.ico" type="image/x-icon">


    <meta name="yandex-verification" content="27c2cb3b96e816c9"/>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115977538-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-115977538-1');
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--script src="/bxslider/dist/jquery.bxslider.js"></script-->



    <!-- calltouch -->
    <script src="https://mod.calltouch.ru/init.js?id=s5dxn6lc"></script>
    <!-- /calltouch -->



    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '348239939095943');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=348239939095943&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->


</head>
<? $r = $APPLICATION->GetCurPage();
$l = explode("/", $r); ?>
<body class="<?= $l[1] ?>">
<? if ($USER->IsAuthorized()): ?>
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<? endif ?>
<div class="smt-wrapper">
    <header>




        <div class="smt-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 smt-topbar__col">
                        <div class="smt-topbar__button"><a
                                    class="btn smt-btn-topbar smt-btn-topbar_theme_dark smt-popup-link"
                                    href="#smt-popup-phone"><? $APPLICATION->IncludeFile(
                                    SITE_DIR . "smt_include/top_button_callback_header.php",
                                    Array(),
                                    Array("MODE" => "text")
                                ); ?></a>
                            <!--a class="btn smt-btn-topbar smt-btn-topbar_theme_light smt-popup-link" href="#smt-popup-order"><? /*$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_button_order_header.php",
                                    Array(),
                                    Array("MODE"=>"text")
);*/ ?></a><a class="btn smt-btn-topbar smt-popup-link" href="#smt-popup-question"><? /*$APPLICATION->IncludeFile(
                                    SITE_DIR."smt_include/top_button_question_header.php",
                                    Array(),
                                    Array("MODE"=>"text")
);*/ ?></a-->
                        </div>
                    </div>




                    <div class="col-md-6 col-sm-12 smt-topbar__col">
                        <div class="smt-topbar__link"><span class="call_phone_1"><a class="smt-phone mgo-number-11410"
                                                         href="tel:+<? $APPLICATION->IncludeFile(
                                                             SITE_DIR . "smt_include/phone.php",
                                                             Array(),
                                                             Array("MODE" => "text", "SHOW_BORDER" => false)
                                                         ); ?>" onclick="yaCounter48115721.reachGoal('phoneclick');
                            ga('send','event','phone','click');"><i
                                        class="glyphicon glyphicon-phone smt-phone__icon"></i><span><? $APPLICATION->IncludeFile(
                                        SITE_DIR . "smt_include/phone.php",
                                        Array(),
                                        Array("MODE" => "text")
                                        ); ?></a></span><a class="smt-email" href="mailto:<? $APPLICATION->IncludeFile(
                                SITE_DIR . "smt_include/email.php",
                                Array(),
                                Array("MODE" => "text", "SHOW_BORDER" => false)
                            ); ?>"><i class="glyphicon glyphicon-envelope smt-email__icon"></i><span><? $APPLICATION->IncludeFile(
                                        SITE_DIR . "smt_include/email.php",
                                        Array(),
                                        Array("MODE" => "text")
                                    ); ?></span></a>

                            <span><? $APPLICATION->IncludeFile(
                                    SITE_DIR . "smt_include/address-up.php",
                                    Array(),
                                    Array("MODE" => "text")
                                ); ?></span>

                        </div>

<!--

                        <script>
                            (function (w, d, u, i, o, s, p) {
                                if (d.getElementById(i)) {
                                    return;
                                }
                                w['MangoObject'] = o;
                                w[o] = w[o] || function () {
                                    (w[o].q = w[o].q || []).push(arguments)
                                };
                                w[o].u = u;
                                w[o].t = 1 * new Date();
                                s = d.createElement('script');
                                s.async = 1;
                                s.id = i;
                                s.src = u;
                                p = d.getElementsByTagName('script')[0];
                                p.parentNode.insertBefore(s, p);
                            }(window, document, '//widgets.mango-office.ru/widgets/mango.js', 'mango-js', 'mgo'));
                            mgo({calltracking: {id: 11410, elements: [{selector: '.mgo-number-11410'}]}});
                        </script>  -->


                    </div>
                </div>
            </div>
        </div>




        <nav class="smt-header" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="smt-header__logo">
                            <div class="smt-logo">
                                <div class="smt-logo__content"><a class="smt-logo__link" href="<?= SITE_DIR ?>">
                                        <? $APPLICATION->IncludeFile(
                                            SITE_DIR . "smt_include/logo.php",
                                            Array(),
                                            Array("MODE" => "html")
                                        ); ?></a></div>
                            </div>
                            <div class="smt-toggle">
                                <div class="smt-toggle__content">
                                    <button class="smt-toggle__button collapsed" type="button" data-toggle="collapse"
                                            data-target=".smt-navbar" aria-expanded="false" aria-controls="smt-navbar">
                                        <span class="sr-only">Toggle navigation</span><span
                                                class="icon-bar"></span><span class="icon-bar"></span><span
                                                class="icon-bar"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="smt-collapse collapse smt-navbar" id="smt-navbar">
                            <? $APPLICATION->IncludeComponent("bitrix:menu", "smt_menu", Array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "2",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => Array()
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <? if ($curPage == SITE_DIR . "index.php"): ?>
    <? else: ?>
    <? if ($APPLICATION->GetDirProperty("smt_page_background")): ?>
    <section class="smt-page-header"
             style="background-image: url(<?= $APPLICATION->GetDirProperty("smt_page_background") ?>)">
        <? else: ?>
        <section class="smt-page-header">
            <? endif ?>
            <div class="smt-page-header__overlay">
                <div class="smt-page-header__inner">
                    <div class="container">
                        <header>
                            <h1 class="smt-page-header__header"><?= $APPLICATION->ShowTitle(false) ?></h1>
                        </header>
                        <div class="smt-page-header__breadcrumb">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "smt_breadcrumb",
                                Array(
                                    "START_FROM" => "0",
                                    "PATH" => "",
                                    "SITE_ID" => "-"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="smt-content">
            <div class="container">
                <div class="row">
                    <? if (!$APPLICATION->GetProperty("smt_col_12") && !$APPLICATION->GetProperty("smt_side_right")): ?>
                        <div class="smt-content__sidebar col-lg-3 col-md-3 col-sm-4 in-header-file">
                            <div class="smt-widget smt-widget_sidebar">
                                <div class="smt-widget__content">
                                    <? $APPLICATION->IncludeComponent("bitrix:menu", "smt_list", Array(
                                            "ROOT_MENU_TYPE" => "left",
                                            "MAX_LEVEL" => "2",
                                            "CHILD_MENU_TYPE" => "left",
                                            "USE_EXT" => "Y",
                                            "MENU_CACHE_TYPE" => "A",
                                            "MENU_CACHE_TIME" => "3600",
                                            "MENU_CACHE_USE_GROUPS" => "Y",
                                            "MENU_CACHE_GET_VARS" => Array()
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <div class="smt-widget <? $APPLICATION->ShowViewContent('smt_sidebar'); ?>">
                                <div class="smt-widget__content">
                                    <? /* !!!!! доктора руками прописаны в шаблоне smt_search !!!! */
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:search.form",
                                        "smt_search",
                                        Array(
                                            "PAGE" => "#SITE_DIR#search/",
                                            "USE_SUGGEST" => "N"
                                        )
                                    ); ?>
                                </div>
                            </div>
                            <? if (!$APPLICATION->GetProperty("smt_not_show_banner")): ?>
                                <? $APPLICATION->IncludeFile(
                                    SITE_DIR . "smt_include/sidebar_banner.php",
                                    Array(),
                                    Array("MODE" => "text")
                                ); ?>
                            <? endif ?>
                        </div>
                    <? endif ?>
                    <? if ($APPLICATION->GetProperty("smt_col_12")): ?>
                    <div class="smt-content__main col-lg-12 col-md-12 col-sm-12">
                        <? else: ?>
                        <? if ($APPLICATION->GetProperty("smt_side_right")): ?>
                        <div class="smt-content__main col-lg-9 col-md-9 col-sm-8">
                            <? else: ?>
                            <div class="smt-content__main col-lg-9 col-md-9 col-sm-8">
                                <? endif; ?>
                                <? endif; ?>
                                <? endif ?>

    