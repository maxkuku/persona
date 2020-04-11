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
                        <input type="hidden" name="CONS" value="Звонок"/>
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
		    <div class="block-footer-right">
                <div class="bottom-search-form">
                    <form id="bottom-search" action="/search/">
                        <input type="text" name="q" placeholder="Введите ваш запрос">
                        <input type="image" name="image" src="<?= SITE_TEMPLATE_PATH ?>/images/search.png" width="18">
                    </form>
                </div>
                <table class="double-bot-menu">
                    <tr>
                    <td style="vertical-align: bottom;" id="left-bot-menu">
                        <table>
                            <tr><td colspan="2"><b>Меню:</b></td></tr>
                            <tr style="background: none;"><td>
                                <ul>
                                    <li><a href="/about/">О клинике</a></li>
                                    <li><a href="/articles/">Имплантация</a></li>
                                    <li><a href="/sinus/">Протезирование</a></li>
                                    <li><a href="/parodontologiya/">Пародонтология</a></li>
                                </ul>
                            </td><td>
                                <ul>
                                    <li><a href="/vrachi/">Врачи</a></li>
                                    <li><a href="/price/">Цены</a></li>
                                    <li><a href="/contacts/">Контакты</a></li>
                                </ul>
                            </td></tr>
                        </table>
                    </td>
                    <td id="right-bot-menu">
                        <div class="bottom-conts">
                            <div class="tel-and-hours">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/phone-w.png">

                                <div class="order-call">
                <span class="call_phone_4">
                    <a class="callibri_phone_k" href="tel:+74951273049">+7(495)127-30-49</a>
                </span>
                                    <br>
                                    <a class="call" data-uk-modal="{target:'#modal-form'}" href="#">Заказать обычный звонок</a>
                                </div>
                            </div>
                            <div class="hours">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/clock-w.png">
                                <div>
                                    <b>Часы работы:</b><br>
                                    <span>Ежедневно с 9:00 до 22:00</span>
                                </div>
                            </div>
                            <div class="addr">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/marker-w.png">
                                <div>
                                    <a class="conts" href="/contacts/">Москва, ул. Киевская 24</a><br>5 минут от <span>м.</span> Студенческая
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
	    </div>
    </div>
</div>
<div id="foot">
    <div class="width1350">
        <table class="foot-table"><tr>
        <td id="logo-bottom">
            <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo-bot.png" height="40"
                             alt="Академстом лого"></a>
        </td>
        <td id="bottom-buttons">
            <b class="rights"><?=date('Y')?> &copy; Все права защищены</b><br>
            <a href="/policy/">Политика конфиденциальности</a>
        </td>
        <td class="credits">
            <a href=""><img src="<?= SITE_TEMPLATE_PATH ?>/images/mmu.png" alt="Credits"/><span>Медицинский маркетинг<br>для умных клиентов</span></a>
        </td>
        </tr></table>
    </div>
</div>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/uikit.min.css"/>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/uikit.docs.min.css"/>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/theme.css"/>
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
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(46432377, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46432377" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
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