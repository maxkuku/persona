<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div><!--#main-->


    <div id="footer-map">
    	<div class="wrap">
            <div class="foot-menu">
                <?$APPLICATION->IncludeComponent("dlin:menu", "another_desktop", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
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
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.webp" alt="Dr.Dlin" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.jpg'"/>
                    <!--img src="<?=SITE_TEMPLATE_PATH?>/images/dlin-bottom.jpg" alt="Dr.Dlin"/></div-->
                </div>

                <div>
                    <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
						<meta itemprop="streetAddress" content="г. Москва, ул. Гарибальди 36">
						<meta itemprop="addressCountry" content="Россия">
				    </span>
                    <img class="foot-float" src="<?=SITE_TEMPLATE_PATH?>/images/marker-bottom.webp" alt="Address Dr.Dlin" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/marker-bottom.jpg'"/>
                    <!--img src="<?=SITE_TEMPLATE_PATH?>/images/marker-bottom.jpg" alt="Address Dr.Dlin"/--><span class="metro-bot">м.</span> Новые Черёмушки<br>г. Москва, ул. Гарибальди 36
                </div>

                <div>
                    <meta itemprop="paymentAccepted" content="Cash, credit card"/>
                    <img class="foot-float" src="<?=SITE_TEMPLATE_PATH?>/images/phone-bottom.webp" alt="Phone Dr.Dlin" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/phone-bottom.jpg'"/>
                    <!--img src="<?=SITE_TEMPLATE_PATH?>/images/phone-bottom.jpg" alt="Phone Dr.Dlin"/--><b><a href="tel:+74951016035">+7 495 101‑60-35</a></b>
                    <div itemscope="" ><span itemtype="http://schema.org/OpeningHoursSpecification" itemprop="openingHoursSpecification"><span itemtype="http://schema.org/DayOfWeek" itemscope="" itemprop="dayOfWeek" content="Mon-Sat 09:00-21:00"><span>пн-сб с 9:00 до 21:00</span></span></span></div>
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
                    2018 &copy; Центр мануальной терапии
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
        /*if($('#banner').length){
            $('#banner').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1
            });
        }*/
    });

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


<!-- calltouch code -->
<script src="https://mod.calltouch.ru/init.js?id=fnhyv0va"></script>

<!-- calltouch requests send -->
<script type="text/javascript">
jQuery(document).on('submit', 'form#feedback', function() {
var form = jQuery(this);
var phone = form.find('input[name="TEL"]').val();
var fio = form.find('input[name="AUTHOR"]').val();
var sub = 'Заявка';

var ct_node_id = '8';
var ct_site_id = '25979';
var ct_data = {
fio: fio,
phoneNumber: phone,
subject: sub,
sessionId: window.call_value
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
<!-- calltouch code -->

</body>
</html>