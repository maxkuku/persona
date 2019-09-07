<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>
</div>
<div id="footer-slogan">
    <div class="footer-blocks">
	    <div class="width1350">
		    <div class="block-footer-left">
		    <h3 class="foot-h3">Записаться на бесплатный прием</h3>
		    <p>Нажимая кнопку "отправить", я даю согдасие на обработку моих <a href="/policy/" target="_blank">персональных данных</a>.</p>
		    <form id="feedback" class="uk-form uk-form-stacked" method="post" enctype="multipart/form-data">
			    <fieldset>
				    <div class="uk-form-row">

					    <input type="text" name="AUTHOR" class="uk-form-width-medium" required=""
					           placeholder="Введите ваше имя"></div>
				    <div class="uk-form-row">

					    <input type="tel" name="TEL" class="uk-form-width-medium" required=""
					           placeholder="Введите ваш телефон"></div>

				    <div class="uk-form-row">
					    <input type="submit" name="submit" class="like-send-back" value="Отправить заявку"
					           onclick="yaCounter46432377.reachGoal('zapis'); return true;">
				    </div>

			    </fieldset>
		    </form>
		    <? $APPLICATION->IncludeComponent("redesign:sendfeedback", ".default", false); ?>
	        </div>
		    <div class="block-footer-right"></div>
	    </div>
    </div>
</div>


<div id="foot">
    <div class="wrap">
        <div id="logo-bottom">
            <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-bot.png" width="70"
                             alt="Академстом лого"></a>
        </div>
        <div id="bottom-buttons">
            <a href="/policy/">Политика конфиденциальности</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/uikit.min.css"/>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/uikit.docs.min.css"/>
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH ?>/js/footer.js"></script>
<script>
    $(document).ready(function () {
        var selector = $('input[type="tel"]');
        var im = new Inputmask("+7 (999) 999-99-99");
        im.mask(selector);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#feedback").submit(function () {
            yaCounter46432377.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
    });
</script>
<script src="https://mod.calltouch.ru/init.js?id=6wj5zgwz"></script>
<script>
jQuery(document).on("submit", 'form', function() { 
var m = jQuery(this).closest('form'); 
var fio = m.find('input[name="AUTHOR"]').val(); 
var phone = m.find('input[name="TEL"]').val(); 
var mail = m.find('input[name="EMAIL"]').val(); 
var ct_site_id = '27848';
var sub = m.attr('id');
var ct_data = {             
fio: fio,
phoneNumber: phone,
email: mail,
subject: sub,
sessionId: window.call_value 
};
if (!!phone || !!mail){
jQuery.ajax({  
  url: 'https://api-node9.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/', 
  dataType: 'json', type: 'POST', data: ct_data, async: false
}); 
}
});
</script> 
<!-- /calltouch -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter46432377 = new Ya.Metrika({
                    id: 46432377,
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
        s.src = "<?=SITE_TEMPLATE_PATH?>/js/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46432377" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108853140-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-108853140-1');
</script>
</body>
</html>