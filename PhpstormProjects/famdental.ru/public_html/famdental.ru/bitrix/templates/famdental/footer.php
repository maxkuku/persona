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
		<p><b>Телефон:</b></p>
		<p><a href="tel:+74952419382" onClick="yaCounter35248230.reachGoal('phoneclick'); ga('send', 'event', 'phone', 'click');"><span class="ya-phone">+7 (495) 241-93-82</span></a></p>
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

<script type="text/javascript">
(function (w, d, nv, ls, yac){
    var lwait = function (w, on, trf, dly, ma, orf, osf) { var pfx = "ct_await_", sfx = "_completed";  if(!w[pfx + on + sfx]) { var ci = clearInterval, si = setInterval, st = setTimeout , cmld = function () { if (!w[pfx + on + sfx]) {  w[pfx + on + sfx] = true; if ((w[pfx + on] && (w[pfx + on].timer))) { ci(w[pfx + on].timer);  w[pfx + on] = null;   }  orf(w[on]);  } };if (!w[on] || !osf) { if (trf(w[on])) { cmld();  } else { if (!w[pfx + on]) { w[pfx + on] = {  timer: si(function () { if (trf(w[on]) || ma < ++w[pfx + on].attempt) { cmld(); } }, dly), attempt: 0 }; } } }   else { if (trf(w[on])) { cmld();  } else { osf(cmld); st(function () { lwait(w, on, trf, dly, ma, orf); }, 0); } }}};
    var ct = function (w, d, e, c, n){ var a = 'all', b = 'tou', src = b + 'c' + 'h';  src = 'm' + 'o' + 'd.c' + a + src;  var jsHost = "https://" + src, p = d.getElementsByTagName(e)[0], s = d.createElement(e); var jsf = function (w, d, p, s, h, c, n, yc) { if (yc !== null) { lwait(w, 'yaCounter'+yc, function(obj) { return (obj && obj.getClientID ? true : false); }, 50, 100, function(yaCounter) { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (yaCounter  && yaCounter.getClientID ? "ya_client_id" + yaCounter.getClientID() + ";" : "") + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";";p.parentNode.insertBefore(s, p); }, function (f) { if(w.jQuery) {  w.jQuery(d).on('yacounter' + yc + 'inited', f ); }}); } else { s.async = 1; s.src = jsHost + "." + "r" + "u/d_client.js?param;" + (c ? "client_id" + c + ";" : "") + "ref" + escape(d.referrer) + ";url" + escape(d.URL) + ";cook" + escape(d.cookie) + ";attrs" + escape("{\"attrh\":" + n + ",\"ver\":170523}") + ";"; p.parentNode.insertBefore(s, p);}}; if (!w.jQuery) { var jq = d.createElement(e); jq.src = jsHost + "." + "r" + 'u/js/jquery-1.7.min.js'; jq.onload = function () { lwait(w, 'jQuery', function(obj) { return (obj ? true : false); }, 30, 100, function () { jsf(w, d, d.getElementsByTagName(e)[0], s, jsHost, c, n, yac);  }); }; p.parentNode.insertBefore(jq, p);  } else { jsf(w, d,  p, s, jsHost, c, n, yac); }};
    var gaid = function (w, d, o, ct, n) { if (!!o) { lwait(w, o, function (obj) {  return (obj && obj.getAll ? true : false); }, 200, (nv.userAgent.match(/Opera|OPR\//) ? 10 : 20), function (gaCounter) { var clId = null; try {  var cnt = gaCounter && gaCounter.getAll ? gaCounter.getAll() : null; clId = cnt && cnt.length > 0 && !!cnt[0] && cnt[0].get ? cnt[0].get('clientId') : null; } catch (e) { console.warn("Unable to get clientId, Error: " + e.message); } ct(w, d, 'script', clId, n); }, function (f) { w[o](function () {  f(w[o]); })});} else{ ct(w, d, 'script', null, n); }};
    var cid  = function () { try { var m1 = d.cookie.match('(?:^|;)\\s*_ga=([^;]*)');if (!(m1 && m1.length > 1)) return null; var m2 = decodeURIComponent(m1[1]).match(/(\d+\.\d+)$/); if (!(m2 && m2.length > 1)) return null; return m2[1]} catch (err) {}}();
    if (cid === null && !!w.GoogleAnalyticsObject){
        if (w.GoogleAnalyticsObject=='ga_ckpr') w.ct_ga='ga'; else w.ct_ga = w.GoogleAnalyticsObject;
        if (typeof Promise !== "undefined" && Promise.toString().indexOf("[native code]") !== -1){new Promise(function (resolve) {var db, on = function () {  resolve(true)  }, off = function () {  resolve(false)}, tryls = function tryls() { try { ls && ls.length ? off() : (ls.x = 1, ls.removeItem("x"), off());} catch (e) { nv.cookieEnabled ? on() : off(); }};w.webkitRequestFileSystem ? webkitRequestFileSystem(0, 0, off, on) : "MozAppearance" in d.documentElement.style ? (db = indexedDB.open("test"), db.onerror = on, db.onsuccess = off) : /constructor/i.test(w.HTMLElement) ? tryls() : !w.indexedDB && (w.PointerEvent || w.MSPointerEvent) ? on() : off();}).then(function (pm){
            if (pm){gaid(w, d, w.ct_ga, ct, 2);}else{gaid(w, d, w.ct_ga, ct, 3);}})}else{gaid(w, d, w.ct_ga, ct, 4);}
    }else{ct(w, d, 'script', cid, 1);}})
(window, document, navigator, localStorage, "35248230");
</script>
<!--
<script type="text/javascript">
	function ct(w,d,e,c){
		var a='all',b='tou',src=b+'c'+'h';src='m'+'o'+'d.c'+a+src;
		var jsHost="https://"+src,s=d.createElement(e),p=d.getElementsByTagName(e)[0];
		s.async=1;s.src=jsHost+"."+"r"+"u/d_client.js?param;"+(c?"client_id"+c+";":"")+"ref"+escape(d.referrer)+";url"+escape(d.URL)+";cook"+escape(d.cookie)+";";
		p.parentNode.insertBefore(s,p);
		if(!w.jQuery){var jq=d.createElement(e);
			jq.src=jsHost+"."+"r"+'u/js/jquery-1.7.min.js';
			p.parentNode.insertBefore(jq,p);}}
	if(!!window.GoogleAnalyticsObject){window[window.GoogleAnalyticsObject](function(tracker){
		if (!!window[window.GoogleAnalyticsObject].getAll()[0])
		{ct(window,document,'script', window[window.GoogleAnalyticsObject].getAll()[0].get('clientId'))}
		else{ct(window,document,'script', null);}});
	}else{ct(window,document,'script', null);}
</script> -->


<!-- <script src="//cdn.callibri.ru/callibri.js" type="text/javascript"></script> -->

<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "FqDXiwzigubZwVEHtU4STi7nvyRayg0c"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>

</body>
</html>