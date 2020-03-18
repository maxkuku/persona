<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
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
    </div>
    </div><!--footer wrap-->
</div>
<div class="clearfix"></div>
<div id="last">
    <div class="wrap">

        <div id="logo-wrap">
            <div id="logo"><a href="/"><img src="/bitrix/templates/brt/images/log-brt.jpg" align="absmiddle" width="70%"></a></div>
            <div id="near_logo_name">
                <div id="center">Центр<br>нейрореабилитации</div>
            </div>
        </div>

        <a href="https://webtomed.ru" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/images/webtomed.jpg" alt="WebToMed"/></a>
    </div>
</div>


<div id="modal-search" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button id="close-search" type="button" class="close" data-dismiss="modal">×</button>
            <div class="modal-title">Поиск</div>
        </div>
        <div class="modal-body">
            <div class="row">
                <form action="/search/" method="post" enctype="multipart/form-data" id="search_form">
                    <span class="input-group-addon"><i class="fa fa-search fa-fw"></i></span>
                    <input type="text" name="q" value="" id="input-name" class="form-control" placeholder="Поиск">
                    <a class="btn btn-block btn-danger" onclick="document.getElementById('search_form').submit()">Искать</a
                </form>
            </div>
        </div>
    </div>
    </div>
</div>


<!--div id="modal-call" class="modal fade">
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
</div-->

<div class="i-loader"></div>



<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.4.1.min.js"></script>
<?if($APPLICATION->GetCurPage() == "/kontakty/" || strpos($APPLICATION->GetCurPage(), "rehab") > 0):?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/inputmask.6.js"></script>
<script type="text/javascript">
    $(document).ready(function($) {
        var selector = $('#input_PERSONAL_PHONE, [type=tel], [name=TEL], [name=form_text_21]');
        var im = new Inputmask("+7(999)999-99-99");
        im.mask(selector);
    });
    $(document).ready(function () {
        $("#bottom").submit(function () {
            yaCounter51498530.reachGoal('action');
            ga('send', 'event', 'form', 'action');
            return true;
        });
    });
</script>
<?endif ?>
<?if($GLOBAL["flick"]):?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/slick.js"></script>
<?endif?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,900&amp;subset=cyrillic"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/slick-theme.css"/>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/mobile.css?v=<?=rand(1,1000)?>"/>
<?  $APPLICATION->IncludeComponent("noscript:sendfeedback", ".default", false);?>
<script type="text/javascript" id="scr">
    $(document).ready(function(){
        $("#feedback").submit(function(){
            yaCounter51498530.reachGoal('zapis');
            ga('send', 'event', 'form', 'zapis');
            return true;
        });
    });
    
</script>

<svg style="display: none">
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

<?if($GLOBAL["flick"]):?>
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
</script>
<?endif?>

<!-- calltouch -->
<script type="text/javascript">
    jQuery(document).on('click', '#form-content input[type="submit"]', function() {
        var form = jQuery ('#form-content');
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
<!-- calltouch -->


</body>
</html>