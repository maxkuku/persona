<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "В нашем арсенале 25 современных методик безоперационного лечения позвоночника и суставов.");
$APPLICATION->SetPageProperty("title", "Центр мануальной терапии Доктора Длина в Москве");
$APPLICATION->SetTitle("Центр мануальной терапии Доктора Длина");
?>    <div class="over">



    <div id="banner-picture2" class="banner-picture owl-item">
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/chiro1.webp"
             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/chiro1.jpg'">

        <!--div class="banner_text">

            <h2><b><font color="white">Бесплатный прием<br>мануального терапевта</font></b></h2>


            <ul>
                <font color="white">
                    <li>Лечение без таблеток и операций</li>
                    <li>Мягкие мануальные техники</li>
                    <li>Уникальная авторская методика</li>
                </font>
            </ul>
            <div class="banner_slogan"><b><font size=14 color=yellow>Скорая помощь при боли в спине и суставах</font></b></div>

        </div-->

        <div class="banner-actions head">
            <div class="banner-wrap">
                <div class="cover"></div>
                <div class="banner-im"><br></div>
                <div class="banner-text">
                    <div id="priem">Бесплатный прием мануального терапевта</div>
                    <div>
                        <div class="ban_text">Оставьте заявку на бесплатную консультацию и диагностику врача. Воспользуйтесь возможностью задать вопросы, оценить состояние позвоночника и суставов, получить индивидуальный план лечения.</div>
                        <div id="res_form">
                            <div class="ban_num"><input id="header_tel" name="header_phone" type="tel" placeholder="Введите номер телефона"></div>
                            <div class="ban_rec"><button id="send_header_phone" name="send_header_phone" onclick="if (!window.__cfRLUnblockHandlers) return false; yaCounter47424421.reachGoal('phoneclick'); return true;">Запись на прием</button></div>
                            <p>Отправляя заявку, вы соглашаетесь на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>




    <div class="six-in-line wrap">
        <div class="redwrap">
            <div class="red">
                18
            </div>
            <div class="left-border">
                лет опыта лечения<br>
                спины и суставов
            </div>
        </div>
        <div class="redwrap">
            <div class="red">
                25
            </div>
            <div class="left-border">
                применяемых<br>
                методик
            </div>
        </div>
        <div class="redwrap">
            <div class="red">
                94%
            </div>
            <div class="left-border">
                пациентов<br>
                рекомендуют нас
            </div>
        </div>
    </div>


    <h1 itemprop="author">Центр лечение позвоночника и суставов</h1>

<!--
<div class="wrap page-header">
<div class="banner">

<p><b><font color="yellow">Акция!</font> <font color="white">скидка 30% на все виды мануальной терапии.</font></b></p>

</div> </div>
-->

    <div class="wrap">



        <!--p class="slogan">Полное восстановление структуры и функции позвоночника<br>при помощи эффективных безоперационных методик</p-->

        <p>Врачи клиники доктора Длина применяют 25 безоперационных методов для лечения болей в позвоночнике и суставах.
            Каждому пациенту мы подбираем индивидуальный курс лечения.</p>

        <? $APPLICATION->IncludeComponent(
            "dlin:other.articles",
            "main_promo",
            Array(
                "IBLOCK_ID" => 8,
                "SECTION_ID" => "",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC"
            )
        ); ?>

    </div>


    <div id="banner-picture1" class="banner-picture owl-item">
        <img src="<?= SITE_TEMPLATE_PATH ?>/images/abstrakcii-sinij-l.webp"
             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/abstrakcii-sinij-l.jpg'">
        <div class="banner_text">
            <h2>Сергей Владимирович Длин</h2>

            <b>Главный врач, вертебролог, мануальный терапевт. Опыт работы 18 лет</b>

            <ul>
                <font color="white">
                    <li>Проходил стажировку по мануальной терапии во всемирно известном Госпитале Шарите (Германия, 2003
                        г.),
                    </li>
                    <li>Проходил стажировку по Chiropractic в Лос-Анджелес, Нью-Йорк (США, 2015 г.).</li>
                    <!--                            <li>Обучался у таких именитых учителей как, основоположник мануальной терапии Карл Левитт, Президент Российской ассоциации мануальной терапии Саморуков А.Е. </li> -->
                    <li>Изучал метод лечения крупных грыж межпозвонковых дисков у зав. отделением
                        вертеброневрологии Циба В.
                    </li>
                    <li>Синтезировал все лучшее из известных методик в авторский метод, который реально помогает в сложных случаях.
                    </li>
                </font>
            </ul>

        </div>
    </div>
    </div>

    <p><br></p>

    <center>
        <div>
            <iframe width="800" height="450" src="https://www.youtube.com/embed/O_QcLvAZELs" frameborder="0"
                    gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        </div>
    </center>

    <p><br></p>


    <!--div class="wrap not-main">
		<div class="doctor">
			<div class="wrap image-outer">

                    <div class="six-parts first"><a href="/symptoms/golovnye-boli/">Головные<br>боли</a></div>
                    <div class="six-parts second"><a href="/symptoms/boli-v-grudi/">Боли в груди<br>и области ребер</a></div>
                    <div class="six-parts third"><a href="/symptoms/boli-v-kolene/">Боли в ноге<br>и колене</a></div>
                    <div class="six-parts-img fourth"><img src="<?= SITE_TEMPLATE_PATH ?>/images/center.webp" onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/center.png'"></div>
                    <div class="six-parts fifth"><a href="/symptoms/boli-v-shee/">Боли<br>в шейном отделе</a></div>
                    <div class="six-parts sixth"><a href="/symptoms/boli-v-pleche/">Боли в плече<br>и руке</a></div>
                    <div class="six-parts seventh"><a href="/symptoms/boli-v-poyasnice/">Боли<br>в пояснице</a></div>

			</div>
		</div>
	</div-->
<? /*$APPLICATION->IncludeComponent(
	"ac:smile_slider",
	"",
	Array(
		"BCOLOR" => "lightblue",
		"IBLOCK_ID" => 7,
		"SORT_BY1" => "RAND",
		"SORT_ORDER1" => "ASC",
		"TITLE" => "Позвоночник"
	)
    );*/ ?>
    <!--div class="lightblue">
		<div class="wrap">
	            <? /*$APPLICATION->IncludeComponent(
		            "dlin:news.list",
		            "specs_on_main",
		            Array(
			            "ACTIVE_DATE_FORMAT" => "",
			            "ADD_SECTIONS_CHAIN" => "N",
			            "AJAX_MODE" => "N",
			            "AJAX_OPTION_ADDITIONAL" => "",
			            "AJAX_OPTION_HISTORY" => "N",
			            "AJAX_OPTION_JUMP" => "N",
			            "AJAX_OPTION_STYLE" => "Y",
			            "CACHE_FILTER" => "N",
			            "CACHE_GROUPS" => "Y",
			            "CACHE_TIME" => "36000000",
			            "CACHE_TYPE" => "A",
			            "CHECK_DATES" => "Y",
			            "DETAIL_URL" => "",
			            "DISPLAY_BOTTOM_PAGER" => "N",
			            "DISPLAY_DATE" => "N",
			            "DISPLAY_NAME" => "Y",
			            "DISPLAY_PICTURE" => "N",
			            "DISPLAY_PREVIEW_TEXT" => "Y",
			            "DISPLAY_TOP_PAGER" => "N",
			            "FIELD_CODE" => array("DETAIL_TEXT","DETAIL_PICTURE",""),
			            "FILTER_NAME" => "",
			            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
			            "IBLOCK_ID" => "12",
			            "IBLOCK_TYPE" => "specs",
			            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			            "INCLUDE_SUBSECTIONS" => "N",
			            "MESSAGE_404" => "",
			            "NEWS_COUNT" => "20",
			            "PAGER_BASE_LINK_ENABLE" => "N",
			            "PAGER_DESC_NUMBERING" => "N",
			            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			            "PAGER_SHOW_ALL" => "N",
			            "PAGER_SHOW_ALWAYS" => "N",
			            "PAGER_TEMPLATE" => ".default",
			            "PAGER_TITLE" => "Новости",
			            "PARENT_SECTION" => "",
			            "PARENT_SECTION_CODE" => "",
			            "PREVIEW_TRUNCATE_LEN" => "",
			            "PROPERTY_CODE" => array("",""),
			            "SET_BROWSER_TITLE" => "N",
			            "SET_LAST_MODIFIED" => "N",
			            "SET_META_DESCRIPTION" => "N",
			            "SET_META_KEYWORDS" => "N",
			            "SET_STATUS_404" => "N",
			            "SET_TITLE" => "N",
			            "SHOW_404" => "N",
			            "SORT_BY1" => "SORT",
			            "SORT_BY2" => "SORT",
			            "SORT_ORDER1" => "ASC",
			            "SORT_ORDER2" => "ASC",
			            "STRICT_SECTION_CHECK" => "N"
		            )
	            );*/ ?>
		</div>
	</div-->


    <div class="picture-wrap">
        <div class="bd-opacity"></div>
        <div class="wrap">
            <h2>Бесплатная консультация и диагностика врача</h2>
            <div class="free-cons">
                <ul>
                    <li>Мануальный терапевт</li>
                    <li class="divider"></li>
                    <li>Вертебролог</li>
                    <li class="divider"></li>
                    <li>Остеопат</li>
                    <li class="divider"></li>
                    <li>Невролог</li>
                </ul>
            </div>
            <p>На консультации мы проводим тщательную диагностику всего позвоночника и каждого сегмента. Мы точно
                определяем какие сегменты и нервные корешки вовлечены и вызывают симптомы боли. По итогам консультации
                даем подробные рекомендации по лечению и если необходимо назначаем дополнительную диагностику.</p>
            <div class="three">
                <div><span>1</span>
                    <p>Проведем функциональную диагностику позвоночника</p></div>
                <div><span>2</span>
                    <p>Выполним манипуляцию, существенно облегчающую боль</p></div>
                <div><span>3</span>
                    <p>Составим индивидуальную программу лечения</p></div>
            </div>

            <div class="rec" uk-toggle="target: #modal-form"><span>Запишитесь на бесплатный прием</span>
            </div> 
            <!--div class="rec" id="ctcb_CallButton1" data-js-cbs><span>Запишитесь на бесплатный прием</span></div-->
        </div>
    </div>


    <div class="our-specialization">
        <div class="wrap">
            <h2>Мы лечим</h2>
            <div class="by_four">

                <div class="laps">
                    <div class="active"><span>1</span>
                        <p>Позвоночник</p></div>
                    <div><span>2</span>
                        <p>Суставы</p></div>
                    <div><span>3</span>
                        <p>Локализация боли</p></div>
                </div>

                <div class="inlay active">
                    <div>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/gryzha/">Межпозвоночная грыжа</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/radikulit/">Радикулит</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/protruzia/">Протрузия диска</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/skolioz/">Сколиоз</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/lumbago/">Люмбаго</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/spondilez/">Спондилез</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/osteo/">Остеохондроз</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/ishias/">Ишиас</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/nevralgia/">Межреберная
                                    невралгия</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/zashemlenie/">Защемление
                                    нерва</a></li>
                        </ul>
                    </div>
                </div>
                <div class="inlay">
                    <div>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/artroz/">Артроз</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/bursit/">Бурсит</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/treatment/ploskostopie/">Плоскостопие</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="inlay">
                    <div>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/golovnye-boli/">Головные боли</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-shee/">Боли в шее</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-spine/">Боли в спине</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-grudi/">Боли в груди</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-poyasnice/">Боли в
                                    пояснице</a></li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-pleche/">Боли в плече</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i><a href="/symptoms/boli-v-kolene/">Боли в колене</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="lightblue blocks-four">
        <div class="wrap">

            <h2 class="gray">Наши преимущества</h2>

            <div class="four-t-item first">
                <div class="four-t-wrap">
                    <div class="four-img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icon1.webp"
                             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/icon1.png'">
                    </div>
                    <div class="four-name">Инновационные методики</div>
                </div>
                <div class="four-text">Применение в лечении опыта полученного в США, Израиле, Германии. Мы изучаем
                    подходы, методики лечения и диагностики, которые используются в мире и привозим самые эффективные в
                    Россию.
                </div>
            </div>
            <div class="four-t-item second">
                <div class="four-t-wrap">
                    <div class="four-img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icon2.webp"
                             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/icon2.png'">
                    </div>
                    <div class="four-name">Быстрое лечение боли</div>
                </div>
                <div class="four-text">Современное и эффективное устранение болей в спине и суставах. Мы
                    специализируемся на лечении болей. Устранение причин не просто избавляет от боли, но и предупреждает
                    ее появление в будущем.
                </div>
            </div>
            <div class="four-t-item third">
                <div class="four-t-wrap">
                    <div class="four-img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icon3.webp"
                             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/icon3.png'">
                    </div>
                    <div class="four-name">Ди-тазин терапия</div>
                </div>
                <div class="four-text">Безоперационное лечение грыж межпозвоночных дисков по авторской методике Ди-тазин
                    терапии. Мы помогаем даже в очень тяжелых случаях, осложненных иррадиирующими болями в конечности.
                </div>
            </div>
            <div class="four-t-item last">
                <div class="four-t-wrap">
                    <div class="four-img">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/icon4.webp"
                             onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/icon4.png'">
                    </div>
                    <div class="four-name">Церебральная терапия</div>
                </div>
                <div class="four-text">Церебральная терапия – эффективная методика лечения головных болей и мигрени.
                    Устранение нарушений в шейном отделе позвоночника, вызывающих мышечный спазм и сосудистые нарушения.
                </div>
            </div>
        </div>
    </div>


    <div class="ab">
        <div class="wrap">
            <h2>О клинике</h2>
            <div class="ab-inner">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/hall.webp"
                     onerror="this.onerror=null; this.src='<?= SITE_TEMPLATE_PATH ?>/images/hall.jpg'">
                <div>
                    <p>Специализация нашего центра — это лечение позвоночника и суставов с применением самых
                        прогрессивных методов лечения, используемых не только в Росcии, но и в Европе, США, Израиле.
                        Одним из базовых подходов лечения в клинике доктора Длина является мягкая мышечно - тоническая
                        мануальная терапия позвоночника и суставов. В клинике применяется обширный комплекс методик
                        мягкого, деликатного воздействия на различные зоны человеческого тела, в результате применения
                        которых происходит безопасное и эффективное восстановление функций опорно-двигательного
                        аппарата.

                    <p><a href="/about/clinic/">Узнать подробнее</a></p>
                </div>
            </div>
        </div>
    </div>


<? $num_otz = 4;
if (htmlspecialchars($_REQUEST['num_otz'], 3))
    $num_otz = htmlspecialchars($_REQUEST['num_otz'], 3);
$APPLICATION->IncludeComponent(
    "dlin:news.list",
    "youtube_main",
    Array(
        "VARIANT" => "pink",
        "ACTIVE_DATE_FORMAT" => "",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("DETAIL_TEXT", "DETAIL_PICTURE", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "13",
        "IBLOCK_TYPE" => "specs",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => $num_otz,
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", ""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>

    <!--#content-->


<? /*$APPLICATION->IncludeComponent(
	"dlin:other.articles",
	"",
	Array(
		"IBLOCK_ID" => 9,
        "SECTION_ID" => "",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"TITLE" => "Применяемые методики"
	)
);*/ ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>