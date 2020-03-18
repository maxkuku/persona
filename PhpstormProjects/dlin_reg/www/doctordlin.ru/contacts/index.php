<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши контакты");
?>
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

        <h1><? $APPLICATION->ShowTitle(false)?></h1>



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
                <div class="ab-inner">
                    <a href="<?=SITE_TEMPLATE_PATH?>/images/2cont.jpg" rel="lightbox">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/2cont.webp" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/2cont.jpg'">
                    </a>
                    <div>
                        <b>Центр мануальной медицины</b>
                        <p>г. Москва, ул. Гарибальди дом 36 (бесплатная парковка)<br>
                            м. Новые Черемушки (5 минут пешком от метро)</p>
                        <br>
                        <p>Режим работы: пн-сб с 9:00 до 21:00<br>
                            Телефон: <a href="tel:+74951016035">+7(495) 101-60-35</a><br>
                            E-mail: <a href="mailto:info@doctordlin.ru">info@doctordlin.ru</a><br>
                        Лицензия: № ЛО-77-01-016207 от 14 июня 2018
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="clearfix"></div>

    <div class="scheme">
        <div class="wrap">
            <h2>Схема проезда</h2>
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A51389f499d5e3b35a70e508e2b5a547dba4c0ed261b59da89c74a7067be49b1b&amp;source=constructor" width="1160" height="605" frameborder="0"></iframe>
        </div>
    </div>


    <div class="how">
        <div class="wrap">
            <h2>Как добраться на метро</h2>
            <div class="reverced">
            <a class="righted" href="<?=SITE_TEMPLATE_PATH?>/images/vhod.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/vhod.jpg" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/vhod.jpg'"></a>
            <p>Из центра последний вагон, выход №8.<br>
                Поднимаемся вверх, поворот налево,<br>
                идем против движения транспорта. <br>
                Ориентир магазин "Пятерочка". Далее<br>
                Налоговая инспекция. Напротив <br>
                налоговой у дома поворот направо,<br>
                проходим через шлагбаум и налево.<br>
                Кирпичная пристройка, вход в клинику.</p>
            </div>
        </div>
    </div>

<div class="clearfix"></div>
<br><br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>