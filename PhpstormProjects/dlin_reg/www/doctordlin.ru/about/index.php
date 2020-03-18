<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О клинике Доктора Длина, Москва");
$APPLICATION->SetPageProperty("title", "О клинике Доктора Длина");
$APPLICATION->SetTitle("О клинике");
$APPLICATION->SetAdditionalCSS($APPLICATION->GetCurDir() . "style.css");
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH ."/js/owl.carousel.js");
?><!--

    <div style="display:none">
        <div class="date-publishing">
            Дата публикации:
            <time datetime="<?= date("d-m-Y H:i:s", filemtime(__FILE__)) ?>"
                  class="date"><?= date("d-m-Y H:i:s.", filemtime(__FILE__)) ?></time>
            <span class="updated hidden" itemprop="datePublished"><?= date("Y-m-d", filemtime(__FILE__)) ?></span>
        </div>
        <meta itemprop="articleSection" content="<? $APPLICATION->ShowTitle(false) ?>">
        <meta itemprop="url" content="https://doctordlin.ru">
        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
				<span class="vcard hidden">
					<span itemprop="name" class="fn org">Администрация сайта</span>
					<span class="tel">+7(499) 112-25-17</span>
					<span class="note"><? $APPLICATION->ShowTitle(false) ?></span>
					<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"
                          class="adr locality">
                        <span itemprop="addressLocality">Москва, ул. Гарибальди 36</span></span>
				</span>
			</span>
    </div>
-->



    <div class="light-eee">
        <div class="wrap">
            <div class="under-title">
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>5 минут пешком</b><br><span>от метро</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Бесплатная</b><br><span>парковка</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Прием ведется</b><br><span>по записи</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/flags.jpg"/><div>Стажировки в США,<br>Израиле, Германии</div></div>
            </div>
        </div>
    </div>



    <div class="wrap breadcrumbs">
        <? $APPLICATION->IncludeComponent("dlin:breadcrumb", ".default", array(), false); ?>
    </div>



<div class="wrap page-header">
    <?if(BANNER_ALL == "Y"):?>
        <div class="banner">
            <a href="/treatment/stelki/">
                <p>Спецпредложение! Индивидуальные ортопедические стельки со скидкой 40%!</p>
            </a>
        </div>
    <?endif?>
</div>


    <div class="ab">
        <div class="wrap">
            <h2 class="">О клинике</h2>
            <div class="ab-inner">
                <img src="/bitrix/templates/dlin/images/hall.webp" onerror="this.onerror=null; this.src='/bitrix/templates/dlin/images/hall.jpg'">

                <div>
                    <p>Специализация нашего центра — это лечение позвоночника и суставов с применением самых прогрессивных методов лечения, используемых не только в Росии, но и в Европе, США, Израиле. Одним из базовых подходов лечения в клинике доктора Длина является мягкая мышечно - тоническая мануальная терапия позвоночника и суставов. В клинике применяется обширный комплекс методик мягкого, деликатного воздействия на различные зоны человеческого тела, в результате применения которых происходит безопасное и эффективное восстановление функций опорно-двигательного аппарата.</p>
                    <p>Мануальные терапевты и остеопаты представлены во многих клиниках, у нас же они стоят в центре лечебного процесса.</p>
                    <p>Основатель клиники, Сергей Владимирович Длин, привнес в мануальную терапию прогрессивные западные направления, и создал авторские методики лечения, дающие стабильный результат, сохраняющийся на долгое время.</p>
                </div>

            </div>
        </div>
    </div>





    <div class="over lightgrey">
        <div id="doctor">
            <div id="doctor-picture" class="wrap">
                <div class="banner_text">
                    <div class="name-wrap">
                        <div class="name">Длин Сергей Владимирович</div>
                        <p>Главный врач мануальный терапевт, остеопат, вертеброневролог</p>
                        <b>Опыт работы 17 лет</b>
                        <p class="citate">В нашей клинике мы с успехом применяем широкий спектр методик, включающий в себя как традиционные, так и новейшие методы лечения. Наши специалисты владеют разнообразными техниками: кранио-сакральная терапия, постизометрическая релаксация, палсинг, миофасциальный релиз, техники короткого и длинного рычагов и т.д.</p>
                    </div>
                </div>
                <img height="475" src="<?=SITE_TEMPLATE_PATH?>/images/dlin-grey.webp" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/dlin-grey.jpg'">
                <!--img height="475" src='<?=SITE_TEMPLATE_PATH?>/images/dlin-grey.jpg'-->
            </div>
        </div>
    </div>




    <div class="block white">
        <div class="wrap">
            <h2>Лицензии клиники</h2>
            <p style="text-align: center; margin: 20px auto 40px">Мы работаем в строгом соответствии с официальной государственной лицензией, а все наши специалисты имеют профессиональные медицинские сертификаты.</p>
            <div class="gray">
                <div class="wrap cont-pics">
                    <a href="<?=SITE_TEMPLATE_PATH?>/images/lic1.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/lic1.jpg"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH?>/images/lic2.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/lic2.jpg"/></a>
                    <a href="<?=SITE_TEMPLATE_PATH?>/images/lic3.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/lic3.jpg"/></a>
                </div>
            </div>
        </div>
    </div>




<div class="wrap">




  <h2>Рекомендация звезд</h2>
    <div class="one-video">
        <div class="youtube-outer">
            <div class="youtube" id="xWpo7lsM4XA" style="background-image: url(//i.ytimg.com/vi/xWpo7lsM4XA/sddefault.jpg);">
                <div class="play"></div>
                <p>«Сергей Владимирович Длин супер крутой вертебролог»<br><span style="text-align:right">ЛЕНА ЛЕНИНА</span></p>

            </div>
            </div>
    </div>





</div>

<script>
    $(document).ready(function(){
        $('.uk-notouch .play').click(function(){
            $(this).next('p').toggleClass('out');
        })
    })
</script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>