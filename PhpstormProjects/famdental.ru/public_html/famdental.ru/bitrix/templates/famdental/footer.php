<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
</div><!--container2-->

<div class="footer-line">
	<button class="uk-button uk-hidden-small" data-uk-modal="{target:'#modal-form'}">Записаться на бесплатную
		консультацию</button>
	<button class="uk-button uk-hidden-medium uk-hidden-large" data-uk-modal="{target:'#modal-form'}">Бесплатная
		консультация</button>
</div>

<div class="map-container">
	<div class="map" id="map"></div>
	<div class="address">

        <div class="in_address_wrap">
            <div class="in_address">
                <p><b>Телефон:</b></p>
                <p><a href="tel:+74957489905" onClick="yaCounter35248230.reachGoal('phoneclick'); ga('send', 'event', 'phone', 'click');"><span class="ya-phone">+74957489905</span></a></p>
            </div>
            <div class="in_address">
                <a href="https://www.instagram.com/implant.brothers/" target="_blank" style="margin-left: -7px;"><img src="<?=SITE_TEMPLATE_PATH?>/imager/instagram-g.png" alt="Парковка"></a>
                <a href="https://www.youtube.com/channel/UCa_fbOZl4W81a1AH0QhMhGQ" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/imager/youtube-icon-g.png" alt="Парковка"></a>
            </div>
        </div>



		<p><b>Режим работы:</b></p>
		<div class="in_address_wrap">
			<div class="in_address">
				<p>Будние дни: 10:00-21:00<br/>
					Суббота 10:00-18:00<br/>
					Воскресенье выходной</p>
			</div>
			<div class="in_address">
					<img src="<?=SITE_TEMPLATE_PATH?>/imager/car.png" alt="Парковка"/>
					<span class="wr"><b>Подземная парковка</b><br/>
							(100 рублей в час)</span>
			</div>
		</div>
		<p><b>Адрес клиники:</b></p>
		<p>Москва, ул.Маршала Рыбалко д.2&nbsp;к.3</p>
		<p><img src="<?=SITE_TEMPLATE_PATH?>/imager/metro.png"
		        alt="м. Октябрьское поле"/>Октябрьское поле (7 минут пешком	от метро)</p>
		<p><img src="<?=SITE_TEMPLATE_PATH?>/imager/metro.png"
		        alt="м. Панфиловская"/>Панфиловская (5 минут пешком от метро)</p>
	</div>
</div>
<div style="clear: both;float:none;position: relative;display:block;height:1px;"></div>
<div class="footer">
	<a href="/" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/imager/logo-bottom.png" alt="Логотип Фамдентал"/></a>
	<a class="maker uk-hidden-small" href="http://webtomed.ru" target="_blank" style="color:white;text-decoration: none"><img src="/images/logo_w2m
	.png" alt="Логотип
	WebToMed - продвижение медицинских брендов"/></a>
</div>
<?$APPLICATION->IncludeComponent("famdental:sendfeedback", ".default", false);?>
</div><!--wrap-->
<script>
	$('video, audio').mediaelementplayer({
		pluginPath: 'https://cdnjs.com/libraries/mediaelement/',
		shimScriptAccess: 'always'
	});
</script>
<script type="text/javascript" src="//<?=$_SERVER['SERVER_NAME']?>/js/footer.func.js"></script>
<script type="text/javascript">// <![CDATA[
	jQuery(".uk-form-stacked").submit(function(){
		/*if(jQuery(".uk-form-stacked").attr('action')=="/zvonok"){*/
			yaCounter35248230.reachGoal('call');
			ga('send', 'event', 'form', 'call');
			return true;
		/*}else {
			yaCounter35248230.reachGoal('lead');
			ga('send', 'event', 'form', 'lead');
			return true;
		}*/
	});
	// ]]></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter35248230 = new Ya.Metrika({
					id:35248230,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/35248230" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!--
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-26524091-7', 'auto');
	ga('send', 'pageview');
</script>
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-94115531-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- calltouch code -->
<script src="https://mod.calltouch.ru/init.js?id=665e48eb"></script>

<!-- calltouch send requests -->
<script type="text/javascript">
jQuery(document).on('submit', 'form.uk-form', function() {
var form = jQuery(this);
var phone = form.find('input[name="TEL"]').val();
var fio = form.find('input[name="AUTHOR"]').val();
var comment = form.find('textarea[name="SOURCE"]').val();
var sub = 'Заявка';

var ct_node_id = '3';
var ct_site_id = '10978';
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
<!-- /calltouch code -->


<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "FqDXiwzigubZwVEHtU4STi7nvyRayg0c"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>

</body>
</html>