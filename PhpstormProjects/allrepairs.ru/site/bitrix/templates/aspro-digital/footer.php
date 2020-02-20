
				<?CDigital::get_banners_position('FOOTER');?>
			</div><?// class=main?>				
		</div><?// class=body?>		
		<?CDigital::ShowPageType('footer');?>
		<div class="bx_areas">
			<?CDigital::ShowPageType('bottom_counter');?>
		</div>
		<?CDigital::SetMeta();?>
		<?CDigital::ShowPageType('search_title_component');?>
		<?CDigital::ShowPageType('basket_component');?>
		<?CDigital::AjaxAuth();?>


                <script>
                    /*document.addEventListener("DOMContentLoaded", function() {
                        let lazyImages = [].slice.call(document.querySelectorAll("img"));
                        let active = false;

                        const lazyLoad = function() {
                            if (active === false) {
                                active = true;

                                setTimeout(function() {
                                    lazyImages.forEach(function(lazyImage) {
                                        if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                                            lazyImage.src = lazyImage.dataset.src;
                                            lazyImage.srcset = lazyImage.dataset.srcset;
                                            lazyImage.classList.remove("lazy");

                                            lazyImages = lazyImages.filter(function(image) {
                                                return image !== lazyImage;
                                            });

                                            if (lazyImages.length === 0) {
                                                document.removeEventListener("scroll", lazyLoad);
                                                window.removeEventListener("resize", lazyLoad);
                                                window.removeEventListener("orientationchange", lazyLoad);
                                            }
                                        }
                                    });

                                    active = false;
                                }, 200);
                            }
                        };

                        document.addEventListener("scroll", lazyLoad);
                        window.addEventListener("resize", lazyLoad);
                        window.addEventListener("orientationchange", lazyLoad);
                    });*/
                </script>



	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47997215 = new Ya.Metrika({
                    id:47997215,
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
<noscript><div><img src="https://mc.yandex.ru/watch/47997215" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'VCIP899BO6';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
	</body>
</html>