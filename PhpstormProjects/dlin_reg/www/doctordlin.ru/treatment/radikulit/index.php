<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Авторская методика лечения радикулита");
$APPLICATION->SetPageProperty("title", "Авторская методика лечения радикулита");
$APPLICATION->SetTitle("Радикулит");
$APPLICATION->SetAdditionalCSS("/treatment/style.css");
$APPLICATION->AddHeadScript( SITE_TEMPLATE_PATH ."/js/owl.carousel.js");
?>    <div class="wrap breadcrumbs">
        <? $APPLICATION->IncludeComponent("dlin:breadcrumb", ".default", array(), false); ?>
    </div>

    <div class="light-eee">
        <div class="wrap">
            <div class="under-title">
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Бесплатный прием</b><br><span>и диагностика</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Снятие боли</b><br><span>за 1-2 сеанса</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/gal-green.jpg" alt="Check" width="40"/><div><b>Авторский метод</b><br><span>лечения</span></div></div>
                <div><img src="<?=SITE_TEMPLATE_PATH?>/images/flags.jpg"/><div>Стажировки в США,<br>Израиле, Германии</div></div>
            </div>
        </div>
    </div>




    <div class="wrap page-header">
        <?if(BANNER_ALL == "Y"):?>
            <div class="banner">
                <a href="/treatment/stelki/">
                    <p><?=SPEC_BANNER_TEXT?></p>
                </a>
            </div>
        <?endif?>
    </div>




    <div class="wrap">
        <h1>Эффективное лечение радикулита</h1>
        <div class="block white flexed">
           <a href="<?=SITE_TEMPLATE_PATH?>/images/radikulit.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/radikulit.jpg" alt="Радикулит"/></a>
            <div>
                <p>Наши специалисты владеют уникальными техниками восстановления позвоночника, которые разработаны в ведущих клиниках мануальной терапии Европы и США. Врач подбирает индивидуальный комплекс процедур, количество и вариативность которых зависят от состояния пациента, возраста и особенностей организма.</p>
                <p class="redtext">Радикулит возникает вследствие сдавливания корешков спинного мозга, либо нервных стволов на любом уровне.</p>
                <p>Врачи «клиники доктора Длина» более 18 лет лечат радикулит консервативными методами. Мы используем 20 безоперационных методов, чтобы избавиться от болезни и купировать болевой синдром. Консервативное лечение снимает симптомы и останавливает развитие радикулита.</p>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="one-more-three">
            <div><span>1</span>
                <div class="side">
                    <div class="cl">Позитивная динамика в 97% случаев</div>
                    <div>Результаты лечебного курса подтверждаются контрольными снимками МРТ.</div>
                </div>
            </div>
            <div><span>2</span>
                <div class="side">
                    <div class="cl">Отсутствие побочных эффектов</div>
                    <div>Методы, применяемые в нашей клинике, безопасны и не оказывают побочных действий.</div>
                </div>
            </div>
            <div><span>3</span>
                <div class="side">
                    <div class="cl">Долговременный эффект</div>
                    <div>Лечение помогает улучшить микроциркуляцию и обменные процессы в позвоночнике.</div>
                </div>
            </div>
        </div>
    </div>

<center>
    <div>
        <iframe width="800" height="450" src="https://www.youtube.com/embed/O_QcLvAZELs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
	</center>

    <div class="ab">
        <div class="wrap">
            <h2>Мягкие мануальные техники</h2>
            <div>
                <a href="../images/gr-massage.jpg" rel="lightbox"><img width="400" align="right" hspace="30" vspace="20" src="../images/gr-massage.jpg"></a>
                <div>
					<p>Мягкие мануальные техники – это деликатные и физиологичные приемы ручного воздействия, которые помогают восстановить естественные анатомические и физиологические взаимоотношения между органами и структурами. В итоге позвонки и межпозвонковые диски занимают правильное положение, нормализуется мышечный тонус, происходит общее оздоровление организма. Специалист по мягким мануальным методикам может обнаруживать и устранять тончайшие причины, которые привели к деформации межпозвоночных дисков.</p>
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
                        <!--p class="citate">В нашей клинике мы с успехом применяем широкий спектр методик, включающий в себя как традиционные, так и новейшие методы лечения. Наши специалисты владеют разнообразными техниками: кранио-сакральная терапия, постизометрическая релаксация, палсинг, миофасциальный релиз, техники короткого и длинного рычагов и т.д.</p-->
                        <ul>
                            <li>Проходил стажировку по мануальной терапии во всемирно известном Госпитале Шарите (Германия, 2003 г.), </li>
                            <li>Проходил стажировку по Chiropractic в Лос-Анджелес, Нью-Йорк (США, 2015 г.). </li>
<!--                            <li>Обучался у таких именитых учителей как, основоположник мануальной терапии Карл Левитт, Президент Российской ассоциации мануальной терапии Саморуков А.Е. </li> -->
                            <li>Изучал метод лечения крупных грыж межпозвонковых дисков у заведующего отделением вертеброневрологии Циба В. </li>
                            <li>Синтезировал все лучшее из известных методик в авторский метод, который реально помогает в сложных случаях. </li>
                        </ul>
                    </div>
                </div>
                <img height="475" src="/bitrix/templates/dlin/images/dlin-grey.webp" onerror="this.onerror=null; this.src='/bitrix/templates/dlin/images/dlin-grey.jpg'">
                <!--img height="475" src='/bitrix/templates/dlin/images/dlin-grey.jpg'-->
            </div>
        </div>
    </div>

    <div class="descr-wrap">
    <div class="wrap">
        <h2>Авторская методика Ди-Тазин терапия</h2>
        <div>
            <a href="<?=SITE_TEMPLATE_PATH?>/images/di-tazin.jpg" rel="lightbox">
            <img width="400" align="left" hspace="30" vspace="20" src="<?=SITE_TEMPLATE_PATH?>/images/laseroterapiya.jpg">
            </a>
            <div>
                <p>В нашей клинике успешно применяется трехкомпонентная неинвазивная методика лечения позвоночника,
                    основанная на сочетании мануальной терапии, фотодинамической лазеротерапии и электрофореза.</p>
                <p>Благодаря комплексному подходу и щадящему характеру воздействия идет быстрое снижение болевого синдрома, улучшается циркуляция крови и обмен веществ, останавливается процесс разрушения костной ткани.</p>
                <p>Методика практически не имеет противопоказаний, не вызывает болевых ощущений, может применяться пациентам пожилого возраста. У многих улучшения отмечаются уже после 2-й процедуры. Иногда достаточно одного курса, чтобы получить долгосрочный положительный результат при грыжах и протрузиях, радикулите и боли в спине.</p>
            </div>
        </div>
        <div class="one-more-three">
            <div><span>1</span>
                <div class="side">
                <div class="cl">Фотодинамическая лазеротерапия</div>
                <div>Проведение аппликации препарата фотодитазин в зоне локализации боли, с последующей активацией препарата в тканях с помощью светодиодной установки.</div>
                </div>
            </div>
            <div><span>2</span>
                <div class="side">
                <div class="cl">Многокомпонентный электрофорез</div>
                <div>Проведение многокомпонентного электрофореза с препаратами усиливающими кровообращение, снимающими воспаление, отек и мышечный спазм.</div>
                </div>
            </div>
            <div><span>3</span>
                <div class="side">
                <div class="cl">Мягкие мануальные техники</div>
                <div>Проведение мягких мануальных техник для устранения ущемления нервных корешков в позвоночнике. Назначение комплекса упражнений для укрепления мышечного корсета.</div>
                </div>
            </div>
        </div>
    </div>
</div>





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
            <p>На консультации мы проводим тщательную диагностику всего позвоночника и каждого сегмента. Мы точно определяем какие сегменты и нервные корешки вовлечены и вызывают симптомы боли. По итогам консультации даем подробные рекомендации по лечению и если необходимо назначаем дополнительную диагностику.</p>
            <div class="three">
                <div><span>1</span><p>Проведем функциональную диагностику позвоночника</p></div>
                <div><span>2</span><p>Выполним манипуляцию, существенно облегчающую боль</p></div>
                <div><span>3</span><p>Составим индивидуальную программу лечения</p></div>
            </div>

        </div>
    </div>








    <div class="wrap">
        <div class="block quote bluebordered">
            <img src="../images/gr-ok.webp" id="gr_doc"
                 onerror="this.onerror=null; this.src='images/gr-ok.jpg'">
            <p>Нас рекомендуют <?=PERCENT_RECOMEND?>% пациентов.<br>
                Спасибо за доверие и ваш выбор.</p>
        </div>
    </div>





		<h2>Видео-отзывы пациентов</h2>


    <div class="lightgrey">
        <div class="wrap">
            <?$APPLICATION->IncludeComponent(
                "dlin:news.list",
                "youtube_slider",
                Array(
                    "VARIANT" => "light",
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
                    "IBLOCK_ID" => "13",
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
            );?>
        </div>
    </div>


    <div class="block white wrap">
		<h2>Обращение сегодня поможет<br> избежать операции завтра!</h2>
        <div class="fourple">
            <div class="check">
                <span><img src="<?=SITE_TEMPLATE_PATH?>/images/check.svg"/></span>
                <div>
                    <strong>Снимем боль и воспаление</strong>
                    <p>После 2-3 лечебных процедур изматывающая боль уходит, вам становится легче. </p>
                </div>
            </div>
            <div class="check">
                <span><img src="<?=SITE_TEMPLATE_PATH?>/images/check.svg"/></span>
                <div>
                    <strong>Устраним причину болезни</strong>
                    <p>Комплексное оздоровление позвоночника улучшает самочувствие: вы ощущаете прилив сил и энергии.</p>
                </div>
            </div>
            <div class="check">
                <span><img src="<?=SITE_TEMPLATE_PATH?>/images/check.svg"/></span>
                <div>
                    <strong>Запустим процесс регенерации </strong>
                    <p>Начинается процесс восстановления поврежденных тканей, грыжи и протрузии уменьшаются.</p>
                </div>
            </div>
            <div class="check">
                <span><img src="<?=SITE_TEMPLATE_PATH?>/images/check.svg"/></span>
                <div>
                    <strong>Укрепим мышечный корсет</strong>
                    <p>Сильные мышцы спины поддерживают позвоночный столб, препятствуя повторному возникновению заболевания.</p>
                </div>
            </div>

        </div>
    </div>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>