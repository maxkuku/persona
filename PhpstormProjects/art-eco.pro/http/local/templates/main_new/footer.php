	<?if(($APPLICATION->GetCurPage(true) != "/index.php") && !CSite::InDir("/catalog/") && !CSite::InDir("/catalog2/") && !CSite::InDir("/shop/") && !CSite::InDir("/shop2/") && !CSite::InDir("/test/") && ($APPLICATION->GetCurPage(true) != "/test.php") ):?>
				</section>
			</div>
		</div>
	<?endif?>		
			<footer class="row">
				<div class="main_width">
					<a href="/" class="logo"><img src="/images/logo_footer.png" /></a>
			
					<div class="address">
					
					<?$APPLICATION->IncludeFile(SITE_DIR."include/address.php",Array(),Array("MODE"=>"php"));?></div>
					<div class="phones row">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/phones.php",Array(),Array("MODE"=>"php"));?>
						
					</div>
					<a class="btn recall_link">Заказать обратный звонок</a>
				</div>
				<div class="row footer-notice"><small>Цена товаров на сайте предназначена для продажи физическим лицам и не является публичной офертой. Обращаем внимание, что стоимость указана без учета доставки. При доставке товара до адресата цена увеличивается.</small></div>		
			</footer>
	</div>
			
<?$APPLICATION->IncludeFile(SITE_DIR."include/recall_form.php",Array(),Array("MODE"=>"php"));?>
<?$APPLICATION->IncludeFile(SITE_DIR."include/kp_form.php",Array(),Array("MODE"=>"php"));?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    /*(function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49822969 = new Ya.Metrika2({
                    id:49822969,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true					
					
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");*/
	
	
</script>
<?/*<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49822969, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49822969" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<noscript><div><img src="https://mc.yandex.ru/watch/49822969" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --> */?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49822969, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49822969" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123212469-1"></script>

<script>
$(document).ready(function(){
	$('form[name=SIMPLE_FORM_3]').submit(function(){
		ym(49822969, 'reachGoal', 'callback');
		gtag('event', 'submit',{event_category:'callback'});
		return true;
	});
});

</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123212469-1');
</script>
<?/*<script>
  fbq('track', 'ViewContent');
</script>*/?>
</body>	
</html>