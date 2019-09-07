<?php





  $menu = menu_tree_all_data('main_menu',0,1);
//  $menu = drupal_render(menu_tree_output($menu));
//  kpr($menu);
?>
<!DOCTYPE html>
<html lang="ru">
<head data-templ="html-tpl-php">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <base href="https://integramed.info">
    <title><?php print $head_title; ?> </title>
    <?php print  $head; ?>
    <?php print $styles; ?>
  <!--noindex-->
  <link rel="stylesheet" href="/sites/all/themes/integra/fancybox/jquery.fancybox.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>-->
    <script src="/sites/all/themes/integra/js/bootstrap.min.js"></script>
    <script src="/sites/all/themes/integra/js/owl.carousel.min.js"></script>
    <script src="/sites/all/themes/integra/fancybox/jquery.fancybox.js"></script>
    <script src="/sites/all/themes/integra/fancybox/jquery.fancybox.pack.js"></script>

  <?php
    if ($is_front) print '<script src="//cdn.jsdelivr.net/jquery.touchswipe/1.6.5/jquery.touchSwipe.min.js"></script>';  ?>
    <script src="/sites/all/themes/integra/js/scrips.js?v=13"></script>
    <?php print $scripts;?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139306911-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139306911-1');
</script>





  <!--/noindex-->
</head>
<body>
<header>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5">
<!--         Ссылка с логотипом и текстом-->
              <a class="navbar-brand row align-self-center" href="/">
                <div class=" align-top col-4 pr-0"><img src="/sites/all/themes/integra/img/logo.png" class="img-fluid align-top " width=""  alt="Интеграмедсервис"></div>
                <div class="col-8 pl-1 align-self-center">
                            <div class="heading-bold">ИНТЕГРАМЕДСЕРВИС</div>
                            <div class="heading-normal">КЛИНИКА РЕСПИРАТОРНОЙ МЕДИЦИНЫ</div>
                        </div>
              </a>
      </div>
      <div class="col-12 col-md-2 phone-wrapper heading-bold text-primary">

                    <span class="phone col-6 col-md-12 p-md-0"></i><a href="tel:84956629924" rel="nofollow">8 495 662-99-24</a></span>

                    <span class="phone col-6 col-md-12 p-md-0"></i><a href="tel:88005550382" rel="nofollow">8 800 555-03-82</a></span>

      </div>
      <div class="col-12 col-md-5 float-right text-right">
        <div class="align-content-center justify-content-center soc">
                  <span ><a rel="nofollow"  href="https://www.facebook.com/%D0%A6%D0%B5%D0%BD%D1%82%D1%80-%D0%A0%D0%B5%D1%81%D0%BF%D0%B8%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BD%D0%BE%D0%B9-%D0%BC%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%BD%D1%8B-%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D0%9C%D0%B5%D0%B4%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81-121895424577293/?rc=p"><i class="fab fa-facebook text-primary"></i></a></span>
                  <span ><a rel="nofollow" href="https://vk.com/klinikarm"><i class="fab fa-vk   text-primary"></i></a></span>
                  <span ><a rel="nofollow" href="https://twitter.com/PulmonologyINT"><i class="fab fa-twitter  text-primary"></i></a></span>
                  <span ><a rel="nofollow" href="//www.youtube.com/channel/UCfmeP6mEga4grBRvtIeCdWw"><i class="fab fa-youtube  text-primary"></i></a></span>
                  <span ><a rel="nofollow" href="//www.yell.ru/moscow/com/otdelenie-pulmonologii-integramedservis-ooo_10694993/"><i class="fab text-primary fa-yahoo  "></i></a></span>


                  <span class="btn btn-primary m-1" data-toggle="modal" data-target="#forma-zapisi" >Запись онлайн</span>
        </div>
        <div class="address">
          <i class="fas fa-map-marker-alt "></i>
                    <span>г. Москва, ст. м. Электрозаводская, Мажоров переулок, д. 7</span>
        </div>
      </div>
    </div>
  </div>

    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Ссылка с логотипом и текстом-->

      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center " id="main_menu">
        <?php $main_menu = menu_tree('main-menu'); ?>

        <ul class="navbar-nav" >
          <?php print render($main_menu); ?>
        </ul>






      </div>
    </nav>

</header>


<?php print $page_top;?>
<?php print $page;?>
<?php //dpm($page); ?>
<?php print $page_bottom;?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-3">
        <div>
          <a class="navbar-brand d-none d-md-block " href="/">
            <img src="/sites/all/themes/integra/img/logo.png" class="d-inline-block align-top " width="80" alt="...">
            <span class="d-inline-block ">
                            <span class="d-block heading-bold">ИНТЕРГАМЕДСЕРВИС</span>
                            <span class="d-block heading-normal">КЛИНИКА РЕСПИРАТОРНОЙ МЕДИЦИНЫ</span>
                        </span>
          </a>
        </div>
        <div>
<!--          Многопрофильный респираторный медицинский центр-->
        </div>
        <div class="soc_new">
          <a rel="nofollow" href="https://vk.com/klinikarm" class="d-inline-block"><img src="/sites/all/themes/integra/img/vk.png" alt=""></a>
<!--          <a href="#" class="d-inline-block"><img src="/sites/all/themes/integra/img/instagram2.png" alt=""></a>-->
          <a rel="nofollow" href="https://www.facebook.com/%D0%A6%D0%B5%D0%BD%D1%82%D1%80-%D0%A0%D0%B5%D1%81%D0%BF%D0%B8%D1%80%D0%B0%D1%82%D0%BE%D1%80%D0%BD%D0%BE%D0%B9-%D0%BC%D0%B5%D0%B4%D0%B8%D1%86%D0%B8%D0%BD%D1%8B-%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D0%9C%D0%B5%D0%B4%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81-121895424577293/?rc=p" class="d-inline-block"><img src="/sites/all/themes/integra/img/facebook.png" alt=""></a>
          <a rel="nofollow" href="//www.youtube.com/channel/UCfmeP6mEga4grBRvtIeCdWw" class="d-inline-block"><img src="/sites/all/themes/integra/img/youtube.png" alt=""></a>


        </div>


          <?php
          $current_time = strtotime("now");
          $sunrise = strtotime("10:00");
          $sunset = strtotime("20:00");
          if ($current_time > $sunrise && $current_time < $sunset && date('w') > 0 && date('w') < 6)
          {
              ?><a href="https://wa.me/79039637722" target="_blank" class="chat_social_item chat_social_wh"></a><?
          }
          else
          {
              ?><div style="display: none" id="wa_wi" data-info="<?=$current_time . ' ' . $sunrise . ' ' . $sunset?>">С 10:00 до 20:00</div><?
          }
          ?>


      </div>
      <div class="col-12 col-md-2">
        <div class="head">ИнтеграМед Сервис</div>
        <ul>
          <li><a href="/about">О нас</a></li>
          <li><a href="/events">Новости</a></li>
          <li><a href="/team">Врачи</a></li>
          <li><a href="/about">СМИ о нас</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-2 pl-auto pl-md-5">
        <div class="head">Информация</div>
        <ul>
          <li><a href="/pulmonology">Специализации</a></li>
          <li><a href="/about/licensi">Сертификаты</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-2">
        <div class="head">Помощь</div>
        <ul>
          <li><a href="/articles">Статьи</a></li>
          <li><a href="/contacts/faq">Вопрос-Ответ</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3 p-5 m-auto p-md-0 m-md-0">
        <div class="footer-contacts">
          <div class="head">Контакты</div>
          <div>107023, г. Москва, ст. м. Электрозаводская,
            Мажоров переулок, д. 7 </div>
        </div>
        <div class="footer-adress">
          <b>Телефон:</b> 8 495 662-99-24, <br>
          8800 555-03-82 <b>бесплатный</b>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
$module_name='webform';
$block_delta='client-block-5020';
$block = block_load($module_name,$block_delta );
$blocks = _block_render_blocks(array($block));
$blocks_build = _block_get_renderable_array($blocks);
unset($blocks_build[$module_name . '_' . $block_delta]['#theme_wrappers']);
?>
        <?php
        echo drupal_render($blocks_build);
//        kpr($main_menu);
        ?>

<!--noindex-->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(53500543, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53500543" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
    $(document).ready(function(){
        setTimeout(function(){
        if($('h1 + .banner').length < 1){
            if(document.URL.indexOf('161')>-1){
                var a = '<div class="banner" style="display:block; flex: none; background-color: #FF4160; margin: 2em 0; padding: 1.2em 1em 8px; width: 100%;">\n' +
                    '<p style="color: white; font-size: 26px; text-align: center; line-height: 40px;">\n' +
                    'Акция! Первичная консультация врача-иммунолога 1000 руб.\n' +
                    '</p>\n' +
                    '</div>';
                $('h1').after(a);
            }
            else {
                var a = '<div class="banner" style="display:block; flex: none; background-color: #FF4160; margin: 2em 0; padding: 1.2em 1em 8px; width: 100%;">\n' +
                    '<p style="color: white; font-size: 26px; text-align: center; line-height: 40px;">\n' +
                    'Акция! <a href="/pulmonology" style="color: white;">Первичная консультация врача-пульмонолога 1500 руб.</a>\n' +
                    '</p>\n' +
                    '</div>';
                $('h1').after(a);
            }
        }
        },500);
    });
</script>
<script>
    $(document).ready(function () {
        $("[href*='79039637722']").on('click tap', function (e) {
            e.preventDefault();
            yaCounter53500543.reachGoal('whatsapp');
            window.open($(this).attr('href'), '_blank');
        });
    });
</script>
<!-- calltouch -->
<script src="https://mod.calltouch.ru/init.js?id=bh3rqdn7"></script>
<script type="text/javascript">
    $(document).on('submit', 'form#webform-client-form-5020', function() {
        var form = $(this);
        var phone = form.find('input#edit-submitted-phone').val();
        var fio = form.find('input#edit-submitted-name').val();
        var mail = form.find('input#edit-submitted-e-mail').val();
        var comment = 'Специалист '+form.find('input#edit-submitted-vrach').val();
        var sub = 'Запись на приём';

        var ct_node_id = '9';
        var ct_site_id = '29398';
        var ct_data = {
            fio: fio,
            phoneNumber: phone,
            email: mail,
            comment: comment,
            subject: sub,
            sessionId: window.call_value
        };

        if ( !!phone && !!mail && !!fio && !!window.call_value && window.call_value != "0"){
            $.ajax({
                url: 'https://api-node'+ct_node_id+'.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
                dataType: 'json',
                type: 'POST',
                data: ct_data,
                async: false
            });
        }
    });
</script>
<!-- /calltouch -->

</body>
</html>
