<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div><!--#main-->
<? if($APPLICATION->GetCurPage()!="/"):?>
<? $APPLICATION->IncludeFile( SITE_TEMPLATE_PATH . "/bottom_button.php", Array(), Array( "MODE" => "html" ) ); ?>
<?endif?>

    <div id="footer-map">
    	<div class="wrap">
            <div class="foot-menu">
                <?$APPLICATION->IncludeComponent("tri_tochki:menu", "another_foot_desktop", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
                    "BOTTOM" => "Y",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_CACHE_GET_VARS" => ""
                ),
                    false,
                    array(
                        "ACTIVE_COMPONENT" => "Y"
                    )
                );?>
            </div>
            <div class="conts" itemscope itemtype="http://schema.org/Dentist">
            	<div class="cont-image">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.webp" alt="Dr.Dlin" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.png'"/>
                    <!--img src="<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.jpg" alt="Dr.Dlin"/></div-->
                </div>

                <div>
                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        Клиника на <span style="color:yellow">Новых Черемушках</span>
						<meta itemprop="streetAddress" content="г. Москва, ул. Гарибальди 36">
						<meta itemprop="addressCountry" content="Россия">
				    </span>
                    <a href="/contacts/"><p>Москва, улица Гарибальди 36</p></a>
                    <!-- a href="tel:+74951016035">+7 495 101‑60-35</a -->
                    <div itemscope="" ><span itemtype="http://schema.org/OpeningHoursSpecification" itemprop="openingHoursSpecification"><span itemtype="http://schema.org/DayOfWeek" itemscope="" itemprop="dayOfWeek" content="Mon-Sat 09:00-21:00"><span>пн-сб с 9:00 до 21:00</span>
						<br><span>ООО Центр мануальной медицины</span></span></span></div>
                </div>

                <div>
                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        Клиника на <span style="color:yellow">Проспекте Мира</span>
						<meta itemprop="streetAddress" content="г. Москва, ул. Гиляровского 51">
						<meta itemprop="addressCountry" content="Россия">
				    </span>
                    <a href="/contacts/mir/"><p>Москва, ул. Гиляровского 51</p></a>
                    <meta itemprop="paymentAccepted" content="Cash, credit card"/>
                    <!-- a href="tel:+74951016035">+7 495 101‑60-35</a -->
                    <div itemscope="" ><span itemtype="http://schema.org/OpeningHoursSpecification" itemprop="openingHoursSpecification"><span itemtype="http://schema.org/DayOfWeek" itemscope="" itemprop="dayOfWeek" content="Mon-Sat 09:00-21:00"><span>пн-сб с 9:00 до 21:00</span>
						<br><span>ООО Центр восстановительной медицины</span></span></span></div>
                </div>

                <div>
                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                        Клиника в <span style="color:yellow">Пушкино</span>
						<meta itemprop="streetAddress" content="Пушкино, Авиационная улица, 36">
						<meta itemprop="addressCountry" content="Россия">
				    </span>
                    <a href="/contacts/pushkino/"><p>Пушкино, Авиационная улица, 36</p></a>
                    <!-- a href="tel:+74951011241">+7 495 101‑12-41</a -->
                    <div itemscope=""><span itemtype="http://schema.org/OpeningHoursSpecification" itemprop="openingHoursSpecification"><span itemtype="http://schema.org/DayOfWeek" itemscope="" itemprop="dayOfWeek" content="Mon-Sat 09:00-21:00"><span>пн-сб с 9:00 до 21:00</span>
						<br><span>ООО Органик фуд</span></span></span></div>
                </div>

            </div>
        </div>
    </div>
    <?  $APPLICATION->IncludeComponent("dlin:sendfeedback", ".default", false);?>
        <div id="modal-search" class="uk-modal" aria-hidden="true">
        <div class="uk-modal-dialog">
            <a class="uk-modal-close uk-close"></a>
            <div class="uk-modal-header">Поиск</div>
            <div id="form-content">
                <form id="search" action="/search/" class="uk-form uk-form-stacked" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <div class="uk-form-row">
                            <legend>Введите слово для поиска</legend>
                            <input type="text" name="q" class="uk-form-width-medium" required="">
                        </div>
                        <div class="uk-form-row">
                            <div class="uk-form-row">
                                <input type="submit" name="submit" class="uk-form-width-medium uk-button-primary uk-button" value="Отправить"></div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
        <div id="foot">
			<div class="wrap">
                <div id="copy-bottom">
                    2018-<?=date('Y')?> &copy; Центр мануальной терапии
                </div>
                <div id="bottom-buttons">
                    <a href="/policy/">Политика конфиденциальности</a>
                </div>
			</div>
		</div>
    </div>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/footerfuncs.js"></script>        
<script>
	$(document).ready(function(){
		var selector = $('input[type="tel"]');
		var im = new Inputmask("+7 (999) 999-99-99");
		im.mask(selector);
	});
</script>
<script>
    $(document).ready(function(){
        $("#feedback").submit(function(){
            yaCounter47424421.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
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

        function owlSliderAnimate(event) {
            var current = event.item.index;
            $(event.target).find(".owl-item").eq(current).find('.smt-slide__content').animateCss('zoomIn');
        }

    });
</script>
<script>
    function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i=0; i<imgDefer.length; i++) {
            if(imgDefer[i].getAttribute('data-src')) {
                imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
            } } }
    window.onload = init;
</script>


<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox-media.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".fancybox").fancybox({
            type: 'iframe',
            helpers: {
                media: true
            },
            youtube: {
                autoplay: 1, // enable autoplay
                start: 0 // set start time in seconds (embed)
            }
        }); // fancybox
    }); // ready
</script>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css?v=3"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/lightbox.min.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/responsiveslides.css"/>

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slick.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/slick-theme.css"/>



<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)};s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/init.js?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","fnhyv0va");
</script>
<script type="text/javascript" >
jQuery(document).on('click', 'button[name="send_header_phone"]', function() {
    var m = jQuery(this).closest('#res_form');
        var fio = m.find('input[name="AUTHOR"],input[placeholder*="имя"]').val();
        var phone = m.find('input[name="header_phone"],input[type*="tel"]').val();
        var mail = m.find('input[name*="email"]').val();
        var ct_site_id = '25979';
        var ct_node_id = '8';
        var sub = 'Заявка ' + document.location.hostname;
        var ct_data = { 
        fio: fio,          
        phoneNumber: phone,
        email: mail,
        subject: sub,
        sessionId: window.call_value
        };
        if (!!phone){
        jQuery.ajax({
          url: 'https://api-node' + ct_node_id + '.calltouch.ru/calls-service/RestAPI/requests/' + ct_site_id + '/register/',
          dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
})
</script>
<script type="text/javascript" >
jQuery(document).on('click', 'input[type="submit"]', function() {
		var m = jQuery('#feedback');
        var fio = m.find('input[name="AUTHOR"]').val();
        var phone = m.find('input[name="TEL"]').val();
        var ct_site_id = '25979';
        var ct_node_id = '8';
        var sub = 'Заявка ' + document.location.hostname;
        var ct_data = { 
        fio: fio,          
        phoneNumber: phone,
        subject: sub,
        sessionId: window.call_value
        };
        if (!!phone){
        jQuery.ajax({
          url: 'https://api-node' + ct_node_id + '.calltouch.ru/calls-service/RestAPI/requests/' + ct_site_id + '/register/',
          dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
})
</script>
<!--calltouch -->
</body>
</html>