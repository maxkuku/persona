<? header('Last-Modified: ' . date('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Опытный остеопат проводит подготовку к беременности, послеродовое восстановление, лечение детей.");
$APPLICATION->SetPageProperty("title", "Остеопатия в Москве для детей, ведение беременности, ");
$APPLICATION->SetTitle("Остеопатия");
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


    <div class="wrap page-header" itemscope="" itemtype="http://schema.org/Article" itemprop="articleBody">
        <?if(BANNER_ALL == "Y"):?>
            <div class="banner">
                <a href="/treatment/stelki/">
                    <p><?=SPEC_BANNER_TEXT?></p>
                </a>
            </div>
        <?endif?>
    </div>



    <div class="wrap">

		<h1>Сеанс остеопатии от 4500 руб.</h1>
        <div class="block white flexed">
           <a href="<?=SITE_TEMPLATE_PATH?>/images/osteo-01.jpg" rel="lightbox"><img src="<?=SITE_TEMPLATE_PATH?>/images/osteo-01.jpg" alt="Остеопатия"/></a>
            <div>
                <p>В нашей клинике прием ведут сертифицированные врачи-остеопаты, которые имеют высшее медицинское образование в одной из областей классической медицины, с многолетним опытом работы, владеющие такими специальностями, как мануальная терапия, неврология, ортопедия.</p>
                <p class="redtext">Остеопатия воздействует на все тело человека, на все его внутренние органы и структуры – без боли, препаратов и побочных эффектов.</p>
                <p>Врач-остеопат проводит диагностику всего организма, а не только органов, где наблюдаются болевые ощущения. Глубокие знания анатомии и физиологии позволяют остеопату понять причину боли. Широкий выбор различных техник помогает найти индивидуальный подход к каждому конкретному пациенту.</p>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="one-more-three">
            <div><span>1</span>
                <div class="side">
                    <div class="cl">Структуральная остеопатия</div>
                    <div>Структуральная остеопатия занимается восстановлением опорно-двигательного аппарата, снимает спазмы и улучшает кровоток и лимфоток. В результате применения приемов остеопатии структурального типа восстанавливаются естественная эластичность структур тела и подвижность суставов, обеспечивается микроциркуляция биологических жидкостей, нормализуются кровоток и иннервация.</div>
                </div>
            </div>
            <div><span>2</span>
                <div class="side">
                    <div class="cl">Висцеральная остеопатия</div>
                    <div>Висцеральная остеопатия включает в себя набор лечебных техник, которые устраняют нарушение функционирования внутренних органов. Манипуляции профессионального остеопата позволяют восстановить физиологическую подвижность внутренних органов, нормализовать кровоток, иннервацию и движение лимфы. В органах, на которые направлено воздействие, запускаются процессы регенерации.</div>
                </div>
            </div>
            <div><span>3</span>
                <div class="side">
                    <div class="cl">Краниосакральная терапия</div>
                    <div>Краниальная остеопатия занимается восстановлением гармонии в организме человека через восстановление подвижности и проводимости. Основное воздействие приходится на три системы: крестец, суставы позвоночника и кости черепа. Вследствие этого нарушенный краниосакральный ритм восстанавливается. Нормализуется циркуляция спинномозговой жидкости, омывающей спинной и головной мозг. </div>
                </div>
            </div>
        </div>
    </div>






		<div id="banner-picture1" class="banner-picture owl-item">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/abstrakcii-sinij-l.webp" onerror="this.onerror=null; this.src='<?=SITE_TEMPLATE_PATH?>/images/abstrakcii-sinij-l.jpg'">
            <div class="banner_text">
                <h2>Сергей Владимирович Длин</h2>

				<b>Главный врач, вертебролог, мануальный терапевт, остеопат<br>
                        Опыт работы 18 лет</b>

                        <ul>
<font color="white">
                            <li>Проходил стажировку по мануальной терапии во всемирно известном Госпитале Шарите (Германия, 2003 г.), </li>
                            <li>Проходил стажировку по Chiropractic в Лос-Анджелес, Нью-Йорк (США, 2015 г.). </li>

                            <li>Изучал метод лечения крупных грыж межпозвонковых дисков у заведующего отделением вертеброневрологии Циба В. </li>
                            <li>Синтезировал все лучшее из известных методик в авторский метод, который реально помогает в сложных случаях. </li>
			</font>
                        </ul>

            </div>
		</div>


    <div class="wrap">

            <h2>Кому мы помогаем</h2>

        <p>Помимо лечения основного заболевания, мы восстанавливаем естественный баланс работы всего организма.</p>

        <div class="eee" id="eee">
        	<div class="wrap" style="padding: 22px 0;">
  
            	<div class="item-wrap articles six">
                <div class="items-stab">
                                
                <div id="elt_176" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/child-o.jpg" width="353" alt="отсеопатия для детей"/></div>
                    <div><b>Детям от 6 лет</b></div>
                                        <div>Врач-остеопат поможет устранить последствия послеродовых травм, найти причины снижения аппетита и нарушений пищеварения, предотвратить искривления позвоночника.</div>
				</a>
                </div>
                                
  
                <div id="elt_178" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/rody-o.jpg" width="353" alt="Подготовка к родам"/></div>
                    <div><b>Подготовка к родам</b></div>
                                        <div>Остеопатия не имеет противопоказаний, ее применяют на любом сроке беременности. Она абсолютно безопасна как для женщины, так и для ребенка.<br />
</div>
				</a>
                </div>
                                
                <div id="elt_179" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/planing-o.jpg" width="353" alt="Послеродовое восстановление"/></div>
                    <div><b>Послеродовое восстановление</b></div>
                                        <div>Мягко и бережно врач-остеопат снимет ограничения подвижности внутренних органов, вернет кости таза в исходное положение, восстановит полноценный кровоток в сосудах.  <br />
</div>
				</a>
                </div>
                                
                <div id="elt_180" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/headache-o.jpg" width="353" alt="головные боли"/></div>
                    <div><b>Частые головные боли</b></div>
                                        <div>Краниосакральная терапия – посвящена именно дисфункциям головы и костей черепа, таким образом покрывая более двух третей причин частой головной боли.</div>
				</a>
                </div>
                                
                <div id="elt_181" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/spine-o.jpg" width="353" alt="Заболевания позвоночника"/></div>
                    <div><b>Заболевания позвоночника</b></div>
                                        <div>Лечение у остеопата позволит запустить естественные процессы восстановления организма. После курса терапии пациенты забывают о хронических заболеваниях и болевом синдроме.<br />
</div>
				</a>
                </div>

                <div id="elt_182" class="bitem">
                <a>
                    <div class="item-img"><img src="/bitrix/templates/dlin/images/old-o.jpg" width="353" alt="Остеопатия для пожилых людей"/></div>
                    <div><b>Пожилым людям</b></div>
                                        <div>Врач-остеопат может скорректировать нарушения подвижности суставов, минимизировать последствия дегенеративных заболеваний костно-мышечной, нервной и других систем.<br />
</div>
				</a>
                </div>
                              



                                </div><!--items-move-->
                </div>
            </div>
        </div><!--eee-->
        
    </div>



    <div class="ab">
        <div class="wrap">
            <h2>Мягкие мануальные техники</h2>
            <div>
                <a href="../images/gr-massage.jpg" rel="lightbox"><img width="400" align="right" hspace="30" vspace="20" src="../images/gr-massage.webp" onerror="this.onerror=null; this.src='../images/gr-massage.jpg'"></a>
                <div>
					<p>Мягкие мануальные техники – это деликатные и физиологичные приемы ручного воздействия, которые помогают восстановить естественные анатомические и физиологические взаимоотношения между органами и структурами. В итоге позвонки и межпозвонковые диски занимают правильное положение, нормализуется мышечный тонус, происходит общее оздоровление организма. Специалист по мягким мануальным методикам может обнаруживать и устранять тончайшие причины, которые привели к деформации межпозвоночных дисков.</p>
<p>Основатель клиники, Сергей Владимирович Длин, привнес в мануальную терапию прогрессивные западные направления, и создал авторские методики лечения, дающие стабильный результат, сохраняющийся на долгое время.</p>

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

            <div class="rec" data-uk-modal="{target:'#modal-form'}" data-target="#modal-form"><span>Запишитесь на бесплатный прием</span></div>
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


<p><br></p>

<center>
    <div>
        <iframe width="800" height="450" src="https://www.youtube.com/embed/O_QcLvAZELs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
	</center>

<p><br></p>


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