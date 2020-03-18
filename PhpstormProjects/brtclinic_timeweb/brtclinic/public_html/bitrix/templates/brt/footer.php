<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?/*if($APPLICATION->GetCurPage() != '/'):?>
</div><!--wrap-->
	<?endif*/?>
<div id="footer">
    <div class="wrap">
    <div id="map1" class="active map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad4403c82a2a30c00ebc16080dd1b12e0dbb4caf4fa767614ae2a847fde7717f2&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe></div>
    <div id="map2" class="map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A151b67774f5cbd52d2d30b04f1a42a99e14aace770dd00670de4badc28da5b76&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe></div>
    <div id="addr">
        <div class="two-buttons-in-footer">
            <button name="tush" class="btn btn-fourth active" data-target="map1">Центр на Тушинской</button>
            <button name="reab" class="btn btn-fourth" data-target="map2">Центр на Киевском шоссе</button>
        </div>
        <div class="time-work">Время работы: ежедневно 9:00 - 21:00</div>
        <div class="phones-footer">



            <div class="phone"><a href="tel:88005007702">+8 (800) 500-77-02</a><span>Бесплатный звонок по России</span></div>
            <div class="phone"><a href="tel:+74993950021">+7 (499) 395‑00-21</a><span>Телефон горячей линии</span></div>


        </div>
        <!--div class="emails">
            <a class="foot-inlined" href="mailto:info@brtclinic.ru">info@brtclinic.ru</a>
            <div id="send_text_bot" class="foot-inlined"><i class="fa fa-envelope-o"></i><span>Отправить эпикриз</span></div>
        </div-->
        <div class="addr-street active">Москва, м. Тушинская, ул. Циолковского, д. 7</div>
        <div class="addr-street">Москва, поселение Киевский, деревня Шеломово, ул. Январская, д. 1</div>

        <div class="hrefs">
            <a href="/policy/">Политика конфиденциальности</a><br>
			<a href="/about/" rel="lightbox">Лицензия № ЛО-77-01 005964</a>
			<p>ООО «НТЦ «Дедал-88»</p>
            <div>
                <a href="https://www.instagram.com/brtclinica/" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/o-instagram.png" alt="Инстаграм Brtclinic"/></a>
                <a href="https://www.ok.ru/brtclinica" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/o-odkl.png" alt="Одноклссники Brtclinic"/></a>
                <a href="https://www.youtube.com/user/clinicaBRT/featured" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/o-youtube-icon.png" alt="Youtube канал Brtclinic"/></a>
            </div>
        </div>

        <!--div class="metro">
            <svg class="icon-metro red st0">
                <use xlink:href="#icon-metro" fill="#ffffff"></use>
            </svg>
            <span>Тушинская</span>
        </div-->
        <!--div class="soc">
            <a class="btn btn-primary" data-toggle="modal" data-target="#modal-callback">Заказать звонок</a>

            <nobr>
            <a class="icon vk" href="https://vk.com" alt="VK profile"></a>
            <a class="icon ok" href="https://odkl.com" alt="Odkl profile"></a>
            <a class="icon y" href="https://youtube.com" alt="Youtube profile"></a>
            <a class="icon s" href="skype:brtclinic" alt="Skype contact"></a>
            </nobr>
        </div-->
    </div>
    </div><!--footer wrap-->
</div>
<div class="clearfix"></div>
<div id="last">
    <div class="wrap">
        <!--div id="logo-wrap-bottom">
            <div id="logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/log-sent.png" align="absmiddle"></a></div>
            <div id="near_logo_name">
                <div id="center">Центр реабилитации</div>
                <div id="name">Николая Блюма</div>
            </div>
        </div-->

        <div id="logo-wrap">
            <div id="logo"><a href="/"><img src="/bitrix/templates/brt/images/log-brt.jpg" align="absmiddle" width="70%"></a></div>
            <div id="near_logo_name">
                <div id="center">Центр<br>нейрореабилитации</div>
                <!--div id="name">Николая Блюма</div-->
            </div>
        </div>

        <a href="https://webtomed.ru" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/webtomed.jpg" alt="WebToMed"/></a>
    </div>
</div>


<div id="modal-search" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <div class="modal-title">Поиск</div>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-12">
                    <form action="/search/" method="post" enctype="multipart/form-data" id="search_form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                                <input type="text" name="q" value="" id="input-name" class="form-control" placeholder="Поиск">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-sm-12 btn-col-3">
                    <a class="btn btn-block btn-danger" onclick="document.getElementById('search_form').submit()">Искать</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!--div id="modal-callback" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Бесплатная консультация</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="post" enctype="multipart/form-data" id="callback_form">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input type="text" name="form_text_20" value="" id="input-name" class="form-control" placeholder="Ваше имя">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                    <input type="text" name="form_text_21" value="" id="input-phone" class="form-control" placeholder="Ваш телефон">
                                </div>
                            </div>
                            <input type="hidden" name="callback_order" value="Y">
                            <input type="hidden" name="sessid" value="<?=substr(bitrix_sessid_get(),7)?>">
                            <button class="btn btn-danger btn-block" name="web_form_submit" type="button" onclick="callback_send()"><i class="fa fa-bolt fa-fw"></i>&nbsp;Заказать</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div-->
<div id="modal-call" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <div class="modal-title">
                    <span class="fa fa-shopping-basket fa-fw"></span>Заказать звонок</div>
            </div>
            <div class="mCustomScrollbar">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="" method="post" enctype="multipart/form-data" id="call_form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input type="text" name="form_text_20" value="" id="input-name" class="form-control" placeholder="Ваше имя">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                                        <input type="text" name="form_text_21" value="" id="input-phone" class="form-control" placeholder="Ваш телефон">
                                    </div>
                                </div>
                                <input type="hidden" name="callback_order" value="Y">
                                <input type="hidden" name="sessid" value="<?=substr(bitrix_sessid_get(),7)?>">
                                <button class="btn btn-danger btn-block" name="web_form_submit" type="button" onclick="callback_send()"><i class="fa fa-bolt fa-fw"></i>&nbsp;Заказать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-4 btn-col-3">
                        <a href="#" class="btn btn-block btn-danger">Отправить</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>

<div class="i-loader"></div>

<!--script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.4.1.min.js"></script-->
<!--script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.4.min.js"></script-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script async type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-3.6.custom.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/inputmask.6.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/uikit.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modal.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
<script async type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>



<!--link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css"/-->
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/bootstrap-4.1.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.min.css"/>
<!--link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/uikit.docs.min.css"/-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,900&amp;subset=cyrillic"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick-theme.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/lightbox.min.css"/>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile.css"/>


<?  $APPLICATION->IncludeComponent("brt:sendfeedback", ".default", false);?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#feedback").submit(function(){
            yaCounter51498530.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
    });

</script>

<svg style="display: none" version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-metro" x="0px" y="0px" viewBox="-299 393.7 11.3 7.3">
            <style type="text/css">
                .st0{fill:#ffffff; background: red}
            </style>
            <polygon class="st0" points="-291.1,393.7 -293.4,397.4 -295.6,393.7 -298.2,400 -299,400 -299,400.9 -295,400.9 -295,400
	-295.6,400 -295,398.4 -293.4,401 -291.7,398.4 -291.1,400 -291.7,400 -291.7,400.9 -287.7,400.9 -287.7,400 -288.5,400 "></polygon>
        </symbol>
    </defs>
</svg>
<script type="text/javascript">
    $(document).ready(function($) {
        var selector = $('#input_PERSONAL_PHONE, [type=tel], [name=TEL], [name=form_text_21]');
        var im = new Inputmask("+7(999)999-99-99");
        im.mask(selector);
    });
</script>
<script>
    $(document).ready(function(){
        if($('.flick').length){
            $('.flick').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1940,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: false
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            /*$('.slick').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });*/
        }
    });
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });

    $(document).ready(function() {

        var owlSlider = $("#banner");
        owlSlider.on('initialized.owl.carousel changed.owl.carousel', owlSliderAnimate);

        if ($("#banner").length) {
            if($('.banner-picture').length > 1) {
                owlSlider.owlCarousel({
                    'items': 1,
                    'nav': true,
                    'loop': true,
                    'navText': ['<i class="glyphicon glyphicon-menu-left"></i>', '<i class="glyphicon glyphicon-menu-right"></i>'],
                    'dots': false,
                    'autoplay': false,
                    'autoplayTimeout': 5000,
                    'smartSpeed': 450
                });
            }
        }

        function owlSliderAnimate(event) {
            var current = event.item.index;
            $(event.target).find(".owl-item").eq(current).find('.smt-slide__content').animateCss('zoomIn');
        }
    });
</script>
<script>
    /*function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i=0; i<imgDefer.length; i++) {
            if(imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
            } } }
    window.onload = init;*/
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(51498530, "init", {
        id:51498530,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51498530" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- calltouch code -->
<script type="text/javascript">
(function (w, d, nv, ls){
var lwait = function (w, on, trf, dly, ma, orf, osf) { var y = "yaCounter", pfx = "ct_await_", sfx = "_completed", yac = function () { for (var v in w) if (v.indexOf(y)==0&&w[v].getClientID&&w[v].getClientID()) return w[v]; return false; }; if (!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout, cmld = function () { if (!w[pfx + on + sfx]) { w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer); w[pfx + on] = null; } orf((on==y?yac():w[on])); } }; if (!(on==y?yac():w[on])|| !osf) { if (trf(on==y?yac():w[on])) { cmld(); } else { if (!w[pfx + on]) { w[pfx + on] = { timer: si(function () { if (trf(on==y?yac():w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } } else { if (trf(on==y?yac():w[on])) { cmld(); } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } } } else { orf(on==y?yac():w[on]); } };
var ct = function (w, d, e, c, n) { var a = 'all', b = 'tou', src = b + 'c' + 'h'; src = 'm' + 'o' + 'd.c' + a + src; var jsHost = "https://" + src, s = [{"sp":"2","sc":d.createElement(e)}]; var jsf = function (w, d, s, h, c, n) { lwait(w, 'yaCounter', function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.forEach(function(el) { el.sc.async = 1; el.sc.src = jsHost + "." + "r" + "u/d_client.js?param;specific_id"+el.sp+";" + (yaCounter && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":180615}") + ";"; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(el.sc, p); }); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }} ); }; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, s, jsHost, c, n); } ); }; p = d.getElementsByTagName(e)[0]; p.parentNode.insertBefore(jq, p); } else { jsf(w, d, s, jsHost, c, n); } };
var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
var cid = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
if (cid === null){ lwait(w, 'GoogleAnalyticsObject', function (obj) {return (obj ? true : false);}, 100, 10, function (gaObjectName) { if (gaObjectName == 'ga_ckpr') w.ct_ga = 'ga'; else w.ct_ga = gaObjectName; if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1) { new Promise(function (resolve) {var db, on = function () {resolve(true)}, off = function () {resolve(false)}, tryls = function tryls() {try {ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) {nv.cookieEnabled ? on() : off();}}; w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm) {if (pm) {gaid(w, d, w.ct_ga, ct, 2);} else {gaid(w, d, w.ct_ga, ct, 3);}})} else {gaid(w, d, w.ct_ga, ct, 4);}}, function (f) {w[o](function () {f(w[o]);})}); }else{ct(w, d, 'script', cid, 1);}})
(window, document, navigator, localStorage);
</script>
<!-- /calltouch code -->

<script type="text/javascript">
jQuery(document).on('submit', 'form#feedback', function() {
var form = jQuery(this);
var phone = form.find('input[name="TEL"]').val();
var fio = form.find('input[name="AUTHOR"]').val();
var sub = 'Заказ консультации';

var ct_node_id = '7';
var ct_site_id = '25323';
var ct_data = {
fio: fio,
phoneNumber: phone,
subject: sub,
sessionId: window.call_value_2
};

if ( !!phone && !!fio ){
jQuery.ajax({  
  url: 'https://api-node'+ct_node_id+'.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
  dataType: 'json',
  type: 'POST',
  data: ct_data,
  async: false
});  
}
});
</script>
<!-- /calltouch code -->

</body>
</html>