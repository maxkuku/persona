<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html>
<head>

    <!-- Google Tag Manager -->
    <script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KCLHD5R');</script>
    <!-- End Google Tag Manager -->
    <!--TODO: remove-->
    <meta name="robots" content="noindex, nofollow"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $APPLICATION->ShowTitle()?></title>
    <? if($_SERVER['REQUEST_URI'] == '/'){?>
        <meta name='yandex-verification' content='5c7b607ab2cbbd94' />
        <meta name="yandex-verification" content="f6b3429e26b462a1" />
        <meta name="google-site-verification" content="0vWTLOKDY3VPEIk6c0Zkr48m5Ouz-lRR4q9rVmj-o" />
    <? } ?>
    <link rel="canonical" href="//<?=SITE_SERVER_NAME?><?=$APPLICATION->GetCurDir()?>"/>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.4.js"></script>

    <?$APPLICATION->ShowHead();?>
    <!--[if lte IE 6]>
    <![endif]-->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inputmask.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modal.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-custom.js"></script>
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
        fbq('init', '2285696215061901');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2285696215061901&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body class="<?=(strlen(str_replace("/","",$APPLICATION->GetCurDir()))>0)?str_replace("/","",$APPLICATION->GetCurDir())."_b":"main"?>">
<div id="panel"><? $APPLICATION->ShowPanel();?></div>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCLHD5R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="header">
    <div id="topmenu" class="width1350">


        <div class="logo-name">
            <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"></a>
        </div>


        <div class="top-conts">


            <div class="tel-and-hours">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/phone.png"/>

                <div class="order-call">
                <span class="call_phone_4">
                    <a class="callibri_phone_k" href="tel:+74951222504">+7(495)122-25-04</a>
                </span>
                    <br>
                    <a class="call" data-uk-modal="{target:'#modal-form'}" href="#">Заказать обычный звонок</a>
                </div>
            </div>


            <div class="hours">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/clock.png"/>
                <div>
                    <b>Часы работы:</b><br>
                    <span>Ежедневно с 9:00 до 22:00</span>
                </div>
            </div>


            <div class="addr">
                <img src="<?=SITE_TEMPLATE_PATH?>/images/marker.png"/>
                <div>
                    <a class="conts" href="/contacts/">Москва, ул. Киевская 24</a><br>5 минут от <span>м.</span> Студенческая
                </div>
            </div>


        </div>





    </div>
</div>

<div id="header-wrap">
    <div>
        <div id="headerTop">

            <?$APPLICATION->IncludeComponent("redesign:menu", "another_desktop", Array(
                "ROOT_MENU_TYPE" => "top_ak",	// Тип меню для первого уровня
                "MAX_LEVEL" => "3",	// Уровень вложенности меню
                "CHILD_MENU_TYPE" => "top_ak",	// Тип меню для остальных уровней
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                "CLASS" => "width1350",
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
            ),
                false,
                array(
                    "ACTIVE_COMPONENT" => "Y"
                )
            );?>

            <div id="menu-switch">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

        </div>

        <div id="top-menu">
            <div id="top-menu-inner">
                <? $APPLICATION->IncludeComponent("redesign:menu", "mobile", array(
                    "ROOT_MENU_TYPE" => "top_ak",
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
        </div>

        <div id="contact-menu">
            <div id="contact-menu-inner" itemtype="https://schema.org/LocalBusiness">
                <ul>
                    <li><span>Контактный телефон</span><br>
                        <a class="callibri_phone_k" href="tel:+74951222504">+7(495)122-25-04</a></li>
                    <li><span>Адрес</span><br>
                        <a>м. Студенческая, ул. Киевская 24</a></li>
                    <li><span>Время работы</span><br>
                        <span itemtype="https://schema.org/OpeningHoursSpecification" itemscope="" itemprop="openingHoursSpecification">
                    <a><span itemtype="https://schema.org/DayOfWeek" itemscope="" itemprop="dayOfWeek"><span itemprop="name">с 9:00 до 22:00</span></span></a></span></li>
                    <li><a data-uk-modal="{target:'#modal-form'}">Бесплатная консультация</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?if($APPLICATION->GetCurPage() == "/" OR $APPLICATION->GetCurPage() == "/new/"){?>
    <div id="under-menu" class="width1350">
        <table class="h1-and-image"><tr><td>
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/5let.png" alt="5 лет"/>
                </td><td>
                    <div class="heading">
                        <h1>Центр пародонтологии<br>
                            и имплантации</h1>
                        <p>Наша клиника специализируется на современных методах имплантации челюсти при полном отсутствии зубов. Стоматологическая ассоциация России (СтАР) присвоила нам престижный статус "Инновационного центра".</p>
                        <p class="but">
                            <a href="#" data-uk-modal="{target:'#modal-form'}" class="colored"><span>Бесплатная консультация</span> <img class="r-arr" src="<?=SITE_TEMPLATE_PATH?>/images/arrow-right.png"/></a>
                        </p>
                    </div>
                </td><td></td>
            </tr>
        </table>
    </div>
    <?}?>
</div>