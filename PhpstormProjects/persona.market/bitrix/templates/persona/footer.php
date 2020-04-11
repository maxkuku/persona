<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if($APPLICATION->GetCurPage() != "/"):?>
</div>
</div>
</div>
<?endif?>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div id="space-for-footer"></div>
			
		</div>

<footer>
	<div class="container">
		<div class="footer-box">
			<div class="row">
				<? $APPLICATION->IncludeComponent("bitrix:menu", "bottom_horizontal_persona", Array(
	"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "Y",	// Тип кеширования
		"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>
				<div class="col-sm-6 col-md-3">
					<div class="footer_name_column"><i class="glyphicon glyphicon-user"></i><span>Контакты</span></div>
					<ul class="list-unstyled">
						<li><i class="fa fa-phone" aria-hidden="true"></i><? $APPLICATION->IncludeFile( SITE_DIR
							. "include/phone.php", Array(), Array("MODE"=>"html") );?></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a onclick="javascript:window.location
						.href ='mailto:<? $APPLICATION->IncludeFile( SITE_DIR . "include/email.php", Array(), Array( "MODE" => "html" ) ); ?>';event.preventDefault()" href="<? $APPLICATION->IncludeFile( SITE_DIR . "include/email.php", Array(), Array( "MODE" => "html" ) ); ?>"><? $APPLICATION->IncludeFile( SITE_DIR . "include/email.php", Array(), Array( "MODE" => "html" ) ); ?></a></li>
						<li><i class="fa fa-refresh" aria-hidden="true"></i><a href="/contact-us/">Связаться с нами</a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-5 powered">Косметика для волос и тела «Персона» © 2018<?=(date("Y") != 2018)?"–".date("Y"):""?></div>
				<!--div class="col-sm-12 col-md-3"><img src="<?=SITE_TEMPLATE_PATH?>/images/security.png" alt="" class="img-responsive"></div-->

			</div>
		</div>
		<span id="scroll-top-button" style="display: block;"><i class="fa fa-arrow-circle-up"></i></span>
	</div>

</footer>

<section id="cookiePrompt" class="cookiePrompt footer-fixed bg-neutral-60 text-light py-2 peeking" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-tw-slate">
                Мы используем куки чтобы добавить вам удобства, когда вы на сайте. Если вы согласны, нажмите Принять. Подробнее читайте <a href="/policy/"><u>Политика</u></a>.
            </div>
            <div class="col-md-4">
                <a href="javascript:;" id="cookieConsentButton" class="btn btn-green">
                    Принять
                </a>
                <a href="javascript:;" id="cookieDeclineButton" class="btn btn-neutral-80">
                    Отказаться
                </a>
            </div>
        </div>
    </div>
</section>

<div style="display:none">
<span itemscope="" itemtype="http://schema.org/Store">
<meta itemprop="name" content=" «Персона» маркет — магазин косметики для волос и тела">
<link itemprop="url" href="<?= SITE_URL?>">
<link itemprop="image" href="<?= SITE_TEMPLATE_PATH?>/lang/ru/logo.gif">
<meta itemprop="email" content="info@persona.market">
<meta itemprop="priceRange" content="RUB">
<meta itemprop="hasMap" content="https://www.google.ru/maps/place/Большая+полянка+ул.,+30с1,+Москва,+101000/@55
.714151,37.695627z/">
<meta itemprop="telephone" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/phone.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<link itemprop="sameAs" href="https://vk.com/">
<link itemprop="sameAs" href="https://plus.google.com/">
<link itemprop="sameAs" href="https://twitter.com/">
<link itemprop="sameAs" href="https://www.facebook.com/">
<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
<meta itemprop="addressLocality" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/city-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="postalCode" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/postal-code.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="streetAddress" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/street-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
</span>
<span itemprop="location" itemscope="" itemtype="http://schema.org/Place">
<meta itemprop="name" content=" «Персона» маркет — магазин косметики для волос и тела">
<meta itemprop="telephone" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/phone.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
<meta itemprop="addressLocality" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/city-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="postalCode" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/postal-code.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="streetAddress" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/street-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
</span>
<span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
<meta itemprop="latitude" content="55.714151">
<meta itemprop="longitude" content="37.695627">
<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
<meta itemprop="streetAddress" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/street-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="addressLocality" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/city-addr.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
<meta itemprop="postalCode" content="<? $APPLICATION->IncludeFile( SITE_DIR . "include/postal-code.php",
Array(),	Array( "MODE" => "html" ) ); ?>">
</span>
</span>
</span>
<span itemprop="potentialAction" itemscope="" itemtype="http://schema.org/SearchAction">
<meta itemprop="target" content="<?= PROTOCOL?><?= $_SERVER['HTTP_HOST']?>/index.php?route=product/search&amp;
search={search_term_string}">
<input type="hidden" itemprop="query-input" name="search_term_string">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Monday">
<meta itemprop="opens" content="09:00">
<meta itemprop="closes" content="17:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Tuesday">
<meta itemprop="opens" content="09:00">
<meta itemprop="closes" content="17:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Wednesday">
<meta itemprop="opens" content="09:00">
<meta itemprop="closes" content="17:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Thursday">
<meta itemprop="opens" content="09:00">
<meta itemprop="closes" content="17:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Friday">
<meta itemprop="opens" content="09:00">
<meta itemprop="closes" content="17:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Saturday">
<meta itemprop="opens" content="10:00">
<meta itemprop="closes" content="14:00">
</span>
<span itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">
<link itemprop="dayOfWeek" href="http://schema.org/Sunday">
<meta itemprop="opens" content="10:00">
<meta itemprop="closes" content="14:00">
</span>
</span>
<span class="vcard">
<span class="fn"><span class="value-title" title=" «Первона» маркет — магазин косметики для волос и тела"></span></span>
<span class="org"><span class="value-title" title=" «Персона» маркет — магазин косметики для волос и
тела"></span></span>
<span class="url"><span class="value-title" title="<?= SITE_URL?>"></span></span>
<span class="adr">
<span class="locality"><span class="value-title" title="<? $APPLICATION->IncludeFile( SITE_DIR . "include/city-addr.php", Array(), Array( "MODE" => "html" ) ); ?>"></span></span>
<span class="street-address"><span class="value-title" title="<? $APPLICATION->IncludeFile( SITE_DIR .
	"include/street-addr.php
.php", Array(), Array( "MODE" => "html" ) ); ?>"></span></span>
<span class="postal-code"><span class="value-title" title="115088"></span></span>
</span>
<span class="geo">
<span class="latitude"><span class="value-title" title="55.714151"></span></span>
<span class="longitude"><span class="value-title" title="37.695627"></span></span>
</span>
<span class="tel"><span class="value-title" title="<? $APPLICATION->IncludeFile( SITE_DIR . "include/phone.php",
	Array(),	Array( "MODE" => "html" ) ); ?>"></span></span>
<span class="photo"><span class="value-title" title="<?= SITE_TEMPLATE_PATH?>/lang/ru/logo.gif"></span></span>
<span class="priceRange"><span class="value-title" title="RUB"></span></span>
</span>
</div>

<div id="cmngr_message_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body mCustomScrollbar">
                <span class="prmn-cmngr-message">Бесплатная доставка при покупке от 3000 рублей.</span>
                <span class="prmn-cmngr-message"></span>
                <span class="prmn-cmngr-message"></span>
            </div>
        </div>
    </div>
</div>

<div id="modal-cart" class="modal" style="">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<div class="modal-title">
					<span class="fa fa-shopping-basket fa-fw"></span>&nbsp;&nbsp;Корзина покупок	        </div>
			</div>
            <div class="mCustomScrollbar">
                <div class="modal-body">
                    <div class="text-center" style="padding: 30px 0;color: #eee;">В корзине пусто!</div>
                    <!--div class="cartMask white"><div><div><i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i></div></div></div-->
                </div>
            </div>
            <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-4 btn-col-1">
                            <a class="btn btn-default btn-block" data-dismiss="modal">Продолжить покупки</a>
                        </div>
                        <div class="col-sm-4 btn-col-2">
                            <a href="/basket/list/" class="btn btn-default btn-block">Открыть корзину</a>
                        </div>
                        <div class="col-sm-4 btn-col-3">
                            <a href="/basket/" class="btn btn-block btn-danger">Оформить заказ</a>
                        </div>
                    </div>
                </div>

		</div>
	</div>
</div>


<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<?if(strpos(htmlspecialcharsex($_SERVER['REQUEST_URI']), 'catalog') == false):?>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?endif?>
<script src="//code.jquery.com/ui/1.12.0/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/common.js" type="text/javascript"></script>
<!--script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.dotdotdot.min.js" type="text/javascript"></script-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/inputmask.6.js" type="text/javascript"></script>
<?if(strpos(htmlspecialcharsex($_SERVER['REQUEST_URI']), 'catalog') == false):?>
    <!--script src="<?=SITE_TEMPLATE_PATH?>/js/preorder.js" type="text/javascript"></script-->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js" type="text/javascript"></script>
<?endif?>
<script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/moment.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<?if(strpos(htmlspecialcharsex($_SERVER['REQUEST_URI']), 'catalog') !== false):?>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.rating.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/blog.comment.js"></script>
<?endif?>
<?if(strpos(htmlspecialcharsex($_SERVER['REQUEST_URI']), 'catalog') !== false):?>
    <!--script src="/catalog/preorder.js" type="text/javascript"></script-->

    <script src="/catalog/jquery.sticky.min.js" type="text/javascript"></script>
<?endif?>
<? global $class;
if($class == "basket"):?>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/simple.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/simplecheckout.js" type="text/javascript"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/autocompl.js" type="text/javascript"></script>
    <!--script src="<?=SITE_TEMPLATE_PATH?>/js/city-manag.js" type="text/javascript"></script-->
<?endif;?>
<!--script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js" type="text/javascript"></script-->
<!--script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.progroman.autocomplete.js" type="text/javascript"></script-->
<!--script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.progroman.city-manager.js" type="text/javascript"></script-->

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;ns=cdekymap" type="text/javascript"></script>
<!--script src="<?=SITE_TEMPLATE_PATH?>/js/sdek.js" type="text/javascript"></script-->
<!--script src="<?= SITE_TEMPLATE_PATH?>/js/autosearch.js"></script-->
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH?>/js/jquery.autopager.js"></script>
<script type="text/javascript">function get_cookie(cookie_name){var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );if(results){return (unescape(results[2]));}else{return null;}}</script>
<!--script type="text/javascript" src="<?= SITE_TEMPLATE_PATH?>/js/bal_language.js"></script-->
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH?>/js/bal_loader.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/customscrollbar.js"></script>
<script defer="" src="/catalog/readmore.min.js" type="text/javascript"></script>
<script src="<?= SITE_TEMPLATE_PATH?>/js/jquery.cookie.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($){



        var selector = $('#input_PERSONAL_PHONE, [type=tel], [name=form_text_20], #input-phone');
        var im = new Inputmask("+7(999)999-99-99");
        im.mask(selector);



        /*var referermarker = $.cookie("referer_marker");
        if(referermarker != true){
            var url = "index.php?route=extension/module/order_source/ajaxOrderSource";
            if(document.referrer){
                var referer = $(location).attr('hostname');
            } else {
                var referer = "missing";
            }
            var utm_source = getUrlParameter('utm_source');
            var utm_medium = getUrlParameter('utm_medium');
            var utm_campaign = getUrlParameter('utm_campaign');
            var utm_content = getUrlParameter('utm_content');
            var utm_term = getUrlParameter('utm_term');
            $.ajax({
                type: "POST",
                url: url,
                data:{
                    referer : referer,
                    utm_source : utm_source,
                    utm_medium : utm_medium,
                    utm_campaign : utm_campaign,
                    utm_content : utm_content,
                    utm_term : utm_term,
                },
                dataType: "json"
            });
        }*/
    });
    /*var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };*/
</script>
</body>
</html>