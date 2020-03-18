<? if ($curPage == SITE_DIR . "index.php"): ?>
<div class="smt-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <? /* <h1>=$APPLICATION->ShowTitle(false)</h1>*/ ?>
                <? $APPLICATION->IncludeFile(
                    SITE_DIR . "smt_include/content_main.php",
                    Array(),
                    Array("MODE" => "html")
                ); ?>
                <? endif ?>
                <div class="clearfix"></div>
                <? /*if($APPLICATION->GetProperty("smt_show_question")):?>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."smt_include/question.php",
                            Array(),
                            Array("MODE"=>"html", "SHOW_BORDER" => false)
                        );?>
<?endif*/ ?>
            </div>
            <? if ($APPLICATION->GetProperty("smt_side_right")): ?>
                <div class="smt-content__sidebar col-lg-3 col-md-3 col-sm-4">
                    <div class="smt-widget smt-widget_sidebar">
                        <div class="smt-widget__content">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "smt_list",
                                array(
                                    "ROOT_MENU_TYPE" => "left",
                                    "MAX_LEVEL" => "1",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "0",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "COMPONENT_TEMPLATE" => "smt_list",
                                    "DELAY" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                    <? if (!$APPLICATION->GetProperty("smt_not_show_form")): ?>
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "smt_include/sidebar_form_order.php",
                            Array(),
                            Array("MODE" => "html", "SHOW_BORDER" => false)
                        ); ?>
                    <? endif ?>
                </div>
            <? endif ?>
        </div>
    </div>
</div>
<footer class="smt-footer">
    <div class="smt-footer__content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <p class="smt-footer__header style-h2"><? $APPLICATION->IncludeFile(
                            SITE_DIR . "smt_include/footer_company_header.php",
                            Array(),
                            Array("MODE" => "text")
                        ); ?></p>
                    <div class="col-md-6 col-sm-6">
                        <? $APPLICATION->IncludeComponent("bitrix:menu", "smt_list_arrow_footer", Array(
                                "ROOT_MENU_TYPE" => "smt_footer",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "",
                                "USE_EXT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => Array()
                            )
                        ); ?>
                    </div>
                    <div class="col-md-6 col-sm-6 sec2">
                        <? $APPLICATION->IncludeComponent("bitrix:menu", "smt_list_arrow_footer", Array(
                                "ROOT_MENU_TYPE" => "smt_footer_2",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "",
                                "USE_EXT" => "N",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => Array()
                            )
                        ); ?>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="col-md-6 col-sm-6">
                        <p class="smt-footer__header style-h2"><? $APPLICATION->IncludeFile(
                                SITE_DIR . "smt_include/address_header.php",
                                Array(),
                                Array("MODE" => "text")
                            ); ?></p>
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "smt_include/address.php",
                            Array(),
                            Array("MODE" => "html")
                        ); ?>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="parking">
                            <i class="fa fa-car"></i><span>Для вашего удобства на территории
                            <span class="after_fa-car"></span>комплекса имеется гостевой подземный <span
                                        class="after_fa-car"></span>паркинг. Стоимость 100 рублей за первые
                        <span class="after_fa-car"></span>2 часа.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smt-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "smt_include/footer.php",
                            Array(),
                            Array("MODE" => "html")
                        ); ?>
                    </div>
                </div>
            </div>
            <div id="bx-composite-banner"></div>
        </div>
    </div>

</footer>
</div>




<div class="smt-popup mfp-hide" id="smt-popup-order">
    <section class="smt-widget smt-widget_no-margin">
        <header>
            <p class="smt-widget__header smt-widget__header_normal style-h2"><? $APPLICATION->IncludeFile(
                    SITE_DIR . "smt_include/form_order_header.php",
                    Array(),
                    Array("MODE" => "text")
                ); ?></p>
        </header>
        <div class="smt-widget__content">
            <? $APPLICATION->IncludeFile(
                SITE_DIR . "smt_include/form_order.php",
                Array(),
                Array("MODE" => "html", "SHOW_BORDER" => false)
            ); ?>
        </div>
    </section>
</div>
<div class="smt-popup mfp-hide" id="smt-popup-phone">
    <section class="smt-widget smt-widget_no-margin">
        <header>
            <p class="smt-widget__header smt-widget__header_normal style-h2"><? $APPLICATION->IncludeFile(
                    SITE_DIR . "smt_include/form_callback_header.php",
                    Array(),
                    Array("MODE" => "text")
                ); ?></p>
        </header>
        <div class="smt-widget__content">
            <? $APPLICATION->IncludeFile(
                SITE_DIR . "smt_include/form_callback.php",
                Array(),
                Array("MODE" => "html", "SHOW_BORDER" => false)
            ); ?>
        </div>
    </section>
</div>
<div class="smt-popup mfp-hide" id="smt-popup-question">
    <section class="smt-widget smt-widget_no-margin">
        <header>
            <p class="smt-widget__header smt-widget__header_normal style-h2"><? $APPLICATION->IncludeFile(
                    SITE_DIR . "smt_include/form_question_header.php",
                    Array(),
                    Array("MODE" => "text")
                ); ?></p>
        </header>
        <div class="smt-widget__content">
            <? $APPLICATION->IncludeFile(
                SITE_DIR . "smt_include/form_question.php",
                Array(),
                Array("MODE" => "html", "SHOW_BORDER" => false)
            ); ?>
        </div>
    </section>
</div>




<!--
<div class="mango-callback"
     data-settings='{"type":"", "id": "MTAwMDk5MTY=","autoDial" : "0", "lang" : "ru-ru", "host":"widgets.mango-office.ru/", "errorMessage": "В данный момент наблюдаются технические проблемы и совершение звонка невозможно"}'>
</div>
<script>!function (t) {
        function e() {
            i = document.querySelectorAll(".button-widget-open");
            for (var e = 0; e < i.length; e++) "true" != i[e].getAttribute("init") && (options = JSON.parse(i[e].closest('.' + t).getAttribute("data-settings")), i[e].setAttribute("onclick", "alert('" + options.errorMessage + "(0000)'); return false;"))
        }

        function o(t, e, o, n, i, r) {
            var s = document.createElement(t);
            for (var a in e) s.setAttribute(a, e[a]);
            s.readyState ? s.onreadystatechange = o : (s.onload = n, s.onerror = i), r(s)
        }

        function n() {
            for (var t = 0; t < i.length; t++) {
                var e = i[t];
                if ("true" != e.getAttribute("init")) {
                    options = JSON.parse(e.getAttribute("data-settings"));
                    var o = new MangoWidget({
                        host: window.location.protocol + '//' + options.host,
                        id: options.id,
                        elem: e,
                        message: options.errorMessage
                    });
                    o.initWidget(), e.setAttribute("init", "true"), i[t].setAttribute("onclick", "")
                }
            }
        }

        host = window.location.protocol + "//widgets.mango-office.ru/";
        var i = document.getElementsByClassName(t);
        o("link", {rel: "stylesheet", type: "text/css", href: host + "css/widget-button.css"}, function () {
        }, function () {
        }, e, function (t) {
            document.documentElement.insertBefore(t, document.documentElement.firstChild)
        }), o("script", {type: "text/javascript", src: host + "widgets/mango-callback.js"}, function () {
            ("complete" == this.readyState || "loaded" == this.readyState) && n()
        }, n, e, function (t) {
            document.documentElement.appendChild(t)
        })
    }("mango-callback");
</script>

-->


<!--script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script-->
<script src="/bxslider/dist/jquery.bxslider.min.js"></script>
<script>
   jQuery(document).ready(function () {
       jQuery('.bxslider').bxSlider({
                mode: 'fade',
                slideWidth: 600
            });
       jQuery('.bxslider .bxslider2').bxSlider({
                minSlides: 2,
                maxSlides: 2,
                slideWidth: 390,
                slideMargin: 10,
                moveSlides: 1,
                auto: true
            });
    },1000);
</script>
<script type="text/javascript">
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function () {
            $('body,html').animate({scrollTop: 0}, 800);
        });
    });
</script>

<script>
    window.onload = function () {
        $(".smt-content__main img").click(function () {
            $("body").prepend('<div class="mfp-bg mfp-ready"></div>' +
                '<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" tabindex="-1" style="overflow-x: hidden; overflow-y: auto;"><div class="mfp-container mfp-s-ready mfp-inline-holder"><div class="mfp-content"><img style="display:block;margin:auto;margin-top:5%" src="' + $(this).prop('src') + '"/></div></div></div>');
            $(".mfp-bg").css("cursor", "pointer");
            $(".mfp-wrap").css("cursor", "pointer");
            $(".mfp-wrap").click(function () {
                $(".mfp-bg").remove();
                $(".mfp-wrap").remove();
            });
        })
        $(".smt-content__main img").each(function () {
            $(this).css("cursor", "pointer")
        });
    }
</script>
<script>
    if ($(".youtube").length) {
        "use strict";
        $(function () {
            $(".youtube").each(function () {
                $(this).css('background-image', 'url(//i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');
                if ($(this).children('div').hasClass('play') === false) {
                    $(this).append($('<div/>', {'class': 'play'}));
                }
                $(document).delegate('#' + this.id, 'click', function () {
                    var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                    if ($(this).data('params')) iframe_url += '&' + $(this).data('params');
                    var iframe = $('<iframe/>', {
                        'frameborder': '0',
                        'src': iframe_url,
                        'width': $(this).width(),
                        'height': $(this).height()
                    });
                    $(this).prepend(iframe);
                });
            });
            $('.play').click(function () {
                $(this).hide();
            });
        });
        /*var but = $('.video-buttons a.clickable');
        but.click(function(){
            var ind = $(this).index();
            var divid = $('.youtube').eq(ind).attr('id');
            $('.video-buttons a').removeClass('btn-primary');
            but.eq(ind).addClass('btn-primary');
            $('.youtube').removeClass('active');
            $('.youtube').eq(ind).addClass('active');
            $('iframe').remove();
        });

        $('.btn-show').click(function(){
            $('a.hiiden').toggle('slow');
            if($('.btn-show').text().indexOf('Показать')>-1){
                $('.btn-show').text('Скрыть');
            }else{
                $('.btn-show').text('Показать все видеоролики');
            }
        });*/
    }


    $(document).ready(function () {
        $("[name=iblock_add]").submit(function () {
            yaCounter48115721.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
    });


</script>
<script>
    function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
            }
        }
    }

    window.onload = init;
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter48115721 = new Ya.Metrika({
                    id: 48115721,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/48115721" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<!--script type='text/javascript'>
(function(){ var widget_id = '2L0v9KMjke';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script-->
<!-- {/literal} END JIVOSITE CODE -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter46318818 = new Ya.Metrika({
                    id: 46318818,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46318818" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<script>
jQuery(document).on("click", 'form.smt-order-form-ajax input[type="submit"]', function() { 
var m = jQuery(this).closest('form'); 
var fio = m.find('input[name="PROPERTY[NAME][0]"]').val(); 
var phone = m.find('input[name="PROPERTY[95][0]"]').val(); 
var capcha = m.find('[name="g-recaptcha-response"]').val(); 
var ct_site_id = '28792';
var sub = 'Заказать звонок';
var ct_data = {             
fio: fio,
phoneNumber: phone,
subject: sub,
sessionId: window.call_value 
};
if (!!phone && !!fio && !!capcha){
jQuery.ajax({  
  url: 'https://api-node9.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
  dataType: 'json', type: 'POST', data: ct_data, async: false
}); 
}
});
</script> 

<img src="/bitrix/images/img-11.17/up.png" alt="" id="toTop">
</body>
</html>